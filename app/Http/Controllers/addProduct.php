<?php

namespace App\Http\Controllers;

use App\Models\Product;
use DB;
use Illuminate\Http\Request;
class addProduct extends Controller{
    public function getProduct(Request $request){
       DB::table('Product')->insert([
        'title' => $request->product,
        'price' => $request->price
       ]);
     return redirect('viewProduct');
        // $data = new Product;
        // $data ->title=  $request->product;
        // $data->save();
        // return redirect('viewProduct');
    }
    
    public function viewProduct(){
            //lay du lieu tu database
            $result['info']= DB::table('Product')->get()->toArray();
            // $result['info'] = Product::all()->toArray();
            return view('pages/viewProduct',$result);
            
          }

    public function deleteProduct(Request $request){
         DB::table('Product')->where('id',$request->id)->delete();
        //Product::find($request->id)->delete();
        return redirect('viewProduct');
    }

    public function editProduct(Request $request){
        $result['info']= DB::table('Product')->where('id',$request->id)->get()->toArray();
        // $result['info'] = Product::find($request->id)->toArray();
         return view('pages/editProduct',$result);
         
    }
    public function updateProduct(Request $request){
        DB::table('Product')->where('id',$request->id)->update([
            'title' => $request->product,
            'price' => $request->price
        ]);
        // $data =  Product::find($request->id);
        // $data->title = $request->product;
        // $data->save();

        return redirect('viewProduct');
    }
}
