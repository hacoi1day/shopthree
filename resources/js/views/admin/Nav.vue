<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Trang quản trị</a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link click" @click="showDanhmuc">Danh mục</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click"><router-link :to="{name: 'admin.login'}">Admin Login</router-link></a>
                    </li>
                </ul>
                
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    data() {
        return {
            showView: ''
        };
    },
    methods: {
        showDanhmuc() {
            this.showView = 'category';
            this.$emit('selected', this.showView);
        }
    }

}
</script>

<style lang="scss">
    .click {
        cursor: pointer;
    }
</style>