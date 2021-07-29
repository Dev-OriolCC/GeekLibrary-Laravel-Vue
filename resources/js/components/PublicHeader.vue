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
                            <router-link to="/">
                                <a class="nav-link text-white h5 mt-2" href="#">Home <span class="sr-only">(current)</span></a>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/About">
                                <a class="nav-link text-white h5 mt-2" href="#">About</a>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/Contact">
                                <a class="nav-link text-white h5 mt-2" href="#">Contact</a>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white h5 mt-2" href="#">Extra</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 mr-5 my-lg-0">
                        <input class="form-control ml-4 mr-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success ml-4 my-2 my-sm-0 " type="submit">Search</button>
                    </form>
                    <div class="col-12 col-sm-2 mt-2">
                        <route-link to="/" class="mx-3"><a href="" class="h5 text-white">Login</a></route-link>
                        <route-link to="/" class="mx-3"><a href="" class="h5 text-white">Register</a></route-link>
                    </div>
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
