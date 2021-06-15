<?php

namespace App\Http\Controllers;

use App\Http\Requests\BarangRequest;
use App\Models\Barang;
use Illuminate\Database\QueryException;

class BarangController extends Controller
{
    public function index()
    {
        abort_if(
            !auth()->user()->hasPermissionTo('view-barang'), 
            403, 
            'You are not allowed to view'
        );

        $barangs = Barang::all();
        return view('pages.admin.barangs.index', compact('barangs'));
    }

    public function create()
    {
        abort_if(
            !auth()->user()->hasPermissionTo('create-barang'), 
            403, 
            'You are not allowed to create'
        );

        return view('pages.admin.barangs.create');
    }

    public function store(BarangRequest $request)
    {
        try {
            Barang::create($request->validated());
        } catch (QueryException $e) {
            return redirect()->route('barangs.index')
                ->with('message', __('message.failed.store', ['type' => 'Barang']));
        }

        return redirect()->route('barangs.index')
            ->with('message', __('message.success.store', ['type' => 'Barang']));
    }

    public function edit(Barang $barang)
    {
        abort_if(
            !auth()->user()->hasPermissionTo('update-barang'), 
            403, 
            'You are not allowed to edit'
        );

        return view('pages.admin.barangs.edit', compact('barang'));
    }

    public function update(BarangRequest $request, Barang $barang)
    {
        try {
            $barang->update($request->validated());
        } catch (QueryException $e) {
            return redirect()->route('barangs.index')
                ->with('message', __('message.failed.update', ['type' => 'Barang']));
        }

        return redirect()->route('barangs.index')
            ->with('message', __('message.success.update', ['type' => 'Barang']));
    }

    public function destroy(Barang $barang)
    {
        abort_if(
            !auth()->user()->hasPermissionTo('delete-barang'), 
            403, 
            'You are not allowed to delete'
        );

        try {
            $barang->delete();
        } catch (QueryException $e) {
            return redirect()->route('barangs.index')
                ->with('message', __('message.failed.delete', ['type' => 'Barang']));
        }

        return redirect()->route('barangs.index')
            ->with('message', __('message.success.delete', ['type' => 'Barang']));
    }
}
