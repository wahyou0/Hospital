<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\loket;

class LoketController extends Controller
{
    public function index()
    {
        $loket = loket::all();

        return view('admin.loket.index', compact('loket'));
    }

    public function create()
    {
        return view('admin.loket.create');
    }

    public function store(Request $request)
    {
        $model = $request->all();

        loket::create($model);
        return redirect('/loket')->with('success', 'Data berhsasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
