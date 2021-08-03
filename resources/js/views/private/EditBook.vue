<template>
     <div class="row">
        <div class="container">

            <div class="card mt-4 col-sm-6 col-12 mx-auto">
                <div class="card-header"><h5>Edit Book</h5></div>
                <div class="card-body">
                    <form >
                        <div class="form-group"  >
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
                        <div class="form-group">
                            <router-link to="/Books" class="text-white btn btn-danger">Cancel</router-link>
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </form>
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
            
            book: null
        }
    },

    mounted(){
        axios.get('http://localhost/v8_vue_geeklibrary/public/api/book/'+this.$route.params.id+'/edit')
            .then(response => {
                this.book = response.data;
                console.log(this.book);
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