<template>
   <div class="card mt-0">
        <div class="card-header">
            <div class="row">
                <div class="col-8 align-self-center pd-4">
                    <h3>
                        Karyawan
                    </h3>
                </div>
            </div>
        </div>
        <div class="mb-1 p-3">
            
            <router-link to="/karyawans/create" class="btn btn-primary btn-sm">+ Karyawan</router-link>
        </div>
        <div class="card-body p-2">
            <Table />
            
             
        </div>
       
    </div>
</template>

<script>
import Table from './datatable.vue';

export default {
    name: "List",
    components:{
        Table
    },
    data () {
        return {
            
        };
    },
       
        

    }
</script>

