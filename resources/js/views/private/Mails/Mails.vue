<template>
    <div class="row">
        <div class="container">

            <div class="text-center text-dark">
                <h2>Total contact mails found: {{ totalContacts }}</h2>
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
                            <th></th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody >
                            <tr v-for="(contact, index) in contacts">
                                <td>{{ index+1 }}</td>
                                <td>{{ contact.name }}</td>
                                <td>{{ contact.email }}</td>
                                <td>{{ contact.subject }}</td>
                                <td></td>       
                            </tr>
                    </tbody>
                </table>
                    <div class="d-flex ">
                        <ul v-for="(page, index) in totalPages">
                            <button @click="getResults(index+1)" class="btn-sm btn-info">{{ index+1 }}</button>
                        </ul>
                    </div>
            </div>
        </div>
    </div>    
</template>

<script>
    export default {
        name: "Mails",
        
        data: function () {
            return {
                contacts: null,
                loading: true,
                totalContacts: 0,
                totalPages: 1,
            }
        },

        mounted(){
            this.getResults();

            axios.get('http://localhost/v8_vue_geeklibrary/public/api/totalContacts')
                .then(response => {
                    this.totalContacts = response.data.totalContacts
                })
                .catch(error => {
                    console.log(error)
                })
        },

        methods: {
		// Our method to GET results from a Laravel endpoint
            getResults(page) {
                axios.get('http://localhost/v8_vue_geeklibrary/public/api/getContacts?page=' + page)
                    .then(response => {
                        this.contacts = response.data.contacts.data
                        this.loading = false
                        this.totalPages = response.data.contacts.last_page;
                    })
                    .catch(error => {
                        console.log(error)
                    });
            }
        }

    }
</script>

<style scoped>

</style>