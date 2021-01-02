<?php

namespace App\Http\Controllers;

use App\numbers;
use Illuminate\Http\Request;

class NumbersController extends Controller
{

    public function index()
    {
        $counters= numbers::all();
        return  view('counter.counter',compact('counters'));
    }





    public function edit($id)
    {
        $counters =numbers::where('id',$id)->first();
        return view('counter.edit',compact('counters'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'client' => 'required|numeric',
            'project' => 'required|numeric',
            'hours' => 'required|numeric',
            'worker' => 'required|numeric',

        ]);

        $requests = numbers::find($id);

        $requests->update([
            'client'        => $request->client,
            'project'       => $request->project,
            'hours'     => $request->hours,
            'worker'     => $request->worker,
        ]);

        return redirect('admin/counter')->with(['edit' => ' Data updated successfully ']);
    }


    public function destroy($id)
    {

    }
}
