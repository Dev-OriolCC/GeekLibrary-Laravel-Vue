<template>
    <div class="row">
        <div class="container">
            <div class="col-sm-3 col-12 mx-auto">
                <div class="text-center card-box">
                    <div class="member-card pt-2 pb-2">
                        <div class="thumb-lg member-thumb mx-auto"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                        <div class="">
                            <h4>{{ this.$root.user.name }}</h4>
                            <p class="text-info h5">{{ this.$root.user.email }}</p>
                        </div>
                        <button type="button" class="btn btn-primary mt-3 text-white">Edit Profile</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Profile",

    mounted() {

    }

}
</script>

<style scoped>

</style>