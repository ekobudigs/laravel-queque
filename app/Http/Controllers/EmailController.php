<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendBulkEmailJob;

class EmailController extends Controller
{
    public function sendBulkEmail(Request $request)
    {
        $recipients = ['recipient1@example.com', 'recipient2@example.com', 'recipient3@example.com'];

        SendBulkEmailJob::dispatch($recipients);

        return redirect()->back()->with('message', 'Bulk email sent successfully!');
    }
}
