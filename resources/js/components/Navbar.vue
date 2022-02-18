<template>
  <div >
     <div class="topnav">
  <div class="title" >𝓒𝓸𝓼𝓶𝓮𝓽𝓲𝓬</div>
  
</div>
      
  <b-navbar type="light" variant="light" class="nava">
    <b-navbar-nav>
      <!-- <b-nav-item href="#"></b-nav-item> -->

      <!-- Navbar dropdowns -->
      <b-nav-item-dropdown   text="Markup" no-caret >
        <b-dropdown-item  href="#">Foundation</b-dropdown-item>
        <b-dropdown-item  href="#">Primer</b-dropdown-item>
        <b-dropdown-item  href="#">BB Cream & CC Cream</b-dropdown-item>
        <b-dropdown-item  href="#">Concealer</b-dropdown-item>
        <b-dropdown-item  href="#">HighLighter</b-dropdown-item>
      </b-nav-item-dropdown>


       <b-nav-item-dropdown  text="Skin Care" no-caret >
        <b-dropdown-item  href="#">Cleaner</b-dropdown-item>
        <b-dropdown-item  href="#">Face Serums</b-dropdown-item>
        <b-dropdown-item  href="#">Face Masks</b-dropdown-item>
        <b-dropdown-item  href="#">Toners</b-dropdown-item>
        <b-dropdown-item  href="#">Moisturizer</b-dropdown-item>
      </b-nav-item-dropdown>


       <b-nav-item-dropdown  text="Hair Care" no-caret >
        <b-dropdown-item  href="#">Shampoo</b-dropdown-item>
        <b-dropdown-item  href="#">Conditioner</b-dropdown-item>
        <b-dropdown-item  href="#">Hair Loss Products</b-dropdown-item>
        <b-dropdown-item  href="#">Styling Products</b-dropdown-item>
        <b-dropdown-item  href="#">Colot-Treated</b-dropdown-item>
      </b-nav-item-dropdown>

   <b-nav-item-dropdown  text="Body Care" no-caret >
        <b-dropdown-item  href="#">Lotion & Oils</b-dropdown-item>
        <b-dropdown-item  href="#">Sun Cream</b-dropdown-item>
        <b-dropdown-item  href="#">Bath &Shower</b-dropdown-item>
        <b-dropdown-item  href="#">Body Scrubs</b-dropdown-item>
        <b-dropdown-item  href="#">Fragrance</b-dropdown-item>
      </b-nav-item-dropdown>

       <b-nav-item-dropdown  text="Brands" no-caret >
        <b-dropdown-item  href="#">Maybelline New York</b-dropdown-item>
        <b-dropdown-item  href="#">L'Oreal</b-dropdown-item>
        <b-dropdown-item  href="#">CHANEL</b-dropdown-item>
        <b-dropdown-item  href="#">Lancome</b-dropdown-item>
        <b-dropdown-item  href="#">Clarins</b-dropdown-item>
      </b-nav-item-dropdown>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

    <a href="#" class="vs"><img style=" width:25px;height:25px;  "  class="img-fluid" src="/images/img/logout.png">logout</a>&emsp;&emsp;&emsp;&emsp;
 <a href="#" > <img style=" width:25px;height:25px;  "  class="img-fluid" src="/images/img/cart.png">cart</a>
    </b-navbar-nav>
  </b-navbar>
<br/>

</div>
</template>
<script>

  export default {
 
    data() {
      return {
        slide: 0,
        sliding: null
      }
    },
    methods: {
      onSlideStart(slide) {
        this.sliding = true
      },
      onSlideEnd(slide) {
        this.sliding = false
      }
    }
  }
</script>
<style>
p {
  margin: 0;
}


a{
  color: black;
  font-size:15px ;
}

.title{
  font-size: 35px;
}


.nava{
    background-color: #C9D0D0!important;
  
 }



</style>

