<template>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/" class="brand-link">
            <router-link to="/" class="brand-text font-weight-light text-center text-white">
                Geek Library
            </router-link>
        </a>
        <!-- SideBar Content -->
        <div class="sidebar">
            <!-- Profile Info -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="" style="backgound-color: black;">
                    <a href="#" class="d-block ml-4">{{ this.$root.user.name }}</a>
                </div>
            </div>
            <!-- Options of Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <router-link to="/" class="nav-link">
                            <i class="fas fa-home"></i>
                            <p>Home</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/Books" class="nav-link">
                            <i class="fas fa-book"></i>
                            <p>Books</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fas fa-th"></i>
                            <p>Categories</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <router-link to="/Mails" class="nav-link">
                            <i class="fas fa-envelope"></i>
                            <p>Contact</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fas fa-cog"></i>
                            <p>Settings</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <router-link to="/Profile" class="nav-link">
                            <i class="fas fa-user"></i>
                            <p>Profile</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/logout" class="nav-link">
                        <i class="fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                        </router-link>
                    </li>
                </ul>
            </nav> <!-- End Options -->
        </div> <!-- End Sidebar -->
    </aside>

</template>

<script>

export default ({
    name: "NavigationBar",

    })
</script>

<style scoped>

</style>