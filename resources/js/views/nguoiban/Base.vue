<template>
    <div class="content my-3">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <ul class="list-group">
                        <li class="list-group-item"><router-link  :to="{name: 'tongquan'}">Tổng quan</router-link></li>
                        <li class="list-group-item"><router-link  :to="{name: 'danhsachsanpham'}">Danh sách sản phẩm</router-link></li>
                        <li class="list-group-item"><router-link  :to="{name: 'danhmuc'}">Quản lý danh mục</router-link></li>
                        <li class="list-group-item"> Đơn mua
                            <ul>
                                <li>Chưa xác nhận</li>
                                <li>Đang xử lý</li>
                                <li>Đang vận chuyển</li>
                                <li>Hoàn thành</li>
                            </ul>
                        </li>
                        <li class="list-group-item">Đơn mua</li>
                    </ul>
                </div>
                <div class="col-9">
                    <router-view></router-view>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    /**
     * kiểm tra xem người dùng đã đăng nhập hay chưa
     * nếu người dùng đã đăng nhập thì chuyển đến trang quản lý người bán
     * nếu người dùng chưa đăng nhập thì chuyển sang trang đăng nhập
     */
    beforeCreate() {
        if(!this.$session.has('userData')) {
            this.$router.push('/login');
        } else {
            // console.log(this.$session.get('userData').coshop);
            if(this.$session.get('userData').coshop === 1) {
                this.$router.push('/nguoiban/tongquan');
            } else {
                this.$router.push('/nguoiban/taoshop');
            }
        }
        
    },
    // dữ liệu được sử dụng trong component
    data() {
        return {

        };
    },
    // phương thức
    methods: {

    },
    // 
    computed: {

    },
    //
    watch: {

    }
}
</script>

<style lang="scss" scoped>
    .content {
        ul {
            padding-left: 30px;
        }
    }
</style>
