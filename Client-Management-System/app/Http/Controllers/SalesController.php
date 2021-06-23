<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Physical_store_channel;

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
        $count = 0;

        $sales = Physical_store_channel::where('date_sold', date("y-m-d"))
            ->get();
        foreach ($sales as $sale) {
            $count += $sale->quantity;
        }
        return view('sales.physical_store')->with('count', $count);
    }
}
