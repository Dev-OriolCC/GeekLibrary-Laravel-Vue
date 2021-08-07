<template>
    <div class="row">
        <div class="container">
            <div class="col-8 mx-auto text-center">
                <a href="#" class="h3 text-primary" @click="switchPage">Unviewed </a>
                <a href="#" class="h3 text-secondary" @click="switchPage">Viewed </a>
                <hr>
            </div>

            <div class="text-center text-dark">
                <h2>Total contact mails found: {{ totalContacts }}</h2>
            </div>

            <div v-if="displayPage == 1">
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
                                <th></th>
                            </tr>
                        </thead>
                        <tbody >
                                <tr v-for="(contact, index) in contacts">
                                    <td>{{ index+1 }}</td>
                                    <td>{{ contact.name }}</td>
                                    <td>{{ contact.email }}</td>
                                    <td>{{ contact.subject }}</td>
                                    <td><button type="button" class="btn-sm btn-primary text-white" data-toggle="modal" data-target="#messageModal">Message</button></td>
                                    <td><button @click="markViewed(contact.id)" class="btn-sm btn-success">Viewed</button></td> 

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
            <div v-else>
                <div v-if="loading">
                    <div class="text-center text-primary">
                        <div class="spinner-border mt-5" role="status" style="width: 6rem; height: 6rem;">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>
                <div v-else class="table-responsive col-12 col-sm-10 mx-auto">
                    <table class="table mt-4">
                        <thead class="table-danger">
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
                                    <td><button @click="markViewed(contact.id)" class="btn-sm btn-danger">Unview</button></td>       
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
                displayPage: 1,
                textColor: 'primary',
            }
        },

        mounted(){
            this.getResults();
            this.getUnviewedContacts();
        },

        methods: {
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
            },

            getViewedResults(page) {
                axios.get('http://localhost/v8_vue_geeklibrary/public/api/getViewedContacts?page=' + page)
                    .then(response => {
                        this.contacts = response.data.contacts.data
                        this.loading = false
                        this.totalPages = response.data.contacts.last_page;
                    })
                    .catch(error => {
                        console.log(error)
                    });
            },

            markViewed(id) {
                axios.put('http://localhost/v8_vue_geeklibrary/public/api/updateMail/'+id)
                    .then(response => {
                        location.reload();
                    })
                    .catch(error => {
                        console.log(error)
                    })
            },

            switchPage(){
                this.displayPage = !this.displayPage;
                if (this.displayPage == false) {
                    this.getViewedContacts();
                    this.getViewedResults();
                } else{
                    this.getUnviewedContacts();
                    this.getResults();
                }
            },

            getViewedContacts(){
                axios.get('http://localhost/v8_vue_geeklibrary/public/api/totalViewedContacts')
                    .then(response => {
                        this.totalContacts = response.data.totalContacts
                    })
                    .catch(error => {
                        console.log(error)
                    })
            },

            getUnviewedContacts() {
                axios.get('http://localhost/v8_vue_geeklibrary/public/api/totalUnviewedContacts')
                    .then(response => {
                        this.totalContacts = response.data.totalContacts
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