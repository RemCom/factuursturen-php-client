<?php

namespace UltiwebNL\FactuurSturenPhpClient\Traits;

use UltiwebNL\FactuurSturenPhpClient\connection;

/**
 * Trait Deletable
 *
 * @method Connection connection()
 *
 * @package UltiwebNL\FactuurSturenPhpClient\Traits
 */
trait Deletable
{
  
    /**
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \UltiwebNL\FactuurSturenPhpClient\Exceptions\FactuurSturenException
     */
    public function delete()
    {
        return $this->connection()->delete($this->url . '/' . urlencode($this->{$this->primaryKey}));
    }
}
