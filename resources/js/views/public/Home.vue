<template>
    <div>
        <NavigationBar />
            <v-container>
               <h4 class="col-12 text-center">Welcome to Geek Library 2.0!</h4>
            </v-container>
    </div>
</template>

<script>
import NavigationBar from '../../components/NavigationBar.vue';

export default ({
    name: "Home",
    components: {
        NavigationBar,
    },
    
    mounted() {
        console.log('Good')
    }

})
</script>

<style scoped>

</style>
