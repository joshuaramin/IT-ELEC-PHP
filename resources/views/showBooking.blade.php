<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">

                @if(Auth::check() && Auth::user()->role ==="users")
                     <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-weight:400; font-family: 'Baskerville';">
                        {{ __('My Booking') }}
                    </h2>
                @endif
                @if(Auth::check() && Auth::user()->role === 'admins')
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-weight:400; font-family: 'Baskerville';">
                        {{ __('Booking') }}
                    </h2>
                    <a href="/" style="text-decoration: none; color: #D4BA50; font-weight: 600; font-size: 15px;">
                        Customer's View
                    </a>
                @endif

          </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="border: 2px solid #4d4642;">
                <h1 style="text-align: center; border-bottom: 2px solid #4d4642; font-family: 'Baskerville';
                font-weight:500; height: 50px; font-size: 25px; display: flex; align-items: center; justify-content: center; color: #D4BA50;">
                    Booked Auditorium Info
                </h1>

                <form method="POST">
                    @csrf
                    @method("PUT")
                    <div class="form-group" style="padding: 10px 50px 20px; display: flex; flex-direction: column; align-items: center;">
                        <label for="uploadAudi" class="form-label" style="padding-bottom: 15px; font-weight:bolder; font-size: 17px;">
                            Auditorium Image
                        </label>
                      <img src={{ asset('storage/' .  $bookings->auditorium->image)}} alt="Auditorium Image" style="width:50%; height:auto; display:block; margin:auto; filter: drop-shadow(0px 0px 4px #4d4642); padding-bottom: 20px;">
                    </div>

                    <div class="form-group" style="padding: 10px 50px 20px;">
                        <label for="inputAudi" class="col-sm-2 col-form-label" style="padding-bottom: 5px; font-weight:bolder; font-size: 17px;">
                            Auditorium Name
                        </label>
                      <div>
                        <input readonly type="text" class="form-control" id="inputAudi" placeholder="Auditorium Name" value="{{ $bookings->auditorium->name }}"  style="font-size: 17px; width: 95%; border-radius: 10px;">
                      </div>
                    </div>

                    <div class="form-group" style="padding: 10px 50px 20px;">
                        <label for="datePicker" class="col-sm-2 col-form-label" style="padding-bottom: 5px; font-weight:bolder; font-size: 17px;">
                            Desired Date
                        </label>
                        <div >
                            <input readonly class="form-control" id="datePicker" value="{{ $bookings['desiredTime'] }}"  style="font-size: 17px; width: 95%; border-radius: 10px;"/>
                        </div>
                    </div>

                    <div class="form-group" style="padding: 10px 50px 20px;">
                        <label for="datePicker" class="col-sm-2 col-form-label" style="padding-bottom: 5px; font-weight:bolder; font-size: 17px;">
                            Time Start
                        </label>
                        <div >
                            <input readonly class="form-control" id="datePicker" value="{{ $bookings['start_time'] }}"  style="font-size: 17px; width: 95%; border-radius: 10px;"/>
                        </div>
                    </div>

                    <div class="form-group" style="padding: 10px 50px 20px;">
                        <label for="datePicker" class="col-sm-2 col-form-label" style="padding-bottom: 5px; font-weight:bolder; font-size: 17px;">
                            Time End
                        </label>
                        <div >
                            <input readonly class="form-control" id="datePicker" value="{{ $bookings['end_time'] }}" style="font-size: 17px; width: 95%; border-radius: 10px;"/>
                        </div>
                    </div>

                    <div class="form-group" style="padding: 10px 50px 20px;">
                        <label for="inputAudi" class="col-sm-2 col-form-label" style="padding-bottom: 5px; font-weight:bolder; font-size: 17px;">
                            Type of Event
                        </label>
                      <div>
                        <input readonly type="text" class="form-control" id="inputTOE" placeholder="Type of Event" value="{{ $bookings['event'] }}" style="font-size: 17px; width: 95%; border-radius: 10px;">
                      </div>
                    </div>

                    <div class="form-group" style="padding: 10px 50px 20px;">
                        <label for="inputAudi" class="col-sm-2 col-form-label" style="padding-bottom: 5px; font-weight:bolder; font-size: 17px;">
                            Notes
                        </label>
                      <div>
                        <textarea readonly type="text" rows="7" class="form-control" id="inputNotes" placeholder="Notes"
                        style="font-size: 17px; width: 95%; border-radius: 10px; resize:none; ">{{ $bookings['notes'] }}
                        </textarea>
                      </div>
                    </div>

                    <div class="form-group" style="padding: 10px 50px 20px;">
                            <label for="inputStatus" class="col-sm-2 col-form-label" style="padding-bottom: 5px; font-weight:bolder; font-size: 17px;">
                        Status
                        </label>
                        <div>
                            <select id="inputStat" name="status" class="form-control" style="font-size: 17px; width: 95%; border-radius: 10px;">
                                <option value="pending" {{ $bookings['status'] === 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="confirmed" {{ $bookings['status'] === 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                <option value="cancelled" {{ $bookings['status'] === 'canceled' ? 'selected' : '' }}>Canceled</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" style="padding: 10px 50px 20px;">
                        <a href="{{ route('booking') }}" type="submit" class="btn btn-primary"
                        style="font-size: 20px; width:10%; background-color:#eaaa51; border:#eaaa51; display:block; margin:auto; padding: 5px 10px; text-align: center; border-radius: 10px;">
                            Back
                        </a>
                    </div>

                        @if(Auth::check() && Auth::user()->role ==="admins")
                        <div class="form-group" style="padding: 10px 50px 20px;">
                            <button style="width: 120px; font-size: 20px;  background-color:#eaaa51; border:#eaaa51; margin:auto; padding: 10px 15px; text-align: center; border-radius: 10px;">Update</button>
                        </div>
                        @endif

                  </form>
            </div>
        </div>
    </div>
</x-app-layout>
