<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjemploController;
use App\Http\Controllers\homeController;
// use Illuminate\Support\Facades\DB;
use App\Models\Persons;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index/{id}', [EjemploController::class, 'index']);

Route::get('/home', [homeController::class,'home']);

//CRAMOS UN CRUD CON RAW SQL QUERY
// Route::get('/creat', function(){
//     DB::insert("INSERT INTO persons (name, last_name, age, direccion) VALUES (?,?,?,?)", ["Juan", "Torres", 50, "avenida roca"]);
// });

// Route::get('/read', function(){
//    $result = DB::select("SELECT * FROM persons WHERE id=?", [1]);
//     foreach($result as $row){
//         return $row->name;
        
//     }
// });

// Route::get('/update', function(){
//     DB::update("UPDATE persons SET name='gaston' WHERE ID=?", [1]);    
// });

// Route::get('/delete', function(){
//     DB::delete("DELETE FROM persons WHERE ID=?", [1]);    
// });

//ELOQUENT
//ALL
// Route::get('/read', function(){
//     $persons = Persons::all();
//     foreach ($persons as $person) {
//     echo''. $person->id .' '. $person->name . ' ' .$person->last_name;
//     }
// });
Route::get('/read', function(){
    $persons = Persons::where("genero", "F")->get();
    return $persons;
});

