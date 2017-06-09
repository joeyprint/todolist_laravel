<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodolistController extends Controller
{
    public $runList = 1;
    public function createList() {
        $data = $request()->all();
        dd($data);
        $list = 'List '.$runList.' : '.$data;
        $runList++;
        return view('todolist'.$list.'<br>');
    }
    public function input($list) {
        return $list;
    }
}
