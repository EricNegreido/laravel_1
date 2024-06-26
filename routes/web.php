<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjemploController;
use App\Http\Controllers\homeController;
// use Illuminate\Support\Facades\DB;
use App\Models\Persons;
use App\Models\Profession;

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
Route::get('/add', function(){
    $persons = new Persons();
    $persons->name = "Jorge";
    $persons->last_name = "Milton";
    $persons->age = "50";
    $persons->direccion = "Jo 22";
    $persons->genero = "M";

    $persons->save();
});

Route::get('/update', function(){
    $persons = Persons::find(4);
    $persons->name = "Tom";
    $persons->last_name = "Brondon";
    $persons->age = "50";
    $persons->direccion = "Jo 22";
    $persons->genero = "M";

    $persons->save();
});

Route::get("/person/{id}/profession", function($id){
    return Profession::find($id)->person;
});

Route::get("/persons/{id}/profession", function($id){
    $persons = Profession::find($id)->persons;

    foreach ($persons as $person) {
        echo $person->name . "<br/>";
    }
});

Route::get("/persons/{id}/perfil", function($id){
    $persons = Persons::find($id);

    foreach ($persons->perfils as $perfil) {
        return $perfil->name;
    }
});



