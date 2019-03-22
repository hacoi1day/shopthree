<template>
    <div class="my-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <LeftNav></LeftNav>
                </div>
                <div class="col-sm-9">
                    <div class="jumbotron">
                        <h3 class="display-5">Địa chỉ của tôi</h3>
                        <p class="lead">Quản lý thông tin về địa chỉ</p>
                        <hr class="my-1">
                        <div class="content">
                            <div class="info" v-show="!showForm">
                                <ul>
                                    <li class="row">
                                        <div class="col-sm-3">
                                            <span>Tên:</span>
                                        </div>
                                        <div class="col-sm-9">
                                            <span><b>Vũ Thanh Hà</b></span>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="col-sm-3">
                                            <span>Số điện thoại:</span>
                                        </div>
                                        <div class="col-sm-9">
                                            <span><b>0984735879</b></span>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="col-sm-3">
                                            <span>Địa chỉ:</span>
                                        </div>
                                        <div class="col-sm-9">
                                            <span><b>144 Xuân Thủy, Cầu Giấy, Hà Nội</b></span>
                                        </div>
                                    </li>
                                </ul>
                                <button class="btn btn-info" @click="show">Thay đổi</button>
                            </div>
                            <div class="change-address" v-show="showForm">
                                <form method="post">
                                    <div class="form-group row">
                                        <label for="ten" class="col-3">Tên</label>
                                        <input type="text" name="ten" id="ten" class="form-control col-8" placeholder="Tên">
                                    </div>
                                    <div class="form-group row">
                                        <label for="sodienthoai" class="col-3">Số điện thoại</label>
                                        <input type="text" name="sodienthoai" id="sodienthoai" class="form-control col-8" placeholder="Số điện thoại">
                                    </div>
                                    <div class="form-group row">
                                        <label for="diachi" class="col-3">Địa chỉ</label>
                                        <input type="text" name="diachi" id="diachi" class="form-control col-8" placeholder="Địa chỉ">
                                    </div>
                                    <button class="btn btn-success" @click.prevent="hidden">Lưu</button>
                                </form>
                            </div>
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
        LeftNav

    },
    data() {
        return {
            showForm: false,
        };
    },
    methods: {
        show() {
            this.showForm = true;
        },
        hidden() {
            this.showForm = false;
        }
    }
}
</script>

<style lang="scss" scoped>

</style>