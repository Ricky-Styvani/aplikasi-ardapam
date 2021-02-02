<template>
<div class="col-md-2" id="side">
                <ul class="list-group list-group-flush shadow-sm border-0">
                    <li  class=" list-group-item d-flex align-items-center">
                            <v-icon name="home"  ></v-icon>
                            <router-link exact  to="" class= " text-dark text-decoration-none ml-4 ">
                            Dashboard</router-link>
                    </li>

                     <li  class=" list-group-item d-flex align-items-center">
                            <v-icon name="calculator"  ></v-icon>
                            <router-link exact  to="/catats" class= " text-dark text-decoration-none ml-4 ">
                            Taghan</router-link>
                    </li>

                     <li  class=" list-group-item d-flex align-items-center">
                         <v-icon name="file-alt"  ></v-icon>
                            <router-link exact  to="" class= " text-dark text-decoration-none ml-4 ">
                            Transaksi</router-link>
                    </li>

                     <li  class=" list-group-item d-flex align-items-center">
                            <v-icon name="user"  ></v-icon>
                            <router-link exact  to="" class= " text-dark text-decoration-none ml-4 ">
                            Profil</router-link>
                    </li>
                </ul>
</div>
</template>

<script>
import axios from 'axios'
export default {
    Name: 'Side',
   data(){
       return{
       };
   }
}
</script>
<style>
 @media (max-width: 767.98px) {
        #side{
            display:none;
        }
    }
</style>
