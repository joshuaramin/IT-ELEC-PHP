<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-weight:400; font-family: 'Baskerville';">
                {{ __('Edit Auditorium')}}
            </h2>

            <a href="/" style="text-decoration: none; color: #D4BA50; font-weight: 600; font-size: 15px;">
              Customer's View
            </a>
          </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="border: 2px solid #4d4642;">
                <h1 style="text-align: center; border-bottom: 2px solid #4d4642; font-family: 'Baskerville';
                font-weight:500; height: 50px; font-size: 25px; display: flex; align-items: center; justify-content: center; color: #D4BA50;">
                    Auditorium Details
                </h1>

                <form method="POST" action="{{ route("auditorium.update", $auditorium->id)}}">
                    @csrf
                    @method("PUT")
                    <div class="form-group" style="padding: 10px 50px 20px; display: flex; flex-direction: column; align-items: center;">
                        <label for="uploadAudi" class="form-label" style="padding-bottom: 15px; font-weight:bolder; font-size: 17px;">
                            Auditorium Image
                        </label>
                      <img src="{{  asset('storage/' . $auditorium->image) }}" alt="Auditorium Image" style="width:50%; height:auto; display:block; margin:auto; filter: drop-shadow(0px 0px 4px #4d4642); padding-bottom: 20px;">
                    </div>

                    <div class="form-group" style="padding: 10px 50px 20px;">
                        <label for="inputAudi" class="col-sm-2 col-form-label" style="padding-bottom: 5px; font-weight:bolder; font-size: 17px;">
                            Auditorium Name
                        </label>
                      <div>
                        <input type="text" class="form-control" id="name" placeholder="Auditorium Name" name="name" value="{{old("name", $auditorium->name)}}" style="font-size: 17px; width: 95%; border-radius: 10px;">
                      </div>
                    </div>

                    <div class="form-group" style="padding: 10px 50px 20px;">
                        <label for="inputDesc" class="col-sm-2 col-form-label" style="padding-bottom: 5px; font-weight:bolder; font-size: 17px;">
                            Description
                        </label>
                      <div>
                        <textarea rows="7" type="text" class="form-control" id="description" name="description" placeholder="Description"
                        style="font-size: 17px; width: 95%; border-radius: 10px; resize:none;" value="{{old("description", $auditorium->description)}}">
                        </textarea>
                      </div>
                    </div>

                    <div class="form-group" style="padding: 10px 50px 20px;">
                        <label for="inputLoc" class="col-sm-2 col-form-label" style="padding-bottom: 5px; font-weight:bolder; font-size: 17px;">
                            Location
                        </label>
                      <div>
                        <input type="text" class="form-control" id="location" placeholder="Location" name="location" value="{{old("location", $auditorium->location)}}" style="font-size: 17px; width: 95%; border-radius: 10px;">
                      </div>
                    </div>

                    <div class="form-group" style="padding: 10px 50px 20px;">
                        <label for="inputCap" class="col-sm-2 col-form-label" style="padding-bottom: 5px; font-weight:bolder; font-size: 17px;">
                            Capacity
                        </label>
                      <div>
                        <input type="text" class="form-control" id="capacity" name="capacity" placeholder="Capacity" value="{{old("capacity", $auditorium->capacity)}}" style="font-size: 17px; width: 95%; border-radius: 10px;">
                      </div>
                    </div>

                    <div class="form-group" style="padding: 10px 50px 20px;">
                        <label for="inputStrt" class="col-sm-2 col-form-label" style="padding-bottom: 5px; font-weight:bolder; font-size: 17px;">
                            Street
                        </label>
                      <div>
                        <input type="text" class="form-control" id="street" name="street" placeholder="Street" {{--value="{{ $auditorium['street'] }}"--}} value="{{old("street", $auditorium->street)}} "style="font-size: 17px; width: 95%; border-radius: 10px;">
                      </div>
                    </div>

                    <div class="form-group" style="padding: 10px 50px 30px; display:flex; flex-direction: row; align-items: center; justify-content: space-evenly;">
                        <div>
                            <button style="width: 120px; font-size: 20px;  background-color:#eaaa51; border:#eaaa51; margin:auto; padding: 10px 15px; text-align: center; border-radius: 10px;">Update</button>
                        </div>
                      <div>
                        <a href="{{ route('auditorium.index') }}" type="submit" class="btn btn-primary"
                        style="font-size: 20px; width:10%; background-color:#969593; border:#969593; margin:auto; padding: 10px 15px; text-align: center; border-radius: 10px;">
                            Back
                        </a>
                      </div>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</x-app-layout>
