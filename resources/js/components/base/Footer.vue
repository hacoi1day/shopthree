<template>
    <div class="footer my-3">
        <!-- begin:foot0 -->
        <div class="foot0 container">
            <div class="row">
                <div class="col-3">
                    <ul>
                        <li class="tt">ShopThree</li>
                        <li>Về chúng tôi</li>
                        <li>Nhóm phát triển</li>
                        <li>Thông tin</li>
                    </ul>
                </div>
                <div class="col-3">
                    <ul>
                        <li class="tt">Danh mục</li>
                        <li>Đồ điện tử</li>
                        <li>Đồ gia dụng</li>
                        <li>...</li>
                    </ul>
                    
                </div>
                <div class="col-3">
                    <ul>
                        <li class="tt">Theo dõi chúng tôi</li>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                    
                </div>
                <div class="col-3">
                    <ul>
                        <li class="tt">Tải ứng dụng</li>
                        <li>Google Play</li>
                        <li>App Store</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end:foot0 -->
        <!-- begin:foot1 -->
        <div class="foot1 container">
            <div class="row">
                <div class="col-8">
                    <span class="fo1">@ Copy 2019 - ShopThree - Nhóm 3</span>
                </div>
                <div class="col-4">
                    <div class="change-language">
                        <span>Chọn ngôn ngữ: </span>
                        <ul>
                            <li>Tiếng Việt</li>
                            <li>English</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:foot1 -->

        <!-- begin:foot2 -->
        <div class="foot2 container">
            <div class="row">
                <div class="col-12">
                    
                </div>
            </div>
        </div>
        <!-- end:foot2 -->
    </div>
</template>

<script>
export default {
    
}
</script>

<style lang="scss" scoped>
    .footer {
        padding-top: 100px;
        .foot0 {
            ul {
                list-style-type: none;
                li.tt {
                    text-transform: uppercase;
                    font-size: 17px;
                    font-weight: bold;
                }
                li {
                    font-size: 15px;
                }
            }
        }
        .foot1 {
            .fo1 {
                font-size: 15px;
                color: gray;
                // float: left;
            }
            .change-language {
                // float: right;
                color: gray;
                span {
                    float: left;
                }
                ul {
                    list-style-type: none;
                    float: left;
                    li {
                        float: left;
                        margin-right: 5px;
                    }
                }
            }
        }
    }
</style>
