<?php

use Illuminate\Support\Facades\Route;
use \Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home',[
        "lhpires" => ["name" => "Lucas Pires", "email" => "lucas@pires.dev.br"]
    ]);
})->name('homeSweetHome');

Route::get('trabalhos',function (){
    return Inertia::render('Work');
})->name('works');
