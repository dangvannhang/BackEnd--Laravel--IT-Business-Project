<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Voucher;

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
}
