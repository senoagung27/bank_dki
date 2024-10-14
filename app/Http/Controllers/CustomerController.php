<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Job;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    private $title = 'Manajemen Customer';
    private $li_1 = 'Index';

    

    public function index(Request $request)
    {
        $title['title'] = $this->title;
        $title['li_1'] = $this->li_1;
        // $data = Customer::get();
         // Fetching query parameters
         $customers = Customer::with(['job'])->paginate(10); // Server-side pagination

         return view('content.pages.customer.index', compact('customers'));
    }
    // public function index(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $query = Customer::with('job')->select('customers.*');

    //         return DataTables::eloquent($query)
    //             ->addColumn('action', function($customer) {
    //                 $action = '';
    //                 if (auth()->user()->roles == 'supervisi') {
    //                     if ($customer->status == 'Menunggu Approval') {
    //                         $action .= '<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#approvalModal'.$customer->id.'">
    //                                         <i class="fas fa-check"></i> Approve
    //                                     </button>';
    //                     } else {
    //                         $action .= '<span class="text-muted">Approved</span>';
    //                     }
    //                 }
    //                 return $action;
    //             })
    //             ->editColumn('birth_date', function($customer) {
    //                 return $customer->birth_place . ', ' . \Carbon\Carbon::parse($customer->birth_date)->format('d M Y');
    //             })
    //             ->editColumn('gender', function($customer) {
    //                 return $customer->gender == 'male' ? 'Laki-laki' : 'Perempuan';
    //             })
    //             ->editColumn('initial_deposit', function($customer) {
    //                 return 'Rp ' . number_format($customer->initial_deposit, 0, ',', '.');
    //             })
    //             ->make(true);
    //     }

    //     return view('content.pages.customer.index');
    // }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jobs = Job::all();
        return view('content.pages.customer.create', compact('jobs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|string|unique:customers|regex:/^[\pL\s\-]+$/u', // Tidak mengandung angka dan simbol
        //     'birth_place' => 'required|string',
        //     'birth_date' => 'required|date',
        //     'job_id' => 'required|exists:jobs,id',
        //     'address' => 'required|string',
        //     'initial_deposit' => 'required|numeric',
        // ]);
         // Check if customer already exists (optional)
         $existingCustomer = Customer::where('name', $request->input('name'))->first();

         if ($existingCustomer) {
             // Redirect back with a warning message if the customer already exists
             return redirect()->back()->withInput()->with('warning', 'Data customer dengan nama ' . $existingCustomer->name . ' sudah ada!');
         }
     

        Customer::create([
            'name' => $request->name,
            'birth_place' => $request->birth_place,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'job_id' => $request->job_id,
            'address' => $request->address,
            'initial_deposit' => $request->initial_deposit,
            'created_by' => auth()->user()->id,
        ]);

        return redirect('/customer')->with('success', 'Pengajuan pembukaan rekening berhasil dikirim.');
    }

    public function approve($id) {
        $customer = Customer::findOrFail($id);
        $customer->update([
            'status' => 'Disetujui',
            'approved_by' => auth()->user()->id,
        ]);

        // Send email to CS
        // Mail::to('cs@test.com')->send(new \App\Mail\ApprovalNotification($customer));
        
        return redirect('/customer')->with('success', 'Pengajuan telah disetujui.');
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
