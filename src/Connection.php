<?php

namespace UltiwebNL\FactuurSturenPhpClient;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\HandlerStack;
use Psr\Http\Message\ResponseInterface;
use UltiwebNL\FactuurSturenPhpClient\Exceptions\FactuurSturenException;
use UltiwebNL\FactuurSturenPhpClient\Exceptions\FactuurSturenNoCredentialsException;

class Connection
{

    protected $username;

    protected $password;

    protected $url = 'https://www.factuursturen.nl/api/v1/';

    /**
     * Contains the HTTP client (Guzzle)
     * @var Client
     */
    private $client;

    /**
     * Array of inserted middleWares
     * @var array
     */
    protected $middleWares = [];

    public function __construct(string $username, string $password)
    {
        if (!$username && !$password) {
            throw new FactuurSturenNoCredentialsException('No username and/or password is set');
        }

        $this->username = $username;
        $this->password = $password;
    }

    public function client(): Client
    {
        if ($this->client) {
            return $this->client;
        }

        $handlerStack = HandlerStack::create();
        foreach ($this->middleWares as $middleWare) {
            $handlerStack->push($middleWare);
        }

        $clientConfig = [
            'base_uri' => $this->url,
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ],
            'auth' => [
                $this->username,
                $this->password
            ],
            'handler' => $handlerStack
        ];

        $this->client = new Client($clientConfig);

        return $this->client;
    }

    /**
     * Perform a GET request
     * @param string $url
     * @param array $params
     * @return array
     * @throws FactuurSturenException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($url, $params = []): array
    {
        try {
            $result = $this->client()->get($url, ['query' => $params]);

            return $this->parseResponse($result);
        } catch (RequestException $e) {
            $responseBody = $e->getResponse()->getBody()->getContents();
            throw new FactuurSturenException(sprintf('SendCloud error %s: %s', $e->getResponse()->getStatusCode(), $responseBody), $e->getResponse()->getStatusCode());
        }
    }

    /**
     * Perform a POST request
     * @param string $url
     * @param mixed $body
     * @return array
     * @throws FactuurSturenException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function post($url, $body): array
    {
        try {
            $result = $this->client()->post($url, ['body' => $body]);

            $id = $this->parseResponse($result);

            $result = $this->client()->get($url . '/' . $id);

            return $this->parseResponse($result);
        } catch (RequestException $e) {
            $responseBody = $e->getResponse()->getBody()->getContents();
            throw new FactuurSturenException(sprintf('SendCloud error %s: %s', $e->getResponse()->getStatusCode(), $responseBody), $e->getResponse()->getStatusCode());
        }
    }

    /**
     * Perform PUT request
     * @param string $url
     * @param mixed $body
     * @return array
     * @throws FactuurSturenException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function put($url, $body, $id): array
    {
        try {
            $result = $this->client()->put($url, ['body' => $body]);
            $this->parseResponse($result);

            $result = $this->client()->get($url . '/' . $id);
            return $this->parseResponse($result);
        } catch (RequestException $e) {
            $responseBody = $e->getResponse()->getBody()->getContents();
            throw new FactuurSturenException(sprintf('SendCloud error %s: %s', $e->getResponse()->getStatusCode(), $responseBody), $e->getResponse()->getStatusCode());
        }
    }

    /**
     * Perform DELETE request
     * @param string $url
     * @return array
     * @throws FactuurSturenException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function delete($url)
    {
        try {
            $result = $this->client()->delete($url);
            return $this->parseResponse($result);
        } catch (RequestException $e) {
            $responseBody = $e->getResponse()->getBody()->getContents();
            throw new FactuurSturenException(sprintf('SendCloud error %s: %s', $e->getResponse()->getStatusCode(), $responseBody), $e->getResponse()->getStatusCode());
        }
    }

    /**
     * @param ResponseInterface $response
     * @return array Parsed JSON result
     * @throws FactuurSturenException
     */
    public function parseResponse(ResponseInterface $response)
    {
        // Rewind the response (middlewares might have read it already)
        $response->getBody()->rewind();

        $responseBody = $response->getBody()->getContents();
        $resultArray = json_decode($responseBody, true);


        return $resultArray;
    }
}
