<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Products extends Controller
{
  public function products()
  {
    $tShirt=[
        'name'=>'hoody',
        'price'=>'15$',
        'brand'=>'puma'
    ];
    return view('welcome')->with('tShirts',$tShirt);
  }
}
