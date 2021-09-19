<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\NewFeedBackHasRegisteredEvent;

class FeedBackController extends Controller
{
    public function sendfeedBack(Request $request)
    {

        $validated = $request->validate([
            'client_id' => 'required',
            'vendor_id' => 'required',
            'feedback' => 'required'
        ]);
        
        $data = $request->all();
        event(new NewFeedBackHasRegisteredEvent($data));
        return redirect()->route('clients.index')->with('message', 'Feedback successfully sent !!');;
    }
}
