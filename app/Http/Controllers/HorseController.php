<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HorseController extends Controller
{
   public function horseList()
   {
       $horses=
           DB::table('horse')
           ->leftJoin('breed','horse.idb','=','breed.id')
           ->leftJoin('gender','horse.idg','=','gender.id')
           ->leftJoin('groom','horse.idgr','=','groom.id')
           ->get();
       return view('horse_list',['horses'=>$horses,]);
   }

   public function addHorseView()
   {
       $breed=DB::table('breed')->get();
       $gender=DB::table('gender')->get();
       $groom=DB::table('groom')->get();
       return view('add_horse',['breed'=>$breed,'gender'=>$gender,'groom'=>$groom]);
   }
   public function addHorse(Request $request)
   {
       $horsename=$request->horsename;
       $age=$request->age;
       $breed_id=$request->breed_id;
       $gender_id=$request->gender_id;
       $groom_id=$request->groom_id;
       DB::table('horse')->insert(
           [
               'name'=>$horsename,
               'age'=>$age,
               'idb'=>intval($breed_id),
               'idg'=>intval($gender_id),
               'idgr'=>intval($groom_id),
           ]
       );
       return redirect('/horses');
   }

   public function deleteHorse($name)
   {
       DB::delete('delete from horse where name=?',[$name]);
       return redirect('/horses');
   }


}
