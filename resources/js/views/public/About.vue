<template>
    <div>
        <PublicHeader />
        <v-container class="mt-4">
            <v-card outlined class="mx-auto" max-width="600">
                <v-card-title class="font-weight-bold">
                    Geek Library
                </v-card-title>
                <v-img height="250"
                src="https://cdn1.vectorstock.com/i/1000x1000/36/15/unhappy-nerd-boy-sitting-in-school-library-vector-21433615.jpg"
                ></v-img>
                <v-card-text>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati fuga, distinctio accusamus est quas adipisci quibusdam tempora, praesentium id quos sapiente mollitia impedit. Eum dolores maiores unde atque, magni sit.
                    Nihil deserunt commodi quae pariatur vitae nobis, libero accusantium veniam sequi deleniti quis provident praesentium modi excepturi velit iste laboriosam minima, quam recusandae natus cum. Ipsam dicta laboriosam officia quas?
                    Corporis quidem quam sapiente totam vero vitae quis, minus architecto esse laudantium earum placeat amet, quod minima illum natus necessitatibus incidunt ad recusandae aut rerum aliquam similique corrupti quas. Soluta!
                    Laboriosam nihil perspiciatis libero accusantium, cumque impedit laborum vel sint, tempore, quasi totam porro deserunt nostrum delectus aliquam. Et necessitatibus mollitia aperiam repudiandae illo temporibus esse ipsum repellendus natus vel?
                    Illo assumenda delectus, aspernatur rem doloribus qui dolorum amet, cupiditate quibusdam, ipsam libero odio numquam! Impedit maxime, placeat quas doloribus, beatae minus soluta quod deserunt, optio doloremque earum dolores iste.</p>
                    <v-card-actions>
                        <router-link to="/Contact">
                            <v-btn color="primary">Contact</v-btn>
                        </router-link>
                    </v-card-actions>
                </v-card-text>
            </v-card>
        </v-container>
    </div>
</template>

<script>
import PublicHeader from '../../components/PublicHeader.vue';

export default ({
    name: "About",
    components: {
        PublicHeader
    }


})
</script>

<style scoped>



</style>
