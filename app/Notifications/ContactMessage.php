<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\HtmlString;

class ContactMessage extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($name, $email, $subject,  $message)
    {
        //
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->message = $message;
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
        return (new MailMessage)
            ->from('Al Burraq')
            ->from($address = 'info@al-burraq.com', $name = 'Al-Burraq')
            ->subject('New Conatct Form Submission from Al-Burraq Site')
            ->greeting("Dear Admin,")
            // ->line(new HtmlString("<br>"))
            ->line('A new message has been sent via contact from from AL-Burraq website. The details are;')
            ->line(new HtmlString("<br>"))
            // ->line(new HtmlString("<br>"))
            ->line(new HtmlString("<strong>Name: </strong>". $this->name))
            // ->line(new HtmlString("<br>"))
            ->line(new HtmlString("<strong>Email: </strong>". $this->email))
            // ->line(new HtmlString("<br>"))
            ->line(new HtmlString("<strong>Subject: </strong>". $this->subject))
            // ->line(new HtmlString("<br>"))
            ->line(new HtmlString("<strong>Message: </strong>". $this->message))
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
