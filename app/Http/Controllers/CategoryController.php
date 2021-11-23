<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use App\category;
use Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $objs = DB::table('categories')
                ->Orderby('id', 'desc')
                ->paginate(15);

                if(isset($objs)){
                    foreach($objs as $u){
                       $pro = DB::table('products')
                        ->where('cat', $u->id)
                        ->count();
                        $u->count = $pro;
                    }
                }

        $data['objs'] = $objs;
        return view('admin.category.index', $data);
    }

    public function category_status(Request $request){

        //  dd($request->all());
    
          $user = category::findOrFail($request->user_id);
    
                  if($user->status == 1){
                      $user->status = 0;
                  } else {
                      $user->status = 1;
                  }
    
          return response()->json([
          'data' => [
            'success' => $user->save(),
          ]
        ]);
    
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['method'] = "post";
        $data['url'] = url('admin/category');
        return view('admin.category.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name_cat' => 'required',
        ]);

      $package = new category();
      $package->name_cat = $request['name_cat'];
      $package->save();

      return redirect(url('admin/category/'))->with('add_success','คุณทำการเพิ่มอสังหา สำเร็จ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $objs = category::find($id);

        $data['url'] = url('admin/category/'.$id);
        $data['method'] = "put";
        $data['objs'] = $objs;
        return view('admin.category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'name_cat' => 'required'
        ]);
          
       
            $package = category::find($id);
            $package->name_cat = $request['name_cat'];
            $package->save();
          
          
          return redirect(url('admin/category/'))->with('edit_success','คุณทำการเพิ่มอสังหา สำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function del_category($id)
    {
        //
    
            DB::table('categories')->where('id', $id)->delete();
     
       return redirect(url('admin/category'))->with('del_success','คุณทำการเพิ่มอสังหา สำเร็จ');
    }
}
