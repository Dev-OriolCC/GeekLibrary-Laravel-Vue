<template>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/" class="brand-link ">
            <span class="brand-text font-weight-light text-center text-white">Geek Library</span>
        </a>
        <!-- SideBar Content -->
        <div class="sidebar">
            <!-- Profile Info -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info" style="backgound-color: black;">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>
            <!-- Options of Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>Option_1</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>Option_2</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>Option_3</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <router-link to="/logout" class="nav-link">
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