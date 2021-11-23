<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/recommend', 'HomeController@recommend')->name('recommend');

Route::get('/new_product', 'HomeController@new_product')->name('new_product');

Route::get('/search', 'HomeController@search')->name('search');

Route::get('/about_us', function () {
    return view('about_us');
});
Route::get('/contact_us', function () {
    return view('contact_us');
});
Route::get('/contact_price_quotation', function () {
    return view('contact_price_quotation');
});

Route::post('/api/mycategories', 'HomeController@mycategories')->name('mycategories');
Route::get('/api/product_file/{id}', 'HomeController@product_file')->name('product_file');

Route::get('/payment_option', 'HomeController@payment_option')->name('payment_option');

Route::get('/delivery', function () {
    return view('delivery');
});
Route::get('/modal/{id}', 'HomeController@modal')->name('modal');
Route::get('/blogs', 'HomeController@blogs')->name('blogs');

Route::get('/blog_detail/{id}', 'HomeController@blog_detail')->name('blog_detail');

Route::get('/category', 'HomeController@category')->name('category');

Route::get('/get_category', 'HomeController@get_category')->name('get_category');

Route::get('/terms', function () {
    return view('terms');
});
Route::get('/policy', function () {
    return view('policy');
});
Route::get('/return', function () {
    return view('return');
});

Route::post('/api/add_contact', 'HomeController@add_contact')->name('add_contact');
Route::post('/api/add_quotation', 'HomeController@add_quotation')->name('add_quotation');
Route::post('/api/subscribe', 'HomeController@subscribe')->name('subscribe');

Route::group(['middleware' => ['UserRole:manager|employee']], function() {

    Route::get('admin/dashboard', 'DashboardController@index');
    Route::get('admin/pro_download', 'DashboardController@pro_download');
 

    Route::resource('admin/blog', 'BlogController');
    Route::post('/api/upload_img', 'BlogController@upload_img')->name('home');
    Route::get('api/del_blog/{id}', 'BlogController@del_blog')->name('del_blog');
    
    Route::post('api/blog_status', 'BlogController@blog_status')->name('blog_status');

    Route::resource('admin/slide_show', 'SlideController');
    Route::post('api/slide_status', 'SlideController@slide_status')->name('slide_status');
    Route::get('api/del_slide/{id}', 'SlideController@del_slide')->name('del_slide');

    Route::get('admin/setting', 'SettingController@setting')->name('setting');
    Route::post('api/post_setting', 'SettingController@post_setting')->name('post_setting');

    Route::resource('admin/blog_cat', 'CatBlogController');
    Route::post('api/blog_cat_status', 'CatBlogController@blog_cat_status')->name('blog_cat_status');
    Route::get('api/del_blog_cat/{id}', 'CatBlogController@del_blog_cat')->name('del_blog_cat');

    Route::resource('admin/brand', 'BrandController');
    Route::post('api/brand_status', 'BrandController@brand_status')->name('brand_status');
    Route::get('api/del_brand/{id}', 'BrandController@del_brand')->name('del_brand');

    Route::resource('admin/category', 'CategoryController');
    Route::post('api/category_status', 'CategoryController@category_status')->name('category_status');
    Route::get('api/del_category/{id}', 'CategoryController@del_category')->name('del_category');

    Route::resource('admin/product', 'ProductController');
    Route::post('api/product_status', 'ProductController@product_status')->name('product_status');
    Route::get('api/del_product/{id}', 'ProductController@del_product')->name('del_product');

    Route::resource('admin/contact', 'ContactController');
    Route::post('api/contact_status', 'ContactController@contact_status')->name('contact_status');
    Route::get('api/del_contact/{id}', 'ContactController@del_contact')->name('del_contact');

    Route::resource('admin/quotation', 'QuotationController');
    Route::post('api/quotation_status', 'QuotationController@quotation_status')->name('quotation_status');
    Route::get('api/del_quotation/{id}', 'QuotationController@del_quotation')->name('del_quotation');

    Route::resource('admin/bank', 'BankController');
    Route::post('api/bank_status', 'BankController@bank_status')->name('bank_status');
    Route::get('api/del_bank/{id}', 'BankController@del_bank')->name('del_bank');


});
