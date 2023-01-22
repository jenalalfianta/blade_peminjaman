<?php

use App\Models\Car;
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

//supaya route rapih
Route::resource('cars', CarController::class);

Route::get('/', function(){
    return view('welcome');
});

// view all cars
Route::get('/car', function(){
    $cars = Car::all();
    return view('car.index', compact('cars'));
})->name('cars');

// view single car
Route::get('/car/detail/{car:id}', function(Car $car){
    return view('car.detail', compact('car'));
})->name('car_detail');

// Route::get('/car/detail/{id}', function($id){
//     // $car = Car::findOrFail($id);
//     // $car = Car::where('id', $id)->firstOrFail();
//     // $car = Car::whereId($id)->firstOrFail();
//     return view('car.detail', compact('car'));
// })->name('car_detail');

// form create
Route::get('/car/create', function(){
    return view('car.create');
});

// process create
Route::post('/car/create/save', function(){
    $data = request()->all();
    $car = Car::create($data);
    return redirect()->route('car_detail', compact('car'));
});

// process update
Route::patch('/car/edit/save/{car:id}', function(Car $car){
    $car->fill(request()->all());
    $car->save();
    return redirect()->route('car_detail', compact('car'));
});

// form update
Route::get('/car/edit/{car:id}', function(Car $car){
    return view('car.update', compact('car'));
});

// delete a car
Route::get('/car/delete/{car:id}', function($car){
    $car = Car::destroy($car);

    return redirect()->route('cars');
});
