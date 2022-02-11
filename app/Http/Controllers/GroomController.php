<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class GroomController extends Controller
{
    public function groomList()
    {
       $grooms=DB::table('groom')->get();
       return view('groom_list',['groom'=>$grooms]);
    }

    public function addGroomView()
    {
        return view('/add_groom');
    }
    public function addGroom(Request $request)
    {
        $groom_name=$request->groom_name;
        $groom_surname=$request->groom_surname;
        DB::table('groom')->insert(
            [
                'groom_name'=>$groom_name,
                'groom_surname'=>$groom_surname,
            ]
        );
        return redirect('grooms');
    }
    public function deleteGroom($idgr)
    {
        DB::delete('delete from groom where id=?',[$idgr]);
        return redirect('/grooms');
    }

}
