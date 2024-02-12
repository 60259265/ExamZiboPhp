<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequest;
use App\Mail\DeleteContact;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __construct()
    {
            $this->middleware('authentification');
    }
    public function index(){
        $user = auth()->user();
        $contacts = $user->contacts;

        return view ('contacts.contact',[
            'contacts' => $contacts,
            'user' => $user
        ]);

   }

   public function edit($id){
        $contact = Contact::find($id);
        return view('contacts.update-contact',[
            'contact' => $contact
        ]);
   }

   public function update($id,Request $request){

        $contact = Contact::find($id);
        $contact->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'age' => $request->age,
            'telephone' => $request->telephone
          ]);

          if($request->hasFile('avatar')){
            $contact->avatar = $request->file('avatar')->store('avatars');
            $contact->save();
          }
          return redirect()->route('contact.index');
   }
   public function create(){
    return view('contacts.add-contact');
   }

   public function store(CreateRequest $request){
      Contact::create([
        'user_id' => auth()->id(),
        'nom' => $request->nom,
        'prenom' => $request->prenom,
        'age' => $request->age,
        'telephone' => $request->telephone,
        'avatar' => $request->file('avatar')->store('avatars')
      ]);

      //return redirect('/contact');
      return redirect()->route('contact.index');
   }

   public function destroy($id){
        $contact = Contact::find($id);
        $contact->delete();
        Mail::to('rafia.zibo@gmail.com')->send(new DeleteContact($contact));
        return redirect()->route('contact.index');
   }

}
