<?php

namespace App\Notifications\Invoicer;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BillableAddNotification extends Notification
{
    use Queueable;

    private $item, $invoice;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($item, $invoice)
    {
        $this->item = $item;
        $this->invoice = $invoice;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        // return ['mail'];
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    // public function toMail($notifiable)
    // {
    //     return (new MailMessage)
    //                 ->line('The introduction to the notification.')
    //                 ->action('Notification Action', url('/'))
    //                 ->line('Thank you for using our application!');
    // }

    Public function toDatabase()
    {
        return [
            'title' => 'billable added',
            'id' => $this->item->id,
            'invoiceNo' => $this->invoice->id,
            'client' => $this->invoice->client->id,
            'client_name' => $this->invoice->client->contact_name,
            'company_name' => $this->invoice->client->company_name,
            'product' => $this->item->product,
            'quantity' => $this->item->quantity,
            'price' => $this->item->price,
            'total' => $this->item->total,
        ];
    }

}
