<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('car')->get();
        return view('admin.bookings.index' , compact('bookings'));
    }

    public function show($id)
    {
        $booking = Booking::with('car')->findOrFail($id);
    return view('admin.bookings.show', compact('booking'));
    }
}
