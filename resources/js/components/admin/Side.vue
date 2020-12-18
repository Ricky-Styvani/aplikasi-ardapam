<template>
<div class="col-md-2" id="side">
                <ul class="list-group list-group-flush shadow-sm border-0">
                    <li  class=" list-group-item d-flex align-items-center">
                            <v-icon name="home"  ></v-icon>
                            <router-link exact  to="" class= " text-dark text-decoration-none ml-4 ">
                            Dashboard</router-link>
                    </li>
                     <li  class=" list-group-item d-flex  align-items-center">
                            <v-icon name="chart-bar" size="3x"></v-icon>
                            <router-link exact  to="" class= " text-dark text-decoration-none ml-4">
                            Laporan</router-link>
                    </li>
                     <li  class=" list-group-item d-flex  align-items-center">
                            <v-icon name="calculator" size="3x"></v-icon>
                            <router-link exact  to="" class= " text-dark text-decoration-none ml-4 ">
                            Tagihan</router-link>
                    </li>
                     <li  class=" list-group-item d-flex  align-items-center">
                            <v-icon name="bullhorn" size="3x"></v-icon>
                            <router-link exact  to="" class= " text-dark text-decoration-none ml-4 ">
                            Informasi</router-link>
                    </li>
                     <li  class=" list-group-item">
                                    <router-link exact  to="" class= " text-dark text-decoration-none d-flex justify-content-between align-items-center">
                                    <v-icon name="comments" size="3x"></v-icon>Pengaduan
                                        <span class="badge badge-primary badge-pill">14</span>
                                    </router-link>
                    </li>
                    <!--
                    <li class=" dropdown list-group-item d-flex align-items-center down">
                        <v-icon name="users" size="3x"></v-icon>
                        <a class=" dropdown-toggle text-dark text-decoration-none d-flex align-items-center ml-4 " href="#" id="Dropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Users 
                        </a>
                        <ul class=" dropdown-menu   shadow-sm border-0 "  aria-labelledby="Dropdown2">
                             <li  class=" dropdown-item list-group-item border-0  ">
                                    <router-link exact  to="/karyawans" class= " text-dark text-decoration-none">Karyawan</router-link>
                             </li>
                             <li  class=" dropdown-item list-group-item border-0  ">
                                    <router-link exact  to="/pelanggans" class= " text-dark text-decoration-none">Pelanggan</router-link>   
                            </li>
                        
                        </ul>
                    </li>
                    -->
                    <li class="dropdown list-group-item d-flex  align-items-center shadow-sm border-0">
                        
                             <v-icon name="users" size="3x"></v-icon>
                            <a class=" list-group-item border-0 dropdown-toggle text-dark text-decoration-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Users
                            </a>
                       
                        <div class="dropdown-menu mt-3" aria-labelledby="dropdownMenuButton">
                           <router-link exact  to="/karyawans" tag= "a" class= " dropdown-item text-dark text-decoration-none">Karyawan</router-link>
                            <router-link exact  to="/pelanggans" tag= "a" class= " dropdown-item text-dark text-decoration-none">Pelanggan</router-link> 
                            
                        </div>
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
    .drop{
        display:none;
    }
    .down:hover{
        display:block;
    }
    @media (max-width: 767.98px) {
        #side{
            display:none;
        }
    }
</style>
