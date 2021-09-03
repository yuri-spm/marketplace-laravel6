<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use Illuminate\Support\Facades;
use App\Store;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{

    use UploadTrait;

    /**
     * Method __construct
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('user.has.store')->only(['create', 'store']);
    }

    /**
     * Method index
     *
     * @return void
     */

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


    /**
     * Method store
     *
     * @param StoreRequest $request
     *
     * @return void
     */

    public function store(StoreRequest $request)
    {

        $data = $request->all();
        $user =  auth()->user();

        if ($request->hasFile('logo')) {

            $data['logo'] = $this->imageUpload($request->file('logo'));
        }

        $store = $user->store()->create($data);

        flash('Loja Criada com Sucesso')->success();

        return redirect()->route('admin.stores.index');
    }

    /**
     * Method edit
     *
     * @param $store $store
     *
     * @return void
     */

    public function edit($store)
    {

        $store = \App\Store::find($store);

        return view('admin.stores.edit', compact('store'));
    }

    /**
     * Method update
     *
     * @param StoreRequest $request
     * @param $store $store
     *
     * @return void
     */

    /**
     * Method update
     *
     * @param StoreRequest $request
     * @param $store $store
     *
     * @return void
     */
    public function update(StoreRequest $request, $store)
    {
        $data = $request->all();

        $store = \App\Store::find($store);


        if ($request->hasFile('logo')) {
            if (Storage::disk('public')->exists($store->logo)) {
                Storage::disk('public')->delete($store->logo);
            }
            $data['logo'] = $this->imageUpload($request->file('logo'));
        }

        $store->update($data);

        flash('Loja Atualizada com Sucesso')->success();

        return redirect()->route('admin.stores.index');
    }

    /**
     * Method destroy
     *
     * @param $store $store
     *
     * @return void
     */
    
    public function destroy($store)
    {
        $store = \App\Store::find($store);
        $store->delete();

        flash('Loja removida com Sucesso')->success();

        return redirect()->route('admin.stores.index');
    }
}
