<template>
    <div class="row">
        <h4 class="text-center col-12">Welcome to Geek Library Administration Panel</h4>
        <!-- Box - Total Books -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <div v-if=" this.totalBooks == null ">
                        <div class="spinner-border text-light mb-4" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                    <div v-else>
                        <h3>{{ this.totalBooks }}</h3>
                    </div>
                    <p>Total Books</p>
                </div>
                <div class="icon">
                    <i class="fas fa-book"></i>
                </div>
                <router-link class="small-box-footer" to="/Books">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </router-link>
            </div>
        </div>
         <!-- Box - Total Categories -->
        <div class="col-lg-3 col-6">
             <div class="small-box bg-info">
                <div class="inner">
                    <div v-if=" this.totalCategories == null ">
                        <div class="spinner-border text-light mb-4" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                    <div v-else>
                        <h3>{{ this.totalCategories }}</h3>
                    </div>
                    <p>Total Categories</p>
                </div>
                    <div class="icon">
                     <i class="fas fa-th"></i>
                 </div>
                <router-link to="/Categories" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </router-link>
               </div>
         </div>
         <div class="col-lg-3 col-6">
             <div class="small-box bg-info">
                <div class="inner">
                    <div v-if=" this.totalContacts == null ">
                        <div class="spinner-border text-light mb-4" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                    <div v-else>
                        <h3>{{ this.totalContacts }}</h3>
                    </div>
                    <p>Contact Messages</p>
                </div>
                    <div class="icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <router-link to="/Mails" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </router-link>
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

    data: function () {
        return {
            totalBooks: null,
            totalContacts: null,
            totalCategories: null,
        }
    },
    
    mounted() {
        axios.get('http://localhost/v8_vue_geeklibrary/public/api/totalBooks/')
            .then(response => {
                this.totalBooks = response.data.totalBooks;
                console.log(this.totalBooks)
            })
            .catch(error => {
                console.log(error)
            })

        axios.get('http://localhost/v8_vue_geeklibrary/public/api/totalContacts/')
            .then(response => {
                this.totalContacts = response.data.totalContacts;
                console.log(this.totalContacts)
            })
            .catch(error => {
                console.log(error)
            })
        
        axios.get('http://localhost/v8_vue_geeklibrary/public/api/getCategories')
            .then(response => {
                this.totalCategories = response.data.totalCategories
            })
            .catch(error => {
                console.log(error)
            })

        console.log('Good')
    }

})
</script>

<style scoped>

</style>
