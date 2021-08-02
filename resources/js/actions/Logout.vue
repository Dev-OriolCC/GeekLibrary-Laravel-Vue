<template>
    
</template>

<script>
export default {
    name: "Logout",

    created() {
        axios.post('http://localhost/v8_vue_geeklibrary/public/logout', {})
            .finally(err => {
                window.location = 'http://localhost/v8_vue_geeklibrary/public/';
            })
    }
}
</script>

<style scoped>

</style>