<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ContactsController extends Controller
{
    public function Index()
    {
        return view('contacts');
    }
}
