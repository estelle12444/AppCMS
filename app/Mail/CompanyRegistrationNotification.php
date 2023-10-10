<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CompanyRegistrationNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Crée une nouvelle instance de message.
     *
     * @param  array  $data
     * @return void
     */
    public $requestData;

    public function __construct(array $requestData)
    {
        $this->requestData = $requestData;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Company Registration Notification',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
    /**
     * Construit le message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.company_registration_notification')
                    ->subject('Sujet de l\'e-mail') // Sujet de l'e-mail
                    ->with([
                        'company_name' => $this->requestData['company_name'],
                        'email' => $this->requestData['email'],
                        'other_info' => $this->requestData['other_info'],
                        'company_id' => $this->requestData['company_id'],
                    ])
                    ->line('Une nouvelle entreprise s\'est enregistrée.')
                    ->line('Voici les détails de l\'inscription :')
                    ->line('Nom de l\'entreprise : ' . $this->requestData['company_name'])
                    ->line('Adresse e-mail : ' . $this->requestData['email'])
                    ->line('Autres informations : ' . $this->requestData['other_info'])
                    ->action('Voir l\'entreprise', url('/entreprise/' . $this->requestData['company_id']))
                    ->line('Merci pour votre attention !');
            }




}
