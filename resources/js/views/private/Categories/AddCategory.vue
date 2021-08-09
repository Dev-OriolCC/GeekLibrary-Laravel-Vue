<template>
    <div class="row">
        <div class="container">
            <div class="card mt-4 col-sm-6 col-12 mx-auto">
                <div class="card-header"><h5>Add Category</h5></div>
                <div class="card-body">
                    <form @submit.prevent="submitCategory">
                        <div class="form-group" >
                            <label for="name">Name: </label>
                            <input type="text" class="form-control" v-model="form.name" name="name" id="name" required>
                        </div>

                        <div class="form-group">
                            <router-link to="/Categories" class="btn btn-danger text-white">Cancel</router-link>
                            <button type="submit" class="btn btn-success text-white">Add</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</template>
<script>
    export default {
        name: "AddCategory",

        data: function() {
            return {
                form: {
                    name: '',
                }
            }
        },

        methods: {
            submitCategory: function() {
                axios.post('http://localhost/v8_vue_geeklibrary/public/api/storeCategory', this.form)
                    .then(response => {
                        this.$router.push('/Categories');
                    })
                    .catch(error => {
                        console.log('ERROR')
                    })
            }
        }

    }
</script>

<style scoped>

</style>