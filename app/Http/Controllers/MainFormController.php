<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Events\SendMessage;

class MainFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mainform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'formGroupNameInput' => 'required|string|alpha_spaces|min:3|max:128',
            'formGroupPhoneInput' => 'required|string|only_digits|min:11|max:64',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        } else {
            event(new SendMessage(
                $request->input('formGroupPhoneInput'), 
                $request->input('formGroupNameInput')
            ));
            Session::flash('success_send_message', "Message send success");
            return redirect('/')->withInput();
        }
    }

}
