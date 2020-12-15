<template>
   <div class="card mt-0">
        <div class="card-header">
            <div class="row">
                <div class="col-8 align-self-center pd-4">
                    <h3>
                        Pelanggan
                    </h3>
                </div>
            </div>
        </div>
        <div class="mb-1 p-3">
            
            <router-link to="/pelanggans/create" class="btn btn-primary btn-sm">+ Pelanggan</router-link>
        </div>
        <div class="card-body p-2">
            <Table />
            
             
        </div>
       
    </div>
</template>

<script>
import Table from './datatable.vue';

export default {
    name: "listpelanggan",
    components:{
        Table
    },
    data () {
        return {
            
        };
    },
       
        

    }
</script>

