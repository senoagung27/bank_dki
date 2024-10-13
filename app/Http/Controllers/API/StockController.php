<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stock;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class StockController extends Controller
{
    public function createStock(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'serial_number' => 'required|string|max:255|unique:stocks',
            'additional_info' => 'nullable|json',
            'image' => 'nullable|image|max:2048',
        ]);
    
        $stock = new Stock();
        $stock->name = $request->name;
        $stock->quantity = $request->quantity;
        $stock->serial_number = $request->serial_number;
        $stock->additional_info = $request->additional_info ? json_encode(json_decode($request->additional_info, true)) : null;
        $stock->created_by = $request->user()->id;
        $stock->updated_by = $request->user()->id;
    
        if ($request->hasFile('image')) {
            $stock->image = $request->file('image')->store('images', 'public');
        }
    
        $stock->save();
    
        // Log request and response
        Log::info('Create Stock Request: ', $request->all());
        Log::info('Create Stock Response: ', $stock->toArray());
    
        return response()->json($stock, 201);
    }
    public function listStock()
    {
        $stocks = Stock::all();
        Log::info('List Stock Response: ', $stocks->toArray());

        return response()->json($stocks);
    }
    public function detailStock($id)
    {
        $stock = Stock::findOrFail($id);
        Log::info("Detail Stock Response for ID $id: ", $stock->toArray());

        return response()->json($stock);
    }

    public function updateStock(Request $request, $id)
    {
        $request->validate([
            'name' => 'sometimes|string|max:255',
            'quantity' => 'sometimes|integer',
            'serial_number' => 'sometimes|string|max:255|unique:stocks,serial_number,' . $id,
            'additional_info' => 'nullable|json',
            'image' => 'nullable|image|max:2048',
        ]);

        $stock = Stock::findOrFail($id);
        $stock->fill($request->only(['name', 'quantity', 'serial_number', 'additional_info']));
        $stock->updated_by = $request->user()->id;

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($stock->image);
            $stock->image = $request->file('image')->store('images', 'public');
        }

        $stock->save();

        Log::info("Update Stock Request for ID $id: ", $request->all());
        Log::info("Update Stock Response for ID $id: ", $stock->toArray());

        return response()->json($stock);
    }

    public function deleteStock($id)
    {
        $stock = Stock::findOrFail($id);
        Storage::disk('public')->delete($stock->image);
        $stock->delete();

        Log::info("Delete Stock Response for ID $id: ", $stock->toArray());

        return response()->json(['message' => 'Stock deleted successfully'], 200);
    }
}
