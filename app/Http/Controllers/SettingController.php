<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
use App\setting;
use Auth;

class SettingController extends Controller
{
    //
        public function setting(){

            $objs = DB::table('settings')
                ->Where('id', 1)
                ->first();

            $data['objs'] = $objs;
            return view('admin.setting.index', $data);

        }
        
        public function post_setting(Request $request){

            $image = $request->file('image');

            $image_1 = $request->file('image_1');
            $image_2 = $request->file('image_2');
            $image_3 = $request->file('image_3');
            $image_4 = $request->file('image_4');

            $id = 1;
            $obj = setting::find($id);
            $obj->nme_website = $request['nme_website'];
            $obj->facebook = $request['facebook'];
            $obj->facebook_url = $request['facebook_url'];
            $obj->twitter = $request['twitter'];
            $obj->facebook_title = $request['facebook_title'];
            $obj->facebook_detail = $request['facebook_detail'];
            $obj->line_oa = $request['line_oa'];
            $obj->line_oa_url = $request['line_oa_url'];
            $obj->line_token = $request['line_token'];
            $obj->phone = $request['phone'];
            $obj->email = $request['email'];
            $obj->google_analytic = $request['google_analytic'];
            $obj->address = $request['address'];
            $obj->company_time = $request['company_time']; 
            $obj->inastargram = $request['inastargram'];
            $obj->youtube = $request['youtube'];
            $obj->tiktok = $request['tiktok'];
            $obj->url_img1 = $request['url_img1'];
            $obj->url_img2 = $request['url_img2'];
            $obj->url_img3 = $request['url_img3'];
            $obj->url_img4 = $request['url_img4'];
            $obj->about = $request['about'];
            $obj->save();

           if($image != NULL){

           $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
           $img = Image::make($image->getRealPath());
           $img->resize(800, 800, function ($constraint) {
           $constraint->aspectRatio();
           })->save('img/setting/'.$input['imagename']);

            $obj = setting::find($id);
            $obj->facebook_image = $input['imagename'];
            $obj->save();

            }


            if($image_1 != NULL){
                $ran = (\random_int(1000, 9999));
                $path = 'img/setting/';
                $filename = $ran.''.time()."-".$image_1->getClientOriginalName();
                $image_1->move($path, $filename);
     
                 $obj = setting::find($id);
                 $obj->image_1 = $filename;
                 $obj->save();
                 }


                 if($image_2 != NULL){
                    $ran = (\random_int(1000, 9999));
                    $path = 'img/setting/';
                    $filename = $ran.''.time()."-".$image_2->getClientOriginalName();
                    $image_2->move($path, $filename);
         
                     $obj = setting::find($id);
                     $obj->image_2 = $filename;
                     $obj->save();
                     }


                     if($image_3 != NULL){
                        $ran = (\random_int(1000, 9999));
                        $path = 'img/setting/';
                        $filename = $ran.''.time()."-".$image_3->getClientOriginalName();
                        $image_3->move($path, $filename);
             
                         $obj = setting::find($id);
                         $obj->image_3 = $filename;
                         $obj->save();
                         }


                         if($image_4 != NULL){
                            $ran = (\random_int(1000, 9999));
                            $path = 'img/setting/';
                            $filename = $ran.''.time()."-".$image_4->getClientOriginalName();
                            $image_4->move($path, $filename);
                 
                             $obj = setting::find($id);
                             $obj->image_4 = $filename;
                             $obj->save();
                             }

            return redirect(url('admin/setting/'))->with('add_success','คุณทำการเพิ่มอสังหา สำเร็จ');

        }
        
}
