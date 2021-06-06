<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Booking;
use Illuminate\Support\Facades\DB;

// use App\Http\Requests\BookingRequest;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Hiển thị tất cả các lịch booking từ mới tới cũ
    public function index()
    {
        //
        // $booking = new Booking;
        $booking = Booking::latest()->get();

        return response()->json($booking);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // nếu không có voucher thì truyền vào 0
        
        $booking = new Booking;
        $booking -> id_customer = $request -> id_customer;
        $booking -> id_photographer = $request -> id_photographer;
        $booking -> id_combo = $request -> id_combo;
        $booking -> id_voucher = $request -> id_voucher;


        $booking -> start_time = $request -> start_time;
        $booking -> time_booking = $request -> time_booking;


        $booking -> price = $request -> price;
        $booking -> booking_address = $request -> booking_address;

        $booking -> save();


        return response()->json($booking,201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $booking=Booking::find($id)
            ->join('user as pt','booking.id_photographer','=','pt.id')
            ->join('user as ct','booking.id_customer', '=', 'ct.id')
            ->join('combo', 'booking.id_combo', '=','combo.id')
            ->join('voucher','booking.id_voucher','=','voucher.id')

            ->select('booking.id','pt.first_name as photographer','ct.first_name as customer','combo.name_style','voucher.code','booking.start_time', 'booking.time_booking','booking.price','booking.booking_address','booking.booking_status','booking.is_finish')

            ->first();

        // ++++++++++++++++++++++++++++++++++++++++++++++++ doing


        return response()->json($booking);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // update dùng ở đây để người dùng có thể thay đổi combo hay thời gian đặt vậy đó.
    // public function update(Request $request, $id)
    // {
    //     //
    //     $booking=Booking::findOrFail($id);
    //     $booking->is_cancel='false';
    //     $booking->code_voucher="Editbooking122";
    //     $booking->save();
    //     // hiện đang không thể $request tới các trường ở input, nên phải fix data để tét
    //     // $booking->save();

    //     return response()->json($booking);
    // }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $booking=Booking::find($id);
        $booking->delete();

        return response()->json("Delete finished");
    }


    //  Khi mà người dùng không muốn đặt lịch book nữa thì họ có thể cancel nhưng cái lịch booking vẫn lưu lại, chỉ chuyển is_cancel thành false
    public function cancel_booking($id, Request $request) {
        $booking=Booking::find($id);

        $booking->is_cancel=1;
        $booking->save();

        return response()->json($booking);
    }

    // Hiển thị các booking schedule đã bị hủy
    public function show_cancel_booking() {
        $booking = Booking::where('is_cancel',1)->get();
        return response()->json($booking);
    }


    public function accept_booking() {

    }

    // hiển thị lịch sử booking của id_customer,
    public function show_booking_photographer($id_photographer) {

        $booking = DB::table('booking')
            ->where('booking.id_photographer',$id_photographer)    
            ->join('user','booking.id_customer', '=', 'user.id')
            ->join('combo', 'booking.id_combo', '=', 'combo.id')
            ->join('voucher','booking.id_voucher','=','voucher.id')
            ->select('booking.id','user.first_name as customer_name','combo.name_style','voucher.code','booking.start_time','booking.time_booking','booking.price','booking.booking_status','booking.is_finish','booking.booking_address')
            ->get();

        return response()->json(['count'=>count($booking),'data'=>$booking],200);
    }


    // hiển thị lích sử booking của id_photographer
    public function show_booking_customer($id_customer) {
        $booking = DB::table('booking')
            ->where('booking.id_customer',$id_customer)    
            ->join('user','booking.id_customer', '=', 'user.id')
            ->join('combo', 'booking.id_combo', '=', 'combo.id')
            ->join('voucher','booking.id_voucher','=','voucher.id')
            ->select('booking.id','user.first_name as photographer_name','combo.name_style','voucher.code','booking.start_time','booking.time_booking','booking.price','booking.booking_status','booking.is_finish','booking.booking_address')
            ->get();

        return response()->json(['count'=>count($booking),'data'=>$booking],200);
    }


    
}
