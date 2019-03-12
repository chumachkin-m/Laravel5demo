<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $this->validate($request, [
            'formGroupNameInput' => 'required|alpha_spaces|min:3|max:128',
            'formGroupPhoneInput' => 'required|number|min:11|max:64',
        ]);
    }

}
