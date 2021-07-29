<template>
    <div>
        <PublicHeader />
        <v-container class="mt-4">
            <v-card outlined class="mx-auto" max-width="600">
                <v-card-title class="font-weight-bold">Contact Form</v-card-title>
                <v-card-text>
                    <v-form v-model="valid">
                        <v-row class="justify-center">
                            <v-col cols="12" md="11">
                                <v-text-field
                                    v-model="name" :rules="nameRules" 
                                    :counter="10" label="Name" required>
                                </v-text-field>
                            </v-col>
                            <v-col cols="12" md="11">
                                <v-text-field
                                    v-model="email" :rules="emailRules"
                                    label="E-mail" required>
                                    </v-text-field>
                            </v-col>
                            <v-col cols="12" md="11">
                                <v-text-field
                                    v-model="subject" :rules="subjectRules"
                                    :counter="20" label="Subject" required>
                                </v-text-field>
                            </v-col>
                            <v-col cols="12" md="11">
                                <v-textarea
                                    v-model="message" :rules="messageRules"
                                    :counter="120" label="Message" required>
                                </v-textarea>{{ this.messageRules.v }}
                            </v-col>
                        </v-row>
                    </v-form>
                </v-card-text>
            </v-card>
        </v-container>

    </div>
</template>

<script>
import PublicHeader from '../../components/PublicHeader.vue';
export default {
    name: "Contact",
    components: {
        PublicHeader
    },
     data: () => ({
        valid: false,
        // Name
        firstname: '',
        nameRules: [
            v => !!v || 'Name is required',
            v => v.length <= 10 || 'Name must be less than 10 characters',
        ],
        // Email
        email: '',
        emailRules: [
        v => !!v || 'E-mail is required',
        v => /.+@.+/.test(v) || 'E-mail must be valid',
        ],
        // Subject
        subject: '',
        subjectRules: [
            v => !!v || 'Subject is required',
            v => v.length <= 20 || 'Subject must be less than 20 characters',
        ],
        // Message
        message: '',
        messageRules: [
            v => !!v || 'Message is required',
            v => v.length <= 120|| 'Message must be less than 120 characters',
        ],


    }),
}
</script>

<style scoped>

</style>