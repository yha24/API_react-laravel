<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\wishlist;



class WishlistController extends Controller
{
    public function WishlistShow($id_product)
    {
        return $id;
            wishlist::insert([
            'id_user' => Auth::is(),
            'id_product' =>$id_product
            ])
    }
}