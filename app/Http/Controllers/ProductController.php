<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use App\product;
use App\brand;
use App\category;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $objs = DB::table('products')->select(
            'products.*',
            'products.id as id_p',
            'products.created_at as create',
            'products.status as statusp',
            'brands.*',
            'categories.*'
            )
            ->leftjoin('brands', 'brands.id',  'products.ban')
            ->leftjoin('categories', 'categories.id',  'products.cat')
            ->Orderby('products.id', 'desc')
            ->paginate(15);

        $data['objs'] = $objs;
        return view('admin.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ban = DB::table('brands')
                ->where('status', 1)
                ->get();
        $data['ban'] = $ban;
        $cat = DB::table('categories')
                ->where('status', 1)
                ->get();
        $data['cat'] = $cat;

        $data['method'] = "post";
        $data['url'] = url('admin/product');
        return view('admin.product.create', $data);
    }


    public function product_status(Request $request){

        //  dd($request->all());
    
          $user = product::findOrFail($request->user_id);
    
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
        $image2 = $request->file('price_image');

        $this->validate($request, [
            'name' => 'required',
            'detail' => 'required',
            'ban' => 'required',
            'cat' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'hit' => 'required',
            'recommend' => 'required',
            'image' => 'required',
            'price_image' => 'required'
        ]);

        $path2 = 'img/pdf_product/';
        $filename2 = time()."-".$image2->getClientOriginalName();
        $image2->move($path2, $filename2);

        $path = 'img/product/';
        $filename = time()."-".$image->getClientOriginalName();
        $image->move($path, $filename);

      $package = new product();
      $package->name = $request['name'];
      $package->detail = $request['detail'];
      $package->ban = $request['ban'];
      $package->image = $filename;
      $package->price_image = $filename2;
      $package->cat = $request['cat'];
      $package->price = $request['price'];
      $package->discount = $request['discount'];
      $package->hit = $request['hit'];
      $package->recommend = $request['recommend'];
      $package->stock = $request['stock'];
      $package->save();

      return redirect(url('admin/product/'))->with('add_success','คุณทำการเพิ่มอสังหา สำเร็จ');

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
        $ban = DB::table('brands')
                ->where('status', 1)
                ->get();
        $data['ban'] = $ban;
        $cat = DB::table('categories')
                ->where('status', 1)
                ->get();
        $data['cat'] = $cat;


        $objs = DB::table('products')->select(
            'products.*',
            'products.id as id_p',
            'products.created_at as create',
            'products.status as statusp',
            'brands.*',
            'categories.*'
            )
            ->leftjoin('brands', 'brands.id',  'products.ban')
            ->leftjoin('categories', 'categories.id',  'products.cat')
            ->where('products.id', $id)
            ->first();

        $data['objs'] = $objs;
        $data['method'] = "put";
        $data['url'] = url('admin/product/'.$id);
        return view('admin.product.edit', $data);
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
        $image2 = $request->file('price_image');

        $this->validate($request, [
            'name' => 'required',
            'detail' => 'required',
            'ban' => 'required',
            'cat' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'hit' => 'required',
            'recommend' => 'required'
        ]);

        if($image != NULL){

            $objs = DB::table('products')
               ->where('id', $id)
               ->first();

               if(isset($objs->image)){
                $file_path = 'img/product/'.$objs->image;
                 unlink($file_path);
              }

        $path = 'img/product/';
        $filename = time()."-".$image->getClientOriginalName();
        $image->move($path, $filename);

          $package = product::find($id);
          $package->image = $filename;
          $package->save();

        }

        if($image2 != NULL){

            $objs = DB::table('products')
               ->where('id', $id)
               ->first();

               if(isset($objs->price_image)){
                $file_path = 'img/pdf_product/'.$objs->price_image;
                 unlink($file_path);
              }

        $path2 = 'img/pdf_product/';
        $filename2 = time()."-".$image2->getClientOriginalName();
        $image2->move($path2, $filename2);

          $package = product::find($id);
          $package->price_image = $filename2;
          $package->save();
        }
    
      $package = product::find($id);
      $package->name = $request['name'];
      $package->detail = $request['detail'];
      $package->ban = $request['ban'];
      $package->cat = $request['cat'];
      $package->price = $request['price'];
      $package->discount = $request['discount'];
      $package->hit = $request['hit'];
      $package->recommend = $request['recommend'];
      $package->stock = $request['stock'];
      $package->save();

      return redirect(url('admin/product/'))->with('edit_success','คุณทำการเพิ่มอสังหา สำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function del_product($id)
    {
        //
        $objs = DB::table('products')
            ->where('id', $id)
            ->first();

            if(isset($objs->image)){
              $file_path = 'img/product/'.$objs->image;
               unlink($file_path);
            }
            if(isset($objs->price_image)){
                $file_path = 'img/pdf_product/'.$objs->price_image;
                 unlink($file_path);
              }

             DB::table('products')->where('id', $id)->delete();
             return redirect(url('admin/product'))->with('del_success','คุณทำการเพิ่มอสังหา สำเร็จ');
    }
}
