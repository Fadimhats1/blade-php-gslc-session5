<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    public function index(){
        return view('content.index')->with('mangaList', Manga::all());
    }
}
