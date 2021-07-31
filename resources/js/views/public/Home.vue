<template>
    <div>
            <v-container>
               <h4 class="col-12 text-center">Welcome to Geek Library!</h4>
            </v-container>
    </div>
</template>

<script>
import PublicHeader from '../../components/PublicHeader.vue';
export default ({
    name: "Home",
    components: {
        PublicHeader,
    },
    
    mounted() {
        console.log('Good')
    }

})
</script>

<style scoped>

</style>
