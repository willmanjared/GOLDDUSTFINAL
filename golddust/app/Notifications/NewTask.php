<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewTask extends Notification
{
    use Queueable;
  
    protected $task;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($task)
    {
        //
        $this->task = $task;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }
  
    public function toDatabase($notifiable)
    {
      
      return [
        'tasks_id' => $this->task['tasks_id'],
        'action' => $this->task['action'],
        'body' => $this->task['body'],
        'resource' => $this->task['resource'],
        'teams_id' => $this->task['teams_id'],
        'user_id' => $this->task['user_id']
      ];
      
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }
*/
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }*/
}
