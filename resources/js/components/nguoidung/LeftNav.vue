<template>
    <div class="content">
        <div class="thongtin text-center">
            <img src="https://via.placeholder.com/60" alt="avatar">
            <h6>hacoi1day</h6>
            <a href="">Sửa hồ sơ</a>
        </div>
        <ul>
            <li>
                <a href=""><router-link :to="{name: 'hoso'}">Tài khoản của tôi</router-link></a>
                <ul>
                    <li><a href=""><router-link :to="{name: 'hoso'}">Hồ sơ</router-link></a></li>
                    <li><a href=""><router-link :to="{name: 'diachi'}">Địa chỉ</router-link></a></li>
                    <li><a href=""><router-link :to="{name: 'doimatkhau'}">Đổi mật khẩu</router-link></a></li>
                </ul>
            </li>
            <li><a href="">Đơn mua</a></li>
            <li><a href="">Thông báo</a></li>
        </ul>
    </div>
</template>

<script>
export default {
    
}
</script>

<style lang="scss" scoped>
    div.content {
        div.thongtin {
            padding-left: 20px;
            img {
                // float: left;
                margin: 0 auto;
            }
            h6 {
                font-size: 17px;
            }
            a {
                text-decoration: none;
            }
        }
        ul {
            margin-top: 15px;
            list-style-type: circle;
            li {
                a {
                    text-decoration: none;
                    color: #d755ee;
                }
            }
            li {
                a:hover {
                    font-weight: bold;
                }
            }
            ul {
                margin-top: 0px;
            }
        }
    }
</style>