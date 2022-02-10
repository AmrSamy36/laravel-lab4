<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function list()
    {
        $categories = category::all();
        return view('listCategory', ['categories' => $categories]);
    }

    public function create()
    {
        return view('categories');
    }

    public function save(Request $request)
    {
        $category = new category;
        $category->name = $request->name;
        $category->save();
        return redirect('/categories');
    }

    public function updateShow($id)
    { 
        $category = DB::table('categories')->where('id', $id)->first();
    
        return view('updateCategory',['category'=>$category ]);
    }

    public function Update(Request $request){
        // $update=category::find($id);
        // $update->name = $request->name;
        //  $update->save();
        $category=DB::table('categories')
                    ->where('id',$request->id)
                    ->update(['name'=>$request->name]);
       

        return redirect()->route( 'categories.list' );
    }

    public function Delete($id){
        $category=category::find($id);
        $category->delete();
        
        
        // $category=DB::table('categories')
        //             ->where('id', '=' , $id)
        //             ->delete();    
        return redirect('/categories');

    }
}
