<?php

namespace App\Http\Controllers;

use App\Registration;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class DrustvoController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function shranjeno()
    {
        return view("shranjeno");
    }

    public function prijavljeni()
    {
        $registrations = Registration::All();

        return view("prijavljeni", ["registrations" => $registrations]);
    }

    public function smarna()
    {

        return view("smarna");
    }

    public function detajli($id)
    {

        $registration = Registration::where("id", "=", $id)->first();

        return view("detajli", ["registrations" => [$registration]]);

    }

    public function store()
    {
        $registration = new Registration;
        $registration->name = Request::get("name");
        $registration->surname = Request::get("surname");
        $registration->email = Request::get("email");
        $registration->address = Request::get("address");
        $registration->city = Request::get("city");
        $registration->country = Request::get("country");

        $registration->save();

        return view("shranjeno");
    }
}
