<template>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- begin:tieudelon -->
                    <div>
                        <h4 class="tieudelon">Danh sách sản phẩm</h4>
                        <hr>
                    </div>
                    <!-- end:tieudelon -->

                    <!-- begin:danhsach -->
                    <div class="danhsach">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Ảnh sản phẩm</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Giá sản phẩm</th>
                                    <th scope="col">Đánh giá</th>
                                    <th scope="col">Số lượt mua</th>
                                    <th scope="col">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>

                                <!-- begin:1sanpham  -->
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Chưa có</td>
                                    <td>Iphone 6S</td>
                                    <td>3.600.000 đồng</td>
                                    <td>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </td>
                                    <td><b>500</b> lượt</td>
                                    <td>
                                        <span class="sua"><i class="fas fa-pen"></i></span>
                                        <span class="hethang"><i class="fas fa-minus-circle"></i></span>
                                        <span class="xoa"><i class="fas fa-trash"></i></span>
                                    </td>
                                </tr>
                                <!-- end:1sanpham  -->
                                
                            </tbody>
                            </table>
                    </div>
                    <!-- end:danhsach -->


                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    
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
        .danhsach {
            span {
                font-size: 20px;
                font-weight: bold;
                margin-right: 5px;
            }
            .sua {
                color: blue;
            }
            .hethang {
                color: yellow;
            }
            .xoa {
                color: red;
            }
        }
    }
</style>
