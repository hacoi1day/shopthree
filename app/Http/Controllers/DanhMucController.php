<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DanhMuc;

class DanhMucController extends Controller
{
    /**
     * Hàm này dùng để lấy toàn bộ danh mục
     * Trả về kiểu dữ liệu JSON
     */
    public function getDanhMuc() {
        $danhmuc = DanhMuc::all();
        return $danhmuc->toJson();
    }

    /**
     * Hàm getDanhMucByShopID dùng để lấy toàn bộ danh mục của một shop nào đó
     * Trả về kiểu dữ liệu JSON
     */
    public function getDanhMucByShopID($shop_id) {
        $danhmuc = DanhMuc::where('shop_id', $shop_id)->get();
        return $danhmuc->toJson();
    }

    /**
     * Hàm postThemDanhMuc dùng để thêm một danh mục vào cơ sở dữ liệu
     * Các tham số truyền vào $request và $shop_id
     * Trả về true nếu thêm dữ liệu thành công và false nếu thêm dữ liệu thất bại
     */
    public function postThemDanhMuc(Request $request, $shop_id) {
        echo $request->tendanhmuc . " - " . $shop_id;
        die();
        // validate

        // thêm vào cơ sở dữ liệu
        $danhmuc = new DanhMuc();
        // các trường dữ liệu cần thêm vào
        $danhmuc->tendanhmuc = $request->tendanhmuc; // trường tên danh mục
        $danhmuc->hinhminhhoa = $request->hinhminhhoa; // trường ảnh minh họa (hiện chưa làm chức năng upload ảnh)
        $danhmuc->shop_id = $shop_id; // trường shop_id nhận qua url
        // lưu
        if($danhmuc->save()) {
            return 'true';
        } else {
            return 'false';
        }
    }

    /**
     * Hàm getSuaDanhMuc là hàm dùng để sửa dữ liệu DanhMuc
     * Các tham số truyền vào $id (đây là $id của danh mục cần sửa)
     * Trả về chuỗi JSON chứa dữ liệu của danh mục của $id vừa truyền vào
     */
    public function getSuaDanhMuc($id) {
        $danhmuc = DanhMuc::find($id);
        return $danhmuc->toJson();
    }
    /**
     * Hàm postSuaDanhMuc là hàm dùng để sửa dữ liệu DanhMuc
     * Các tham số truyền vào $request và $id (đây là $id của danh mục cần sửa)
     * Trả về true nếu sửa thành công và false nếu sửa thất bại
     */
    public function postSuaDanhMuc(Request $request, $id) {

    }

}
