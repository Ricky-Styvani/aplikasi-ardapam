<template>
<div class="col-md-2" id="side">
    <ul class="list-group list-group-flush shadow-sm border-0 " id="app" >
        <li  class="list-group-item">
            <router-link exact  to="/karyawans" class= " text-dark text-decoration-none">Karyawan</router-link>
        </li>
        <li  class="list-group-item">
             <router-link exact  to="/pelanggans" class= " text-dark text-decoration-none">Pelanggan</router-link>   
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
