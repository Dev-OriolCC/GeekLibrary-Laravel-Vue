<template>
    <div class="row">
        <div class="container">

            <div class="card mt-4 col-sm-6 col-12 mx-auto">
                <div class="card-header"><h5>Add Book</h5></div>
                <div class="card-body">
                    <form @submit.prevent="submitForm">
                        <div class="form-group"  >
                            <label for="title">Title</label>
                            <input type="text" class="form-control" v-model="form.title" name="title" id="title" >
                        </div>
                        <div class="form-group"  >
                            <label for="author">Author</label>
                            <input type="text" class="form-control" v-model="form.author" name="author" id="author" >
                        </div>
                        <div class="form-group"  >
                            <label for="description">Description</label>
                            <input type="text" class="form-control" v-model="form.description" name="description" id="description" >
                        </div>
                        <div class="form-group"  >
                            <label for="published_at">Published At</label>
                            <input type="date" class="form-control" v-model="form.published_at" name="published_at" id="published_at" >
                        </div>
                        <div class="form-group">
                            <router-link to="/Books" class="text-white btn btn-danger">Cancel</router-link>
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        
        </div>
    </div>

</template>

<script>
export default {
    name: "AddBook",
    
    data: function () {
        return {
            form: {
                title: '',
                author: '',
                description: '',
                published_at: ''
            },
            error: false,
        }
    },

    methods: {
        submitForm() {
            axios.post('http://localhost/v8_vue_geeklibrary/public/api/books', this.form)
                .then(response => {
                    this.error = response.data;
                    this.$router.push('/Books');
                })
                .catch(error => {
                    console.log(error)
                    this.error = true
                })
        }
    }

}
</script>

<style scoped>

</style>