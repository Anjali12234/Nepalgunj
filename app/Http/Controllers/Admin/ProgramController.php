<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Program\StoreProgramRequest;
use App\Http\Requests\Program\UpdateProgramRequest;
use App\Models\Program;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::latest()->paginate(10);
        return view('admin.setting.program.index',compact('programs'));
    }
    
    public function store(StoreProgramRequest $request)
    {
        Program::create($request->validated());
        Alert::success(' Program added successfully');
        return back();
    }

    public function edit( Program $program)
    {
        return view('admin.setting.program.edit',compact('program'));
    }

    public function update(UpdateProgramRequest $request, Program $program)
    {
        $program->update($request->validated());
        Alert::success('Program updated successfully');
        return redirect(route('admin.program.index'));
    }

    public function destroy( Program $program)
    {
        $program->delete();
        Alert::success('Program deleted successfully');
        return back();
    }
}
