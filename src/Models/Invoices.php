<?php

namespace UltiwebNL\FactuurSturenPhpClient\Models;

use UltiwebNL\FactuurSturenPhpClient\Traits\FindAll;
use UltiwebNL\FactuurSturenPhpClient\Traits\FindOne;
use UltiwebNL\FactuurSturenPhpClient\Traits\Storable;

/**
 * Class Invoices
 *
 * @property string invoicenr'
 * @property array reference'
 * @property array lines'
 * @property int profile'
 * @property int category'
 * @property string discounttype'
 * @property float discount'
 * @property string paymentcondition
 * @property int paymentperiod'
 * @property int clientnr'
 * @property string sent'
 * @property string paiddate
 *
 * @package UltiwebNL\FactuurSturenPhpClient\Models
 */
class Invoices extends Model
{

    use FindOne, FindAll, Storable;

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
        'discount',
        'paymentcondition',
        'paymentperiod',
        'clientnr',
        'sent',
        'paiddate'
    ];

    /**
     * @var string
     */
    protected $url = 'invoices';

    /**
     * @var string
     */
    protected $primaryKey = 'invoicenr';

    /**
     * @var string[]
     */
    protected $namespaces = [
        'singular' => 'invoice',
        'plural' => 'invoices'
    ];
}
