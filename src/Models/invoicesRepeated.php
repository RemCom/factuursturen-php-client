<?php

namespace UltiwebNL\FactuurSturenPhpClient\Models;

use UltiwebNL\FactuurSturenPhpClient\Traits\FindAll;
use UltiwebNL\FactuurSturenPhpClient\Traits\FindOne;
use UltiwebNL\FactuurSturenPhpClient\Traits\Deletable;

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
class InvoicesRepeated extends Model
{

    use FindOne, FindAll, Deletable;

    /**
     * @var string[]
     */
    protected $fillable = [];

    /**
     * @var string
     */
    protected $url = 'invoices_repeated';

    /**
     * @var string
     */
    protected $primaryKey = 'nr';

    /**
     * @var string[]
     */
    protected $namespaces = [
        'singular' => 'invoices_saved',
        'plural' => 'invoices_saved'
    ];
}
