<?php

namespace App\Http\Controllers;

use App\Models\Jobanalysis;
use Illuminate\Http\Request;

class JobanalysisController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Jobanalysis $jobanalysis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jobanalysis $jobanalysis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jobanalysis $jobanalysis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jobanalysis $jobanalysis)
    {
        //
    }
}
