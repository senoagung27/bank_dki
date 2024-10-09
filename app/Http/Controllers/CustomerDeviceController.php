<?php

namespace App\Http\Controllers;

use App\Models\CustomerDevice;
use Illuminate\Http\Request;

class CustomerDeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = CustomerDevice::query();

        // Check for customer_id in the query parameters and add it to the where clause if it exists
        if ($request->has('customer_id')) {
            $query->where('customer_id', $request->query('customer_id'));
        }

        // Execute the query and get the data
        $data = $query->get(['customer_id', 'device_id', 'id', 'expired_date']);

        // Return the data as a JSON response
        return response()->json($data, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomerDeviceController $customerDeviceController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomerDeviceController $customerDeviceController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CustomerDeviceController $customerDeviceController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerDeviceController $customerDeviceController)
    {
        //
    }
}
