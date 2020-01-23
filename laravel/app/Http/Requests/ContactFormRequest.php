<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest {

  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
        'name'    => 'required',
        'email'   => 'required|email',
        'msg'     => 'required'
      ];
  }

}

class AboutController extends Controller {

    public function store(Request $request)
    {
  
      $contact = [];
  
      $contact['name'] = $request->get('name');
      $contact['email'] = $request->get('email');
      $contact['msg'] = $request->get('msg');
  
      // Mail delivery logic goes here
  
      flash('Your message has been sent!')->success();
  
      return redirect()->route('contact.create');
  
    }
  
  }
