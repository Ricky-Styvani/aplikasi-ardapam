<template>
    <div class="container">
             <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8 align-self-center">
                    <h3>
                        Catat
                    </h3>
                </div>
            </div>
        </div>
        
        <div class="card-body">
           <div class="row">
            <div class="col-md-8 offset-md-2">
                <form  method="post" action="#" @submit.prevent="store" enctype="multipart/form-data">
                     <div class="form-group">
                        <label for="id">Id Pelanggan</label>
                        <input type="text" class="form-control" v-model="form.id_pelanggan" value="">
                       
                             <span v-if="theErrors.id_pelanggan" class=" text-danger">{{theErrors.id_pelanggan[0]}}</span>
                    </div>

                     <div class="form-group">
                        <label for="awal">Meter Awal</label>
                        <input type="text" class="form-control" v-model="form.meter_awal" value="">
                       
                             <span v-if="theErrors.meter_awal" class=" text-danger">{{theErrors.meter_awal[0]}}</span>
                    </div>

                     <div class="form-group">
                        <label for="akhir">Meter Akhir</label>
                        <input type="text" class="form-control" v-model="form.meter_akhir" value="">
                       
                             <span v-if="theErrors.meter_akhir" class=" text-danger">{{theErrors.meter_akhir[0]}}</span>
                    </div>
                    
                    
                    <div class="form-group mb-0 d-flex">
                        <router-link  to= "/catats" tag="button" class="btn btn-secondary btn-sm">cencel</router-link>
                        <button type="submit" class="btn btn-success btn-sm d-flex align-items-center">
                            kirim
                             <template v-if="loading">
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: none; display: block; shape-rendering: auto;" width="20px" height="20px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid"> <g transform="rotate(0 50 50)">   <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d3f72">     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate>   </rect> </g><g transform="rotate(30 50 50)">   <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d3f72">     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate>   </rect> </g><g transform="rotate(60 50 50)">   <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d3f72">     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate>   </rect> </g><g transform="rotate(90 50 50)">   <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d3f72">     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate>   </rect> </g><g transform="rotate(120 50 50)">   <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d3f72">     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate>   </rect> </g><g transform="rotate(150 50 50)">   <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d3f72">     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate>   </rect> </g><g transform="rotate(180 50 50)">   <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d3f72">     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate>   </rect> </g><g transform="rotate(210 50 50)">   <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d3f72">     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate>   </rect> </g><g transform="rotate(240 50 50)">   <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d3f72">     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate>   </rect> </g><g transform="rotate(270 50 50)">   <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d3f72">     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate>   </rect> </g><g transform="rotate(300 50 50)">   <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d3f72">     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate>   </rect> </g><g transform="rotate(330 50 50)">   <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d3f72">     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate>   </rect> </g> </svg>
                            </template>
                            </button>
                    </div>
                </form>
            </div>
           </div>
        </div>
    </div>
  
    </div>
</template>

<script>
export default {
    name:"formCatat",
    data () {
        return {
            form:[],
            theErrors :[],
            loading: false,
            angka:[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15],
          
        };
    },
    mounted(){
        this.getPelanggan();
    },

    methods:{

        async getPelanggan(){
            let response= await axios.get(`http://127.0.0.1:8000/api/catats/${this.$route.params.pelangganNama}`);
            this.form=response.data.data
            console.log(response.data.data)
        },

        async update(){
             this.loading= true;
             try{
                    let response= await axios.patch(`http://127.0.0.1:8000/api/catats/${this.$route.params.pelangganNama}/edit`, this.form);
                                if(response.status==200){
                                    this.loading= false;
                                    this.$toasted.show(response.data.massage,{
                                                        position:'top-center',
                                                        type: 'success',
                                                        duration:3000,
                                                    });
                                }
             } catch(e){
                     this.loading= false;
                     this.$toasted.show("gagal update.",{
                            position:'top-center',
                            type: 'error',
                            duration:3000,
                        });
                    this.theErrors= e.response.data.errors;
                   
            }
            
        },
        async store() {
                this.loading= true;
                try{
                        let response= await axios.post(`http://127.0.0.1:8000/api/catats/${this.$route.params.pelangganNama}/create`, this.form)

                        if(response.status==200){
                                this.update(),
                                this.theerrors = [],
                                this.loading= false;
                                this.$toasted.show(response.data.massage,{
                                    position:'top-center',
                                    type: 'success',
                                    duration:3000,
                                });
                                
                                 this.$router.push('/catats');
                               
                        }
                       
                }catch(e){
                     this.$toasted.show("api error.",{
                            position:'top-center',
                            type: 'error',
                            duration:3000,
                        });
                    this.theErrors= e.response.data.errors;
                    this.loading= false;
                    this.$router.push('/catats');
                   
                }
            },
        async deleteKaryawan(){
            let response = await axios.delete(`http://127.0.0.1:8000/api/pelanggans/${this.$route.params.pelangganNama}/delete`);
             if(response.status==200){

                 this.$toasted.show(response.data.massage,{
                                    position:'top-center',
                                    type: 'success',
                                    duration:3000,
                                });
                $('.modal-backdrop').hide();
                this.$router.push('/pelanggans');

             }
        },
         showPassword() {
            
            if(this.passwordField == 'password') {
                this.passwordField = 'text'
                this.icon = 'eye'
            } else {
                this.passwordField = 'password'
                this.icon = 'eye-slash'
            }
            
            
        }
    }
    

}
</script>

