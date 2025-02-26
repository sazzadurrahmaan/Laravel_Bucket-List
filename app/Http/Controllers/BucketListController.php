<?php

namespace App\Http\Controllers;

use App\Models\BucketListItem;
use Inertia\Inertia;
use Illuminate\Http\Request;

class BucketListController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            'items' => BucketListItem::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
    
        BucketListItem::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
    
        return Inertia::render('Home', [
            'items' => BucketListItem::all(),
        ])->with('success', 'Item added successfully!');
    }
}