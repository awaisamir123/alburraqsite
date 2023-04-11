<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\HtmlString;

class HireDeveloperLead extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($lead)
    {
        //
        $this->lead = $lead;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        // dd($this->lead);
        return (new MailMessage)
            ->from('Al Burraq')
            ->from($address = 'info@al-burraq.com', $name = 'Al-Burraq')
            ->subject('New Lead from Al-Burraq "Hunt your Team" page')
            ->greeting("Dear Admin,")
            // ->line(new HtmlString("<br>"))
            ->line('A new lead has been generated via AL-Burraq website "Hunt your Team" page. The details are;')
            ->line(new HtmlString("<br>"))
            // ->line(new HtmlString("<br>"))
            ->line(new HtmlString("<strong>Name: </strong>" . $this->lead->name))
            // ->line(new HtmlString("<br>"))
            ->line(new HtmlString("<strong>Email: </strong>" . $this->lead->email))
            // ->line(new HtmlString("<br>"))
            ->line(new HtmlString("<strong>Phone: </strong>" . $this->lead->phone))
            // ->line(new HtmlString("<br>"))
            ->line(new HtmlString("<strong>Company: </strong>" . $this->lead->company))
            // ->line(new HtmlString("<br>"))
            ->line(new HtmlString("<strong>Developers Needed: </strong>" . $this->lead->need))
            // ->line(new HtmlString("<br>"))
            ->line(new HtmlString("<strong>Message: </strong>" . $this->lead->message))
            // ->line(new HtmlString("<br>"))
            ->line(new HtmlString("<br>"))
            ->salutation(new HtmlString("Regards,<br>Al-Burraq.com"));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
