<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\DB;

    class MenuController extends Controller
    {
            public function showMenuPage() {
                // Fetch best seller items
                $bestSellerItems = DB::table('items')->where('type', 'best seller')->get();
                
                // Fetch regular items excluding best seller items
                $regularItems = DB::table('items')->where('type', 'Regular Item')->get();
                
                return view('menupage', ['bestSellerItems' => $bestSellerItems, 'regularItems' => $regularItems]);
            }
        }