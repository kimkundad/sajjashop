<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use App\contact;
use Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $objs = DB::table('contacts')
                ->Orderby('id', 'desc')
                ->paginate(15);

        $data['objs'] = $objs;
        return view('admin.contact.index', $data);
    }

    public function contact_status(Request $request){

        //  dd($request->all());
    
          $user = contact::findOrFail($request->user_id);
    
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function del_contact($id)
    {
        //
       DB::table('contacts')->where('id', $id)->delete();
       return redirect(url('admin/contact'))->with('del_success','คุณทำการเพิ่มอสังหา สำเร็จ');
    }
}
