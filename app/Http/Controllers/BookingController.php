<?php

namespace App\Http\Controllers;

use App\Models\Auditorium;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index() {}


    public function bookForm($id)
    {
        $booking = Auditorium::find($id);

        if (!$booking) {
            dd("No Record");
        }

        return view("bookingForm", compact("booking"));
    }
    public function booking(Request $request)
    {
        $booking = Booking::where("user_id", $request->user()->id)->with("user")->paginate(20);

        return view("booking", ['booking', $booking]);
    }
    public function edit($id)
    {
        $bookings = Booking::find($id);

        if (!$bookings) {
            dd("There are no records");
        }
    }
    public function store(Request $request, $id)
    {
        $request->validate([
            'desiredTime' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'event' => 'required',
            'notes' => 'required|max:300',
        ]);

        $booking = new Booking([
            'desiredTime' => $request->desiredTime,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'auditoriums_id' => $id,
            'event' => $request->event,
            'notes' => $request->notes,
            'user_id' => Auth::id()

        ]);

        $booking->save();

        return redirect()->route("auditorium.show", $id)->with("success", "Booking created successfully");
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
