<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $message;

    public function index(){
        return view('front.contact.contact-us');
    }
    public function newContact(Request $request){
        Contact::newMessage($request);
        return redirect()->back()->with('message','Message sent succesfully');
    }
    public function allMessages(){
        return view('admin.contact.all-contact',[
            'messages' => Contact::all()
        ]);
    }
    public function messageInfo(){
        $this->message = Contact::find($_GET['id']);
        return json_encode($this->message);
    }
    public function messageDelete($id){
        $this->message = Contact::find($id);
        $this->message->delete();
        return redirect()->back()->with('message','Message deleted successfully');
    }
}
