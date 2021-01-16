<?php

namespace UltiwebNL\FactuurSturenPhpClient\Models;

use UltiwebNL\FactuurSturenPhpClient\Traits\FindAll;
use UltiwebNL\FactuurSturenPhpClient\Traits\FindOne;
use UltiwebNL\FactuurSturenPhpClient\Traits\Storable;

/**
 * Class Quotation
 *
 * @property string id'
 * @property string action'
 * @property string sendmethod'
 * @property string savename'
 * @property string overwrite_if_exist'
 * @property string quotationreference'
 * @property string reference'
 * @property string lines'
 * @property string profile'
 * @property string category'
 * @property string discounttype'
 * @property string discount'
 * @property string paymentcondition'
 * @property string quotationperiod'
 * @property string showtotals'
 * @property string date'
 * @property string notes'
 * @property string convert_prices_to_euro'
 * @property string customstatus'
 * @property string approved'
 * @property string clientnr
 *
 * @package UltiwebNL\FactuurSturenPhpClient\Models
 */
class Quotation extends Model
{

    use FindOne, FindAll, Storable;

    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'action',
        'sendmethod',
        'savename',
        'overwrite_if_exist',
        'quotationreference',
        'reference',
        'lines',
        'profile',
        'category',
        'discounttype',
        'discount',
        'paymentcondition',
        'quotationperiod',
        'showtotals',
        'date',
        'notes',
        'convert_prices_to_euro',
        'customstatus',
        'approved',
        'clientnr'
    ];

    /**
     * @var string
     */
    protected $url = 'quotations';

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var string[]
     */
    protected $namespaces = [
        'singular' => 'quotation',
        'plural' => 'quotations'
    ];
}
