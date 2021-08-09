<template>
     <div class="row">
        <div class="container">

            <div class="card mt-4 col-sm-6 col-12 mx-auto">
                <div class="card-header"><h5>Edit Book</h5></div>
                <div class="card-body">
                    <div v-if="loading">
                        <div class="text-center text-primary">
                            <div class="spinner-border mt-5" role="status" style="width: 6rem; height: 6rem;">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </div>
                    <div v-else>
                        <form @submit.prevent="updateBook">
                            <div class="form-group" >
                                <label for="title">Title</label>
                                <input type="text" class="form-control" v-model="book.title" name="title" id="title" >
                            </div>
                            <div class="form-group"  >
                                <label for="author">Author</label>
                                <input type="text" class="form-control" v-model="book.author" name="author" id="author" >
                            </div>
                            <div class="form-group"  >
                                <label for="description">Description</label>
                                <input type="text" class="form-control" v-model="book.description" name="description" id="description" >
                            </div>
                            <div class="form-group"  >
                                <label for="published_at">Published At</label><br>
                                {{ book.published_at }}
                                <input type="date" class="form-control" v-model="book.published_at" name="published_at" id="published_at" >
                            </div>
                            <!-- NEW Category section -->
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select name="category_id" v-model="book.category_id" id="category_id" class="form-control">
                                    <option v-for="category in categories"
                                    :value="category.id"
                                    >{{ category.name }}</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <router-link to="/Books" class="text-white btn btn-danger">Cancel</router-link>
                                <button type="submit" class="text-white btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div> <!-- Container -->
    </div>
</template>

<script>
export default {
    name: "EditBook",

    data: function () {
        return {
            book: null,
            loading: true,
            categories: null
        }
    },

    methods: {
        updateBook(){
            axios.put('http://localhost/v8_vue_geeklibrary/public/api/book/'+this.$route.params.id, this.book)
                .then(response => {
                    console.log(response)
                    this.$router.push('/Books');
                })
                .catch(error => {
                    console.log(error)
                })
        }
    },

    mounted(){
        axios.get('http://localhost/v8_vue_geeklibrary/public/api/book/'+this.$route.params.id+'/edit')
            .then(response => {
                this.book = response.data.book;
                this.categories = response.data.categories
                this.loading = false;
            })
            .catch(errors => {
                console.log(errors);
                this.errors = errors.response.data.errors;
                this.loading = false;
            })
    }
}
</script>

<style scoped>

</style>