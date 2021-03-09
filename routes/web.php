<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'title' => 'Primi passi in Laravel',
        'concetti' => [
            'Come effettuare l\'installazione',
            'Come avviare il server per lavorare in locale'
        ]
    ];
    return view('home', $data);
});

Route::get('/config', function () {
    $data = [
        'title' => 'Installazione',
        'steps' => [
            'Verifacare la versione di php, che si sta utilizzando',
            'Installare Composer nella cartella di php utilizzata',
            'Scegliere il Path dove andare a creare la cartella di Laravel',
        ],
        'commands' => [
            'Ora eseguire il comando: composer create-project --prefer-dist laravel/laravel:^7.0 blog',
            'Sostituire blog con il nome desiderato dalla cartella',
            'Posizionarsi nella cartella appena creata',
            'Digitare, [ php artisan serve ] cosi da avviare il serve locale. Raggiungibile con http://localhost:8000 (la porta può cambiare se è la 8000 è impegnata)'
        ]
    ];
    return view('configure', $data);
});

Route::get('/start', function () {
    $data = [
        'title' => 'Come iniziare',
        'init' => [
            'Iniziare con la creazione di una pagina .blade.php in resources/views',
            'Poi Impostare da routes/web.php la root'
        ]
    ];
    return view('server_start', $data);
});
