<?php

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
    return view('welcome');
});


Route::get('/model', function(){
    // $products = \App\Product::all();

    // $user = new \App\User();

    $user = \App\User::find(1);
    $user->name = 'Usuario Test Editado';
    // $user->email = 'email@teste.com';
    // $user->password = bcrypt('12345678');
    $user->save();



    //\App\User::all(); - retorna todos usuarios
    //\App\User::find(4) - retorna um usuario com id
    // \App\User::where('name', 'Dr. Melvina Mraz')->get();  - retorna as informações do name pesquisado
    //\App\User::where('name', 'Dr. Melvina Mraz')->first(); - retorna o primeiro resultado com o name
    //\App\User::paginate(10); - paginar dados com laravel

//   Mass Assignment - atribuição em massa
//    $user = \App\User::create([
//        'name' => 'Nanderson Castro',
//        'email' => 'email100@email.com',
//        'password' => bcrypt(87654321)
//    ]);
//    dd($user);


// Mass Update
//
//    $user = \App\User::find(81);
//    $user->update([
//        'name' => 'Atualizando com Mass Update'
//    ]); // true ou false caso vc sobrescreva o valor
//    dd($user);

//     $user = \App\User::find(4); -> Como eu faria para pegar a loja de um usuario

//    dd($user->store()->count()); -> contar usuario


//    return $user->store;
//    return \App\User::all();;

//    $loja = \App\Store::find(1); - buscando loja
//    return $loja->products;

//    $loja = \App\Store::find(1); -> buscar produto de id 1
//    return $loja->products()->where('id', 1)->get();

// categoria de uma loja como pegar?

//    $categoria = \App\Category::find(1);
//    $categoria->products;

});

