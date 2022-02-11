<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BreedController extends Controller
{
    public function breedList()
    {
        $breeds=DB::table('breed')->get();
        return view('breed_list',['breed'=>$breeds]);
    }

    public function addBreedView()
    {
        return view('/add_breed');
    }
    public function addBreed(Request $request)
    {
        $breed_name=$request->breed_name;
        DB::table('breed')->insert(
            [
                'breed_name'=>$breed_name,
            ]
        );
        return redirect('breeds');
    }
    public function deleteBreed($idb)
    {
        DB::delete('delete from breed where id=?',[$idb]);
        return redirect('/breeds');
    }

}
