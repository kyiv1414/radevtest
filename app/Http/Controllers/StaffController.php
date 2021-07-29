<?php

namespace App\Http\Controllers;

use App\Staff;
use Request;
use View;
use Session;
use Redirect;
use Validator;


class StaffController extends Controller
{

    public function index()
    {
        $staff = Staff::paginate(3);
        return view('staff.index', [
            'staff' => $staff,
        ]);

    }


    public function create()
    {
        return view('staff.create');
    }

    public function store()
    {

        $rules = array(
            'first_name'       => 'required',
            'last_name'       => 'required',
            'email'      => 'required|email',
            'phone' => 'required',
            'school_id' => 'required'
        );
        $validator = Validator::make(Request::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('staff/create')
                ->withErrors($validator);
            //->withInput(Input::except('password'));
        } else {

            $newStaff = Staff::create([
                'first_name' => Request::get('first_name'),
                'last_name' => Request::get('last_name'),
                'email' => Request::get('email'),
                'phone' => Request::get('phone'),
                'school_id' => Request::get('school_id'),

            ]);
        }



        return redirect('staff/' . $newStaff->id);
    }


    public function show(Staff $staff)
    {
        return view('staff.show', [
            'staff' => $staff,
        ]);
    }


    public function edit($id)
    {
        $staff = Staff::find($id);

        return View::make('staff.edit')
            ->with('staff', $staff);
    }

    public function update($id)
    {
        $staff = staff::find($id);
        $staff->first_name = Request::get('first_name');
        $staff->last_name = Request::get('last_name');
        $staff->email = Request::get('email');
        $staff->phone = Request::get('phone');
        $staff->school_id = Request::get('school_id');
        $staff->save();

        return Redirect::to('staff');

    }


    public function destroy(Staff $staff)
    {
        $staff->delete();

        return redirect('staff/');
    }
}
