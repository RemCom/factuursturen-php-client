<?php

namespace UltiwebNL\FactuurSturenPhpClient\Traits;

/**
 * Trait FindAll
 *
 * @method Connection connection()
 *
 * @package UltiwebNL\FactuurSturenPhpClient\Traits
 */
trait FindAll
{

    /**
     * @param array $params
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \UltiwebNL\FactuurSturenPhpClient\Exceptions\FactuurSturenException
     */
    public function all($params = [])
    {
        $result = $this->connection()->get($this->url, $params);

        return $this->collectionFromResult($result);
    }

    /**
     * @param $result
     * @return array
     */
    public function collectionFromResult($result)
    {
        $collection = [];

        foreach ($result as $r) {
            $collection[] = new self($this->connection(), $r);
        }

        return $collection;
    }
}
