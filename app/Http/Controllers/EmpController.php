<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpController extends Controller
{
    /*
      Display a listing of the resource.
     */
    public function index()
    {
        //
        // echo "hello";
        $employees = Employee::all();

        return view('home');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    
    {   
        
        $request->validate(['name' => 'required',
        'work' => 'required',
        'age' => 'required',
        'salary' => 'required',
        'image' => 'required|mimes:jpeg,jpg,png,gif|max:1000']);
        
        $imagename= time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$imagename);
        // echo ($imagename);  
        //    dd($request->all());
        $empdata = new Employee;
        $empdata->name = $request->name;
        $empdata->work = $request->work;
        $empdata->age = $request->age;
        $empdata->salary = $request->salary;
        $empdata->image = $imagename;

       
        $empdata->save();
        // $empdata = Employee::create($request->all());
        return view('home');
    }

    /**
     * Display the specified resource.  
     */
    public function show(Employee $employee)
    {
        $employees = Employee::all();

        // return response()->json(['Employeedata' => $employees]); api code
        return view('details', ['employees' =>$employees ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $employee = Employee::where('id',$id)->first();
       return view('update', ['employee' => $employee ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required',
        'work' => 'required',
        'age' => 'required',
        'salary' => 'required',
        'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:1000']);
    //    dd($request->all());

    $empdata = Employee::where('id',$id)->first();
    
    if(isset($request->image)){
        $imagename= time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$imagename);
        $empdata->image = $imagename;
    }
        $empdata->name = $request->name;
        $empdata->work = $request->work;
        $empdata->age = $request->age;
        $empdata->salary = $request->salary;

       
        $empdata->save();
    
        return back()->withSucess('Details updates Sucessfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $emp = Employee::where('id',$id)->first();
        // // dd($employee);
        if($emp != NULL){

            $emp->delete();
            
        }
        return back();
    }
}
