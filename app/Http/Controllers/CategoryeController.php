<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use F9Web\ApiResponseHelpers;


    /**
     * @param string $item The todo item being updated.
     */


class CategoryeController extends Controller
{

    use ApiResponseHelpers;

    public function index()
    {
        $categories = Category::all();
        if (!$categories) {
            return $this->respondError("Categories Not Found");
        }
        return $this->apiResponse([$categories, "OK", 200]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'quantity' => 'nullable|integer',
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }
        $addCategories = Category::create([
            'name' => $request->name,
            'quantity' => $request->quantity,
        ]);
        return $this->respondOk("New Category Inserted");
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $category =  Category::find($id);
        if (!$category) {
            return $this->respondError("Can Not Found Categorey");
        }
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $category = Category::find($request->id);
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        } 
        if (!$category) {
            return $this->respondError("Can Not Found Categorey");
        }
        $category->update($request->all());
        return $this->respondOk("Category Edited");
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
    public function destroy(Request $request)/* !!!!! */
    {
        //
        $category = Category::find($request->id);
        if (!$category) {
            return $this->respondError("Can Not Found Categorey");
        }
        $category->delete();
        return $this->respondOk("Category Deleted");
    }
}
