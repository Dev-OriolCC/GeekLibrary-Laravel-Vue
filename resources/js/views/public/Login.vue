<template>
    <div>
        <div class="container mt-4">
            <div class="card col-12 col-sm-6 mx-auto">
                <div class="card-header">
                    <h4 class="text-dark text-center">Login</h4>
                </div>
                <div class="card-body">
                    <form @submit.prevent="submitLogin">
                        <form-group>
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control" v-model="email">
                        </form-group>
                        <form-group>
                            <label for="password">Password:</label>
                            <input type="text" name="password" class="form-control" v-model="password">
                        </form-group>
                        <form-group>
                            <button class="btn btn-success mt-2">Login</button>
                        </form-group>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default ({
    name: "Login",
    components: {
        
    },
    data: function () {
        return {
            form: {
                'email': '',
                'password': ''
            }
        }
    },
    methods: {
        submitLogin: function () {
            console.log(this.form.password)
        }
    }

})
</script>

<style scoped>



</style>
