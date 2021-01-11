<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class ExportAssessment extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $filename = Carbon::now()->format('d-m-Y_H') . '.xlsx';
        return $this->markdown('emails.assessment')
                    ->attach(Excel::download($this->data, $filename)->getFile(), ['as' => $filename])
                    ->subject('New Assessment - Selling Business')
                    ->from('no-reply@ibventur.com')
                    ->with('filename', $filename)
                    ->with('datetime', Carbon::now()->format('F d, Y H:i'));
    }
}
