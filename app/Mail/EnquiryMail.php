<?php

// app/Mail/EnquiryMail.php

namespace App\Mail;

use App\Models\Enquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $enquiry;

    /**
     * Create a new message instance.
     *
     * @param Enquiry $enquiry
     */
    public function __construct(Enquiry $enquiry)
    {
        $this->enquiry = $enquiry;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Enquiry Form Submission')
                    ->markdown('mail.enquiry-mail')
                    ->with([
                        'name' => $this->enquiry->name,
                        'email' => $this->enquiry->email,
                        'phone' => $this->enquiry->phone_no,
                        'message' => $this->enquiry->comment,
                    ]);
    }
}


