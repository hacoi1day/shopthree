<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Route đăng ký
 * Kiểu gửi lên POST
 */
Route::post('register', [
    'as' => 'register',
    'uses' => 'UserController@postRegisterAPI'
]);

/**
 * Route đăng nhập
 * Kiểu gửi lên POST
 */
Route::post('login', [
    'as' => 'login',
    'uses' => 'UserController@postLoginAPI'
]);

/**
 * Route đăng xuát
 * Kiểu gửi lên GET
 */
Route::get('logout', [
    'as' => 'logout',
    'uses' => 'UserController@getLogout'
]); 

Route::group(['middleware' => ['api']], function () {
    Route::post('save-user', function(Request $request) {
        $email =  $request->email;
        $password = $request->password;
        if(Auth::attempt(['email' => $email, 'password' => $password])) {
            echo "Đăng nhập thành công";
        } else {
            echo "Đăng nhập không thành công";
        }
    });
    Route::get('get-user', function() {
        echo '<pre>';
        print_r(Auth::user());
        echo '</pre>';
    });
    /**
     * Route kiểm tra đăng nhập
     * Kiểu gửi lên GET
     */
    Route::get('check-login/{id}', [
        'as' => 'check-login',
        'uses' => 'UserController@getCheckLogin'
    ]);
    
});


// ROUTE ADMIN
Route::group(['prefix' => 'admin'], function () {
    
});
// ROUTE NGUOIDUNG
Route::group(['prefix' => 'nguoidung'], function () {
    
});
// ROUTE SHOP
Route::group(['prefix' => 'shop'], function () {
    // route kiểm tra việc đã tạo shop hay chưa
    Route::get('get-data', 'ShopController@getData');
    // route gửi dữ liệu tạo shop
    Route::post('post-data', 'ShopController@postData');
    // ROUTE DANHMUC
    Route::group(['prefix' => 'danhmuc'], function () {
        // route lấy toàn bộ danh mục
        Route::get('get-all', 'DanhMucController@getDanhMuc');
        // route lấy danh mục của một shop của id là shop_id
        Route::post('get-danh-muc/{shop_id}', 'DanhMucController@getDanhMucByShopID');
        // route thêm danh mục
        Route::post('them-danh-muc/{shop_id}', 'DanhMucController@postThemDanhMuc');
        // route lấy dữ liệu của danh mục về view để hiển thị
        Route::get('sua-danh-muc/{id}', 'DanhMucController@getSuaDanhMuc');
        // route gửi dữ liệu từ view lên sever để lưu vào CSDL
        Route::post('sua-danh-muc/{id}', 'DanhMucController@postSuaDanhMuc');
    });
    // ROUTE SANPHAM
    Route::group(['prefix' => 'sanpham'], function () {
        
    });



});