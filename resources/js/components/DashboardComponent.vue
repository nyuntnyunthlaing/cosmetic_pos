<template>
  <div id="app">
    <div class="admin-main-menu">
      <b-nav v-if="showBar" id="admin-menu" vertical>
        <div class="px-3 py-2 imgSection">
                      
          <b-img v-bind:src="img_file" style="width:20px; height:20px;" fluid thumbnail></b-img>
            Cosmetics POS
        </div>
        <b-nav-item @click="showContent=false" to="/ulist">Foo Active</b-nav-item>
        <b-nav-item @click="showContent=false" to="/bar">Bar Active </b-nav-item>
        <b-nav-item @click="showContent=true" to="/">Link with a long name </b-nav-item>
      </b-nav>
    </div>                      
    <div :class="showBar? 'content':'content-hide'">
      
      <b-button @click="showBar = !showBar">|||</b-button>
        <br><br>
        <div v-if="showContent" class="container"> 
          <b-card-group deck>
            <b-card bg-variant="info" text-variant="white" header="Total Visitors" class="text-center" style="background-color:pink !important;">
              <b-card-title>{{total_visitors}}</b-card-title>
              <b-card-text></b-card-text>
            </b-card>
             
            <b-card bg-variant="info" text-variant="white" header="Total Sales" class="text-center">
              <b-card-title>{{total_sales}}</b-card-title>
              <b-card-text></b-card-text>
            </b-card>

                
                <b-card bg-variant="info" text-variant="white" header="Total Visitors" class="text-center" style="background-color:green !important;">
              <b-card-title>{{total_visitors}}</b-card-title>
              <b-card-text></b-card-text>
            </b-card>

                <b-card bg-variant="info" text-variant="white" header="Total Visitors" class="text-center" style="background-color:navy !important;">
              <b-card-title>{{total_visitors}}</b-card-title>
              <b-card-text></b-card-text>
            </b-card>
             
             
          </b-card-group>
          <br>
          <br>
          <!-- <div class="container">
              <chart-a />
          </div> -->
            

        </div>
        
        <router-view></router-view>
    </div>
     
      
  </div>

</template>

<script>

export default {
  name: "Dashboard",
  data(){
    return{
      showBar: true,
      showContent: true,
      className: 'bar-show',
      total_visitors: 400,
      total_sales: 122000,
      img_file: './assets/logo.png'
    }
  },
  methods:{
    changeDisplay(){
      this.showBar = !this.showBar;
      if(this.showBar){
        this.className = 'bar-show';
      }
      else{
        console.log(this.className);
        this.className = 'bar-hide';
      }  
    },
  }
};
</script>