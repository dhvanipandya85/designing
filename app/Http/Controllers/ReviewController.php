<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    Public function index()
    {
        return view('Review.index');
    }
}
