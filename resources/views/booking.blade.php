<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-weight:400; font-family: 'Baskerville';">
                {{ __('Booking')}}
            </h2>

            <a href="/" style="text-decoration: none; color: #D4BA50; font-weight: 600; font-size: 15px;">
              AUDITho Website
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
                        @foreach ($bookings as $book)
                        <tr>

                            <th style="text-align: center;">{{ $book['id'] }}</th>
                            <td><img src="{{  asset('storage/' . $book->auditorium->image) }}" style="width:70px; height:auto; margin: 0 auto; display: block;"></td>
                            <td style="text-align: center;">{{ $book->auditorium->name  }}</td>
                            <td style="text-align: center;">{{ $book['desiredTime'] }}</td>
                            <td style="text-align: center;">{{ $book['start_time'] }}</td>
                            <td style="text-align: center;">{{ $book['end_time'] }}</td>
                            <td style="text-align: center;">{{ $book['event'] }}</td>
                            <td style="text-align: center;">{{ $book['notes'] }}</td>
                            <td style="text-align: center;">{{ $book['status'] }}</td>
                            <td style="text-align: center;">
                               <div style="display: flex; justify-content: center; align-items: center;">
                                    <a href="{{ route('showBooking', $book['id']) }}" type="button" class="btn btn-primary" style="background-color:#78ade4; border: none; padding: 5px 10px; border-radius: 10px;">
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
