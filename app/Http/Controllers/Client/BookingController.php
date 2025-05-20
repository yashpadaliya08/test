<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Car;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('car')->get();
        return view('client.my_bookings', compact('bookings'));
    }

    // public function show($id)
    // {
    //     $booking = Booking::with('car')->findOrFail($id);
    //     return view('admin.bookings.show', compact('booking'));
    // }
    public function store(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        Booking::create([
            'car_id' => $request->car_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        return redirect()->route('mybookings')->with('success', 'Booking successful!');
    }
}
