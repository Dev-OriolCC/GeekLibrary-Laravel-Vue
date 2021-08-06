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
        return $data;
    }
    /**
     * @return Array with all contacts
     */
    public function getContacts() {
        try {
            $contacts = Mail::paginate(10);
            return response()->json([
                'status' => true,
                'contacts' => $contacts
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'contacts' => null
            ]);
        }
    }
    /**
     * @return int total of contacts
     */
    public function totalContacts() {
        try {
            $contacts = Mail::all()->count();
            return response()->json([
                'status' => true,
                'totalContacts' => $contacts
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'totalContacts' => null
            ]);
        }
    }
    /**
     * @param int $id
     * @return response
     */
    public function destroy($id) {
        try {
            $contact = Mail::find($id);
            $contact->delete();
            return response()->json([
                'status' => true,
                'message' => 'Deleted successfully'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Error deleting..'
            ]);
        }
    }
    /**
     * @param int $id
     * @return response
     */
    public function updateMail($id) {
        try {
            $contact = Mail::find($id);
            $viewValue = $contact->view_status; 
            $contact->update([
                'view_status' => !$viewValue
            ]);
            return response()->json([
                'status' => true,
                'message' => 'Update successfully',
                'view_status' => $contact->view_status
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Not updated'
            ]);
        }
    }
    /**
     * @return response json 
     */

    private function validation() {
        return request()->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
    }
}
