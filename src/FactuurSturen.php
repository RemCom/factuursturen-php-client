<?php

namespace UltiwebNL\FactuurSturenPhpClient;

use UltiwebNL\FactuurSturenPhpClient\Models\Clients;
use UltiwebNL\FactuurSturenPhpClient\Models\Invoices;

/**
 * Class FactuurSturen
 * @package UltiwebNL\FactuurSturenPhpClient
 */
class FactuurSturen
{

    /**
     * @var
     */
    protected $username;

    /**
     * @var
     */
    protected $password;

    /**
     * @var
     */
    protected $connection;


    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return Connection
     * @throws Exceptions\FactuurSturenNoCredentialsException
     */
    private function getConnection(): Connection
    {
        if ($this->connection == null) {
            $this->connection = new Connection($this->username, $this->password);
        }
        return $this->connection;
    }

    /**
     * @return Invoices
     * @throws Exceptions\FactuurSturenNoCredentialsException
     */
    public function invoices(): Invoices
    {
        return new Invoices($this->getConnection());
    }

    /**
     * @return Clients
     * @throws Exceptions\FactuurSturenNoCredentialsException
     */
    public function clients(): Clients
    {
        return new Clients($this->getConnection());
    }
}
