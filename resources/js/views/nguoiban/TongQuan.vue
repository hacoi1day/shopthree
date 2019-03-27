<template>
    <div class="content page1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- begin:tieudelon -->
                    <div>
                        <h4 class="tieudelon">Tổng quan thông tin</h4>
                        <hr>
                    </div>
                    <!-- end:tieudelon -->
                    
                    <!-- Khối đơn hàng mới -->
                    <!-- begin:khoi1 -->
                    <div class="khoi1">
                        <h5 class="tieude">Đơn hàng mới</h5>
                        <hr>
                        <!-- begin:donhang -->
                        <div class="donhang">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Tên người mua</th>
                                        <th scope="col">Sản phẩm</th>
                                        <th scope="col">Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- begin:1sanpham -->
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Vũ Thanh Hà</td>
                                        <td>
                                            <ul>
                                                <li>Tên sản phẩm: <b>Iphone 6s</b>, số lượng: <b>1</b></li>
                                                <li>Tên sản phẩm: <b>Iphone 7</b>, số lượng: <b>1</b></li>
                                                <li>Tên sản phẩm: <b>Iphone 8</b>, số lượng: <b>1</b></li>
                                                <li>Tên sản phẩm: <b>Iphone 8 Plus</b>, số lượng: <b>1</b></li>
                                                <li>Tên sản phẩm: <b>Iphone X</b>, số lượng: <b>1</b></li>

                                            </ul>
                                        </td>
                                        <td>
                                            <span class="check"><i class="fas fa-check"></i></span>
                                            <span class="non"><i class="fas fa-minus-circle"></i></span>
                                        </td>
                                    </tr>
                                    <!-- end:1sanpham -->
                                    <!-- begin:1sanpham -->
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Vũ Thanh Hà</td>
                                        <td>
                                            <ul>
                                                <li>Tên sản phẩm: <b>Iphone 6s</b>, số lượng: <b>1</b></li>
                                                <li>Tên sản phẩm: <b>Iphone 7</b>, số lượng: <b>1</b></li>
                                            </ul>
                                        </td>
                                        <td>
                                            <span class="check"><i class="fas fa-check"></i></span>
                                            <span class="non"><i class="fas fa-minus-circle"></i></span>
                                        </td>
                                    </tr>
                                    <!-- end:1sanpham -->
                                    <!-- begin:1sanpham -->
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Nguyễn Trung Duy</td>
                                        <td>
                                            <ul>
                                                <li>Tên sản phẩm: <b>Iphone 6s</b>, số lượng: <b>1</b></li>
                                                <li>Tên sản phẩm: <b>Iphone 7</b>, số lượng: <b>1</b></li>
                                            </ul>
                                        </td>
                                        <td>
                                            <span class="check"><i class="fas fa-check"></i></span>
                                            <span class="non"><i class="fas fa-minus-circle"></i></span>
                                        </td>
                                    </tr>
                                    <!-- end:1sanpham -->
                                </tbody>
                            </table>
                        </div>
                        <!-- end:donhang -->
                    </div>
                    <!-- end:khoi1 -->
                    <hr class="my-4">
                    <!-- Khối thống kê -->
                    <!-- begin:khoi2 -->
                    <div class="khoi2">
                        <h5 class="tieude">Thống kê theo ngày</h5>
                        <hr>
                        <br>
                        <div class="thongke">
                            <p>Tổng số đơn hàng trong ngày: <b>45</b> đơn.</p>
                            <p>Tổng thu nhập trong ngày: <b>4.500.000</b> đồng.</p>
                        </div>
                    </div>
                    <!-- end:khoi2 -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    // trước khi khởi tạo component
    beforeCreate() {

    },
    // sau khi khởi tạo component
    created() {

    },
    // biến
    data() {
        return {

        }
    },
    // phương thức
    methods: {

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
        .khoi1 {
            .tieude {
                border-left: 5px solid rgb(46, 46, 243);
                padding-left: 5px;
                color: gray;
                font-size: 20px;
                font-weight: bold;
            }
            hr {
                margin-top: -8px;
                width: 50%;
                float: left;
            }
            .donhang {
                ul {
                    list-style-type: none;
                    padding-left: 0px;
                    li {

                    }
                }
                span {
                    font-size: 20px;
                    font-weight: bold;
                }
                .check {
                    color: green;
                    margin-right: 10px;
                }
                .non {
                    color: red;

                }
            }
        }
        .khoi2 {
            .tieude {
                border-left: 5px solid rgb(46, 46, 243);
                padding-left: 5px;
                color: gray;
                font-size: 20px;
                font-weight: bold;
            }
            hr {
                margin-top: -8px;
                width: 50%;
                float: left;
            }
            .thongke {
                padding-left: 50px;
            }

        }
    }
</style>
