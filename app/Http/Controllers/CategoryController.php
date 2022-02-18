<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
       
        $categories = Category::orderby('id', 'desc')->get();

        return response()->json($categories);    
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category_name' => 'required',
            'category_description' => 'required',
            'category_type' => 'required',
          
        ]);
       
        $date = date('Ymd');
        $category = new Category;
       

        $max_id = Category::max('id');
        $code = $max_id + 1;

        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->category_code = $date.'-'.$code;
        $category->category_type = $request->category_type;
        $category->del_flg =0;
        $category->save();
        return response()->json(
           
            ['success'=> true,
            'message'=>'category Successfully!'
            ]
        );
     
    }

    public function show($id)
    {
        //  $category = Category::where('category_id', $id)->firstOrFail();
       $category = Category::find($id);
        return response()->json($category);
    }

    public function update($id, Request $request)
    {
        $category = Category::find($id);
        $category->update($request->all());

        return response()->json('category updated!');
       
    
       
    }

    public function destroy($id)
    {
    //    $category= DB::table('categories')->where('category_id', $category->id);
    $category = Category::find($id);
       $category->delete();
       return response()->json('Category deleted!');
    }

}
