<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
class Multimail extends Mailable
{
    use Queueable, SerializesModels;
    public $d;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($d) {
        $this->d = $d; }

    public function build()
    {
        return $this->from('info@testing.com')
        ->subject('New Message from DevopsSchool')
        ->view('multi_email_template')
        ->with('d', $this->d);
    }
}
