<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {}
    public function GetMyBookings(Request $request)
    {

        $booking = Booking::where("user_id", $request->user()->id)->with(["user", "auditorium"])->paginate(20);

        return view("mybooking", ['bookings' => $booking]);
    }
    public function GetBookingId($id)
    {

        $booking = Booking::find($id);

        return view("mybooking", compact("booking"));
    }
}
