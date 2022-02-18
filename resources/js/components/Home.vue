<template>
  <div class="container">
    
   <v-row align="center" justify="center">

     <div class="col-md-8">

       <carousel :items="1">
         <div style=" margin: auto;display: block;width:1000px;height:400px;  ">
       <img  class="img-fluid" src="/images/img/1.jpg">
       </div>

        <div style="margin: auto;display: block;width:1000px;height:400px;">
       <img class="img-fluid" src="/images/img/2.jpg">
       </div>

        <div style="margin: auto;display: block;width:1000px;height:400px;">
       <img class="img-fluid" src="/images/img/3.jpg">
       </div>

        

       </carousel>
     </div>
   </v-row>
  </div>
</template>

<script>
import carousel from 'vue-owl-carousel'
export default {
    components: { carousel },
  mounted(){
    console.log('Component mount')
  }
  }
</script>


<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

</style>