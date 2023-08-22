<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NoteController extends Controller
{
    public function showHome(){
        // $users=DB::table('noteapps')->select('id','title','content')->get();
        $users=DB::table('noteapps')->simplePaginate(4);
        return view("welcome",['data'=>$users]);
        
    }

    public function showData(string $id){
        $users=DB::table('noteapps')->where('id',$id)->get();
        return view("show",['data'=>$users]);
    }

    // public function showData(){
    //    $data = DB::table('noteapps')->get();
    // }
    public function addData(Request $req){
            //  return view("add");
        //    return  $req->all();

       $data = DB::table('noteapps')->insert([
        'title'=>$req->title,
        'content'=>$req->desc,
        'created_at'=>now(),
        'updated_at'=>now(),
       ]);
       if ($data) {
        return redirect()->route('home');
     }
    }
    public function updateData(Request $req,$id){
            // return $req;
       $data = DB::table('noteapps')
                ->where('id',$id)
                ->update([
                        'title'=>$req->title,
                        'content'=>$req->desc
                ]);
                if ($data) {
                    return redirect()->route('home');
                 }
    }

    public function updatepage(string $id){
        $users=DB::table('noteapps')->find($id);
        // return $users;
        return view("update",['data'=>$users]);
    }

    public function deleteData(string $id){
       $data = DB::table('noteapps')
                ->where('id',$id)
                ->delete();
                if ($data) {
                   return redirect()->route('home');
                }
         
    }
}
