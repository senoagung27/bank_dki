<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    private $title = 'Manajemen Kategori';
    private $li_1 = 'Index';

    public function index(Request $request)
    {
        $title['title'] = $this->title;
        $title['li_1'] = $this->li_1;
        // $data = Customer::get();
         // Fetching query parameters
    $limit = $request->query('limit') ? (int) $request->query('limit') : 10;
    $page = $request->query('page') ? (int) $request->query('page') - 1 : 0;

    // Defining company names to filter
    $companyNames = [
        'Krakatau Smart',
        'Nusa Network Prakarsa',
        'Dinas Bina Marga dan Sumber Daya Air',
        'Demo'
    ];

    // Querying the database
    $query = Customer::whereIn('company_name', $companyNames)
        ->skip($page * $limit)
        ->take($limit)
        ->get(['id', 'name', 'phone', 'address', 'email', 'company_name', 'expired_date', 'start_date', 'foto', 'note', 'website']);
    
    // Counting the total records that match the criteria
    $total = Customer::whereIn('company_name', $companyNames)->count();

    // Formatting the response
    $data = [
        'count' => $total,
        'rows' => $query // This should be a collection of Customer objects
    ];

    return view('content.pages.customer.index', [
        'title' => $title, 
        'data' => $data
    ]);
         // Passing data to the view
        //  return view('content.pages.customer.index', compact('title', 'data'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
