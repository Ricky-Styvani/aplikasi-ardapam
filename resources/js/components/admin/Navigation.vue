<template>
    <nav class="navbar flex-top navbar-expand-lg navbar-light bg-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">ARDAPAM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
             <div  v-for="route of routes" class="collapse navbar-collapse"  id="navbarNavDropdown">
                 <div id="nav-side">
                        <ul  class="navbar-nav ml-auto">
                            <li  class="nav-item">
                                <router-link exact  :key="route.path" :to= "route.path" class= " text-dark text-decoration-none">{{route.label}}</router-link> 
                            </li>
                            <!--<li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                users
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Logout</a>

                                </div>

                            </li>
                        
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown link
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Logout</a>

                            </div>
                            </li>
                            -->
                         </ul>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown log">
                
                <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Logout</a>

                    </div>
                </li>
                </ul>
                </div>
            
        </div>
    </nav>
</template>

<script>
export default {
     data(){
       return{
           routes:this.$router.options.routes
       };
   }
}

</script>
<style>
#nav-side{
    display:none;
}

@media (max-width: 767.98px) { 
    #nav-side{
    display:block;
    }
    #log{
        display:none;
    }
    li{
        text-align :center;
    }
}

</style>