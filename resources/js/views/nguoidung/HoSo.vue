<template>
    <div class="my-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <LeftNav></LeftNav>
                </div>
                <div class="col-sm-9">
                    <div class="jumbotron">
                        <h3 class="display-5">Hồ sơ của tôi</h3>
                        <p class="lead">Quản lý thông tin về hồ sơ của bạn</p>
                        <hr class="my-1">
                        <div class="content">
                            <ul>
                                <li class="row">
                                    <div class="col-3">
                                        <span>Email: </span>
                                    </div>
                                    <div class="col-9">
                                        <div v-show="!form.email">
                                            <span class="thongtin">vuha98.tn@gmail.com</span> <a class="change-button" @click="changeInfo('email')">Thay đổi</a>
                                        </div>
                                        <div class="change row" v-show="form.email">
                                            <div class="form-group col-6">
                                                <input type="email" class="form-control" id="email" placeholder="Email">
                                            </div>
                                            <div class="col-3">
                                                <button class="btn btn-success btn-block" @click="changed('email')">Sửa</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="col-3">
                                        <span>Số điện thoại: </span>
                                    </div>
                                    <div class="col-9">
                                        <div v-show="!form.sodienthoai">
                                            <span class="thongtin">0984735879</span> <a class="change-button" @click="changeInfo('sodienthoai')">Thay đổi</a>
                                        </div>
                                        <div class="change row" v-show="form.sodienthoai">
                                            <div class="form-group col-6">
                                                <input type="text" class="form-control" id="sodienthoai" placeholder="Số điện thoại">
                                            </div>
                                            <div class="col-3">
                                                <button class="btn btn-success btn-block" @click="changed('sodienthoai')">Sửa</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="col-3">
                                        <span>Tên shop: </span>
                                    </div>
                                    <div class="col-9">
                                        <div v-show="!form.tenshop">
                                            <span class="thongtin">hacoi1day</span> <a class="change-button" @click="changeInfo('tenshop')">Thay đổi</a>
                                        </div>
                                        
                                        <div class="change row" v-show="form.tenshop">
                                            <div class="form-group col-6">
                                                <input type="text" class="form-control" id="tenshop" placeholder="Tên shop">
                                            </div>
                                            <div class="col-3">
                                                <button class="btn btn-success btn-block" @click="changed('tenshop')">Sửa</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="col-3">
                                        <span>Giới tính: </span>
                                    </div>
                                    <div class="col-9">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" checked type="radio" name="gioitinh" id="name" value="nam">
                                            <label class="form-check-label" for="name">Nam</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gioitinh" id="nu" value="nu">
                                            <label class="form-check-label" for="nu">Nữ</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="col-3">
                                        <span>Ngày sinh: </span>
                                    </div>
                                    <div class="col-9">
                                        <div v-show="!form.ngaysinh">
                                            <span class="thongtin">05-12-1998</span> <a class="change-button" @click="changeInfo('ngaysinh')">Thay đổi</a>
                                        </div>
                                        <!-- <input class="" type="date" value="2011-08-19"> -->
                                        <div class="change row" v-show="form.ngaysinh">
                                            <div class="form-group col-6">
                                                <input type="date" class="form-control" id="tenshop" placeholder="Ngày sinh">
                                            </div>
                                            <div class="col-3">
                                                <button class="btn btn-success btn-block" @click="changed('ngaysinh')">Sửa</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</template>

<script>
import LeftNav from '../.././components/nguoidung/LeftNav.vue';
export default {
    components: {
        LeftNav,

    },
    data() {
        return {
            form: {
                email: false,
                sodienthoai: false,
                tenshop: false,
                ngaysinh: false,
            },

        };
    },
    methods: {
        changeInfo(name) {
            switch(name) {
                case 'email':
                    this.form.email = true;
                    this.form.sodienthoai = false;
                    this.form.tenshop = false;
                    this.form.ngaysinh = false;
                    break;
                case 'sodienthoai':
                    this.form.sodienthoai = true;
                    this.form.email = false;
                    this.form.tenshop = false;
                    this.form.ngaysinh = false;
                    break;
                case 'tenshop':
                    this.form.tenshop = true;
                    this.form.email = false;
                    this.form.sodienthoai = false;
                    this.form.ngaysinh = false;
                    break;
                case 'ngaysinh':
                    this.form.ngaysinh = true;
                    this.form.email = false;
                    this.form.sodienthoai = false;
                    this.form.tenshop = false;
                    break;
            }
        },
        changed(name) {
            switch(name) {
                case 'email':
                    this.form.email = false;
                    break;
                case 'sodienthoai':
                    this.form.sodienthoai = false;
                    break;
                case 'tenshop':
                    this.form.tenshop = false;
                    break;
                case 'ngaysinh':
                    this.form.ngaysinh = false;
                    break;
            }
        }
    },
    computed: {

    },
    watch: {

    }
}
</script>

<style lang="scss" scoped>
    span.thongtin {
        font-weight: bold;
    }
    a.change-button {
        cursor: pointer;
        color: #d755ee;
    }
    a.change-button:hover {
        font-weight: bold;
        color: #d755ee;
    }
</style>
