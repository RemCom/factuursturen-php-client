<?php

namespace UltiwebNL\FactuurSturenPhpClient\Models;

use UltiwebNL\FactuurSturenPhpClient\Traits\Traits;

/**
 * Class Invoices
 * @package UltiwebNL\FactuurSturenPhpClient\Models
 */
class Invoices extends Model
{

    use Traits;

    /**
     * @var string[]
     */
    protected $fillable = [
        'invoicenr',
        'reference',
        'lines',
        'profile',
        'category',
        'discounttype',
        'paymentcondition',
        'paymentperiod'
    ];

    /**
     * @var string
     */
    protected $url = 'invoices';

    /**
     * @var string[]
     */
    protected $namespaces = [
        'singular' => 'invoice',
        'plural' => 'invoices'
    ];
}
