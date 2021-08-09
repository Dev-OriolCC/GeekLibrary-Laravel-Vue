<template>
    <div class="row">
        <div class="container">
            <div class="col-12 col-sm-10">
                <router-link to="/" class="btn btn-success text-white mt-4">Add Category</router-link>
            </div>

            <div v-if="loading">
                <div class="text-center text-primary">
                    <div class="spinner-border mt-5" role="status" style="width: 6rem; height: 6rem;">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>

            <div v-else class="table-responsive col-12 col-sm-10 mx-auto">
                <table class="table mt-4">
                    <thead class="table-primary">
                        <tr>
                            <th>Name</th>
                            <th>Total Books</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody >
                            <tr v-for="category in categories">
                                <td>{{ category.name }}</td>
                                <td>1</td>
                                <td><router-link :to="'/Categories/'+category.id+'/Edit'" class="text-white  btn btn-info">Edit</router-link></td>
                                <td><a href="#" @click="destroy(category.id)" class="btn btn-danger text-white">Delete</a></td>       
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Categories",

        data: function () {
            return {
                categories: null,
                loading: true
            }
        },

        mounted(){
            axios.get('http://localhost/v8_vue_geeklibrary/public/api/getCategories')
                .then(response => {
                    this.categories = response.data.categories
                    this.loading = false
                })
                .catch(error => {
                    console.log(error)
                })
        },

        methods: {
            destroy: function($id) {
                axios.delete('http://localhost/v8_vue_geeklibrary/public/api/destroyCategory/'+$id)
                    .then(response => {
                        window.location.reload();
                    })
                    .catch(errors => {
                        console.log(errors)
                        
                    })
            }
        }

    }
</script>

<style scoped>

</style>