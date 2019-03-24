require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';
import VueSession from 'vue-session';
import VueRouterMultiView from 'vue-router-multi-view';

// VueRouter dùng để làm SPA
Vue.use(VueRouter);
// VueSession dùng để lưu Session
Vue.use(VueSession);
// VueRouterMultiView dùng để làm Multi View
Vue.use(VueRouterMultiView)


import App from './views/App.vue';
import Home from './views/Home.vue';
import List from './views/List.vue';

// DÀNH CHO NGƯỜI DÙNG CỎ SỞ
// trang đăng nhập
import Login from './views/nguoidung/Login.vue';
// trang đăng ký
import Register from './views/nguoidung/Register.vue';
// trang hồ sơ người dùng
import HoSo from './views/nguoidung/HoSo.vue';
// trang thay đổi thông tin địa chỉ
import DiaChi from './views/nguoidung/DiaChi.vue';
// trang đổi mật khẩu
import DoiMatKhau from './views/nguoidung/DoiMatKhau.vue';

// DÀNH CHO NGƯỜI BÁN
// trang cơ sở của người bán
import NguoiBan from './views/nguoiban/Base.vue';
// trang tạo shop nếu user chưa tạo shop
import TaoShop from './views/nguoiban/TaoShop.vue';
// trang tổng quan
import TongQuan from './views/nguoiban/TongQuan.vue';
// trang danh sách sản phẩm
import DanhSachSanPham from './views/nguoiban/DanhSachSanPham.vue';
// trang quản lý danh mục sản phẩm
import DanhMuc from './views/nguoiban/DanhMuc.vue';

/**
 * đây là quản lý router
 */
const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home,
            meta: {title: 'Trang chủ'}
        },
        {
            path: '/list',
            name: 'list',
            component: List,
            meta: {title: 'Danh sách'}
        },
        {
            path: '/login',
            name: 'login',
            component: Login,
            meta: {title: 'Đăng nhập'}
        },
        {
            path: '/register',
            name: 'register',
            component: Register,
            meta: {title: 'Đăng ký'}
        },
        {
            path: '/nguoidung/hoso',
            name: 'hoso',
            component: HoSo,
            meta: {
                title: 'Người dùng'
            }
        },
        {
            path: '/nguoidung/diachi',
            name: 'diachi',
            component: DiaChi,
            meta: {
                title: 'Người dùng'
            }
        },
        {
            path: '/nguoidung/doimatkhau',
            name: 'doimatkhau',
            component: DoiMatKhau,
            meta: {
                title: 'Người dùng'
            }
        },
        {
            path: '/nguoiban',
            name: 'nguoiban',
            component: NguoiBan,
            meta: {
                title: 'Kênh người bán'
            },
            children: [
                {
                    path: 'tongquan',
                    name: 'tongquan',
                    component: TongQuan,
                    meta: {
                        title: 'Kênh người bán - Tổng quan'
                    }
                },
                {
                    path: 'taoshop',
                    name: 'taoshop',
                    component: TaoShop,
                    meta: {
                        title: 'Kênh người bán - Tạo shop'
                    }
                },
                {
                    path: 'danhsachsanpham',
                    name: 'danhsachsanpham',
                    component: DanhSachSanPham,
                    meta: {
                        title: 'Kênh người bán - Danh sách sản phẩm'
                    }
                },
                {
                    path: 'danhmuc',
                    name: 'danhmuc',
                    component: DanhMuc,
                    meta: {
                        title: 'Kênh người bán - Quản lý danh mục'
                    }
                },
            ]
        },
        {
            path: '*',
            redirect: { name: 'home' },
        },


    ],
});
// hàm này dùng để thay đổi tiêu đề
router.beforeEach((to, from, next) => {
    document.title = to.meta.title
    next()
});

// hàm xử lý ngoài
const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
