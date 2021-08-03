<template>
    <div class="row">
        <div class="container">
            <div class="col-12 col-sm-10">
                <router-link to="/AddBook" class="btn btn-success text-white mt-4">Add Book</router-link>
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
                            <th>Title</th>
                            <th>Description</th>
                            <th>Author</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody v-for="book in books">
                            <tr>
                                <th>{{ book.title }}</th>
                                <th>{{ book.description }}</th>
                                <th>{{ book.author }}</th>
                                <th><button class="btn btn-danger">Delete</button></th>
                                <th><router-link :to="'/Book/'+book.id+'/Edit'" class="text-white btn btn-info">Edit</router-link></th>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>    
</template>

<script>
export default {
    name: "Books",

    data: function () {
        return {
            books: null,
            loading: true,
        }
    },

    mounted(){
        axios.get('http://localhost/v8_vue_geeklibrary/public/api/books/')
            .then(response => {
                this.books = response.data
                this.loading = false
                console.log(this.books)
            })
            .catch(error => {
                console.log(error)
            })
    }
}
</script>

<style scoped>

</style>