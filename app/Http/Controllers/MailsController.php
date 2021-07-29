<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use Illuminate\Http\Request;

class MailsController extends Controller
{

    /**
     * @return response json
     */
    public function submit(Request $request) {
        // $mail = Mail::create($this->validation());
        $mail = $request->name;
        return $mail;
    }

    private function validation() {
        return request()->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
    }
}
