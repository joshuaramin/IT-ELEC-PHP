<?php

namespace App\Http\Controllers;

use App\Models\Auditorium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuditoriumController extends Controller
{

    public function index()
    {
        $auditoriums = Auditorium::paginate(20);
        return view("showAudi", ['auditoriums' => $auditoriums]);
    }
    // public function auditorium()
    // {
    //     $auditoriums = Auditorium::paginate(20);
    //     return view("auditorium", ['auditoriums' => $auditoriums]);
    // }

    public function welcome()
    {
        $auditoriums = Auditorium::paginate(20);

        return view("welcome", ['auditoriums' => $auditoriums]);
    }
    public function auditoriumshow($id)
    {
        $auditorium = Auditorium::find($id);

        if (!$auditorium) {
            dd("No record");
        }
        return view("bookAudi", compact("auditorium"));
    }


    public function create()
    {
        return view("addAudi");
    }


    public function show($id)
    {

        $auditorium = Auditorium::find($id);

        if (!$auditorium) {
            dd("No record");
        }
        return view("viewAudi", compact("auditorium"));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:1|max:100',
            'capacity' => 'required|integer|min:1',
            'location' => 'required|string|max:200',
            'description' => 'nullable|string|max:500',
            'street' => 'required|string|min:1|max:100',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048|required'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('auditoriums', 'public');
        }

        $auditorium = new Auditorium([
            'name' => $request->title,
            'capacity' => $request->capacity,
            'location' => $request->location,
            'description' => $request->description,
            'street' => $request->street,
            'user_id' => Auth::id(),
            'image' => $imagePath,
        ]);

        $auditorium->save();

        return redirect()->route("auditorium.index")->with("success", "Auditorium created successfully");
    }

    public function edit($id)
    {
        $auditorium = Auditorium::find($id);

        if (!$auditorium) {
            dd("No Record");
        }

        return view("editAudi", compact('auditorium'));
    }
    public function update(Request $request, $id)
    {
        // Find the auditorium by its ID
        $auditorium = Auditorium::findOrFail($id);

        if (!$auditorium) {
            return dd("No record");
        }

        $request->validate([
            'name' => 'required|string|max:100',
            'capacity' => 'required|integer|min:1',
            'location' => 'required|string|max:200',
            'description' => 'nullable|string|max:500',
            'street' => 'required|string|max:255'
        ]);

        $auditorium->name = $request->input('name');
        $auditorium->capacity = $request->input('capacity');
        $auditorium->location = $request->input('location');
        $auditorium->description = $request->input('description');
        $auditorium->street = $request->input('street');

        $auditorium->save();

        return redirect("/auditorium/showAudi")->with("success", "Auditorium successfully updated");
    }

    public function delete($id)
    {
        $auditorium = Auditorium::find($id);

        if (!$auditorium) {
            dd("No record");
        }
    }

    public function destroy($id)
    {
        $auditorium = Auditorium::find($id);
        $auditorium->delete();

        return redirect("/auditorium/showAudi")->with("success", "Auditorium Successfully deleted");
    }
}
