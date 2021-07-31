<template>
    <div>
        <v-app app>
            <router-view></router-view>
        </v-app >
    </div>
    
</template>

<script>

export default ({
    name: "App",  
    
    data: function () {
        return {
            title: '',
            auth: this.user,
        }
    },

    props: [
        'user'
    ],

    watch: {
        $route(to, from) {
            this.title = to.meta.title
        },


        title() {
            document.title = this.title + ' | Geek Library '
        },
    }

})
</script>

<style scoped>

</style>
