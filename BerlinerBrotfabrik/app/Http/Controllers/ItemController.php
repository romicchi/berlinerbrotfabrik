<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item; 
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

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
        'type' => 'required',
        'image' => 'required|image',
    ]);

    $imageName = time().'.'.$request->image->extension();  
    $request->image->move(public_path('images'), $imageName);

    $item = new Item;
    $item->name = $request->name;
    $item->description = $request->description;
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
            // Delete the old image
            $oldImagePath = public_path('images/' . $item->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
                gc_collect_cycles();
            }

            // Upload the new image
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
            $item->image = $imageName;
        }

        $item->name = $request->name;
        $item->description = $request->description;
        $item->type = $request->type;
        $item->save();

        return redirect()->route('adminpage')->with('success', 'Item updated successfully');
    }

    return redirect()->route('adminpage')->with('error', 'Item not found');
}

}
