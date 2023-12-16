<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Models\Task;
use Illuminate\Http\Request;

/**
    * Show Task Dashboard
    */
/* 
Route::get('/', function () {
    Log::info("Get /");
    $startTime = microtime(true);
    // Simple cache-aside logic
    if (Cache::has('tasks')) {
        $data = Cache::get('tasks');
        return view('tasks', ['tasks' => $data, 'elapsed' => microtime(true) - $startTime]);
    } else {
        $data = Task::orderBy('created_at', 'asc')->get();
        Cache::add('tasks', $data);
        return view('tasks', ['tasks' => $data, 'elapsed' => microtime(true) - $startTime]);
    }
});

Route::post('/task', function (Request $request) {
    Log::info("Post /task");
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        Log::error("Add task failed.");
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $task = new Task;
    $task->name = $request->name;
    $task->save();
    // Clear the cache
    Cache::flush();

    return redirect('/');
});

/**
    * Delete Task
   
Route::delete('/task/{id}', function ($id) {
    Log::info('Delete /task/'.$id);
    Task::findOrFail($id)->delete();
    // Clear the cache
    Cache::flush();

    return redirect('/');
});

*/

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

// Afficher tous les produits
Route::get('/products', function () {
    $products = Product::all();
    return view('products.index', compact('products'));
});

// Afficher le formulaire de création de produit
Route::get('/products/create', function () {
    return view('products.create');
});

// Stocker un nouveau produit
Route::post('/products', function (Request $request) {
    Product::create($request->all());
    return redirect('/products');
});

// Afficher le formulaire de modification de produit
Route::get('/products/{product}', function (Product $product) {
    return view('products.edit', compact('product'));
});

// Mettre à jour un produit existant
Route::put('/products/{product}', function (Request $request, Product $product) {
    $product->update($request->all());
    return redirect('/products');
});

// Supprimer un produit
Route::delete('/products/{product}', function (Product $product) {
    $product->delete();
    return redirect('/products');
});
