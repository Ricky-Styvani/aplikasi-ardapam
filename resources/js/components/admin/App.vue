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
        </div>
</template>

<script>
import Navigation from './Navigation.vue'
import Side from './Side.vue'
export default {
name: 'App',
data : function(){
        return{ }
    },
  components: {
    Navigation,
    Side,
  },
}
</script>

<style>

</style>
