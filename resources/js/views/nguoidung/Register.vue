<template>
    <div>
        <NavDefault></NavDefault>

        <div class="my-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <div class="jumbotron">
                            <h3 class="display-5 text-center">Đăng ký</h3>
                            <hr class="my-4">
                            <form method="post" v-show="showForm">
                                <div class="form-group row">
                                    <label for="email" class="col-3 col-form-label">Email</label>
                                    <input type="text" v-model="user.email" class="form-control col-9" placeholder="Nhập email">
                                    <div class="col-3"></div>
                                    <span v-show="showErrors" class="col-9 text-help">{{errors.email}}</span>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-3 col-form-label">Họ và tên</label>
                                    <input type="text" v-model="user.name" class="form-control col-9" placeholder="Nhập họ và tên">
                                    <div class="col-3"></div>
                                    <span v-show="showErrors" class="col-9 text-help">{{errors.name}}</span>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-3 col-form-label">Mật khẩu</label>
                                    <input type="password" v-model="user.password" class="form-control col-9" placeholder="Nhập mật khẩu">
                                    <div class="col-3"></div>
                                    <span v-show="showErrors" class="col-9 text-help">{{errors.password}}</span>
                                </div>
                                <div class="form-group row">
                                    <label for="passwordAgain" class="col-3 col-form-label">Nhập lại mật khẩu</label>
                                    <input type="password" v-model="user.passwordAgain" class="form-control col-9" placeholder="Nhập lại mật khẩu">
                                    <div class="col-3"></div>
                                    <span v-show="showErrors" class="col-9 text-help">{{errors.passwordAgain}}</span>
                                </div>
                                <div class="form-group row">
                                    <label for="diachi" class="col-3 col-form-label">Địa chỉ</label>
                                    <input type="text" v-model="user.diachi" class="form-control col-9" placeholder="Nhập địa chỉ">
                                    <div class="col-3"></div>
                                    <span v-show="showErrors" class="col-9 text-help">{{errors.diachi}}</span>
                                </div>
                                <div class="form-group row">
                                    <label for="ngaysinh" class="col-3 col-form-label">Ngày sinh</label>
                                    <input class="form-control col-9" type="date" v-model="user.ngaysinh" value="2011-08-19">
                                    <div class="col-3"></div>
                                    <span v-show="showErrors" class="col-9 text-help">{{errors.ngaysinh}}</span>
                                </div>
                                <div class="form-group row">
                                    <label for="diachi" class="col-3 col-form-label">Số điện thoại</label>
                                    <input type="text" v-model="user.sodienthoai" class="form-control col-9" placeholder="Nhập số điện thoại">
                                    <div class="col-3"></div>
                                    <span v-show="showErrors" class="col-9 text-help">{{errors.sodienthoai}}</span>
                                </div>
                                <div class="form-group row">
                                    <label for="gioitinh" class="col-3 col-form-label">Giới tính</label>
                                    <select class="form-control col-9" v-model="user.gioitinh">
                                        <option disabled="">Chọn giới tính</option>
                                        <option value="1">Nam</option>
                                        <option value="0">Nữ</option>
                                    </select>
                                    <div class="col-3"></div>
                                    <span v-show="showErrors" class="col-9 text-help">{{errors.gioitinh}}</span>
                                </div>
                                <button @click.prevent="sendDataRegister" type="submit" class="btn btn-block btn-success">Đăng ký</button>
                            </form>
                            <div>
                                <p class="text-center my-3" v-show="showLoading">Loading....</p>
                            </div>
                            <div v-show="showSuccess">
                                <div class="alert alert-success text-center my-3" role="alert">
                                    <h6 class="display-6">Đăng ký thành công !</h6>
                                    <a class="btn btn-success btn-block"><router-link class="color-white" :to="{name: 'login'}">Đăng nhập nào</router-link></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import NavDefault from '../.././components/home/NavDefault.vue';

export default {
    components: {
        NavDefault,
    },
    data() {
        return {
            user: {
                email: '',
                name: '',
                password: '',
                passwordAgain: '',
                diachi: '',
                ngaysinh: '',
                sodienthoai: '',
                gioitinh: null,
            },

            showForm: true,
            showLoading: false,
            showSuccess: false,

            showErrors: false,
            errors: {
                email: '',
                name: '',
                password: '',
                passwordAgain: '',
                diachi: '',
                ngaysinh: '',
                sodienthoai: '',
                gioitinh: '',
            },
        };
    },
    methods: {
        test() {
            this.showForm = false;
            this.showLoading = false;
            this.showSuccess = true;
            console.log(this.user.ngaysinh);
        },
        sendDataRegister() {
            this.showForm = false;
            this.showLoading = true;
            this.showError = true;
            axios.post('/api/register', {
                email: this.user.email,
                name: this.user.name,
                password: this.user.password,
                passwordAgain: this.user.passwordAgain,
                diachi: this.user.diachi,
                ngaysinh: this.user.ngaysinh,
                sodienthoai: this.user.sodienthoai,
                gioitinh: this.user.gioitinh
            })
            .then(response => {
                this.showLoading = false;
                this.showSuccess = true;
            })
            .catch(error => {
                this.showForm = true;
                this.showLoading = false;
                this.showError = true;
                this.errors = {
                    email: '',
                    name: '',
                    password: '',
                    passwordAgain: '',
                    diachi: '',
                    ngaysinh: '',
                    sodienthoai: '',
                    gioitinh: '',
                };
                if(error.response.data.errors.email) {
                    this.errors.email = error.response.data.errors.email[0];
                }
                if(error.response.data.errors.name) {
                    this.errors.name = error.response.data.errors.name[0];
                }
                if(error.response.data.errors.password) {
                    this.errors.password = error.response.data.errors.password[0];
                }
                if(error.response.data.errors.passwordAgain) {
                    this.errors.passwordAgain = error.response.data.errors.passwordAgain[0];
                }
                if(error.response.data.errors.diachi) {
                    this.errors.diachi = error.response.data.errors.diachi[0];
                }
                if(error.response.data.errors.ngaysinh) {
                    this.errors.ngaysinh = error.response.data.errors.ngaysinh[0];
                }
                if(error.response.data.errors.sodienthoai) {
                    this.errors.sodienthoai = error.response.data.errors.sodienthoai[0];
                }
                if(error.response.data.errors.gioitinh) {
                    this.errors.gioitinh = error.response.data.errors.gioitinh[0];
                }
            })
        }
    }
}
</script>

<style lang="scss" scoped>
    .color-white {
        color: white;
    }
    a {
        text-decoration: none;
    }
    .text-help {
        font-size: 11px;
        color: red;
        font-style: italic;
    }
</style>
