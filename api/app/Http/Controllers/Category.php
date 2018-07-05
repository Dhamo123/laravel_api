<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Contracts\Auth\Authenticatable ;
//use Illuminate\Support\Facades\Session;
//use Session;

class Category extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $request)
    {
        
    	//$result = DB::table('category')->join('product','category.id', '=','product.pro_id' )->select(['category.id','product.pro_id','product.cat_id','product.product_name','category.name'])->groupBy('product.pro_id')->orderby('product.pro_id','desc')->get();
        $result = DB::table('category')->get();
        //dd(DB::getQueryLog());
        return view('welcome')->with('data',$result);
        //dd($result);
    }

    // public function post_category(Request $request)
    // {
    //     $result = DB::table('category')->insert($request->all());
    // }

    // public function put_category(Request $request)
    // {
    //     $result = DB::table('category')
    //     ->where('id', $request->id)
    //     ->limit(1)  
    //     ->update($request->all());
    // }
    // public function delete_category(Request $request)
    // {
    //     $result = DB::table('category')
    //     ->where('id', $request->id)  
    //     ->delete();
    // }

    public function get_category($id)
    {

        $result = DB::table('category')->where('id',$id)->first();
        return view('edit_category')->with('category',$result);
        
    }
     public function add_category(Request $request)
    {
        $this->validate($request,[
                'category_name' => 'required',
                
            ]);
        $data['name']=$request->category_name;
        $result = DB::table('category')->insert($data);
        return redirect('/category')->with('success','Category inserted successfully..!');
        
    }
    public function post_category_data(Request $request)
    {
        if(!empty($request->segment(2))){
            $this->validate($request,[
                'category_name' => 'required',
                
            ]);
            $data['name']=$request->category_name;

            $result = DB::table('category')
            ->where('id', $request->segment(2))
            ->limit(1)  
            ->update($data);
         //Session::flash('msg', 'update successfully');
        //return back()->with('success','Item created successfully!');
         return redirect('/category')->with('success','Category updated successfully..!');
        }
        elseif(empty($request->segment(2))){
            return view('add_category');
        }
       
    }
    public function del_category(Request $request)
    {
        $result = DB::table('category')
        ->where('id', $request->segment(2))  
        ->delete();
        return redirect('/category')->with('success','Category deleted successfully..!');
    }
}
