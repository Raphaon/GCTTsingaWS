<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function team(){
        $pageTitle = "Church Comitee";
        return view('churchComitee', compact('pageTitle'));
    }

    public function contact(){
        $pageTitle = "Contact";
        return view('Contact', compact('pageTitle'));
    }
}
