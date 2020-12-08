<?php

use Illuminate\Support\Facades\Route;


// Apresenta o formulário de criação da menssagem
Route::get('/', 'main@index')->name('main_index');
Route::post('/init', 'main@init')->name('main_init');

// Confirmação do evio da menssagem
Route::get('/confirm/{purl}', 'main@confirm')->name('main_confirm');

// Leitura da menssagem
Route::get('/read/{purl}', 'main@read')->name('main_read');
