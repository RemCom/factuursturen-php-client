<?php

namespace UltiwebNL\FactuurSturenPhpClient;

use UltiwebNL\FactuurSturenPhpClient\Models\Categories;
use UltiwebNL\FactuurSturenPhpClient\Models\Clients;
use UltiwebNL\FactuurSturenPhpClient\Models\Invoices;
use UltiwebNL\FactuurSturenPhpClient\Models\Products;
use UltiwebNL\FactuurSturenPhpClient\Models\Profiles;
use UltiwebNL\FactuurSturenPhpClient\Models\Quotation;
use UltiwebNL\FactuurSturenPhpClient\Models\InvoicesPayment;

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

    /**
     * @return Products
     * @throws Exceptions\FactuurSturenNoCredentialsException
     */
    public function products(): Products
    {
        return new Products($this->getConnection());
    }
    
    /**
     * @return InvoicesPayment
     * @throws Exceptions\FactuurSturenNoCredentialsException
     */
    public function InvoicesPayment(): InvoicesPayment
    {
        return new InvoicesPayment($this->getConnection());
    }








    /**
     * @return InvoicesPayment
     * @throws Exceptions\FactuurSturenNoCredentialsException
     */
    public function Categories(): Categories
    {
        return new Categories($this->getConnection());
    }
    
    /**
     * @return InvoicesPayment
     * @throws Exceptions\FactuurSturenNoCredentialsException
     */
    public function Profiles(): Profiles
    {
        return new Profiles($this->getConnection());
    }
}
