<?php

namespace UltiwebNL\FactuurSturenPhpClient\Models;

use UltiwebNL\FactuurSturenPhpClient\Traits\FindAll;
use UltiwebNL\FactuurSturenPhpClient\Traits\FindOne;
use UltiwebNL\FactuurSturenPhpClient\Traits\Storable;

/**
 * Class Clients
 *
 * @property int clientnr
 * @property string contact
 * @property bool showcontact
 * @property string company
 * @property string address
 * @property string zipcode
 * @property string city
 * @property string country
 * @property string phone
 * @property string mobile
 * @property string email
 * @property string bankcode
 * @property string biccode
 * @property string taxnumber
 * @property bool tax_shifted
 * @property string sendmethod
 * @property string paymentmethod
 * @property int top
 * @property int stddiscount
 * @property string mailintro
 * @property array reference
 * @property string notes
 * @property bool notes_on_invoice
 * @property bool active
 * @property string default_doclang
 * @property int default_category
 * @property string currency
 * @property string mandate_id
 * @property string mandate_date
 * @property string collecttype
 * @property string tax_type
 *
 * @package UltiwebNL\FactuurSturenPhpClient\Models
 */
class Clients extends Model
{
    use FindAll, FindOne, Storable;

    /**
     * @var string[]
     */
    protected $fillable = [
        'clientnr',
        'contact',
        'showcontact',
        'company',
        'address',
        'zipcode',
        'city',
        'country',
        'phone',
        'mobile',
        'email',
        'bankcode',
        'biccode',
        'taxnumber',
        'tax_shifted',
        'sendmethod',
        'paymentmethod',
        'top',
        'stddiscount',
        'mailintro',
        'reference',
        'notes',
        'notes_on_invoice',
        'active',
        'default_doclang',
        'default_category',
        'currency',
        'mandate_id',
        'mandate_date',
        'collecttype',
        'tax_type'
    ];

    /**
     * @var string
     */
    protected $url = 'clients';

    /**
     * @var string
     */
    protected $primaryKey = 'clientnr';

    /**
     * @var string[]
     */
    protected $namespaces = [
        'singular' => 'client',
        'plural' => 'clients'
    ];
}
