<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


//CREIAMO UNA PUBLIC FUNCTION PER RICHIMARE IL CONTENUTO IMPORTATO DAL DATABASE DI MOVIES
class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
