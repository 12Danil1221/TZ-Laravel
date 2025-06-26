<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Tovar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TovarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Tovar $tovar)
    {
            $tovars = Tovar::all();

        return view('./tovars/tovar-all', compact('tovars', 'tovar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Categories $categories, Tovar $tovar)
    {
        $tovar = Tovar::all();
        $category = Categories::all();
        return view('./tovars/tovar-create', compact('category', 'tovar'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tovar = $request->validate([
            'img'=>'required|file',
            'name'=>'required',
            'categories'=>'required',
            'description'=>'required',
            'price'=>'required',
        ]);

        $tovar['img'] = Storage::disk('public')->put('images', $tovar['img']);

        Tovar::create($tovar);

        return redirect()->route('tovar-all');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tovar $tovar)
    {
        return view('tovars.tovar-show', compact('tovar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tovar $tovar)
    {
        return view('./tovars/tovar-edit', compact('tovar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tovar $tovar)
    {
        $request->validate([
            'img'=>'required',
            'name'=>'required',
            'categories'=>'required',
            'description'=>'required',
            'price'=>'required',
        ]);
        $tovar->update($request->all());

        return redirect()->route('tovar-all');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tovar $tovar)
    {
        $tovar->delete();

        return redirect()->route('tovar-all');
    }
}