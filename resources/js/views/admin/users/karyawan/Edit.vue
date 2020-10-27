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
                        <i class="fas fa-trash"></i>
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
                    
                    
                    <div class="form-group mb-0">
                        <button type="button" class="btn btn-secondary btn-sm">Cencel</button>
                        <button type="submit" class="btn btn-success btn-sm">Update</button>
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
                    <form action="" method="post">
                   
                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Delete</button>
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
        },

        selectedLevel(e){
            this.selected = e.target.value
        },

        async update(){
            
            this.form['level'] = this.selected || this.form.level_id

            let response= await axios.patch(`http://127.0.0.1:8000/api/karyawans/${this.$route.params.karyawanName}/edit`, this.form);

             if(response.status==200){

                 this.$toasted.show(response.data.massage,{
                                    position:'top-center',
                                    type: 'success',
                                    duration:3000,
                                });
                this.$router.push('/karyawans')
             }
        }
    }
    

}
</script>

