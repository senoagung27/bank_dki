<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\GroupSensor;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $limit = $request->query('limit') ? intval($request->query('limit')) : null;
        $page = $request->query('page') ? intval($request->query('page')) - 1 : 0;
        $offset = $limit * $page;
        
        $where = [];
        $device_id = [];
        $with = [
            // 'gsm_name' => function($query) {
            //     $query->select('name');
            // }
        ];
        
        if ($request->query('keyword')) {
            $keyword = $request->query('keyword');
            $where[] = function($query) use ($keyword) {
                $query->where('name', 'like', "%{$keyword}%")
                      ->orWhere('code', 'like', "%{$keyword}%");
            };
        }
        if ($request->query('type')) {
            $where[] = ['type', $request->query('type')];
        }
        if ($request->query('status')) {
            $where[] = ['status', $request->query('status')];
        }
        if ($request->query('tipe_perangkat')) {
            $where[] = ['type', $request->query('tipe_perangkat')];
        }
        
        if ($request->user()->group_id) {
            $groupSensors = GroupSensor::where('group_id', $request->user()->group_id)->get();
            foreach ($groupSensors as $element) {
                $device_id[] = $element->device_id;
            }
        }
        
        if ($request->query('customer_id') || $request->user()->customer_id) {
            $now = Carbon::now()->format('Y-m-d 00:00:00');
            $customer_id = $request->user()->customer_id ? $request->user()->customer_id : $request->query('customer_id');
            $whereDevice = [
                ['customer_id', $customer_id],
                // ['expired_date', '>=', $now]
            ];
            if ($request->user()->group_id) {
                $whereDevice[] = ['device_id', $device_id];
            }
            $with['customer_device'] = function($query) use ($whereDevice) {
                $query->where($whereDevice);
            };
        } else {
            if ($request->user()->group_id) {
                $where[] = ['id', $device_id];
            }
        }
        
        $data = Device::with($with)
            ->where($where)
            ->offset($offset)
            ->limit($limit)
            ->get();
        
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
    public function show(Device $device)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Device $device)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Device $device)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Device $device)
    {
        //
    }
}
