<?php

namespace EasyBlastoff\Easyblastoff\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use EasyBlastoff\Easyblastoff\Models\Contact;

class ContactController extends Controller
{
    private $contact;

    public function __construct(Contact $contact) {
        $this->contact = $contact;
    }
    
    public function index() {
        return view('easyblastoff::contact'); 
    }

    public function send(Request $request) {
        $contact->ceate($request->all());
        return redirect(route('contact'));
    }
}