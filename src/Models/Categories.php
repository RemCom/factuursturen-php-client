<?php

namespace UltiwebNL\FactuurSturenPhpClient\Models;

use UltiwebNL\FactuurSturenPhpClient\Traits\FindAll;

/**
 * Class Categories
 *
 * @package UltiwebNL\FactuurSturenPhpClient\Models
 */
class Categories extends Model
{

    use FindAll;

    /**
     * @var string[]
     */
    protected $fillable = [
        'id'
    ];

    /**
     * @var string
     */
    protected $url = 'categories';

    /**
     * @var string[]
     */
    protected $namespaces = [
        'singular' => 'categorie',
        'plural' => 'categories'
    ];
}
