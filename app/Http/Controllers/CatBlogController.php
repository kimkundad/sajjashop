<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use App\cat_blog;
use Auth;

class CatBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objs = DB::table('cat_blogs')
                ->Orderby('id', 'desc')
                ->paginate(15);

        $data['objs'] = $objs;
        return view('admin.blog_cat.index', $data);
    }

    public function blog_cat_status(Request $request){

        //  dd($request->all());
    
          $user = cat_blog::findOrFail($request->user_id);
    
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
        $data['url'] = url('admin/blog_cat');
        return view('admin.blog_cat.create', $data);
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
            'title_cat' => 'required',
        ]);

      $package = new cat_blog();
      $package->title_cat = $request['title_cat'];
      $package->save();

      return redirect(url('admin/blog_cat/'))->with('add_success','คุณทำการเพิ่มอสังหา สำเร็จ');
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
        $objs = cat_blog::find($id);

        $data['url'] = url('admin/blog_cat/'.$id);
        $data['method'] = "put";
        $data['objs'] = $objs;
        return view('admin.blog_cat.edit', $data);
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
            'title_cat' => 'required'
        ]);
          
          if($id != 1){
            $package = cat_blog::find($id);
            $package->title_cat = $request['title_cat'];
            $package->save();
          }
          
          return redirect(url('admin/blog_cat/'))->with('edit_success','คุณทำการเพิ่มอสังหา สำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function del_blog_cat($id)
    {
        //
        if($id != 1){
             DB::table('cat_blogs')->where('id', $id)->delete();
             DB::table('blogs')
              ->where('type', $id)
              ->update(['type' => 1]);
        }
        return redirect(url('admin/blog_cat'))->with('del_success','คุณทำการเพิ่มอสังหา สำเร็จ');
    }
}
