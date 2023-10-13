<?php

namespace App\Http\Controllers;

use App\Models\Notif;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
       $notifs= Notif::latest()->first();;
        return view('welcome',compact('notifs'));
   }
}
