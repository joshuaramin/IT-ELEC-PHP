<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-weight:400; font-family: 'Baskerville';">
                {{ __('Auditorium')}}
            </h2>
    
            <a href="/" style="text-decoration: none; color: #D4BA50; font-weight: 600; font-size: 15px;">
              Customer's View
            </a>
          </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-9 lg:px-11" style="max-width: 67rem;">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="border: 2px solid #4d4642;">
                <h1 style="text-align: center; border-bottom: 2px solid #4d4642; font-family: 'Baskerville'; 
                font-weight:500; height: 50px; font-size: 25px; display: flex; align-items: center; justify-content: center; color: #D4BA50;">
                    <span style="position: relative; display: inline-block;">
                        <span style="position: absolute; left: 50%; bottom: -40%; transform: translateX(-50%); color: #D4BA50; font-weight: 500;">Auditoriums</span>
                        <a href="{{route('addAudi')}}" style="position: relative; left: 355px; top: 2px;">
                            <img src="{{ asset('images/add.png') }}" alt="Add Album" style="height: 20px; width: auto;">
                        </a>
                    </span>
                </h1>
                <table class="table"  style="border-collapse: separate; border-spacing: 10px;">
                    <thead>
                      <tr>
                        <th scope="col" style="text-align: center; padding: 5px;">#</th>
                        <th scope="col" style="text-align: center; padding: 5px;">Auditorium Image</th>
                        <th scope="col" style="text-align: center; padding: 5px;">Auditorium Name</th>
                        <th scope="col" style="text-align: center; padding: 5px;">Description</th>
                        <th scope="col" style="text-align: center; padding: 5px;">Location</th>
                        <th scope="col" style="text-align: center; padding: 5px;">Capacity</th>
                        <th scope="col" style="text-align: center; padding: 5px;">Street</th>
                        <th scope="col" style="text-align: center; padding: 5px;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($auditoriums as $auditorium)
                        <tr>
                            <th style="text-align: center;">{{ $auditorium['id'] }}</th>
                            <td><img src="{{ asset($bookinh['image']) }}" style="width:70px; height:auto; margin: 0 auto; display: block;"></td>
                            <td style="text-align: center; padding: 5px;">{{ $auditorium['auditoriumName'] }}</td>
                            <td style="text-align: center; padding: 5px;">{{ $auditorium['audiDesc'] }}</td>
                            <td style="text-align: center; padding: 5px;">{{ $auditorium['location'] }}</td>
                            <td style="text-align: center; padding: 5px;">{{ $auditorium['capacity'] }}</td>
                            <td style="text-align: center; padding: 5px;">{{ $auditorium['street'] }}</td>
                            <td style="text-align: center; padding: 5px;">
                               <div style="display: flex; justify-content: center; align-items: center;">
                                    <a href="{{ route('editAudi', $auditorium['id']) }}" type="button" class="btn btn-primary" style="background-color:#eaaa51; border: none; padding: 5px 10px; border-radius: 10px;">
                                        Edit
                                    </a>
                                    <a href="{{ route('viewAudi', $auditorium['id']) }}" type="button" class="btn btn-primary" style="background-color:#78ade4; border: none; padding: 5px 10px; border-radius: 10px;">
                                        View
                                    </a>
                                    <form action="{{ route('deleteLetter', $auditorium['id']) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" style="background-color:red; border:red; padding: 5px 10px; border-radius: 10px;">
                                        Delete
                                    </button>
                                     </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach --}}

                        
                        <tr>
                            <th style="text-align: center;">1</th>
                            <td><img src="{{ asset('images/about.png') }}" style="width:70px; height:auto; margin: 0 auto; display: block;"></td>
                            <td style="text-align: center; padding: 5px;">Medicine Auditorium</td>
                            <td style="text-align: center; padding: 5px;">Blah Blah Blah</td>
                            <td style="text-align: center; padding: 5px;">UST Med Building</td>
                            <td style="text-align: center; padding: 5px;">1200</td>
                            <td style="text-align: center; padding: 5px;">Dapitan</td>
                            <td style="text-align: center; padding: 5px;">
                                <div style="display: flex; justify-content: center; align-items: center;">
                                    <a href="{{ route('editAudi')}}" type="button" class="btn btn-primary" style="background-color:#eaaa51; border: none; padding: 5px 10px; border-radius: 10px; margin-right: 5px;">
                                        Edit
                                    </a>
                                    <a href="{{ route('viewAudi')}}" type="button" class="btn btn-primary" style="background-color:#78ade4; border: none; padding: 5px 10px; border-radius: 10px; margin-right: 5px;">
                                        View
                                    </a>
                                    <form action="" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" style="background-color:red; border:red; padding: 5px 10px; border-radius: 10px;">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</x-app-layout>
