<template>
   <div class="card mt-0">
        <div class="mb-2 p-3">
            <a href="" class="btn btn-primary btn-sm">+ Karyawan
            </a>
        </div>
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
        <div class="card-body p-0">
                <table class="table table-borderless table-striped table-hover">
                    <thead>
                        <tr >
                            <th>#</th>
                            <th>nama</th>
                            <th>Email</th>
                            <th>Regitered</th>
                            <th>Edited</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                       
                    </tbody>
                </table> 
           
                <h4 class="text-center p-3"></h4>
            
            
        
           
        </div>
    </div>
</template>

<script>
export default {

}
</script>

