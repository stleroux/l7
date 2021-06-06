<?php

namespace App\Notifications\Invoicer;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DiscountAddNotification extends Notification
{
    use Queueable;

    private $activity, $invoice;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($activity, $invoice)
    {
        $this->activity = $activity;
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
            'title' => 'discount',
            'client' => $this->invoice->client->id,
            'client_name' => $this->invoice->client->contact_name,
            'company_name' => $this->invoice->client->company_name,
            'invoiceNo' => $this->activity->invoice_id,
            'amount' => $this->activity->amount,
        ];
    }

}
