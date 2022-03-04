<template>
  <div id="app">
    <div class="admin-main-menu">
      <b-nav v-if="showBar" id="admin-menu" vertical>
        <div class="px-3 py-3 admin-imgSection">
                      
          <b-img src="./assets/images/gic_logo.jpg" style="width:50px; height:50px;" fluid thumbnail></b-img>
            Cosmetics POS
        </div>
        <b-nav-item @click="showContent=false" to="/ulist">Users List</b-nav-item>
        <b-nav-item @click="showContent=false" to="/brand">Brands </b-nav-item>
        <b-nav-item @click="showContent=false" to="/category">Categories </b-nav-item>
        <b-nav-item @click="showContent=false" to="/product">Products</b-nav-item>
       
      </b-nav>
    </div>                      
    <div :class="showBar? 'admin-content':'admin-content-hide'">
      
      <div style="background-color:#F3ECDD;">
        <b-button @click="showBar = !showBar">|||</b-button>
        <b-avatar src="./assets/images/logo.jpg" size="4rem" style="margin-left:80%;"></b-avatar>
       {{adminName}}
      </div>
      
      <div v-if="showContent" class="container-fluid"> 
        <b-card-group>
            <b-card bg-variant="info" text-variant="white" header="Total Visitors" class="text-center admin-card" style="background-color:pink !important;">
              <b-card-title>{{total_visitors}}</b-card-title>
              <b-card-text></b-card-text>
            </b-card>
             
            <b-card bg-variant="info" text-variant="white" header="Total Sales" class="text-center admin-card">
              <b-card-title>{{total_sales}}</b-card-title>
              <b-card-text></b-card-text>
            </b-card>
       
            <b-card bg-variant="info" text-variant="white" header="Total Visitors" class="text-center admin-card" style="background-color:green !important;">
              <b-card-title>{{total_visitors}}</b-card-title>
              <b-card-text></b-card-text>
            </b-card>

            <b-card bg-variant="info" text-variant="white" header="Total Visitors" class="text-center admin-card" style="background-color:navy !important;">
              <b-card-title>{{total_visitors}}</b-card-title>
              <b-card-text></b-card-text>
            </b-card>       
        </b-card-group>
        <br><br>
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
  name: "AdminHome",
  data(){
    return{
      showBar: true,
      showContent: true,
      className: 'bar-show',
      total_visitors: 400,
      total_sales: 122000,
      adminName: "Admin",
    }
  },
  methods:{
   
  }
};
</script>