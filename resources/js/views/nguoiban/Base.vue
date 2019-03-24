<template>
    <div class="content my-3">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <ul class="list-group">
                        <li class="list-group-item"><i class="icons fas fa-bell"></i><router-link class="router-link" :to="{name: 'tongquan'}">Tổng quan</router-link></li>
                        <li class="list-group-item"><i class="icons fas fa-bars"></i><router-link class="router-link"  :to="{name: 'danhsachsanpham'}">Danh sách sản phẩm</router-link></li>
                        <li class="list-group-item"><i class="icons fas fa-bookmark"></i><router-link class="router-link"  :to="{name: 'danhmuc'}">Quản lý danh mục</router-link></li>
                        <li class="list-group-item"><i class="icons fas fa-shopping-cart"></i> Đơn mua
                            <ul>
                                <li><i class="icons fas fa-question"></i><router-link class="router-link" :to="{name: ''}">Chưa xác nhận</router-link></li>
                                <li><i class="icons far fa-clipboard"></i><router-link class="router-link" :to="{name: ''}">Đang xử lý</router-link></li>
                                <li><i class="icons far fa-clock"></i><router-link class="router-link" :to="{name: ''}">Vận chuyển</router-link></li>
                                <li><i class="icons fas fa-check"></i><router-link class="router-link" :to="{name: ''}">Hoàn thành</router-link></li>
                            </ul>
                        </li>
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
            list-style-type: none;
            li {
                color: gray;
                .icons {
                    margin-right: 10px;
                }
                .router-link {
                    color: rgb(20, 41, 107);
                    text-decoration: none;
                    
                }
                .router-link:hover {
                    font-weight: bold;
                }
            }
        }
    }
</style>
