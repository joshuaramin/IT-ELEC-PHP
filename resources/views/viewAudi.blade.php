<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-weight:400; font-family: 'Baskerville';">
                {{ __('Auditorium') }}
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
                
                <form>
                    <div class="form-group" style="padding: 10px 50px 20px; display: flex; flex-direction: column; align-items: center;">
                        <label for="uploadAudi" class="form-label" style="padding-bottom: 15px; font-weight:bolder; font-size: 17px;">
                            Auditorium Image
                        </label>
                      <img {{--src="{{ asset($auditorium['image']) }}"--}} src="{{ asset('images/about.png') }}"alt="Auditorium Image" style="width:50%; height:auto; display:block; margin:auto; filter: drop-shadow(0px 0px 4px #4d4642); padding-bottom: 20px;">
                    </div>

                    <div class="form-group" style="padding: 10px 50px 20px;">
                        <label for="inputAudi" class="col-sm-2 col-form-label" style="padding-bottom: 5px; font-weight:bolder; font-size: 17px;">
                            Auditorium Name
                        </label>
                      <div>
                        <input readonly type="text" class="form-control" id="inputAudi" placeholder="Auditorium Name" {{--value="{{ $auditorium['auditoriumName'] }}"--}} value="Medicine Auditorium" style="font-size: 17px; width: 95%; border-radius: 10px;">
                      </div>
                    </div>

                    <div class="form-group" style="padding: 10px 50px 20px;">
                        <label for="inputDesc" class="col-sm-2 col-form-label" style="padding-bottom: 5px; font-weight:bolder; font-size: 17px;">
                            Description
                        </label>
                      <div>
                        <textarea readonly type="text" rows="7" class="form-control" id="inputDesc" placeholder="Description" 
                        style="font-size: 17px; width: 95%; border-radius: 10px; resize:none;">Blah Blah Blah {{--{{ $auditorium['audiDesc'] }}--}}
                        </textarea>
                      </div>
                    </div>

                    <div class="form-group" style="padding: 10px 50px 20px;">
                        <label for="inputLoc" class="col-sm-2 col-form-label" style="padding-bottom: 5px; font-weight:bolder; font-size: 17px;">
                            Location
                        </label>
                      <div>
                        <input readonly type="text" class="form-control" id="inputLoc" placeholder="Location" {{--value="{{ $auditorium['location'] }}"--}} value="UST Med Building" style="font-size: 17px; width: 95%; border-radius: 10px;">
                      </div>
                    </div>

                    <div class="form-group" style="padding: 10px 50px 20px;">
                        <label for="inputCap" class="col-sm-2 col-form-label" style="padding-bottom: 5px; font-weight:bolder; font-size: 17px;">
                            Capacity
                        </label>
                      <div>
                        <input readonly type="text" class="form-control" id="inputCap" placeholder="Capacity" {{--value="{{ $auditorium['capacity'] }}"--}} value="1200" style="font-size: 17px; width: 95%; border-radius: 10px;">
                      </div>
                    </div>

                    <div class="form-group" style="padding: 10px 50px 20px;">
                        <label for="inputStrt" class="col-sm-2 col-form-label" style="padding-bottom: 5px; font-weight:bolder; font-size: 17px;">
                            Street
                        </label>
                      <div>
                        <input readonly type="text" class="form-control" id="inputStrt" placeholder="Street" {{--value="{{ $auditorium['street'] }}"--}} value="Dapitan" style="font-size: 17px; width: 95%; border-radius: 10px;">
                      </div>
                    </div>

                    <div class="form-group" style="padding: 10px 50px 20px;">
                      <div>
                        <a href="{{ route('showAudi') }}" type="submit" class="btn btn-primary" 
                        style="font-size: 20px; width:10%; background-color:#eaaa51; border:#eaaa51; display:block; margin:auto; padding: 5px 10px; text-align: center; border-radius: 10px;">
                            Back
                        </a>
                      </div>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</x-app-layout>
