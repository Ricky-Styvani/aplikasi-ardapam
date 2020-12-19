<template>
  <div class="container-fluid p-0">
    <Navigation></Navigation>
            <div class="py-4">
                <div class="container-fluid">
                    <div class="row">
                        <Side></Side>
                        <div class="col-md-10">
                            
                            <router-view></router-view>
                        </div>
                    </div>
                </div>
            </div>
             <Bottom />
    
        </div>
</template>

<script>
import Bottom from './bottom.vue'
import Navigation from './Navigation.vue'
import Side from './Side.vue'
export default {
name: 'petugas',
data : function(){
        return{ }
    },
  components: {
    Navigation,
    Side,
    Bottom,
  },
}
</script>

<style>


</style>
