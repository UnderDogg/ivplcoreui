<?php

namespace IP\Events;

use IP\Modules\RecurringInvoices\Models\RecurringInvoice;
use Illuminate\Queue\SerializesModels;

class RecurringInvoiceCreating extends Event
{
    use SerializesModels;

    public $recurringInvoice;

    public function __construct(RecurringInvoice $recurringInvoice)
    {
        $this->recurringInvoice = $recurringInvoice;
    }
}
