<?php

namespace UltiwebNL\FactuurSturenPhpClient\Traits;

use UltiwebNL\FactuurSturenPhpClient\connection;

/**
 * Trait Storable
 *
 * @method Connection connection()
 *
 * @package UltiwebNL\FactuurSturenPhpClient\Traits
 */
trait Storable
{
    /**
     * @return $this
     */
    public function save()
    {
        if ($this->exists()) {
            $this->fill($this->update());
        } else {
            $this->fill($this->insert());
        }

        return $this;
    }

    /**
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \UltiwebNL\FactuurSturenPhpClient\Exceptions\FactuurSturenException
     */
    public function insert()
    {
        return $this->connection()->post($this->url, $this->json());
    }

    /**
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \UltiwebNL\FactuurSturenPhpClient\Exceptions\FactuurSturenException
     */
    public function update()
    {
        return $this->connection()->put($this->url . '/' . urlencode($this->{$this->primaryKey}), $this->json());
    }

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
