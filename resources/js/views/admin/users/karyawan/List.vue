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
                            <input type="text" class="form-control form-control-sm" v-model="search"  value="">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary btn-sm" @click.prevent="searchKaryawan">Search</button>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="mb-2 p-3">
            
            <router-link to="/karyawans/create" class="btn btn-primary btn-sm">+ Karyawan</router-link>
        </div>
        <div class="card-body p-2">
                <table class="table table-borderless table-striped table-hover" id="my-table">
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
                    <tbody id="list" v-if="showSearch==true">
                        <tr v-for="(item,index) in karyawans" :key="item.id">
                            <th scope="row">{{ index+1}}</th>
                            <td>{{ item.name }}</td>
                            <td>{{ item.no_telp }}</td>
                            <td>{{ item.level }}</td>
                            <td>{{ item.updated_at }}</td>
                            <td >
                                <router-link :to="{name:'karyawans.edit', params: {karyawanName: item.name}}" tag="button" class="btn btn-success btn-sm">Edit</router-link>
                            </td> 
                        </tr>
                    </tbody>
                    <tbody id="list" v-if="showSearch==false">
                        <tr v-for="(item,index) in karyawans" :key="item.id">
                            <th scope="row">{{ index+1}}</th>
                            <td>{{ item.name }}</td>
                            <td>{{ item.no_telp }}</td>
                            <td>{{ item.level }}</td>
                            <td>{{ item.updated_at }}</td>
                            <td >
                                <router-link :to="{name:'karyawans.edit', params: {karyawanName: item.name}}" tag="button" class="btn btn-success btn-sm">Edit</router-link>
                            </td> 
                        </tr>
                    </tbody>
                </table> 
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li v-bind:class="{disabled:!pagination.first_link}" class="page-item"><a href="#" @click.prevent="getData(pagination.first_link)" class="page-link">&laquo;</a></li>
                                <li v-bind:class="{disabled:!pagination.prev_link}" class="page-item"><a href="#" @click.prevent="getData(pagination.prev_link)" class="page-link">&lt;</a></li>
                                <ul class="pagination" v-for=" n in pagination.last_page" v-bind:key="n" >
                                    <li  v-bind:class="{active: pagination.current_page == n}" class="page-item"><a href="#" @click.prevent="getData(pagination.path_page + n)" class="page-link">{{n}}</a></li>
                                </ul>
                               
                                <li v-bind:class="{disabled:!pagination.next_link}" class="page-item"><a href="#" @click.prevent="getData(pagination.next_link)" class="page-link">&gt;</a></li>
                                <li v-bind:class="{disabled:!pagination.last_link}" class="page-item"><a href="#" @click.prevent="getData(pagination.last_link)" class="page-link">&raquo;</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-4">
                        Page: {{pagination.current_page}}  /  {{pagination.last_page}}
                        Total: {{pagination.total_page}}
                    </div>

                </div>
        </div>
    </div>
</template>

<script>

export default {
    name: "List",
    data () {
        return {
            karyawans : [],
            pagination: {
                        current_page: '',
                        last_page: '',
                        from_page:  '',
                        to_page:  '',
                        total_page:  '',
                        path_page:  '',
                        first_link:  '',
                        last_link: '',
                        prev_link: '',
                        next_link: '',
            },
            showSearch: false,
            search:''
            
        };
    },
    created() {
        this.getData();
        //this.searchKaryawan();
    },
    
    
    methods: {
        async getData(page) {
                page = page || 'http://127.0.0.1:8000/api/karyawans'
               let response= await axios.get(page)
                if(response.status==200) {
                    this.karyawans = response.data.data;
                    console.log(response);
                    this.pagination = {
                        current_page: response.data.meta.current_page,
                        last_page:  response.data.meta.last_page,
                        from_page:  response.data.meta.from,
                        to_page:  response.data.meta.to,
                        total_page:  response.data.meta.total,
                        path_page:  response.data.meta.path+"?page=",
                        first_link:  response.data.links.first,
                        last_link: response.data.links.last,
                        prev_link: response.data.links.prev,
                        next_link: response.data.links.next,
                      };
                        console.log(this.pagination);
                }
                console.log(response.status);
                
               
        },
        searchKaryawan(){
               axios.get('http://127.0.0.1:8000/api/karyawans/search?q='+this.search)
               .then( response => {
                     this.karyawans = response.data.data;
                     this.search='';
                     this.showSearch = true;
                     console.log(this.karyawans);
                     console.log(response.status);
                })
                .then((error)=>{
                    console.log(error)
                });
        }

    },
};
</script>

