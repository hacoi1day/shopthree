<template>
    <div>
        <!-- Begin: Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <div class="container-fluid">
                    <div class="row">
                        <a class="navbar-brand"><router-link class="tieude" :to="{name: 'home'}"><i class="fas fa-home"></i></router-link></a>
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Top mua nhiều</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Danh mục sản phẩm</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Sản phẩm nổi bật</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link"><router-link class="router-link" :to="{name: 'nguoiban'}">Trang người bán</router-link></a>
                            </li>
                        </ul>
                        <div class="float-xs-right">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0" v-show="!showInfo">
                                <li class="nav-item">
                                    <a class="nav-link"><router-link class="router-link" :to="{name: 'login'}">Đăng nhập</router-link></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"><router-link class="router-link" :to="{name: 'register'}">Đăng ký</router-link></a>
                                </li>
                            </ul>
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0" v-show="showInfo">
                                <li class="nav-item">
                                    <a class="nav-link"><router-link class="router-link" :to="{name: 'hoso'}">Xin chào, {{dataUser.name}}</router-link></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" @click="logout">Thoát</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Begin: Navbar -->
    </div>
</template>

<script>
export default {
    props: ['showInfo', 'dataUser'],

    data() {
        return {
            
        }
    },
    beforeCreate() {
        
    },
    created() {
        
    },
    methods: {
        logout() {
            this.$session.clear();
            this.$router.push('/');
            location.reload();
        }
    }
}
</script>

<style lang="scss" scoped>
    .click {
        cursor: pointer;
    }
    a {
        text-decoration: none;
    }
    nav {
        // background-image: linear-gradient(to right, rgb(241, 72, 241) , #db92e8);
        background-image: linear-gradient(141deg, #9fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
        padding: 0px;

    }
    a.navbar-brand {
        .tieude {
            color: white!important;
            font-weight: bold;
            padding: 17px;
        }
        padding: 16px;
    }

    ul.navbar-nav {
        li.nav-item {
            a.nav-link {
                color: white;
                padding: 17px;
                font-size: 17px;
                cursor: pointer;
            }
            .router-link {
                color: white;
                // padding: 17px;
                font-size: 17px;
                padding: 1px;
            }
        }
        li.nav-item:hover {
            background-color: white;
            a.nav-link {
                color: #db92e8;
                font-weight: bold;
            }
            .router-link {
                color: #db92e8;
            }
        }
    }
</style>
