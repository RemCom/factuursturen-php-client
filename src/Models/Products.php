<?php

namespace UltiwebNL\FactuurSturenPhpClient\Models;

use UltiwebNL\FactuurSturenPhpClient\Traits\FindAll;
use UltiwebNL\FactuurSturenPhpClient\Traits\FindOne;
use UltiwebNL\FactuurSturenPhpClient\Traits\Storable;

/**
 * Class Invoices
 * @package UltiwebNL\FactuurSturenPhpClient\Models
 */
class Products extends Model
{

    use FindOne, FindAll, Storable;

    /**
     * @var string[]
     */
    protected $fillable = [
        'productnr',
    ];

    /**
     * @var string
     */
    protected $url = 'products';

    /**
     * @var string
     */
    protected $primaryKey = 'productnr';

    /**
     * @var string[]
     */
    protected $namespaces = [
        'singular' => 'product',
        'plural' => 'products'
    ];
}
