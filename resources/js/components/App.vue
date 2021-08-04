<template>
    <div>
        <v-app app>
            <div class="wrapper">
                <Header />
                <NavigationBar />
                <div class="content-wrapper">
                    <section class="content">
                        <div class="container-fluid">
                            <!-- Main Container - Content -->
                            <router-view></router-view>         
                        </div>
                    </section>
                </div>
            </div>
        </v-app >
    </div>
    
</template>

<script>
import NavigationBar from './NavigationBar.vue';
import Header from './Header.vue';

export default ({
    name: "App",  
    
    data: function () {
        return {
            title: '',
        }
    },

    components: {
        NavigationBar, Header
    },

    props: {
        user: String
    },

    watch: {
        $route(to, from) {
            this.title = to.meta.title
        },


        title() {
            document.title = this.title + ' | Geek Library '
        },
    },

    created() {
        this.$root.token = window.Laravel.token;
        this.$root.user = window.Laravel.user;
    }

})
</script>

<style scoped>

</style>
