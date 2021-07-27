<template>
    <div>
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light primary col-12">
                <router-link to="/">
                    <a class="navbar-brand text-white ml-3 mt-2" href="#"><h3>Geek Library</h3></a>
                </router-link>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link text-white h5 mt-2" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white h5 mt-2" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white h5 mt-2" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white h5 mt-2" href="#">Link</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 mr-5 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
                </nav>
        </div>
    </div>
</template>

<script>

export default ({
    name: "PublicHeader",
})
</script>

<style scoped>

.v-col {
    background-color: 8FB3F6;
}

</style>
