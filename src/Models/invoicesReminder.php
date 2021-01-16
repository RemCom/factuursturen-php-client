<?php

namespace UltiwebNL\FactuurSturenPhpClient\Models;

use UltiwebNL\FactuurSturenPhpClient\Traits\Storable;

/**
 * Class Invoices
 *
 * @property string invoicenr
 * @property boolean attach_invoice
 *
 * @package UltiwebNL\FactuurSturenPhpClient\Models
 */
class InvoicesReminder extends Model
{

    use Storable;

    /**
     * @var string[]
     */
    protected $fillable = [
        'invoicenr',
        'attach_invoice'
    ];

    /**
     * @var string
     */
    protected $url = 'invoices_reminder';

    /**
     * @var string
     */
    protected $primaryKey = 'invoicenr';

    /**
     * @var string[]
     */
    protected $namespaces = [
        'singular' => 'invoices_reminder',
        'plural' => 'invoices_reminders'
    ];
}
