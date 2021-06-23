<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Physical_store_channel;
use App\Http\Requests\SaleLogRequest;

class SalesController extends Controller
{
    public function index()
    {
        $sales = Physical_store_channel::get();
        $count = 0;
        foreach ($sales as $sale) {
            $count += $sale->quantity;
        }
        return view('sales.index')->with('count', $count);
    }

    public function physical_store()
    {
        $currentd = date('Y-m-d');
        $exp = explode("-", $currentd);
        $cmonth = $exp[1];
        $cday   = $exp[2];

        $count = 0;
        $weeklyCount = 0;
        $avgCount = 0;
        $avgCounter = 0;

        $sales = Physical_store_channel::where('date_sold', date("y-m-d"))
            ->get();
        foreach ($sales as $sale) {
            $count += $sale->quantity;
        }

        $allSales = Physical_store_channel::get();
        foreach ($allSales as $sale) {
            $d = $sale->date_sold;
            $expD = explode("-", $d);
            $Month = $expD[1];
            $Day   = $expD[2];
            if ($Day >= $cday - 7 && $Day <= $cday) {
                $weeklyCount += $sale->quantity;
            }
            if ($Month == $cmonth) {
                $avgCount += $sale->quantity;
                $avgCounter += 1;
            }
        }
        $avgCount = $avgCount / $avgCounter;

        return view('sales.physical_store')->with('count', $count)
            ->with('weeklyCount', $weeklyCount)
            ->with('maxSold', "A")
            ->with('avgCount', round($avgCount));
    }

    public function sales_log()
    {
        return view('sales.sales_log');
    }
    public function sales_log_store(SaleLogRequest $request)
    {

        $physical_store_channel = new  Physical_store_channel();
        $physical_store_channel->customer_name = $request->customer_name;
        $physical_store_channel->address = $request->address;
        $physical_store_channel->phone = $request->phone;
        $physical_store_channel->product_id = $request->product_id;
        $physical_store_channel->product_name = $request->product_name;
        $physical_store_channel->unit_price = $request->unit_price;
        $physical_store_channel->quantity = $request->quantity;
        $physical_store_channel->total_price = $request->unit_price * $request->quantity;
        $physical_store_channel->date_sold = date('y-m-d');
        $physical_store_channel->payment_type = $request->payment_type;
        $physical_store_channel->status = "sold";
        $physical_store_channel->save();
        $request->session()->flash('msg', 'sales added successfully');
        return redirect()->route('sales.index');
    }
}
