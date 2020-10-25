<template>
   <div class="card mt-0">
        <div class="card-header">
            <div class="row">
                <div class="col-8 align-self-center pd-4">
                    <h3>
                        Karyawan
                    </h3>
                </div>
                <div class="col-4">
                    <form method="get" action="">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-sm" name="q" value="">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary btn-sm">Search</button>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="mb-2 p-3">
            
            <router-link to="/karyawans/create" class="btn btn-primary btn-sm">+ Karyawan</router-link>
        </div>
        <div class="card-body p-0">
                <table class="table table-borderless table-striped table-hover">
                    <thead>
                        <tr >
                            <th>#</th>
                            <th>Nama</th>
                            <th>No.Telp</th>
                            <th>Level</th>
                            <th>Edited</th>
                            <th>action</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody >
                        <tr v-for="item in karyawans" :key="item.id">
                            <th scope="row">{{ item.id}}</th>
                            <td>{{ item.name }}</td>
                            <td>{{ item.no_telp }}</td>
                            <td>{{ item.level }}</td>
                            <td>{{ item.updated_at }}</td>
                            <td style="text-align: center">
                                <router-link :to="'/karyawans/form'+item.id" tag="button" class="btn btn-warning btn-sm">Edit</router-link>
                            </td> 
                        </tr>
                    </tbody>
                </table> 
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    name: "List",
    data () {
        return {
            karyawans : []
        };
    },
    created() {
        this.getData();
    },
    
    methods: {
        getData() {
                axios.get('http://127.0.0.1:8000/api/karyawans')
                .then( response => {
                     this.karyawans = response.data.data
                     console.log(response.data.data)
                     console.log(response.status);
                })
                .then((error)=>{
                    console.log(error)
                });
        }
    },
};
</script>

