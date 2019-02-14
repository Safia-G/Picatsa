<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;

class ChatController extends Controller
{
  /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
     $chat = new Chat;
     $chat->libelle = $request->libelle;
     $chat->photo = $request->photo;
     $chat->save();
     return redirect()->route('admin.chats.index');
   }
   public function show($id) {
    $chats = Chat::find($id);
    return view('index')->with('id', $id)->with('chats', $chats);
   }
   public function index() {
    $chats = Chat::all();
    return view('index')->with('chats', $chats);
  }
}
