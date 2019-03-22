<template>
    <div class="content">
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
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span class="tendanhmuc">Điện thoại</span>
                            <span class="sua"><i class="fas fa-pen"></i></span>
                            <span class="xoa"><i class="fas fa-trash"></i></span>
                        </li>
                        <li class="list-group-item">
                            <span class="tendanhmuc">Máy tính bảng</span>
                            <span class="sua"><i class="fas fa-pen"></i></span>
                            <span class="xoa"><i class="fas fa-trash"></i></span>
                        </li>
                        <li class="list-group-item">
                            <span class="tendanhmuc">PC</span>
                            <span class="sua"><i class="fas fa-pen"></i></span>
                            <span class="xoa"><i class="fas fa-trash"></i></span>
                        </li>
                        <li class="list-group-item">
                            <span class="tendanhmuc">Laptop</span>
                            <span class="sua"><i class="fas fa-pen"></i></span>
                            <span class="xoa"><i class="fas fa-trash"></i></span>
                        </li>
                    </ul>
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
                            <input type="text" name="" id="tendanhmuc" class="form-control" placeholder="Tên danh mục">
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

        };
    },
    methods: {
        themDanhMuc() {
            alert('Thêm danh mục');
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
                // border: 1px solid gray;
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
                    .sua {
                        color: blue;
                        margin-right: 10px;
                    }
                    .xoa {
                        color: red;
                    }
                }
            }
        }
    }
</style>
