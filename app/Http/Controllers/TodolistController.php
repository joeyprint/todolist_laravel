<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TodolistController extends Controller
{
    public function createList() {
        $data = request()->inputList;
        // dd($data);
        DB::table('todolist')->insert(
            ['list' => $data]
        );
        return redirect('/');
    }
    public function showList() {
        $list = DB::table('todolist')->select('list', 'id')->get();
        // dd($list);
        return view('todolist', ['list' => $list]);
    }
    public function deleteList() {
        $id = request()->delete;
        $list = DB::table('todolist')->where('id', '=', $id)->delete();
        return redirect('/');
    }
}
