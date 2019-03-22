<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    // Login API
    /**
     * Register API
     * Đây là hàm đăng kí, nhận thông tin của người dùng để đăng ký tài khoản
     */
    public function postRegisterAPI(Request $request) {
        // Kiểm tra thông tin gửi lên
        $this->validate($request,
            [
                'email' => 'required|email',
                'name' => 'required|min:4',
                'password' => 'required|min:5|max:32',
                'passwordAgain' => 'required|same:password',
                'diachi' => 'required',
                'ngaysinh' => 'required',
                'sodienthoai' => 'required',
                'gioitinh' => 'required',
            ],
            [
                'email.required' => 'Email chưa được điền',
                'email.email' => 'Email chưa đúng định dạng',
                'name.required' => 'Họ và tên chưa được điền',
                'password.required' => 'Mật khẩu chưa được điền',
                'passwordAgain.required' => 'Chưa nhập lại mật khẩu',
                'password.min' => 'Mật khẩu phải có lớn hơn 6 ký tự',
                'password.max' => 'Mật khẩu phải có nhỏ hơn 32 ký tự',
                'passwordAgain.same' => 'Mật khẩu nhập lại không giống mật khẩu',
                'diachi.required' => 'Địa chỉ chưa được điền',
                'ngaysinh.required' => 'Ngày sinh chưa được điền',
                'sodienthoai.required' => 'Số điện thoại chưa được điền',
                'gioitinh.required' => 'Giới tính chưa được chọn',
            ]
        );
        // New User model
        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->diachi = $request->diachi;
        $user->ngaysinh = $request->ngaysinh;
        $user->sodienthoai = $request->sodienthoai;
        $user->gioitinh = $request->gioitinh;
        $user->loainguoidung = 2;
        $user->avatar = "";
        $user->coshop = false;
        $user->save();
        // trả về success để thông báo đăng ký thành công
        return 'success';
    }

    // Login API
    /**
     * Login API
     * Đây là hàm nhận các biến email và password gửi lên từ client lên sever và xử lý chúng
     * Kiểm tra thông tin của người dùng
     * Xử lý đăng nhập, nếu email và password đúng thì sẽ trả về một mảng gồm các thông tin của người dùng.
     */
    public function postLoginAPI(Request $request) {
        // kiểm tra thông tin của người dùng
        $this->validate($request,
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'email.required' => 'Bạn chưa nhập email',
                'email.email' => 'Bạn nhập không phải định dạng email',
                'password.required' => 'Bạn chưa nhập mật khẩu'
            ]
        );
        // lấy các giá trị của client gửi lên
        $email =  $request->email;
        $password = $request->password;
        // kiểm tra đăng nhập
        if(Auth::attempt(['email' => $email, 'password' => $password])) {
            $user = [
                'id' => Auth::user()->id,
                'email' => Auth::user()->email,
                'name' => Auth::user()->name,
                'diachi' => Auth::user()->diachi,
                'ngaysinh' => Auth::user()->ngaysinh,
                'coshop' => Auth::user()->coshop,
            ];
            // lưu session
            // Session::put('userData', $user);
            // Session::put('clicked_close_popup_button', true);
            // echo Session::get('userData');


            // trả về client thông tin người dùng
            return $user;
        } else {
            // trả về thất bại nếu sai thông tin
            return 'thatbai';
        }
    }

    /**
     * ForgetPass API
     * Đây là hàm giúp người dùng lấy lại mật khẩu
     */
    public function forgetPassAPI(Request $request) {
        return "Đang trong quá trình xây dựng";
    }
}
