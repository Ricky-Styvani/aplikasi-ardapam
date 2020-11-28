<template>
 <div class="table-responsive">
     <table id="example" class="table table-borderless table-striped table-hover display" style="width:100%">
        <thead>
                        <tr >
                            <th>#</th>
                            <th>Nama</th>
                            <th>No.Telp</th>
                            <th>Level</th>
                            <th>Edited</th>
                            <th>action</th>
                      <!--     <th>&nbsp;</th> -->
                        </tr>
                    </thead>
                    <tbody id="list" >
                        <tr v-for="(item,index) in karyawans" :key="item.id">
                            <th scope="row">{{ index+1}}</th>
                            <td >{{ item.name }}</td>
                            <td>{{ item.no_telp }}</td>
                            <td>{{ item.level }}</td>
                            <td>{{ item.updated_at }}</td>
                            <td >
                                <router-link :to="{name:'karyawans.edit', params: {karyawanName: item.name}}" tag="button" class="btn btn-success btn-sm">Edit</router-link>
                            </td> 
                        </tr>
                    </tbody>
    </table>
 </div>
</template>

<script>
import $ from 'jquery';
import dt from 'datatables.net-bs4';
export default {
mounted(){
    this.getData();
    
}, 
   name: "Table",
data(){
    return{
        karyawans :[],
    }
},

methods:{
    tabla(){
          $(document).ready(function() {
         $("#example").DataTable();
        });
        },
    async getData() {
               let response= await axios.get('http://127.0.0.1:8000/api/karyawans')
                if(response.status==200) {
                    this.karyawans = response.data.data
                    this.tabla()
                }
    }

}
}
</script>

<style>

</style>