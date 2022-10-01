<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;

use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;

class TelegramNewLead extends Notification
{
    use Queueable;

    private $phone;
    private $slug;
    private $name;
    private $mark;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
     public function __construct($slug, $phone, $name, $mark)
     {
       $this->phone = $phone;
       $this->slug = $slug;
       $this->name = $name;
       $this->mark = $mark;

     }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [TelegramChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */

     public function toTelegram($notifiable)
     {

         return TelegramMessage::create()
             ->to(config('var.telegramchat'))
             ->content("🔥 *Новая заявка на сайте!* \n от *$this->name* \n метка *$this->slug* \n мессенджер *$this->mark* \n ```$this->phone```");
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
