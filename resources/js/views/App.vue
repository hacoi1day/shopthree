<template>
    <div>
        <!-- <p>
            <router-link :to="{name: 'home'}">Home</router-link> |
            <router-link :to="{name: 'list'}">List</router-link> |
            <router-link :to="{name: 'login'}">Login</router-link> |
            <router-link :to="{name: 'hoso'}">Hồ sơ</router-link> |
            <router-link :to="{name: 'diachi'}">Địa chỉ</router-link> |
            <router-link :to="{name: 'doimatkhau'}">Đổi mật khẩu</router-link> |
        </p> -->

        <!-- Navbar -->
        <NavDefault 
            :dataUser="dataUser" 
            :showInfo="showInfo"
        ></NavDefault>

        <!-- Content -->
        <div>
            <router-view 
                @showData="showData"
                :dataUser="dataUser"
            ></router-view>
        </div>

        <!-- Footer -->
        <Footer></Footer>
    </div>
</template>

<script>
import NavDefault from '.././components/base/NavDefault.vue';
import Footer from '.././components/base/Footer.vue';

export default {
    components: {
        NavDefault,
        Footer,
    },
    
    beforeCreate() {

    },
    created() {
        /**
         * Kiếm tra xem có tồn tại sesstion userData hay không ?
         * nếu có thì lưu dữ liệu userData vào this.userData
         * nếu không thì không làm gì cả ^^
         */
        if (this.$session.has('userData')) {
            // console.log(this.$session.get('userData'));
            // lưu dữ liệu từ Session vào data
            this.dataUser.id = this.$session.get('userData').id;
            this.dataUser.email = this.$session.get('userData').email;
            this.dataUser.name = this.$session.get('userData').name;
            this.dataUser.diachi = this.$session.get('userData').diachi;
            this.dataUser.ngaysinh = this.$session.get('userData').ngaysinh;
            this.dataUser.coshop = this.$session.get('userData').coshop;
            // hiển thị thông tin
            this.showInfo = true;
        } else {
            console.log('Không có session');
            this.showInfo = false;
        }
    },
    beforeMount() {

    },
    mounted() {
        
    },
    beforeUpdate() {
        
    },
    updated() {

    },
    data() {
        return {
            dataUser: {
                id: 0,
                email: '',
                name: '',
                diachi: '',
                ngaysinh: '',
                coshop: 0,
            },
            showInfo: false,
        }
    },
    methods: {
        showData(data) {
            console.log(data.name);
            this.dataUser.id = data.id;
            this.dataUser.email = data.email;
            this.dataUser.name = data.name;
            this.dataUser.diachi = data.diachi;
            this.dataUser.ngaysinh = data.ngaysinh;
            this.dataUser.coshop = data.coshop;

            this.showInfo = true;
        }
    }
}
</script>