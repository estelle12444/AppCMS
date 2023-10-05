<?php

namespace App\Mail;

use Symfony\Component\Mime\Address;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address as MailablesAddress;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CompanyInfoAccepted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $dashboardLink;
    public $companyEmail;

    public function __construct($dashboardLink, $companyEmail)
    {
        $this->dashboardLink = $dashboardLink;
        $this->companyEmail = $companyEmail;
    }


    public function build()
    {
        return $this
            ->subject('Vos informations ont été acceptées')
            ->to(new MailablesAddress($this->companyEmail));
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Vos informations ont été acceptées',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.company_info_accepted',
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
}
