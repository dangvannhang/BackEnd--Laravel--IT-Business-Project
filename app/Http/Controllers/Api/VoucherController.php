<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Voucher;
use App\Http\Requests\VoucherRequest;

class VoucherController extends Controller
{
    //function check the value of voucher

    public function check_value_voucher(Request $request) {
        // Lấy mã giảm giá mà người dùng nhập vào
        $code_voucher = $request -> code_voucher;

        // Check thử biến đó có giá trị hay không
        // Nếu không thì trả về id của id_voucher là 1
        if($code_voucher == null) {
            $id_voucher = 1;
            return response()->json($id_voucher);
        }
        else {
            //Kiểm tra thử mã giảm giá đó có còn tồn tại hay không.
            $check_voucher = Voucher::where('code',$code_voucher)->get();
            return response()->json($check_voucher);
            // return $check_voucher;
        }

    }

    public function create_voucher(VoucherRequest $request) {

        $code = $request -> input('code');
        $description = $request -> input('description');
        $count = $request -> input('count');
        $denomination = $request -> input('denomination');
        $start_time = $request -> input('start_time');
        $end_time = $request -> input('end_time');

        $new_start_time = date('Y-m-d H:i:s',strtotime($start_time));
        $new_end_time = date('Y-m-d H:i:s',strtotime($end_time));
        
        $new_voucher = new Voucher;
        $new_voucher -> code = $code;
        $new_voucher -> description = $description;
        $new_voucher -> count = $count;
        $new_voucher -> denomination = $denomination;
        $new_voucher -> start_time = $new_start_time;
        $new_voucher -> end_time = $new_end_time;

        $new_voucher -> save();

        return response()->json($new_voucher,201);
    }

    public function show_all_voucher() {
        $all = Voucher::all();

        return $all;
    }
}
