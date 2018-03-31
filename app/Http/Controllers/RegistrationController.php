<?php

namespace App\Http\Controllers;


use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('register.create');
    }
    public function store(RegistrationForm $form)
    {
        $form->persist();

        session()->flash('message', 'Thanks for signing up');

    	return redirect()->home();
    }
}
