<template>
    <div class="row">
        <div class="container">
             <div class="card mt-4 col-sm-6 col-12 mx-auto">
                <div class="card-header"><h5>Edit category</h5></div>
                <div class="card-body">
                    <div v-if="loading">
                        <div class="text-center text-primary">
                            <div class="spinner-border mt-5" role="status" style="width: 6rem; height: 6rem;">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </div>
                    <div v-else>
                        <form @submit.prevent="updateCategory">
                            <div class="form-group" >
                                <label for="name">Title</label>
                                <input type="text" class="form-control" v-model="category.name" name="name" id="name" required>
                            </div>
                            <div class="form-group">
                                <router-link to="/Categories" class="text-white btn btn-danger">Cancel</router-link>
                                <button type="submit" class="text-white btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "EditCategory",

        data: function() {
            return {
                category: null,
                loading: true,
            }
        },

        mounted() {
            axios.get('http://localhost/v8_vue_geeklibrary/public/api/showCategory/'+this.$route.params.id+'/edit')
            .then(response => {
                this.category = response.data.category;
                this.loading = false;
            })
            .catch(errors => {
                this.errors = errors.response.data.errors;
                this.loading = false;
            })
        },

        methods: {
            updateCategory(){
                axios.put('http://localhost/v8_vue_geeklibrary/public/api/updateCategory/'+this.$route.params.id, this.category)
                    .then(response => {
                        this.$router.push('/Categories');
                    })
                    .catch(error => {
                        console.log(error)
                    })
        }
        }
    
    }
</script>

<style scoped>

</style>