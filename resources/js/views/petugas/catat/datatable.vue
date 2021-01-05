<template>
 <div class="table-responsive">
     <table id="my-table" class="table table-borderless table-striped table-hover display datatable" style=" width:100%">
        <thead>
                        <tr >
                            <th>#</th>
                            <th>Nama</th>
                            <th>Token</th>
                            <th>Rt</th>
                            <th>Meter Awal</th>
                            <th>Meter Akhir</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody id="list" >
                        
                        <tr v-for="(item,index) in pelanggans" :key="item.id">
                                <th scope="row">{{ index+1}}</th>
                                <td >{{ item.nama }}</td>
                                <td >{{ item.token }}</td>
                                <td>{{ item.id_alamat }}</td>
                                <td>{{ item.meter_awal}}</td>
                                <td>{{item.meter_akhir}}</td>
                                <td >
                                     <router-link :to="{name:'Catats.edit', params: {pelangganNama: item.id_pelanggan}}" tag="button" class="btn btn-success btn-sm"><v-icon name="pencil-alt"></v-icon></router-link>
                                </td>
                            
                        </tr>
                        
                    </tbody>
    </table>
 </div>
</template>

<script>
import $ from 'jquery';
import dt from 'datatables.net-bs4';
require( 'datatables.net-buttons-bs4' )
require( 'datatables.net-buttons/js/dataTables.buttons' );
require( 'datatables.net-buttons/js/buttons.html5' );
import print from 'datatables.net-buttons/js/buttons.print.js';
import jsZip from 'jszip/dist/jszip'
import pdfMake from 'pdfmake/build/pdfmake'
import pdfFonts from 'pdfmake/build/vfs_fonts'
pdfMake.vfs = pdfFonts.pdfMake.vfs;
window.JSZip = jsZip
import Icon from 'vue-awesome/components/Icon';
export default {
mounted(){
    this.getData();
    
}, 
   name: "Table",
data(){
    return{
        pelanggans :[],
    }
},

methods:{
    tabla(){
          $(document).ready(function() {
         $("#my-table").DataTable({
            "scrollY": 250,
             dom: "<'row'<'col-12 col-sm-12 col-md-8'l><'col-6 col-md-3'f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 'p>>"
            
         });
        });
        },
    async getData() {
               let response= await axios.get('http://127.0.0.1:8000/api/catats')
                if(response.status==200) {
                    this.pelanggans = response.data.data
                    this.tabla()
                }
    }

}
}
</script>

<style>

</style>