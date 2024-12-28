<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-weight:400; font-family: 'Baskerville';">
                {{ __('Auditorium')}}
            </h2>

            <a href="/" style="text-decoration: none; color: #D4BA50; font-weight: 600; font-size: 15px;">
                AUDITho Website
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-9 lg:px-11" style="max-width: 67rem;">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="border: 2px solid #4d4642;">
                <div class="border-b-2 p-4">
                    <div class="w-full flex items-center justify-between p-3">
                        <span style="color: #D4BA50; font-weight: 500; font-size: 25px; font-family: 'Baskerville'">Auditoriums</span>
                        <a href="{{route('auditorium.create')}}" style="">
                            <img src="{{ asset('images/add.png') }}" alt="Add Album" style="height: 20px; width: auto;">
                        </a>
                    </div>
                </div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" style="text-align: center; padding: 5px;">Image</th>
                        <th scope="col" style="text-align: center; padding: 5px;">Name</th>
                        <th scope="col" style="text-align: center; padding: 5px;">Location</th>
                        <th scope="col" style="text-align: center; padding: 5px;">Capacity</th>
                        <th scope="col" style="text-align: center; padding: 5px;">Street</th>
                        <th scope="col" style="text-align: center; padding: 5px;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($auditoriums as $audi)
                    <tr style="width: 100%; height: 150px;">
                        <td style="width: 300px;">
                            <img src="{{  asset('storage/' . $audi->image) }}" style="width:70px; height:auto; margin: 0 auto; display: block;">
                        </td>
                        <td style="text-align: center; padding: 5px; width: 200px;">{{ $audi->name }}</td>
                        <td style="text-align: center; padding: 5px; width: 250px;">{{ $audi->location }}</td>
                        <td style="text-align: center; padding: 5px; width: 250px;">{{ $audi->capacity }}</td>
                        <td style="text-align: center; padding: 5px; width: 250px;">{{ $audi->street }}</td>
                        <td style="text-align: center; padding: 5px; width: 250px;">
                            <div style="display: flex; justify-content: center; align-items: center; gap: 5px;">
                            <a href="{{ route('auditorium.edit', $audi->id) }}" type="button" class="btn btn-primary" style="background-color:#eaaa51; border: none; padding: 5px 10px; border-radius: 10px;">
                                    Edit
                                </a>
                                <a href="{{ route('auditorium.view', $audi->id) }}" type="button" class="btn btn-primary" style="background-color:#78ade4; border: none; padding: 5px 10px; border-radius: 10px;">
                                    View
                                </a>
                                <form action="{{ route('auditorium.delete', $audi->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" style="background-color:red; border:red; padding: 5px 10px; border-radius: 10px;">
                                        Delete
                                    </button>
                                </form>
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
