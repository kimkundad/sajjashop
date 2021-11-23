<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index(){

        $blog = DB::table('blogs')
                ->count();
        $data['blog'] = $blog;

        $products = DB::table('products')
                ->count();
        $data['products'] = $products;

        $qq = DB::table('quotations')
                ->count();
        $data['qq'] = $qq;

        $sum = DB::table('products')
                ->sum('view');
        $data['sum'] = $sum;

        $sub = DB::table('subscribes')
                ->Orderby('id', 'desc')
                ->paginate(15);
        $data['sub'] = $sub;

        $sub2 = DB::table('subscribes')
                ->count();
        $data['sub2'] = $sub2;

        $load = DB::table('mycategories')
                ->count();
        $data['load'] = $load;



        return view('admin.dashboard.index', $data);
    }

    public function pro_download(){

        $sub2 = DB::table('mycategories')->select(
                'mycategories.*',
                'mycategories.created_at as create',
                'mycategories.status as statusp',
                'products.*',
                'products.name as name_p',
                'products.id as id_p',
                'brands.*',
                'categories.*'
                )
                ->leftjoin('products', 'products.id',  'mycategories.text1')
                ->leftjoin('brands', 'brands.id',  'products.ban')
                ->leftjoin('categories', 'categories.id',  'products.cat')
                ->Orderby('mycategories.id', 'desc')
                ->paginate(10);

        $data['sub2'] = $sub2;

        return view('admin.dashboard.pro_download', $data);
    }
}
