<template>
    <div class="container">
             <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8 align-self-center">
                    <h3>
                        Karyawan
                    </h3>
                </div>
                <div class="col-4 text-right">
                  <button class="btn btn-sm text-secondary" data-toggle="modal" data-target="#deletemodal">
                        <v-icon name="trash-alt"></v-icon>
                    </button>
                </div>
            </div>
        </div>
        
        <div class="card-body">
           <div class="row">
            <div class="col-md-8 offset-md-2">
                <form  method="post" action="#" @submit.prevent="update" enctype="multipart/form-data">
                    <div class="form-group">
                                <label for="nama">Id karyawan</label>
                                <input type="text" class="form-control" v-model="form.id_karyawan" value="level.level">
                            
                                    <span v-if="theErrors.id_karyawan" class=" text-danger">{{theErrors.id_karyawan[0]}}</span>
                            
                     </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" v-model="form.name" value="">
                       
                             <span v-if="theErrors.name" class=" text-danger">{{theErrors.name[0]}}</span>
                       
                    </div>


                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" v-model="form.password" value="">
                             
                             <span v-if="theErrors.password" class=" text-danger">{{theErrors.password[0]}}</span>
                       
                    </div>
                    
                     <div class="form-group">
                        <label for="level">Level</label>

                        <select class="form-control" @change="selectedLevel"  id="exampleFormControlSelect1"> 
                            <option :value="form.level_id" v-text="form.level"></option>
                        
                            <template v-for="item in levels" >
                                <option v-if="form.level_id !== item.id" :key="item.id" :value="item.id">
                                    {{item.level}}
                                </option>
                            </template>
                        
                        </select>
                        <span v-if="theErrors.level" class=" text-danger">{{theErrors.level[0]}}</span>
                    </div>

                     <div class="form-group">
                        <label for="no">No.telphone</label>
                        <input type="text" class="form-control" v-model="form.no_telp" value="">
                       
                             <span v-if="theErrors.no_telp" class=" text-danger">{{theErrors.no_telp[0]}}</span>
                    </div>
                    
                    
                    <div class="form-group mb-0 d-flex">
                        <router-link  to= "/karyawans" tag="button" class="btn btn-secondary btn-sm">Cencel</router-link>
                        <button type="submit" class="btn btn-success btn-sm d-flex align-items-center">
                            Update
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
    
    <div class="modal fade" id="deletemodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Delete</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Anda yakin ingin hapus Karyawan</p>
                </div>
                <div class="modal-footer">
                    <form action="#" method="post" @submit.prevent="deleteKaryawan">
                   
                        <button class="btn btn-sm btn-danger" > <v-icon name="trash-alt"></v-icon> Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
    </div>
</template>

<script>
export default {
    name:"Edit",
    data () {
        return {
            form:[],
            levels : [],
            theErrors :[],
            selected:'',
            loading: false,
          
        };
    },
    mounted(){
        this.getData();
        this.getKaryawan();
    },

    methods:{

        async getData() {
                let response= await axios.get('http://127.0.0.1:8000/api/levels')
                if(response.status==200) {
                     this.levels = response.data
                };
        },

        async getKaryawan(){
            let response= await axios.get(`http://127.0.0.1:8000/api/karyawans/${this.$route.params.karyawanName}`);
            this.form=response.data.data
            console.log(response.data.data)
        },

        selectedLevel(e){
            this.selected = e.target.value
        },

        async update(){
             this.loading= true;
            
            this.form['level'] = this.selected || this.form.level_id

            let response= await axios.patch(`http://127.0.0.1:8000/api/karyawans/${this.$route.params.karyawanName}/edit`, this.form);

             if(response.status==200){

                 this.$toasted.show(response.data.massage,{
                                    position:'top-center',
                                    type: 'success',
                                    duration:3000,
                                });
                this.$router.push('/karyawans');
             }
        },
        async deleteKaryawan(){
            let response = await axios.delete(`http://127.0.0.1:8000/api/karyawans/${this.$route.params.karyawanName}/delete`);
             if(response.status==200){

                 this.$toasted.show(response.data.massage,{
                                    position:'top-center',
                                    type: 'success',
                                    duration:3000,
                                });
                $('.modal-backdrop').hide();
                this.$router.push('/karyawans');

             }
        }
    }
    

}
</script>

