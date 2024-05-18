<?php
// controller
namespace App\Http\Controllers;

use App\Models\Position;
use App\Models\Department;

use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $position = Position::orderBy('id', 'ASC')->get();
        $departments = Department::orderBy('id', 'ASC')->select('id', 'dep_name')->get();
        return view('jobs.jobs', compact('position', 'departments'));
    }

    public function searchFilter(Request $request)
    {
        $search = $request->input('search');
        $department_id = $request->input('department_id');

        $query = Position::query();

        if ($search) {
            $query->where('job_name', 'LIKE', "%{$search}%");
        }

        if ($department_id) {
            $query->where('department_id', $department_id);
        }

        $position = $query->orderBy('id', 'ASC')->get();
        $departments = Department::orderBy('id', 'ASC')->select('id', 'dep_name')->get();

        return view('jobs.jobs', compact('position', 'departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();
        return view('jobs.create_jobs', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // code controller

    public function store(Request $request)
    {
        // التحقق من صحة البيانات
        $validatedData = $request->validate([
            'job_name' => 'required|string|max:255',
            'job_description' => 'required|string',
            'job_salaries' => 'required|numeric',
            'requierments' => 'nullable|string',
            'department_id' => 'required|exists:departments,id',
        ]);

        // إنشاء Position جديد
        $position = new Position;
        $position->job_name = $request->input('job_name');
        $position->job_description = $request->input('job_description');
        $position->job_salaries = $request->input('job_salaries');
        $position->requierments = $request->input('requierments');
        $position->department_id = $request->input('department_id');
        $position->save();

        // إعادة التوجيه إلى صفحة الوظائف مع رسالة نجاح
        return redirect()->route('jobs')->with('success', 'Position created successfully.');
    }



    public function show($id)
    {
        $position = Position::findOrFail($id);
        return view('jobs.show_jobs', compact('position'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $position = Position::findOrFail($id);
        $departments = Department::all();
        return view('jobs.edit', compact('position', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // التحقق من صحة البيانات
        $validatedData = $request->validate([
            'job_name' => 'required|string|max:255',
            'job_description' => 'required|string',
            'job_salaries' => 'required|numeric',
            'requierments' => 'nullable|string',
            'department_id' => 'required|exists:departments,id',
        ]);

        // تحديث Position موجود
        $position = Position::findOrFail($id);
        $position->job_name = $request->input('job_name');
        $position->job_description = $request->input('job_description');
        $position->job_salaries = $request->input('job_salaries');
        $position->requierments = $request->input('requierments');
        $position->department_id = $request->input('department_id');
        $position->save();

        // إعادة التوجيه إلى صفحة الوظائف مع رسالة نجاح
        return redirect()->route('jobs')->with('success', 'Position updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Position $position)
    {
        $position->delete();

        return redirect()->route('jobs')->with('success', 'Position deleted successfully.');
    }
}
