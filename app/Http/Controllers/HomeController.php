<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index(){

        return view('domowa');
    }
    public function horseListPublic()
    {
        $horses=
            DB::table('horse')
                ->leftJoin('breed','horse.idb','=','breed.id')
                ->leftJoin('gender','horse.idg','=','gender.id')
                ->leftJoin('groom','horse.idgr','=','groom.id')
                ->get();
        return view('domowa',['horse'=>$horses,]);
    }
    public function loginStatus()
    {
        if(auth()->check())
        {
            $user=auth()->user();
            Auth::logout();
            return view('wylogowano');
        }
        else
        {
            return redirect('/login');
        }
    }
}
