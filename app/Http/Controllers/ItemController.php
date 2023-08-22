<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        return view('pages.item.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $units = Unit::all();
        $categories = Category::all();
        return view('pages.item.create', compact('units', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'unit_id' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1028'
        ]);

        //upload photo
        $imageName = time() . '.' . $request->file->extension();
        $request->file->move(public_path('file/'), $imageName);
        $request['photo'] = $imageName;
        Item::create($request->except('file'));

        return redirect()->route('item.index')->with('success', 'Item Berhasil Di Tambahkan.!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $itemProduct = Item::findOrFail($id);
        $units = Unit::all();
        $categories = Category::all();
        return view('pages.item.edit', compact('itemProduct', 'units', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'unit_id' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        $item = Item::findOrFail($id);
        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1028'
            ]);
            $imageName = time() . '.' . $request->file->extension();
            $request->file->move(public_path('file/'), $imageName);
            $request['photo'] = $imageName;
            File::delete('file/' . $item->photo);
        } else {
            $request['photo'] = $item->photo;
        }

        $item->update($request->except('file'));

        return redirect()->route('item.index')->with('success', 'Item Berhasil Di Update.!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        File::delete('file/' . $item->photo);
        $item->delete();
        return response()->json(['message' => 'Kategori Berhasil Di Hapus.!']);
    }
}