<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item; 

class ItemController extends Controller
{

public function adminPage()
    {
        $items = Item::paginate(5);

        return view('adminpage', ['items' => $items]);
    }

public function menu()
{
    $items = Item::all();
    return view('menupage', ['items' => $items]);
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'category' => 'required',
        'type' => 'required',
        'image' => 'required|image',
    ]);

    $imageName = time().'.'.$request->image->extension();  
    $request->image->move(public_path('images'), $imageName);

    $item = new Item;
    $item->name = $request->name;
    $item->description = $request->description;
    $item->category = $request->category;
    $item->type = $request->type;
    $item->image = $imageName;
    $item->save();

    return redirect()->route('adminpage');
}

public function destroy($id)
{
    $item = Item::find($id);

    if ($item) {
        $item->delete();
        return redirect()->route('adminpage')->with('success', 'Item deleted successfully');
    }

    return redirect()->route('adminpage')->with('error', 'Item not found');
}

public function update(Request $request, $id)
{
    $item = Item::find($id);

    if ($item) {
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
            $item->image = $imageName;
        }

        $item->name = $request->name;
        $item->description = $request->description;
        $item->category = $request->category;
        $item->type = $request->type;
        $item->save();

        return redirect()->route('adminpage')->with('success', 'Item updated successfully');
    }

    return redirect()->route('adminpage')->with('error', 'Item not found');
}

}
