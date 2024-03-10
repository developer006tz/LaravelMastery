<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{

    function create_subject(){
        return view('pages.subject.create');
    }
}
