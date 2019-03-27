<template>
    <div class="content page1">
        <div class="row">
            <div class="col-12">
                <!-- begin:tieudelon -->
                <div>
                    <h4 class="tieudelon">Quản lý danh mục</h4>
                    <hr>
                </div>
                <!-- end:tieudelon -->
            </div>
            <div class="col-6">
                <div class="khoitieude">
                    <h5 class="tieude">Danh sách danh mục</h5>
                    <hr>
                </div>
                <div class="khoinoidung">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên danh mục</th>
                                <th scope="col">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- begin:_1danhmuc -->
                            <tr>
                                <th scope="row">1</th>
                                <td><b>Điện thoại</b></td>
                                <td>
                                    <span class="sua"><i class="fas fa-pen"></i></span>
                                    <span class="xoa"><i class="fas fa-trash"></i></span>
                                </td>
                            </tr>
                            <!-- end:_1danhmuc -->
                            <!-- begin:_1danhmuc -->
                            <tr>
                                <th scope="row">2</th>
                                <td><b>Laptop</b></td>
                                <td>
                                    <span class="sua"><i class="fas fa-pen"></i></span>
                                    <span class="xoa"><i class="fas fa-trash"></i></span>
                                </td>
                            </tr>
                            <!-- end:_1danhmuc -->
                            <!-- begin:_1danhmuc -->
                            <tr>
                                <th scope="row">3</th>
                                <td><b>PC</b></td>
                                <td>
                                    <span class="sua"><i class="fas fa-pen"></i></span>
                                    <span class="xoa"><i class="fas fa-trash"></i></span>
                                </td>
                            </tr>
                            <!-- end:_1danhmuc -->
                            <!-- begin:_1danhmuc -->
                            <tr>
                                <th scope="row">4</th>
                                <td><b>Máy tính bảng</b></td>
                                <td>
                                    <span class="sua"><i class="fas fa-pen"></i></span>
                                    <span class="xoa"><i class="fas fa-trash"></i></span>
                                </td>
                            </tr>
                            <!-- end:_1danhmuc -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-6">
                <div class="khoitieude">
                    <h5 class="tieude">Thêm danh mục</h5>
                    <hr>
                </div>
                <div class="khoinoidung">
                    <form action="post">
                        <div class="form-group">
                            <label for="tendanhmuc">Tên danh mục</label>
                            <input type="text" v-model="tendanhmuc" id="tendanhmuc" class="form-control" placeholder="Tên danh mục">
                            <small id="tendanhmuc" class="text-muted">Help text</small>
                        </div>
                        <button class="btn btn-success btn-block" @click.prevent="themDanhMuc">Thêm danh mục</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            tendanhmuc: '',

        };
    },
    // hàm khởi chạy lúc component vừa load xong
    beforeCreate() {
        // if (this.$session.has('userData')) {
        //     this.$router.push('/');
        // }
    },
    created() {
        // kiểm tra xem người dùng đã đăng nhập chưa
        if(this.$session.has('userData')) {
            // console.log(this.$session.get('userData'));
        }
    },
    methods: {
        themDanhMuc() {
            alert(this.tendanhmuc);


            axios.post('/api/shop/danhmuc/them-danh-muc/', {tendanhmuc: this.tendanhmuc})
            .then(response => {
                console.log(response.data.result);
            })
            .catch(error => {
                console.log(error);
            })
        }
    }
}
</script>

<style lang="scss" scoped>
    .content {
        .tieudelon {
            border-left: 7px solid gray;
            padding-left: 10px;
            font-size: 28px;
            font-weight: bold;
            color: gray;
        }
        .row {
            .col-6 {
                .khoitieude {
                    margin-top: 10px;
                    .tieude {
                        border-left: 5px solid rgb(238, 53, 238);
                        padding-left: 7px;
                        margin-bottom: -8px;
                    }
                }
                .khoinoidung {
                    .tendanhmuc {
                        margin-right: 20px;
                        color: black;
                    }
                    span {
                        margin-right: 10px;
                        cursor: pointer;
                    }
                    .sua {
                        color: blue;
                    }
                    .xoa {
                        color: red;
                    }
                }
            }
        }
    }
</style>