<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index() {}

    public function booking(Request $request)
    {
        $booking = Booking::where("user_id", $request->user()->id)->with("user")->paginate(20);

        return view("booking", ['booking', $booking]);
    }
    public function create()
    {
        return view("");
    }
    public function edit($id)
    {
        $bookings = Booking::find($id);

        if (!$bookings) {
            dd("There are no records");
        }
    }
    public function store(Request $request)
    {

        $request->validate([
            'start_time' => 'required|',
            'end_time' => 'required|',
            'auditorium_id' => 'required'
        ]);

        $booking = new Booking([
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'auditorium_id' => $request->auditorium_id,
            'user_id' => $request->user()->id

        ]);

        $booking->save();
    }
    public function update(Request $request, $id) {}
    public function delete()
    {
        return view("delete_booking");
    }
    public function destroy($id)
    {

        $booking = Booking::find($id);
        $booking->delete();

        return redirect("/")->with("success", "Booking deleted successfully");
    }
}
