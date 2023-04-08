<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $url;
    protected $email;
    protected $subject;
    protected $message;
    protected $token;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($url, $email, $subject, $message, $token)
    {
        $this->url = $url;
        $this->email = $email;
        $this->subject = $subject;
        $this->message = $message;
        $this->token = $token;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $response = Http::post($this->url, [
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
            'token' => $this->token,
        ]);
        
    }
}
