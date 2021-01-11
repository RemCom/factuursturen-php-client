<?php

namespace UltiwebNL\FactuurSturenPhpClient\Models;

use UltiwebNL\FactuurSturenPhpClient\Traits\Traits;

/**
 * Class Clients
 *
 * @property integer clientnr
 * @property string email
 *
 * @package UltiwebNL\FactuurSturenPhpClient\Models
 */
class Clients extends Model
{
    use Traits;

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
