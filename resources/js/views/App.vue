<template>
    <div>
        <NavDefault :test="test"></NavDefault>
        <p>
            <router-link :to="{name: 'home'}">Home</router-link> |
            <router-link :to="{name: 'list'}">List</router-link> |
            <router-link :to="{name: 'login'}">Login</router-link> |
            <router-link :to="{name: 'hoso'}">Hồ sơ</router-link> |
            <router-link :to="{name: 'diachi'}">Địa chỉ</router-link> |
            <router-link :to="{name: 'doimatkhau'}">Đổi mật khẩu</router-link> |
        </p>
        <div>
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
import NavDefault from '.././components/home/NavDefault.vue';
export default {
    components: {
        NavDefault,

    },
    data() {
        return {
            test: 111,
        }
    }
}
</script>