<?php

namespace App\Http\Controllers;

use App\Models\articale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticalController extends Controller
{
    public function list()
    {
        $articales = articale::all();
        return view('listArticale', ['articales' => $articales]);
    }

    public function create()
    {
        return view('Articales');
    }

    public function save(Request $request)
    {
        $articale = new articale;
        $articale->name = $request->name;
        $articale->Details = $request->Details;
        $articale->save();
        return redirect('/articales');
    }

    public function updateShow($id)
    { 
        $articale = DB::table('articales')->where('id', $id)->first();
    
        return view('updateArticale',['articale'=>$articale ]);
    }

    public function Update(Request $request){
       
        $articale=DB::table('articales')
                    ->where('id',$request->id)
                    ->update(['name'=>$request->name] , ['Details'=>$request->details]);
       

        return redirect()->route( 'articale.list' );
    }

    public function Delete($id){
        $articale=articale::find($id);
        $articale->delete();
        return redirect('/articales');

    }
}
