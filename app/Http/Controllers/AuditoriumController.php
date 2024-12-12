<?php

namespace App\Http\Controllers;

use App\Models\Auditorium;
use Illuminate\Http\Request;

class AuditoriumController extends Controller
{

    public function index()
    {

        $auditorium = Auditorium::all();

        return view("", ['auditorium' => $auditorium]);
    }
    public function auditorium()
    {
        $auditorium = Auditorium::paginate(20);

        return view("admin-post", ['auditorium' => $auditorium]);
    }
    public function create()
    {
        return view("");
    }

    public function show($id)
    {

        $auditorium = Auditorium::find($id);

        if (!$auditorium) {
            dd("No record");
        }
        return view("");
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|100',
            'capacity' => 'required|min:1',
            'location' => 'required|200',
            'description' => 'max:500'
        ]);


        $auditorium = new Auditorium([
            'title' => $request->title,
            'capacity' => $request->capacity,
            'location' => $request->location,
            'description' => $request->description,
            'user_id' => $request->user()->id
        ]);


        $auditorium->save();
    }

    public function edit($id)
    {
        $auditorium = Auditorium::find($id);

        if (!$auditorium) {
            dd("No Record");
        }
    }

    public function update(Request $request, $id)
    {
        $auditorium = Auditorium::findOrFail($id);
        $auditorium->$request->input("title");
        $auditorium->$request->input("capacity");
        $auditorium->$request->input("location");
        $auditorium->description->input("description");

        $auditorium->save();

        return redirect("/")->with("success", "Audtorium successfully updated");
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

        return redirect("/")->with("success", "Auditorium Successfully deleted");
    }
}
