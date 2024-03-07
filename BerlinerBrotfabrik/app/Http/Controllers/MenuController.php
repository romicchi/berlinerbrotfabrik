<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function showMenuPage() {
        $items = DB::table('items')->where('type', 'best seller')->get();
        return view('menupage', ['items' => $items]);
    }
}