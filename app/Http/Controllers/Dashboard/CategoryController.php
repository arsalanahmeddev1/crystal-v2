<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view category', ['only' => ['index']]);
        $this->middleware('permission:create category', ['only' => ['create','store']]);
        $this->middleware('permission:update category', ['only' => ['update','edit']]);
        $this->middleware('permission:delete category', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $categories = Category::get();
            return view('dashboard.category.index', ['categories' => $categories]);
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
            return view('dashboard.category.create', ['categories' => $categories]);
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
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'parent_category_id' => 'nullable|exists:categories,id'
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {

            $category = new Category();
            $category->name = $request->name;
            $category->slug = Str::slug($request->name);
            $category->parent_id = $request->parent_category_id;
            // $category->status = $request->status;
            $category->save();

            return redirect()->route('dashboard.category.index')->with('success','Category created successfully');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', "Request Failed:" . $th->getMessage());
        }
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
        try {
            $category = Category::findOrFail($id);
            $categories = Category::where('id','!=',$id)->get();
            return view('dashboard.category.edit', [
                'category' => $category,
                'categories' => $categories
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', "Request Failed:" . $th->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'parent_category_id' => 'nullable|exists:categories,id'
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {

            $category = Category::findOrFail($id);
            $category->name = $request->name;
            $category->slug = Str::slug($request->name);
            $category->parent_id = $request->parent_category_id;
            // $category->status = $request->status;
            $category->save();
    
            return redirect()->route('dashboard.category.index')->with('success','Category updated successfully');

        } catch (\Throwable $th) {
            throw $th;
            return redirect()->back()->with('error', "Request Failed:" . $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $category = Category::findOrFail($id);
            $category->delete();
            return redirect()->route('dashboard.category.index')->with('success','Category deleted successfully');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', "Request Failed:" . $th->getMessage());
        }
    }
}
