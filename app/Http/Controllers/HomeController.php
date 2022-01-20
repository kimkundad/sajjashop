<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\contact;
use App\quotation;
use App\subscribe;
use App\product;
use App\mycategory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

      $recom = DB::table('products')->select(
        'products.*',
        'products.id as id_p',
        'products.created_at as create',
        'products.status as statusp',
        'brands.*',
        'categories.*'
        )
        ->leftjoin('brands', 'brands.id',  'products.ban')
        ->leftjoin('categories', 'categories.id',  'products.cat')
        ->where('products.status', 1)
        ->where('products.recommend', 1)
        ->Orderby('products.id', 'desc')
        ->limit(8)
        ->get();
        $data['recom'] = $recom;


        $hit = DB::table('products')->select(
          'products.*',
          'products.id as id_p',
          'products.created_at as create',
          'products.status as statusp',
          'brands.*',
          'categories.*'
          )
          ->leftjoin('brands', 'brands.id',  'products.ban')
          ->leftjoin('categories', 'categories.id',  'products.cat')
          ->where('products.status', 1)
          ->where('products.hit', 1)
          ->Orderby('products.id', 'desc')
          ->limit(8)
          ->get();
          $data['hit'] = $hit;

      $ban = DB::table('brands')
                ->where('status', 1)
                ->Orderby('sort', 'asc')
                ->get();

        $data['ban'] = $ban;

        $slide = DB::table('slides')
                ->where('status', 1)
                ->Orderby('id', 'desc')
                ->get();

        $data['slide'] = $slide;

        return view('welcome', $data);
    }


    public function modal($id){
      $objs = product::find($id);
      $data['objs'] = $objs;
      return view('modal', $data);
    }

    public function get_category(Request $request){
     // dd($request->brand);
     if($request->brand != null){
      $brand = explode(",", $request->brand);
     }else{
      $brand = null;
     }
     
    // dd($brand);

     $ban = DB::table('brands')
                ->where('status', 1)
                ->Orderby('sort', 'asc')
                ->get();

                if(isset($ban)){
                  foreach($ban as $u){

                    $sum = DB::table('products')
                      ->where('products.status', 1)
                      ->where('products.ban', $u->id)
                      ->count();
                      $u->count = $sum;
                  }
                }

        $data['ban'] = $ban;
              
        $sort = $request->sort;
       // dd($sort);

        if($sort == 0){
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
            ->where('products.status', 1)
            ->where('categories.id', $request->id)
            ->Orderby('products.id', 'desc')
            ->paginate(24);

            if($brand != null){

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
                ->where('products.status', 1)
                ->where('categories.id', $request->id)
                ->whereIn('brands.id', $brand)
                ->Orderby('products.id', 'desc')
                ->paginate(24);
              
            }
         
        }
        if($sort == 1){
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
            ->where('products.status', 1)
            ->where('categories.id', $request->id)
            ->Orderby('products.price', 'asc')
            ->paginate(24);

            if($brand != null){

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
                ->where('products.status', 1)
                ->where('categories.id', $request->id)
                ->whereIn('brands.id', $brand)
                ->Orderby('products.price', 'asc')
                ->paginate(24);
              
            }
        }
        if($sort == 2){
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
            ->where('products.status', 1)
            ->where('categories.id', $request->id)
            ->Orderby('products.price', 'desc')
            ->paginate(24);


            if($brand != null){

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
                ->where('products.status', 1)
                ->where('categories.id', $request->id)
                ->whereIn('brands.id', $brand)
                ->Orderby('products.price', 'desc')
                ->paginate(24);
              
            }

            
        }

        
          $data['objs'] = $objs;
          $data['id'] = $request->id;
          $data['sort'] = $sort;
          $data['brand'] = $brand;
        //  dd($brand);

      return view('get_category', $data);


    }

    public function product_file($id){

      $objs = product::find($id);

      $file= public_path(). 'img/pdf_product/'.$objs->price_image;

      return response::download($file);
    }


    public function mycategories(Request $request){


      $secret=env('reCAPTCHA');

      $captcha = "";
      if (isset($request["g-recaptcha-response"]))
      $captcha = $request["g-recaptcha-response"];

      $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$captcha."&remoteip=".$_SERVER["REMOTE_ADDR"]), true);

    if($response["success"] == false) {


        return response()->json([
          'data' => [
            'status' => 100,
            'msg' => 'This user was not verified by recaptcha_1.'
          ]
        ]);

      }else{
      
      $this->validate($request, [
        'modal_name' => 'required',
        'modal_phone' => 'required',
        'modal_email' => 'required'
      ]);

      $package = new mycategory();
      $package->name = $request['modal_name'];
      $package->phone = $request['modal_phone'];
      $package->email = $request['modal_email'];
      $package->text1 = $request['modal_id'];
      $package->save();

      $id = $request['modal_id'];

      $objs = product::find($id);


      $details = [
        'title' => $objs->name,
        'fname' => $request['modal_name'],
        'image' => $objs->image,
        'url' => url('/img/pdf_product/'.$objs->price_image)
    ];

   // dd($details);
   
    \Mail::to(Auth::user()->email)->send(new \App\Mail\Regismail($details));

      return response()->json([
        'status' => 200
      ]);

    }

    }

    public function category(Request $request){

      if($request->brand != null){
        $brand = explode(",", $request->brand);
       }else{
        $brand = null;
       }
     

      $ban = DB::table('brands')
                ->where('status', 1)
                ->Orderby('sort', 'asc')
                ->get();

                if(isset($ban)){
                  foreach($ban as $u){

                    $sum = DB::table('products')
                      ->where('products.status', 1)
                      ->where('products.ban', $u->id)
                      ->count();
                      $u->count = $sum;
                  }
                }

        $data['ban'] = $ban;
        $sort = $request->sort;

        if($sort == 0){
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
            ->where('products.status', 1)
            ->Orderby('products.id', 'desc')
            ->paginate(24);

            if($brand != null){

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
                ->where('products.status', 1)
                ->whereIn('brands.id', $brand)
                ->Orderby('products.id', 'desc')
                ->paginate(24);
              
            }
         
        }

        if($sort == 1){
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
            ->where('products.status', 1)
            ->Orderby('products.price', 'asc')
            ->paginate(24);

            if($brand != null){

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
                ->where('products.status', 1)
                ->whereIn('brands.id', $brand)
                ->Orderby('products.price', 'asc')
                ->paginate(24);
              
            }
        }
        if($sort == 2){
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
            ->where('products.status', 1)
            ->Orderby('products.price', 'desc')
            ->paginate(24);


            if($brand != null){

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
                ->where('products.status', 1)
                ->whereIn('brands.id', $brand)
                ->Orderby('products.price', 'desc')
                ->paginate(24);
              
            }

            
        }

       



          $data['objs'] = $objs;
          $data['brand'] = $brand;
          $data['sort'] = $sort;
          $data['id'] = 0;

      return view('category', $data);
    }

    public function payment_option(){

      $bank = DB::table('banks')
        ->where('status', 1)
        ->get();

        $data['bank'] = $bank;
      return view('payment_option', $data);

    }


    public function recommend(){

      $recom = DB::table('products')->select(
        'products.*',
        'products.id as id_p',
        'products.created_at as create',
        'products.status as statusp',
        'brands.*',
        'categories.*'
        )
        ->leftjoin('brands', 'brands.id',  'products.ban')
        ->leftjoin('categories', 'categories.id',  'products.cat')
        ->where('products.status', 1)
        ->where('products.recommend', 1)
        ->Orderby('products.id', 'desc')
        ->paginate(24);
        $data['recom'] = $recom;


      return view('recommend', $data);
    }


    public function new_product(){

      $recom = DB::table('products')->select(
        'products.*',
        'products.id as id_p',
        'products.created_at as create',
        'products.status as statusp',
        'brands.*',
        'categories.*'
        )
        ->leftjoin('brands', 'brands.id',  'products.ban')
        ->leftjoin('categories', 'categories.id',  'products.cat')
        ->where('products.status', 1)
        ->where('products.hit', 1)
        ->Orderby('products.id', 'desc')
        ->paginate(24);
        $data['recom'] = $recom;


      return view('new_product', $data);
    }

    public function search(Request $request){

      $search = $request->search;

      $recom = DB::table('products')->select(
        'products.*',
        'products.id as id_p',
        'products.created_at as create',
        'products.status as statusp',
        'brands.*',
        'categories.*'
        )
        ->leftjoin('brands', 'brands.id',  'products.ban')
        ->leftjoin('categories', 'categories.id',  'products.cat')
        ->where('products.status', 1)
        ->orWhere('products.name', 'LIKE', "%{$search}%")
        ->orWhere('products.detail', 'LIKE', "%{$search}%")
        ->Orderby('products.id', 'desc')
        ->paginate(24);

        $data['recom'] = $recom;
        $data['search'] = $search;

      return view('search', $data);
    }

    public function blogs(){

                $blog = DB::table('blogs')->select(
                  'blogs.*',
                  'blogs.id as id_b',
                  'blogs.created_at as create',
                  'blogs.status as statused',
                  'cat_blogs.*'
                  )
                  ->leftjoin('cat_blogs', 'cat_blogs.id',  'blogs.type')
                  ->where('blogs.status', 1)
                  ->Orderby('blogs.id', 'desc')
                  ->paginate(8);

        $data['blog'] = $blog;

        return view('blogs', $data);
    }

    public function blog_detail($id){

      $blog = DB::table('blogs')->select(
        'blogs.*',
        'blogs.id as id_b',
        'blogs.created_at as create',
        'blogs.status as statused',
        'cat_blogs.*'
        )
        ->leftjoin('cat_blogs', 'cat_blogs.id',  'blogs.type')
        ->where('blogs.id', $id)
        ->Orderby('blogs.id', 'desc')
        ->first();

          $data['blog'] = $blog;



          return view('blog_detail', $data);

    }

    public function subscribe(Request $request){

      $email = $request['email'];
  
      $count = DB::table('subscribes')
        ->where('email', $email)
        ->count();
  
        if($count > 0){
  
          return response()->json([
                  'data' => [
                    'status' => 100,
                    'msg' => 'อีเมล ของคุณอยู่ในระบบอยู่แล้ว'
                  ]
                ]);
  
        }else{
  
  
          $package = new subscribe();
          $package->email = $request['email'];
          $package->save();
  
          return response()->json([
                  'data' => [
                    'status' => 200,
                    'msg' => 'ขอบคุณที่ร่วมเป็นส่วนหนึ่งกับเรา เราจะทำการส่งโปรโมชั่น ใหม่ๆ ไปให้ท่านทางอีเมล'
                  ]
                ]);
  
  
        }
  
      }


    public function add_quotation(Request $request){

        $secret=env('reCAPTCHA');

      $captcha = "";
      if (isset($request["g-recaptcha-response"]))
      $captcha = $request["g-recaptcha-response"];

      $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$captcha."&remoteip=".$_SERVER["REMOTE_ADDR"]), true);

    if($response["success"] == false) {


        return response()->json([
          'data' => [
            'status' => 100,
            'msg' => 'This user was not verified by recaptcha_1.'
          ]
        ]);

      }else{

        
        $package = new quotation();
        $package->name = $request['name'];
        $package->phone = $request['phone'];
        $package->subject = $request['subject'];
        $package->email = $request['email'];
        $package->line = $request['line'];
        $package->type = $request['type'];
        $package->detail = $request['detail'];
        $package->save();

        $message = "ขอใบเสนอราคา ".$request['name'].", ".$request['phone'].", ".$request['email'].", ".$request['subject'].", ข้อความ : ".$request['detail'];
        $lineapi = env('line_token');

        $mms =  trim($message);
        $chOne = curl_init();
        curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
        curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($chOne, CURLOPT_POST, 1);
        curl_setopt($chOne, CURLOPT_POSTFIELDS, "message=$mms");
        curl_setopt($chOne, CURLOPT_FOLLOWLOCATION, 1);
        $headers = array('Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$lineapi.'',);
        curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($chOne);
        if(curl_error($chOne)){
        echo 'error:' . curl_error($chOne);
        }else{
        $result_ = json_decode($result, true);
    //    echo "status : ".$result_['status'];
    //    echo "message : ". $result_['message'];
        }
        curl_close($chOne);

        return response()->json([
            'data' => [
              'status' => 200,
              'msg' => 'This user is verified by recaptcha.'
            ]
        ]);
        
      }

    }


    public function add_contact(Request $request){
        
      $secret=env('reCAPTCHA');

      $captcha = "";
      if (isset($request["g-recaptcha-response"]))
      $captcha = $request["g-recaptcha-response"];

      $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$captcha."&remoteip=".$_SERVER["REMOTE_ADDR"]), true);

    if($response["success"] == false) {


        return response()->json([
          'data' => [
            'status' => 100,
            'msg' => 'This user was not verified by recaptcha_1.'
          ]
        ]);

      }else{

        $package = new contact();
        $package->name = $request['name'];
        $package->phone = $request['phone'];
        $package->subject = $request['subject'];
        $package->detail = $request['detail'];
        $package->save();

        $message = "ข้อความจากหน้าติดต่อ ".$request['name'].", ".$request['phone'].", ".$request['subject'].", ข้อความ : ".$request['detail'];
        $lineapi = env('line_token');
        

        $mms =  trim($message);
        $chOne = curl_init();
        curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
        curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($chOne, CURLOPT_POST, 1);
        curl_setopt($chOne, CURLOPT_POSTFIELDS, "message=$mms");
        curl_setopt($chOne, CURLOPT_FOLLOWLOCATION, 1);
        $headers = array('Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$lineapi.'',);
        curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($chOne);
        if(curl_error($chOne)){
        echo 'error:' . curl_error($chOne);
        }else{
        $result_ = json_decode($result, true);
    //    echo "status : ".$result_['status'];
    //    echo "message : ". $result_['message'];
        }
        curl_close($chOne);

        return response()->json([
            'data' => [
              'status' => 200,
              'msg' => 'This user is verified by recaptcha.'
            ]
          ]);
            }
    }
}
