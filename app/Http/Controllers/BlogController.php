<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

        $pageTitle = "Actualité";
        $pageLink = "Accueil /".$pageTitle;
        return view('Actualite.index', compact('pageTitle', 'pageLink'));
    }
}
