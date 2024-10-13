<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Customer;

class ApprovalNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $customer;
    /**
     * Create a new message instance.
     */
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Approval Notification',
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

    public function build()
    {
        return $this->subject('Data Pengajuan Disetujui')
                ->view('content.pages.emails.approval')
                ->with([
                    'customerName' => $this->customer->name,
                    'approverName' => auth()->user()->name,
                    'customer' => $this->customer, // Kirim customer sebagai variabel
                ]);
    }
}
