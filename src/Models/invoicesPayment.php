<?php

namespace UltiwebNL\FactuurSturenPhpClient\Models;

use UltiwebNL\FactuurSturenPhpClient\Traits\Storable;

/**
 * Class Invoices
 *
 * @property string invoicenr'
 * @property string date'
 * @property string amount'
 *
 * @package UltiwebNL\FactuurSturenPhpClient\Models
 */
class InvoicesPayment extends Model
{

    use Storable;

    /**
     * @var string[]
     */
    protected $fillable = [
        'invoicenr',
        'date',
        'amount'
    ];

    /**
     * @var string
     */
    protected $url = 'invoices_payment';

    /**
     * @var string
     */
    protected $primaryKey = 'invoicenr';

    /**
     * @var string[]
     */
    protected $namespaces = [
        'singular' => 'invoices_payment',
        'plural' => 'invoices_payments'
    ];
}
