<template>
  <div  id="help">
      <button id="btn-help" type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#help1"> Help <v-icon name="question-circle"  ></v-icon></button> 
      
    <div class="modal fade" id="help1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Input</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="nama" class="col-form-label"  >Nama</label>
                            <input type="text" class="form-control" id="recipient-name" v-model="form.id_pelanggan">
                                 <span v-if="theErrors.id_pelanggan" class=" text-danger">{{theErrors.id_pelanggan[0]}}</span>
                        </div>
                        <div class="form-group">
                            <label for="rt" class="col-form-label">Rt</label>
                            <input type="text" class="form-control" id="recipient-name" v-model="form.rt">
                                <span v-if="theErrors.rt" class=" text-danger">{{theErrors.rt[0]}}</span>
                        </div>
                        <div class="form-group">
                            <label for="laporan" class="col-form-label">laporan</label>
                            <textarea class="form-control" id="message-text" v-model="form.laporan"></textarea>
                                 <span v-if="theErrors.rt" class=" text-danger">{{theErrors.rt[0]}}</span>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <form action="#" method="post" @submit.prevent="store">
                        <button type="submit" class="btn btn-primary d-flex align-items-center">kirim
                             <template v-if="loading">
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: none; display: block; shape-rendering: auto;" width="20px" height="20px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid"> <g transform="rotate(0 50 50)">   <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d3f72">     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate>   </rect> </g><g transform="rotate(30 50 50)">   <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d3f72">     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate>   </rect> </g><g transform="rotate(60 50 50)">   <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d3f72">     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate>   </rect> </g><g transform="rotate(90 50 50)">   <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d3f72">     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate>   </rect> </g><g transform="rotate(120 50 50)">   <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d3f72">     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate>   </rect> </g><g transform="rotate(150 50 50)">   <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d3f72">     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate>   </rect> </g><g transform="rotate(180 50 50)">   <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d3f72">     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate>   </rect> </g><g transform="rotate(210 50 50)">   <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d3f72">     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate>   </rect> </g><g transform="rotate(240 50 50)">   <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d3f72">     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate>   </rect> </g><g transform="rotate(270 50 50)">   <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d3f72">     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate>   </rect> </g><g transform="rotate(300 50 50)">   <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d3f72">     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate>   </rect> </g><g transform="rotate(330 50 50)">   <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d3f72">     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate>   </rect> </g> </svg>
                            </template>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        </div>
  </div>
</template>

<script>
export default {
 Name:'Help',
data(){
    return{
    form:{
                id_pelanggan:'',
                rt:'',
                laporan:'',
            },
    loading: false,
    theErrors :[],
    }
},

    methods:{
         async store() {
                this.loading= true;
                try{
                        let response= await axios.post('http://127.0.0.1:8000/api/laporans/create', this.form)

                        if(response.status==200){
                               
                                this.theerrors = []
                                this.loading= false;
                                $('.modal-backdrop').hide();
                                this.$toasted.show(response.data.massage,{
                                    position:'top-center',
                                    type: 'success',
                                    duration:3000,
                                });
                        }
                       
                }catch(e){
                     
                     this.$toasted.show("something went wrong.",{
                            position:'top-center',
                            type: 'error',
                            duration:3000,
                        });
                    
                    this.theErrors= e.response.data.errors;
                   
                }
                 this.loading= false;
            },
}


}
</script>

<style>
#btn-help{
    left:50px;
    top:500px;
    
    
    
}
#btn-help{
    position: fixed;
}

@media (max-width: 767.98px) {
        #btn-help{
            top:400px;
            left:20px;
        }
    }

</style>