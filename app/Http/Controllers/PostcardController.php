<?php

namespace App\Http\Controllers;

use App\Models\Postcard;
use Illuminate\Http\Request;
use App\Models\Tojo;

class PostcardController extends Controller
{
    public function index()
    {
        // route --> /postcards/
        $postcard = Postcard::with('tojo')->orderBy('created_at', 'desc')->paginate(10);
        
        return view('postcard.index', ["postcards" => $postcard]);
    }

    public function show(Postcard $postcard)
    {
        // route --> /postcards/{id}
        $postcard->load('tojo');
        return view('postcard.show', ["postcard" => $postcard]);
    }
    public function create()
    {
        // route --> /postcards/create
        $tojos = Tojo::all();
        return view('postcard.create', ["tojos" => $tojos]);
    }

    public function store(Request $request)
    {
        // route --> POST /postcards
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'tojo_id' => 'required|exists:tojos,id',
        ]);
        //Validate & save the new postcard to the database
        Postcard::create($validatedData);
        return redirect()->route('postcard.index')->with('success', 'Postcard created successfully!');
    }

    public function destroy(Postcard $postcard)
    {
        // route --> DELETE /postcards/{id}
        
        $postcard->delete();
        return redirect()->route('postcard.index')->with('success', 'Postcard deleted successfully!');
    }
}
