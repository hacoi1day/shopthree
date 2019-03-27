<template>
    <div class="content page1">
        <div class="container mt-3">
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="khoitieude">
                        <h5>Tạo shop</h5>
                        <hr>
                    </div>
                    <div class="khoinoidung">
                        <form action="post">
                            <div class="form-group">
                                <label for="tenshop">Tên Shop</label>
                                <input type="text" v-model="tenshop" id="tenshop" class="form-control" placeholder="" aria-describedby="Tên shop">
                                <small v-show="showErr" class="text-muted">{{ error.tenshop }}</small>
                            </div>
                            <div class="form-group">
                                <label for="motashop">Mô tả Shop</label>
                                <textarea class="form-control" v-model="motashop" id="motashop" rows="3"></textarea>
                            </div>
                            <button class="btn btn-block btn-success" @click.prevent="themDanhMuc">Tạo Shop</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    created() {
        if(this.$session.has('userData')) {
            this.user_id = this.$session.get('userData').id;
        }
    },
    data() {
        return {
            tenshop: '',
            motashop: '',
            user_id: 0,

            showErr: false,
            error: {
                tenshop: '',
            }

        };
    },
    methods: {
        themDanhMuc() {
            // gửi data lên trên sever
            axios.post('/api/shop/post-data', {tenshop: this.tenshop, motashop: this.motashop, user_id: this.user_id})
            .then(response => {
                console.log(response.data.result);
                this.showErr = false;
                
            })
            .catch(error => {
                console.log(error.response.data);

                if(error.response.data.errors.tenshop) {
                    this.error.tenshop = error.response.data.errors.tenshop[0];
                }
                this.showErr = true;
            })
            // ẩn giao diện thêm
            // hiển thị giao diện loading

        }
    }

}
</script>

<style lang="scss" scoped>

</style>
