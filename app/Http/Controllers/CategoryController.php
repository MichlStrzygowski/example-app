<?php

namespace App\Http\Controllers;

use App\Events\CategoryCreated;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewCategoryMail;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locale = app()->getLocale();
        return Category::select('name_' . $locale . ' as name')->get();
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
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $category = (new Category())->fill($request->all());
        $category->save();
        CategoryCreated::dispatch($category);

        return response()->json([
            'message' => 'Category created successfully'
        ], 201);
    }

    /**
     * Display the specified resource.
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(string $lang, Category $category)
    {
        $locale = app()->getLocale();
        return Category::where('id', $category->id)->select('name_' . $locale . ' as name')->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->all());
        return response()->json([
            'message' => 'Category updated successfully'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        category::destroy($id);

        return response()->json([
            'message' => 'Category deleted successfully'
        ], 200);
    }
}
