<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;


class productcontroller extends Controller
{
    //
    public function list(){
        $produk = DB::table('produk') ->paginate(10);
                                                                 
       return view('product',[
                "product"=> $produk
                ])
        ;
    }
    public function buy($product){
        $produk = DB::table('produk')-> where('nama_produk', '=', $product)->get();
        return view('buy')->with('product', $produk);   
    }
}
