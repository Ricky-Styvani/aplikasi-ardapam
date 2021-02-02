<template>
  <div class="container-fluid card" id="card">
      <div class="container">
          <h3>Login</h3>
      </div>
      <div class="container">
          <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Username">
                        
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password">
                        
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
  </div>
</template>

<script>
export default {

}
</script>

<style>
#card{
    width:400px;
    padding:20px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
}
 h3{
     text-align: center;
 }
</style>