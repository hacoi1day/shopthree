<template>
    <div class="my-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <LeftNav></LeftNav>
                </div>
                <div class="col-sm-9">
                    <div class="jumbotron">
                        <h3 class="display-5">Đổi mật khẩu</h3>
                        <p class="lead">Đổi mật khẩu thường xuyên để bảo vệ tài khoản</p>
                        <hr class="my-1">
                        <div class="content my-2">
                            <form method="POST">
                                <div class="form-group row">
                                    <label for="passwordOld" class="col-3">Mật khẩu cũ</label>
                                    <input type="text" name="" id="passwordOld" class="form-control col-7" placeholder="Mật khẩu cũ">
                                </div>
                                <div class="form-group row">
                                    <label for="passwordNew" class="col-3">Mật khẩu mới</label>
                                    <input type="text" name="" id="passwordNew" class="form-control col-7" placeholder="Mật khẩu mới">
                                </div>
                                <div class="form-group row">
                                    <label for="passwordNewAgain" class="col-3">Nhật lại mật khẩu</label>
                                    <input type="text" name="" id="passwordNewAgain" class="form-control col-7" placeholder="Nhập lại mật khẩu mới">
                                </div>
                                <button class="btn btn-success" @click.prevent="changePassword()">Đổi mật khẩu</button>
                            </form>
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

        };
    },
    methods: {
        changePassword() {
            alert('Changed');
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
