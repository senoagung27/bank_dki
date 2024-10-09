<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($request)
    {
        // Get limit and page from request query parameters
        $limit = $request->query('limit') ? intval($request->query('limit')) : null;
        $page = $request->query('page') ? intval($request->query('page')) - 1 : 0;
        $offset = $limit ? $limit * $page : 0;

        // Build the query conditions
        $where = [];
        if ($request->has('reseller_id')) {
            $where[] = ['reseller_id', $request->query('reseller_id')];
        }
        if ($request->has('customer_id')) {
            $where[] = ['customer_id', $request->query('customer_id')];
        }
        if ($request->has('keyword')) {
            $where[] = ['name', 'like', '%' . $request->query('keyword') . '%'];
        }

        // Execute the query with pagination
        $query = Group::where($where)->with('device'); // Assuming the relationship is named 'device'
        $total = $query->count();
        $groups = $limit ? $query->offset($offset)->limit($limit)->get() : $query->get();

        // Return the results as JSON
        return response()->json(['data' => $groups, 'total' => $total], 200);
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
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        //
    }
}
