<?php

namespace App\Http\Controllers;

use App\School;
use Request;
use View;
use Session;
use Redirect;
use Validator;
use Intervention\Image\ImageManagerStatic as Image;


class SchoolController extends Controller
{

    public function index()
    {
        $schools = School::paginate(3);
        return view('schools.index', [
            'schools' => $schools,
        ]);

    }


    public function create()
    {
        return view('schools.create');
    }


    public function store()
    {

        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'website' => 'required',
            'image' => 'dimensions:min_width=150,min_height=150',
        );
        $validator = Validator::make(Request::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('schools/create')
                ->withErrors($validator);
                //->withInput(Input::except('password'));
        } else {



            if (Request::file('image')->isValid()) {
                $image = Request::file('image');

                $filename = time() . '.' . $image->getClientOriginalExtension();

                Image::make($image)->resize(300, 300)->save( public_path('../storage/app/public/schools/' . $filename) );
            }

            $newSchool = School::create([
                'name' => Request::get('name'),
                'email' => Request::get('email'),
                'website' => Request::get('website'),
                'logo' => $filename,

            ]);
        }



        return redirect('schools/' . $newSchool->id);
    }


    public function show(School $school)
    {
        return view('schools.show', [
            'school' => $school,
        ]);
    }


    public function edit($id)
    {
        $school = School::find($id);

        return View::make('schools.edit')
            ->with('school', $school);
    }


    public function update($id)
    {
        $school = school::find($id);
        $school->name       = Request::get('name');
        $school->email      = Request::get('email');
        $school->website = Request::get('website');
        $school->logo = Request::get('logo');
        $school->save();

        return Redirect::to('schools');

    }


    public function destroy(School $school)
    {
        $school->delete();

        return redirect('schools/');
    }
}
