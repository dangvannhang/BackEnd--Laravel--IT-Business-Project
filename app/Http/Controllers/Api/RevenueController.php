<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Booking;

class RevenueController extends Controller
{
    //
    //function show doanh thu cua app theo thang
    public function total_revenue_by_month($month) {

        $total_revenue = Booking::where('is_finish',1)
            ->whereMonth('start_time',$month)
            ->select('price')
            ->get();

        $loop_get_total_revenue = 0;
        

        for($i = 0; $i < count($total_revenue); $i++) {
            $loop_get_total_revenue = $loop_get_total_revenue + (int)$total_revenue[$i]->price;
        }

        return response()->json($loop_get_total_revenue,200);
    }

}
