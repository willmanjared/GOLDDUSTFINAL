<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewProject extends Notification
{
    use Queueable;
  
    protected $project;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($project)
    {
        //
        $this->project = $project;
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
        'projects_id' => $this->project['projects_id'],
        'action' => $this->project['action'],
        'title' => $this->project['title'],
        'hired_id' => $this->project['hired_id'],
        'body' => $this->project['body'],
        'teams_id' => $this->project['teams_id'],
        'resource' => $this->project['resource'],
        'user_id' => $this->project['user_id'],
        'created_at' => $this->project['created_at']
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
