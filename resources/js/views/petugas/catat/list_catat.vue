<template>
   <div class="card mt-0">
        <div class="card-header">
            <div class="row">
                <div class="col-8 align-self-center pd-4">
                    <h3>
                        Catat
                    </h3>
                </div>
            </div>
        </div>
        <div class="card-body p-2">
            <Table />
            
             
        </div>
       
    </div>
</template>

<script>
import Table from './datatable.vue';

export default {
    name: "Listcatat",
    components:{
        Table
    },
    data () {
        return {
            
        };
    },
       
        

    }
</script>

