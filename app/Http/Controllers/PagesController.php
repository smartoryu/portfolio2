<?php

namespace pindatabase\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $index = array(
            'title' => 'Database Pindad',
            'page' => 'index'
        );
        return view('pages.index')->with('index', $index);
    }

    public function about(){
        $page = 'about';
        return view('pages.about', compact('page'));
    }

    public function tools(){
        $tools = array(
            'page' => 'tools',
            'tools' => ['Thermometer', 'Refractometer', 'pH Meter', 'Ammeter', 'Anemometer'
            ]
        );
        return view('pages.tools')->with($tools);
    }
}
