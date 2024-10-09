<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\GroupSensor;
use Carbon\Carbon;

class MonitorController extends Controller
{
    private $title = 'Manajemen Kategori';
    private $li_1 = 'Index';
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $date = Carbon::now()->format('Y-m-d');
        $start = $date . ' 00:00:00';
        $end = $date . ' 23:59:59';

        $where = [
            ['status', 1],
            function($query) {
                $query->where('status_siaga', 1)
                      ->orWhere('type', 'WQ');
            }
        ];

        $include = [
            'device_data' => function($query) use ($start) {
                $query->where('last_update', '>=', $start)
                      ->orderBy('last_update');
            }
        ];

        $device_id = [];
        if ($request->user()->group_id) {
            $group = GroupSensor::where('group_id', $request->user()->group_id)->get();
            foreach ($group as $element) {
                $device_id[] = $element->device_id;
            }
        }

        if ($request->query('customer_id') || $request->user()->customer_id) {
            $now = Carbon::now()->format('Y-m-d 00:00:00');
            $customer_id = $request->user()->customer_id ?: $request->query('customer_id');

            $where_device = [
                ['customer_id', $customer_id],
                ['expired_date', '>=', $now]
            ];

            if ($request->user()->group_id) {
                $where_device[] = ['device_id', $device_id];
            }

            $include[] = [
                'customer_device' => function($query) use ($where_device) {
                    $query->where($where_device);
                }
            ];
        } else {
            if ($request->user()->group_id) {
                $where[] = ['id', $device_id];
            }
        }

        $devices = Device::where($where)
            ->with($include)
            ->get();

        $data = [];
        foreach ($devices as $element) {
            $dataElevasi = [];
            $dataPh = [];

            foreach ($element->device_data as $x) {
                $date_time = strtotime($x->last_update) * 1000;

                $dataPh[] = [
                    'x' => $date_time,
                    'y' => number_format($x->pH, 2)
                ];

                $dataElevasi[] = [
                    'x' => $date_time,
                    'h' => number_format($x->elevasi_muka_air, 2),
                    'y' => number_format($x->real_ketinggian * 100, 2),
                    'debit' => number_format($x->debit, 4)
                ];
            }

            $device = [
                'id' => $element->id,
                'name' => $element->name,
                'type' => $element->type,
                'pH' => number_format($element->pH, 2),
                'real_ketinggian' => number_format($element->real_ketinggian * 100, 2),
                'dataPh' => $dataPh,
                'dataElevasi' => $dataElevasi
            ];

            $data[] = $device;
        }

        // return response()->json(['data' => $data], 200);
        return view('content.pages.customer.index', compact('data'));
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
