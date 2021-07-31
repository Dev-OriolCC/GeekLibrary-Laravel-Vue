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
        $data = $request->getContent();
        // $mail = Mail::create($this->validation());
        // $mail = Mail::create([
        //     'name' => $data->name
        // ]);
        return $data;
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
