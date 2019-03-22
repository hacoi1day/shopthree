<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Shop;

class ShopController extends Controller
{
    public function getData() {

    }
    public function postData(Request $request) {
        $this->validate($request, 
            [
                'tenshop' => 'required|min:4',
            ], 
            [
                'tenshop.required' => 'Bạn chưa nhập tên shop',
                'tenshop.min' => 'Tên shop quá ngắn',
            ]
        );
        $shop = new Shop();
        $shop->tenshop = $request->tenshop;
        $shop->mota = $request->motashop;
        $shop->avatar = '';
        $shop->user_id = $request->user_id;
        // lưu dữ liệu vào cơ sở dữ liệu
        if($shop->save()) {
            // thay đổi dữ liệu của user vì user đã có tạo shop
            $user = User::find($request->user_id);
            $user->coshop = 1;
            $user->save();
            return 'true';
        } else {
            return 'false';
        }
        


    }
}
