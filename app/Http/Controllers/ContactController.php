<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
    //   $contacts=Contact::all();
      $contacts=Contact:: orderBy('name','asc')
                          ->orderBy("created_at")
                          ->get();
      return view("contacts.index")->with([
        "contacts"=>$contacts
      ]);
    }

    public function create(){
        return view("contacts.create");
    }

    public function store(ContactRequest $request){
        
        $data = $request->validated();
        Contact::create($data);
        return redirect()->back()->withSuccess("success");
    }

    public function show(Request $request,Contact $id){
        return view("contacts.show")->with(["contact"=>$id]);
    }

    public function edit(Contact $id){
        return view("contacts.edit")->with([
            "contact"=>$id,
        ]);
    }

    public function update(ContactRequest $request, Contact $id ){
        //dd($id);

        $id->update($request->validated());
        return redirect()->route("contacts.index")->withSuccess("success");
    }

    public function delete(Request $request,Contact $id){

        $id->delete();
        return redirect()->route("contacts.index")->withSuccess("successfully Deleted");
    }
}
