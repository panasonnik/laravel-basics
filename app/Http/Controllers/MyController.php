<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Item;

class MyController extends Controller {
    public function getItem($id) {
        $item = new Item($id);
        return view('item',['item'=>$item]);
    }
    public function getItems() {
        $items = [];
        for($i=1;$i<=5;$i++) {
            $items[$i]=new Item($i);
        }
        return view('items',['items'=>$items]);
    }
    public function submit(Request $req) {
    // Validate the request data
    $validator = Validator::make($req->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email:rfc,dns|max:255',
    ]);

    // Check if validation fails
    if ($validator->fails()) {
        // If validation fails, redirect back with validation error
        return redirect()->back()
                         ->withErrors($validator);
    }

    // If validation passes
    $name = strip_tags($req->input('name'));
    $email = strip_tags($req->input('email'));

    return view('submit', ['name' => $name, 'email' => $email]);
    }   
}