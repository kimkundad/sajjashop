<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use App\brand;
use Auth;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $objs = DB::table('brands')
                ->Orderby('sort', 'asc')
                ->paginate(15);

        $data['objs'] = $objs;
        return view('admin.brand.index', $data);
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
        $data['url'] = url('admin/brand');
        return view('admin.brand.create', $data);
    }

    public function brand_status(Request $request){

        //  dd($request->all());
    
          $user = brand::findOrFail($request->user_id);
    
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $image = $request->file('image');

        $this->validate($request, [
             'image' => 'required',
             'title_brand' => 'required'
         ]);

            $path = 'img/brand/';
            $filename = time()."-".$image->getClientOriginalName();
            $image->move($path, $filename);

      $package = new brand();
      $package->title_brand = $request['title_brand'];
      $package->sort = $request['sort'];
      $package->image_brand = $filename;
      $package->save();

      return redirect(url('admin/brand/'))->with('add_success','คุณทำการเพิ่มอสังหา สำเร็จ');
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
        $objs = brand::find($id);

        $data['url'] = url('admin/brand/'.$id);
        $data['method'] = "put";
        $data['objs'] = $objs;
        return view('admin.brand.edit', $data);
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
        $image = $request->file('image');

        $this->validate($request, [
            'title_brand' => 'required'
         ]);

      $package = brand::find($id);
      $package->title_brand = $request['title_brand'];
      $package->sort = $request['sort'];
      $package->save();

      if($image != NULL){

        $objs = DB::table('brands')
               ->where('id', $id)
               ->first();

               if(isset($objs->image_brand)){
                $file_path = 'img/brand/'.$objs->image_brand;
                 unlink($file_path);
              }

            $path = 'img/brand/';
            $filename = time()."-".$image->getClientOriginalName();
            $image->move($path, $filename);

          $package = brand::find($id);
          $package->image_brand = $filename;
          $package->save();

      }
      return redirect(url('admin/brand/'))->with('edit_success','คุณทำการเพิ่มอสังหา สำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function del_brand($id)
    {
        //
        $objs = DB::table('brands')
            ->where('id', $id)
            ->first();

            if(isset($objs->image_brand)){
              $file_path = 'img/brand/'.$objs->image_brand;
               unlink($file_path);
            }
             DB::table('brands')->where('id', $id)->delete();
             return redirect(url('admin/brand'))->with('del_success','คุณทำการเพิ่มอสังหา สำเร็จ');
    }
}
