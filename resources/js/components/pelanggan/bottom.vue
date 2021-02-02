<template>
 <!-- <nav class="navbar fixed-bottom navbar-light bg-light bg-white shadow-sm justify-content-center">
      <div class="collapse navbar-collapse">
          <ul class="navbar-nav  ">
              <li class="nav-item ">
                  <div class="container ">
                <v-icon name="home"  ></v-icon>
                </div>
                <router-link exact  to="" tag= "a" class= " text-dark text-decoration-none ml-4 ">
                 Dashboard</router-link>
              </li>
              <li class="nav-item ">
                  <div class="container ">
                <v-icon name="home"  ></v-icon>
                </div>
                <router-link exact  to="" tag= "a" class= " text-dark text-decoration-none ml-4 ">
                 Catat</router-link>
              </li>
               <li class="nav-item ">
                  <div class="container ">
                <v-icon name="home"  ></v-icon>
                </div>
                <router-link exact  to="" tag= "a" class= " text-dark text-decoration-none ml-4 ">
                 Bayar</router-link>
              </li>
              <li class="nav-item ">
                  <div class="container ">
                <v-icon name="home"  ></v-icon>
                </div>
                <router-link exact  to="" tag= "a" class= " text-dark text-decoration-none ml-4 ">
                 Profil</router-link>
              </li>
            </ul>
        </div>
    </nav>
    -->
    <nav class="navbar navbar-expand navbar-light bg-light shadow-lg fixed-bottom bg-white d-md-none d-lg-none d-xl-none " id="bottom">
  <div class="collapse navbar-collapse "  style="text-align:center" id="navbarSupportedContent">
    <ul class="navbar-nav nav-justified w-100">
       <li class="nav-item ">
                  <div class="container justify-content-center">
                <v-icon name="home"  ></v-icon>
                </div>
          <router-link exact  to="" tag= "a" class= " text-dark text-decoration-none ">Dashboard</router-link>
        </li>
        <li class="nav-item ">
                  <div class="container justify-content-center ">
                <v-icon name="calculator"  ></v-icon>
                </div>
                <router-link exact  to="/catat" tag= "a" class= " text-dark text-decoration-none  ">
                Tagihan</router-link>
         </li>
               <li class="nav-item ">
                  <div class="container justify-content-center ">
                <v-icon name="file-alt"  ></v-icon>
                </div>
                <router-link exact  to="" tag= "a" class= " text-dark text-decoration-none  ">
                Transaksi</router-link>
          </li>
              <li class="nav-item ">
                  <div class="container justify-content-center ">
                <v-icon name="user" class="mx-auto"  ></v-icon>
                </div>
                <router-link exact  to="" tag= "a" class= " text-dark text-decoration-none ">
                 Profil</router-link>
              </li>
      
    </ul>
    </div>
</nav>
</template>

<script>
export default {
  Name: 'Bottom',
}
</script>

<style>
#bottom{
  display: none;
}
@media (max-width: 767.98px) {
        #bottom{
            display:block;
        }
    }
</style>