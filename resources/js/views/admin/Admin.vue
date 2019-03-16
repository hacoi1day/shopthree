<template>
    <div class="container" id="#app2">
        <Nav @selected="selected"></Nav>
        <Category v-if="showView == 'category'"></Category>
        <p>
            <router-link :to="{name: 'admin.login'}">Login</router-link>
            <router-link :to="{name: 'admin.register'}">Register</router-link>
        </p>
        <div class="content">
            <router-view></router-view>
        </div>

    </div>
</template>

<script>
import Nav from './Nav.vue';
import Category from './Category.vue';
export default {
    components: {
        Nav,
        Category,
    },
    data() {
        return {
            showView: '',
        };
    },
    methods: {
        selected(showView) {
            console.log(showView);
            this.showView = showView;
        }
    }
}
</script>

<style lang="scss" scoped>
    
</style>