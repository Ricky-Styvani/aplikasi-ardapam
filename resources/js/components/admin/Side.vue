<template>
<div class="col-md-2" id="side">
    <ul class="list-group list-group-flush shadow-sm border-0 ">
        <li v-for="route of routes" class="list-group-item" id="app">
            <router-link exact  :key="route.path" :to= "route.path" class= " text-dark text-decoration-none">{{route.label}}</router-link>   
        </li>
        
       <!-- 
           <router-link exact  to="/about" class= " list-group-item text-dark text-decoration-none">{{menu}}</router-link>
           <router-link to="/about" class=" list-group-item text-dark text-decoration-none">User</router-link>
        <a   class= " list-group-item text-dark text-decoration-none dropdown-toggle" aria-haspopup="true" 
        aria-expanded="false" data-toggle="dropdown">Users
        </a>
        <div class="dropdown-menu list-group-flush col-md-10" aria-labelledby="DropdownMenuLink">
            <router-link to="/" class= "list-group-item text-dark text-decoration-none">Pelanggan</router-link>
            <router-link to="/" class= "list-group-item text-dark text-decoration-none">admin</router-link> 
            <router-link to="/" class= "list-group-item text-dark text-decoration-none">petugas</router-link>
            <router-link to="/" class= "list-group-item text-dark text-decoration-none">manajer</router-link> 
            <router-link to="/" class= "list-group-item text-dark text-decoration-none">Tim teknis</router-link>           
        </div>
        -->
        
    </ul>
</div>
</template>

<script>
import axios from 'axios'
export default {
   /* data(){
        return{
            menu:[
                {
                label:'Dashboard',
                path:'/'},
                {
                label:'Laporan',
                path:'/about'
                },
                {label:'Users'},  
            ],
        }
    }*/
    
   data(){
       return{
           routes:this.$router.options.routes
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
