<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\wishlists;



class WishlistController extends Controller
{
    public function WishlistShow($id_product)
    {
            wishlists::insert([
            'id_user' => Auth::id(),
            'id_pro
            duct' =>$id_product
            ]);
            
    }
}