<?php

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

Route::get('/', [
    'uses'=>'IndexController@getIndex',
    'as'=>'store.index'
]);

Route::get('/danh-muc', [
    'uses'=>'CategoryController@getCategorys',
    'as'=>'store.categoryIndex'
]);

Route::get('/danh-muc/{category}', [
    'uses'=>'ProductController@getProductsByCategory',
    'as'=>'store.category'
]);

Route::get('/san-pham/{product}', [
    'uses'=>'ProductController@show',
    'as'=>'store.product'
]);

Route::post('/san-pham/{product}/them-vao-gio-hang', [
    'uses'=>'CartController@addToCart',
    'as'=>'store.cartAdd'
]);

Route::post('/san-pham/{id}/cap-nhap-so-luong', [
    'uses'=>'CartController@editItem',
    'as'=>'store.cartEdit'
]);

Route::get('/san-pham/{id}/xoa-khoi-gio-hang', [
    'uses'=>'CartController@removeItem',
    'as'=>'store.cartRemove'
]);

Route::get('/tin-tuc/loai-tin/{newsCategory}', [
    'uses'=>'NewsController@getNewsByCategory',
    'as'=>'store.newsCategory'
]);

Route::get('/tin-tuc/{news}', [
    'uses'=>'NewsController@show',
    'as'=>'store.news'
]);

Route::get('/gioi-thieu', [
    'uses'=>'StaticPageController@about',
    'as'=>'store.about'
]);

Route::get('/huong-dan-mua-hang', [
    'uses'=>'StaticPageController@instruction',
    'as'=>'store.instruction'
]);

Route::get('/lien-he', [
    'uses'=>'StaticPageController@contact',
    'as'=>'store.contact'
]);

Route::get('/gio-hang', [
    'uses'=>'CartController@cartIndex',
    'as'=>'store.cart'
]);

Route::get('/gio-hang/dat-hang', [
    'uses'=>'CartController@checkOut',
    'as'=>'store.checkOut'
]);

Route::post('/gio-hang/dat-hang', [
    'uses'=>'CartController@placeOrder',
    'as'=>'store.cartPlaceOrder'
]);

