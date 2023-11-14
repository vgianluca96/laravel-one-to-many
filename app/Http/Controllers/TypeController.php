<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::orderByDesc('id')->paginate(4);

        return view('admin.types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
    }
}
