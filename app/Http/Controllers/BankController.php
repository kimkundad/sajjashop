<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use App\bank;
use Auth;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $objs = DB::table('banks')
                ->Orderby('id', 'desc')
                ->paginate(15);

        $data['objs'] = $objs;
        return view('admin.bank.index', $data);
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
        $data['url'] = url('admin/bank');
        return view('admin.bank.create', $data);
    }

    public function bank_status(Request $request){

        //  dd($request->all());
    
          $user = bank::findOrFail($request->user_id);
    
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
             'bank_name' => 'required',
             'ac_number' => 'required'
         ]);

            $path = 'img/bank/';
            $filename = time()."-".$image->getClientOriginalName();
            $image->move($path, $filename);

      $package = new bank();
      $package->bank_name = $request['bank_name'];
      $package->ac_number = $request['ac_number'];
      $package->branch = $request['branch'];
      $package->image = $filename;
      $package->save();

      return redirect(url('admin/bank/'))->with('add_success','คุณทำการเพิ่มอสังหา สำเร็จ');
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
        $objs = bank::find($id);

        $data['url'] = url('admin/bank/'.$id);
        $data['method'] = "put";
        $data['objs'] = $objs;
        return view('admin.bank.edit', $data);
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
            'bank_name' => 'required',
             'ac_number' => 'required'
         ]);


      $package = bank::find($id);
      $package->bank_name = $request['bank_name'];
      $package->ac_number = $request['ac_number'];
      $package->branch = $request['branch'];
      $package->save();

      if($image != NULL){

        $objs = DB::table('banks')
               ->where('id', $id)
               ->first();

               if(isset($objs->image)){
                $file_path = 'img/bank/'.$objs->image;
                 unlink($file_path);
              }

            $path = 'img/bank/';
            $filename = time()."-".$image->getClientOriginalName();
            $image->move($path, $filename);

          $package = bank::find($id);
          $package->image = $filename;
          $package->save();

      }
      return redirect(url('admin/bank/'))->with('edit_success','คุณทำการเพิ่มอสังหา สำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function del_bank($id)
    {
        //
        $objs = DB::table('banks')
            ->where('id', $id)
            ->first();

            if(isset($objs->image)){
              $file_path = 'img/bank/'.$objs->image;
               unlink($file_path);
            }
             DB::table('banks')->where('id', $id)->delete();
             return redirect(url('admin/bank'))->with('del_success','คุณทำการเพิ่มอสังหา สำเร็จ');
    }
}
