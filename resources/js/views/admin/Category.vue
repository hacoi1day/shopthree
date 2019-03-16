<template>
    <div class="row">
        <div class="col-md-6">
            <div class="jumbotron">
                <h5 class="display-5 text-center">Danh sách danh mục</h5>
                <hr class="my-4">
                <div class="danhsach">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên danh mục</th>
                                <th scope="col">Sửa</th>
                                <th scope="col">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="jumbotron">
                <h5 class="display-5 text-center">Thêm danh mục</h5>
                <hr class="my-4">
                <div class="form">
                    <form @click.prevent="addCategory" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="tendanhmuc">Tên danh mục</label>
                            <input type="text" v-model="tenDanhmuc" class="form-control" placeholder="Nhập tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="tendanhmuc">Hình minh họa</label>
                            <input type="file" v-on="hinhMinhHoa" class="form-control" placeholder="Nhập tên danh mục">
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Thêm danh mục</button>
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
            tenDanhmuc: '',
        }
    },
    methods: {
        addCategory() {
            console.log(this.tenDanhmuc);
        }
    }
}
</script>

<style lang="scss">
    
</style>