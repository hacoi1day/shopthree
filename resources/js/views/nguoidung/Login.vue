<template>
    <div>        
        <div class="my-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="jumbotron">
                            <h3 class="display-5 text-center">Đăng nhập</h3>
                            <hr class="my-4">
                            <form method="post" v-show="showFormLogin">
                                <div class="form-group row">
                                    <label for="email" class="col-3 col-form-label">Email</label>
                                    <input type="text" v-model="user.email" class="form-control col-9" placeholder="Nhập email">
                                    <div class="col-3"></div>
                                    <span v-show="showErrors" class="col-9 text-help">{{error.email}}</span>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-3 col-form-label">Mật khẩu</label>
                                    <input type="password" v-model="user.password" class="form-control col-9" placeholder="Nhập mật khẩu">
                                    <div class="col-3"></div>
                                    <span v-show="showErrors" class="col-9 text-help">{{error.password}}</span>
                                </div>
                                
                                <button @click.prevent="sendLoginData" type="submit" class="btn btn-block btn-success">Đăng nhập</button>
                            </form>
                            <div>
                                <p class="text-center my-3" v-show="showLoading">Loading....</p>
                            </div>
                            <div>
                                <p class="text-center my-3" v-show="showSuccess">Đăng nhập thành công</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="alert alert-info">
                            <ul>
                                <li>Có thể bạn cần:</li>
                                <li>Bạn chưa có tài khoản, <a><router-link :to="{name: 'register'}">đăng ký</router-link></a></li>
                                <!-- <li>Bạn quên mật khẩu, <a><router-link :to="{name: 'password-forget'}">lấy lại mật khẩu</router-link></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    components: {

    },
    beforeCreate() {
        if (this.$session.has('userData')) {
            this.$router.push('/');
        }
    },
    created() {

    },
    data() {
        return {
            user: {
                email: '',
                password: '',
            },
            showFormLogin: true,
            showLoading: false,
            showSuccess: false,
            showErrors: false,

            error: {
                email: '',
                password: '',
            },
            userLogin: {
                id: 0,
                email: '',
                name: '',
                diachi: '',
                ngaysinh: '',
                coshop: 0,
            },
            showInfo: false,
        };
    },
    methods: {
        sendLoginData() {
            axios.post('api/save-user', {
                email: this.user.email,
                password: this.user.password,
            })
            .then(response => {
                console.log(response.data);
            })
            .catch(error => {
                console.log(error.data);
            })
        }
        /*
        sendLoginData() {
            this.showFormLogin = false;
            this.showLoading = true;
            // axios.defaults.withCredentials = true;
            axios.post('/api/login', {
                email: this.user.email,
                password: this.user.password
            })
            .then(response => {
                // console.log(response.data);
                if(response.data.email) {
                    this.showSuccess = true;
                    this.userLogin.id = response.data.id;
                    this.userLogin.email = response.data.email;
                    this.userLogin.name = response.data.name;
                    this.userLogin.diachi = response.data.diachi;
                    this.userLogin.ngaysinh = response.data.ngaysinh;
                    this.userLogin.coshop = response.data.coshop;
                    // console.log(this.userLogin);
                    this.showInfo = true;

                    // lưu session
                    this.$session.start();
                    this.$session.set('userData', this.userLogin);

                } else {
                    alert("Tài khoản hoặc mật khẩu không chính xác");
                    this.showFormLogin = true;
                    this.showLoading = false;
                    this.user.password = '';
                }
                this.showLoading = false;
                this.$emit('showData', this.userLogin);
            })
            .catch(error => {
                this.error = {
                    email: '',
                    password: '',
                }
                this.user.password = '';
                this.showFormLogin = true;
                this.showLoading = false;
                this.showErrors = true;
                if(error.response.data.errors.email) {
                    this.error.email = error.response.data.errors.email[0];
                }
                if(error.response.data.errors.password) {
                    this.error.password = error.response.data.errors.password[0];
                }
            })
        }
        */
    }
}
</script>

<style lang="scss" scoped>
    ul {
        list-style-type: circle;
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