//Start Admin CP
Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){
    Route::get('/',[
        'uses'=>'AdminController@getIndex',
        'as'=>'admin.index'
    ]);

    // Start Product
    Route::get('/product',[
        'uses'=>'ProductController@getProductIndex',
        'as'=>'admin.productIndex'
    ]);

    Route::get('/product/category/{category_id}',[
        'uses'=>'ProductController@getProductByCategoryAdmin',
        'as'=>'admin.productByCategory'
    ]);

    Route::get('/product/search',[
        'uses'=>'ProductController@search',
        'as'=>'admin.productPostSearch'
    ]);


    Route::get('/product/create',[
        'uses'=>'ProductController@create',
        'as'=>'admin.productCreate'
    ]);

    Route::post('/product/create',[
        'uses'=>'ProductController@store',
        'as'=>'admin.productStore'
    ]);

    Route::get('/product/{id}/edit',[
        'uses'=>'ProductController@edit',
        'as'=>'admin.productEdit'
    ]);
    Route::post('/product/{id}/edit',[
        'uses'=>'ProductController@update',
        'as'=>'admin.productUpdate'
    ]);
    Route::get('/product/{id}/delete',[
        'uses'=>'ProductController@delete',
        'as'=>'admin.productDelete'
    ]);
    // End Product

    // Start Category
    Route::get('/category',[
        'uses'=>'CategoryController@getCategorytIndex',
        'as'=>'admin.categoryIndex'
    ]);

    Route::get('/category/create',[
        'uses'=>'CategoryController@create',
        'as'=>'admin.categoryCreate'
    ]);

    Route::post('/category/create',[
        'uses'=>'CategoryController@store',
        'as'=>'admin.categoryStore'
    ]);

    Route::get('/category/{id}/edit',[
        'uses'=>'CategoryController@edit',
        'as'=>'admin.categoryEdit'
    ]);
    Route::post('/category/{id}/edit',[
        'uses'=>'CategoryController@update',
        'as'=>'admin.categoryUpdate'
    ]);
    Route::get('/category/{id}/delete',[
        'uses'=>'CategoryController@delete',
        'as'=>'admin.categoryDelete'
    ]);
    // End Category

    //Start Order
    Route::get('/order',[
        'uses'=>'OrderController@orderIndex',
        'as'=>'admin.orderIndex'
    ]);

    Route::get('/order/state/{state}',[
        'uses'=>'OrderController@getOrdersByState',
        'as'=>'admin.orderByState'
    ]);

    Route::get('/order-detail/{order_id}',[
        'uses'=>'OrderDetailController@show',
        'as'=>'admin.orderDetail'
    ]);

    Route::post('/order/{id}/edit',[
        'uses'=>'OrderController@update',
        'as'=>'admin.orderUpdate'
    ]);
    //End Order

    //Start News
    Route::get('/news',[
        'uses'=>'NewsController@newsIndex',
        'as'=>'admin.newsIndex'
    ]);

    Route::get('/news/create',[
        'uses'=>'NewsController@create',
        'as'=>'admin.newsCreate'
    ]);

    Route::post('/news/create',[
        'uses'=>'NewsController@store',
        'as'=>'admin.newsStore'
    ]);

    Route::get('/news/{id}/edit',[
        'uses'=>'NewsController@edit',
        'as'=>'admin.newsEdit'
    ]);

    Route::post('/news/{id}/edit',[
        'uses'=>'NewsController@update',
        'as'=>'admin.newsUpdate'
    ]);

    Route::get('/news/{id}/delete',[
        'uses'=>'NewsController@delete',
        'as'=>'admin.newsDelete'
    ]);

    Route::get('/news/category/{category_id}',[
        'uses'=>'NewsController@getNewsByCategoryAdmin',
        'as'=>'admin.newsByCategory'
    ]);
    //End News

    //Start Slider
    Route::get('/slider',[
        'uses'=>'SliderController@getSliderIndex',
        'as'=>'admin.sliderIndex'
    ]);

    Route::get('/slider/create',[
        'uses'=>'SliderController@create',
        'as'=>'admin.sliderCreate'
    ]);

    Route::post('/slider/create',[
        'uses'=>'SliderController@store',
        'as'=>'admin.sliderStore'
    ]);

    Route::get('/slider/{id}/edit',[
        'uses'=>'SliderController@edit',
        'as'=>'admin.sliderEdit'
    ]);

    Route::post('/slider/{id}/edit',[
        'uses'=>'SliderController@update',
        'as'=>'admin.sliderUpdate'
    ]);

    Route::get('/slider/{id}/delete',[
        'uses'=>'SliderController@delete',
        'as'=>'admin.sliderDelete'
    ]);
    //End Slider

    //Start About Page
    Route::get('/about/edit',[
        'uses'=>'StaticPageController@aboutEdit',
        'as'=>'admin.aboutEdit'
    ]);
    Route::post('/about/edit',[
        'uses'=>'StaticPageController@aboutUpdate',
        'as'=>'admin.aboutUpdate'
    ]);
    //End About Page

    //Start Instruction Page
    Route::get('/instruction/edit',[
        'uses'=>'StaticPageController@instructionEdit',
        'as'=>'admin.instructionEdit'
    ]);
    Route::post('/instruction/edit',[
        'uses'=>'StaticPageController@instructionUpdate',
        'as'=>'admin.instructionUpdate'
    ]);
    //End Instruction Page

    //Start Contact Page
    Route::get('/contact/edit',[
        'uses'=>'StaticPageController@contactEdit',
        'as'=>'admin.contactEdit'
    ]);
    Route::post('/contact/edit',[
        'uses'=>'StaticPageController@contactUpdate',
        'as'=>'admin.contactUpdate'
    ]);
    //End COntact Page

    //Change Password
    Route::get('/change-password',[
        'uses'=>'AdminController@showChangePasswordForm',
        'as'=>'admin.changePassword'
    ]);

    Route::post('/change-password',[
        'uses'=>'AdminController@changePassword',
        'as'=>'admin.changePassword'
    ]);
    //End Change Password

});
//End Admin CP

Route::get('/login',[
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
]);

Route::post('/login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@login'
]);

Route::post('/logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
]);