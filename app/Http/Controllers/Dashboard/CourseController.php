<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view course', ['only' => ['index']]);
        $this->middleware('permission:create course', ['only' => ['create','store']]);
        $this->middleware('permission:update course', ['only' => ['update','edit']]);
        $this->middleware('permission:delete course', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $courses = Course::get();
            return view('dashboard.course.index', ['courses' => $courses]);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', "Request Failed:" . $th->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $categories = Category::get();
            return view('dashboard.course.create', ['categories' => $categories]);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', "Request Failed:" . $th->getMessage());
        }
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
