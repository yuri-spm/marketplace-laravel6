<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use App\Store;
use App\Traits\UploadTrait;

class StoreController extends Controller
{

    use UploadTrait;

    public function __construct()
    {
        $this->middleware('user.has.store')->only(['create', 'store']);
    }
    public function index()
    {
        $store = auth()->user()->store;

        return  view('admin.stores.index', compact('store'));
    }

    public function create()
    {

        $users = \App\User::all(['id', 'name']);
        return view('admin.stores.create', compact('users'));
    }

    public function store(StoreRequest $request)
    {

        $data = $request->all();
        $user =  auth()->user();

        if($request->hastFile('logo')){
            $data['logo'] = $this->imageUpload($request, 'logo');
        }

        $store = $user->store()->create($data);

         flash('Loja Criada com Sucesso')->success();

        return redirect()->route('admin.stores.index');

    }

     public function edit($store)
    {

        $store = \App\Store::find($store);

        return view('admin.stores.edit', compact('store'));
    }

    public function update(StoreRequest $request, $store)
    {
        $data = $request->all();

        $store = \App\Store::find($store);
        $store->update($data);

        flash('Loja Atualizada com Sucesso')->success();

        return redirect()->route('admin.stores.index');
    }

    public function destroy($store)
    {
        $store = \App\Store::find($store);
        $store->delete();

        flash('Loja removida com Sucesso')->success();

        return redirect()->route('admin.stores.index');
    }
}
