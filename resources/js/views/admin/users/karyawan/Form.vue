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
                <form  method="post" action="#" @submit.prevent="store" enctype="multipart/form-data">
                    <div class="form-group">
                                <label for="nama">Id karyawan</label>
                                <input type="text" class="form-control" v-model="form.id_karyawan" value="level.level">
                            
                                    <span class="text-danger"></span>
                            
                     </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" v-model="form.name" value="">
                       
                            <span class="text-danger"></span>
                       
                    </div>

                     


                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" v-model="form.password" value="">
                       
                            <span class="text-danger"></span>
                       
                    </div>
                    
                     <div class="form-group">
                        <label for="level">Level</label>
                        <select class="form-control" v-model="form.level" id="exampleFormControlSelect1">
                        <option v-for="item in levels" :key="item.id" v-bind:value="item.id">
                            {{item.level}}
                        </option>
                        
                        </select>
                    </div>

                     <div class="form-group">
                        <label for="no">No_telphone</label>
                        <input type="text" class="form-control" v-model="form.no_telp" value="">
                       
                            <span class="text-danger"></span>
                       
                    </div>
                    
                    
                    <div class="form-group mb-0">
                        <button type="button" class="btn btn-secondary btn-sm">Cencel</button>
                        <button type="submit" class="btn btn-success btn-sm">Create</button>
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
    name:"Form",
    data () {
        return {
            form:{
                name:'',
                id_karyawan:'',
                password:'',
                level:'',
                no_telp:'',
            },
            levels : []
        };
    },
    mounted(){
        this.getData();
    },

    methods:{
            async store() {
               let response= await axios.post('http://127.0.0.1:8000/api/karyawans/create', this.form)

               if(response.status==200){
                   console.log(response.data);
               }
            },

        getData() {
                axios.get('http://127.0.0.1:8000/api/levels')
                .then( response => {
                     this.levels = response.data
                     console.log(response.status);
                })
                .then((error)=>{
                    console.log(error)
                });
        }
    }
    

}
</script>

