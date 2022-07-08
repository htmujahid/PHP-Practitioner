<?php

namespace App\Controllers;

use App\Core\App;

class HomeController{
    public function index(){
        $tasks = App::get('database')->selectAll('todos');
        return view('index', [
            'tasks' => $tasks
        ]);
    }    
    public function store(){
        App::get('database')->insert('todos', [
            'description' => $_POST['description'],
        ]);
        return redirect('');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
}