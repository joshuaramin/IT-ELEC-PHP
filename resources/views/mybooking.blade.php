<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-weight:400; font-family: 'Baskerville';">
                {{ __('My Booking')}}
            </h2>

            <a href="/" style="text-decoration: none; color: #D4BA50; font-weight: 600; font-size: 15px;">
              Customer's View
            </a>
          </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-9 lg:px-11" style="max-width: 68rem;">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="border: 2px solid #4d4642;">
                <h1 style="text-align: center; border-bottom: 2px solid #4d4642; font-family: 'Baskerville';
                font-weight:500; height: 50px; font-size: 25px; display: flex; align-items: center; justify-content: center; color: #D4BA50;">
                    Booked Auditoriums
                </h1>
                <table class="table"  style="border-collapse: separate; border-spacing: 10px;">
                    <thead>
                      <tr>
                        <th scope="col" style="text-align: center;">#</th>
                        <th scope="col" style="text-align: center;">Auditorium Image</th>
                        <th scope="col" style="text-align: center;">Auditorium Name</th>
                        <th scope="col" style="text-align: center;">Desired Date</th>
                        <th scope="col" style="text-align: center;">Time Start</th>
                        <th scope="col" style="text-align: center;">Time End</th>
                        <th scope="col" style="text-align: center;">Type of Event</th>
                        <th scope="col" style="text-align: center;">Notes</th>
                        <th scope="col" style="text-align: center;">Status</th>
                        <th scope="col" style="text-align: center;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                        <tr>
                            <th style="text-align: center;">{{ $booking['id'] }}</th>
                            <td><img src="{{ asset($booking['image']) }}" style="width:70px; height:auto; margin: 0 auto; display: block;"></td>
                            <td style="text-align: center;">{{ $booking->auditorium->name  }}</td>
                            <td style="text-align: center;">{{ $booking['desiredTime'] }}</td>
                            <td style="text-align: center;">{{ $booking['start_time'] }}</td>
                            <td style="text-align: center;">{{ $booking['end_time'] }}</td>
                            <td style="text-align: center;">{{ $booking['event'] }}</td>
                            <td style="text-align: center;">{{ $booking['notes'] }}</td>
                            <td style="text-align: center;">{{ $booking['status'] }}</td>
                            <td style="text-align: center;">
                               <div style="display: flex; justify-content: center; align-items: center;">
                                    <a href="{{ route('showBooking', $booking->id) }}" type="button" class="btn btn-primary" style="background-color:#78ade4; border: none; padding: 5px 10px; border-radius: 10px;">
                                        View
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</x-app-layout>
