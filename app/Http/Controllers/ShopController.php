<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    Public function index()
    {
        return view('Shop.index');
    }
}
