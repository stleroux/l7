<?php

namespace App\Mail\Invoicer;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\InvoicerInvoice;

class UpdatedPaymentPDFMail extends Mailable
{
    use Queueable, SerializesModels;

    public $invoice;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($invoice)
    {
        $this->invoice = $invoice;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $pdf = (public_path("/_invoices") . DIRECTORY_SEPARATOR . $this->invoice->id . '.pdf');
            
        return $this->view('admin.invoicer.emails.updatedPaymentPDF')
            ->subject('Updated Invoice from TheWoodBarn.ca')
            ->attach($pdf);
    }
}
