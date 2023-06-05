<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\danhmuc;
class addCategory extends Controller{
    public function getCategory(Request $request){
    //    DB::table('danhmuc')->insert([
    //     'Cat_name' => $request->category
    //    ]);
    //  return redirect('viewCategory');
        $data = new danhmuc;
        $data ->Cat_name=  $request->category;
        $data->save();
        return redirect('viewCategory');
    }
    
    public function viewCategory(){
            //lay du lieu tu database
            // $result['info']= DB::table('danhmuc')->get()->toArray();
            $result['info'] = danhmuc::all()->toArray();
            return view ('pages/viewCategory',$result);
          }

    public function deleteCategory(Request $request){
        // DB::table('danhmuc')->where('id',$request->id)->delete();
        danhmuc::find($request->id)->delete();
        return redirect('viewCategory');
    }

    public function editCategory(Request $request){
         //$result['info']= DB::table('danhmuc')->where('id',$request->id)->get()->toArray();
         $result['info'] = danhmuc::find($request->id)->toArray();
         return view('pages/editCategory',$result);
         
    }
    public function updateCategory(Request $request){
        $data =  danhmuc::find($request->id);
        $data->Cat_name = $request->category;
        $data->save();

        return redirect('viewCategory');
    }
}
