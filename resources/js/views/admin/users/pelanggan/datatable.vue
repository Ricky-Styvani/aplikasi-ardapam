<template>
 <div class="table-responsive">
     <table id="my-table" class="table table-borderless table-striped table-hover display datatable" style="">
        <thead>
                        <tr >
                            <th>#</th>
                            <th>Nama</th>
                            <th>Token</th>
                            <th>No_telp</th>
                            <th>Alamat</th>
                            <th>Edited</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody id="list" >
                        <tr v-for="(item,index) in pelanggans" :key="item.id">
                            <th scope="row">{{ index+1}}</th>
                            <td >{{ item.nama }}</td>
                             <td >{{ item.token }}</td>
                            <td>{{ item.no_telp }}</td>
                            <td>{{ item.id_alamat }}</td>
                            <td>{{ item.updated_at }}</td>
                            <td >
                                <router-link :to="{name:'Pelanggans.edit', params: {pelangganNama: item.nama}}" tag="button" class="btn btn-success btn-sm">Edit</router-link>
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
             dom: "<'row'<'col-md-8 offset-md-3'B>>"+ "<'row'<'col-12 col-sm-12 col-md-8'l><'col-6 col-md-3'f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 'p>>",

        buttons:[
             {
                "extend": "copyHtml5",
                "text": 'copy',
                "titleAttr" : "Copiar",
                "className" : "btn btn-secondary btn-sm m-1",
                "title": "Data Pelanggan",
                exportOptions: {
                    columns: [ 0, 1, 2, 3 ,4]
                },
            },
             {
                "extend": "excelHtml5",
                "text": '<i class="fas fa-file-excel-o"></i> excel',
                "titleAttr" : "exporter excel",
                "className" : "btn btn-success btn-sm m-1",
                "title": "Data Pelanggan",
                exportOptions: {
                    columns: [ 0, 1, 2, 3,4 ]
                },
            } ,
            {
                "extend": "print",
                "text": "print",
                 exportOptions: {
                    columns: [ 0, 1, 2, 3, 4 ]
                },
                "className" : "btn btn-dark btn-sm m-1",
                "title": "Data Pelanggan",
                 pageSize: 'A4',
                 autoPrint: false,
                customize: function ( win ) {
                    $(win.document.body)
                        .css( 'font-size', '12pt' ,
                            'height', '20%')
                        .prepend(
                            '<div class="row mt-3 ml-3 mr-3 border-bottom border-dark"  id="logo"><div class="col-6 ml-5">ARDAPAM </div><div class= "col-3 ml-auto">BUMDES Arthadawa</div></div>'
                        );
                     $(win.document.body).find( '#fluid' )
                        .css( 'border-bottom','1px');

                    $(win.document.body).find( '#logo' )
                        .css( 'font-weight', 'bold');

                    $(win.document.body).find( 'h1' )
                         .addClass( 'mt-3' )
                         .css( 'text-align', 'center');

                    $(win.document.body).find( 'table' )
                         .addClass( 'border border-dark' )
                         .removeClass('table-borderless table-striped table-hover datatable')
                     $(win.document.body).find( 'tbody tr' )
                        .addClass( 'border-bottom border-dark' )
                     $(win.document.body).find( 'thead th' )
                        .addClass( 'border-bottom border-dark' )
                    
                }
                       
            } ,
            
            
        ],
         });
        });
        },
    async getData() {
               let response= await axios.get('http://127.0.0.1:8000/api/pelanggans')
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