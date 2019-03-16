require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';
import VeeValidate from 'vee-validate';

Vue.use(VueRouter);
Vue.use(VeeValidate);

import App from './views/App.vue';
import Home from './views/Home.vue';
import List from './views/List.vue';

import Login from './views/nguoidung/Login.vue';
import Register from './views/nguoidung/Register.vue';
import HoSo from './views/nguoidung/HoSo.vue';
import DiaChi from './views/nguoidung/DiaChi.vue';
import DoiMatKhau from './views/nguoidung/DoiMatKhau.vue';



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
            path: './nguoidung/hoso',
            name: 'hoso',
            component: HoSo,
            meta: {
                title: 'Người dùng'
            }
        },
        {
            path: './nguoidung/diachi',
            name: 'diachi',
            component: DiaChi,
            meta: {
                title: 'Người dùng'
            }
        },
        {
            path: './nguoidung/doimatkhau',
            name: 'doimatkhau',
            component: DoiMatKhau,
            meta: {
                title: 'Người dùng'
            }
        },

    ],
});
router.beforeEach((to, from, next) => {
    document.title = to.meta.title
    next()
});


const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
