<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Item;

class MyController extends Controller {
    public function getItem($id) {
        $item = new Item($id);
        return view('item',['item'=>$item]);
    }
}