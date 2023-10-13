<?php

namespace App\Http\Controllers;

use App\Models\Notif;
use App\Models\Push;
use Illuminate\Http\Request;

class PushController extends Controller
{
    public function index()
    {
       return view('admin');
    }
    public function create()
    {

    }
    public function store(Request $request)
    {
    Notif::create([
        "title"=>$request->title,
        "body"=>$request->body,
        "link"=>$request->link
    ]);
    return back();
    }
    public function edit(Push $push)
    {

    }
    public function update(Request $request, Push $push)
    {

    }
    public function destroy(Push $push)
    {

    }
}
