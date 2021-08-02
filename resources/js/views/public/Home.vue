<template>
    <div class="row">
        <h4 class="text-center col-12">Welcome to Geek Library Administration Panel</h4>
        <!-- Box - Total Books -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>
                    <p>Total Books</p>
                </div>
                <div class="icon">
                    <i class="fas fa-book"></i>
                </div>
                 <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
         <!-- Box - Total Categories -->
        <div class="col-lg-3 col-6">
             <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>
                    <p>Total Categories</p>
                </div>
                    <div class="icon">
                     <i class="fas fa-th"></i>
                 </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
               </div>
         </div>
    </div>          
</template>

<script>
import NavigationBar from '../../components/NavigationBar.vue';
import Header from '../../components/Header.vue';

export default ({
    name: "Home",
    components: {
        NavigationBar, Header
    },
    
    mounted() {
        console.log('Good')
    }

})
</script>

<style scoped>

</style>
