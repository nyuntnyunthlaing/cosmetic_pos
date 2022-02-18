<template>
 

<div>

<Navbar />

  <b-carousel
      id="carousel-1"
      v-model="slide"
      :interval="4000"
      controls
      indicators
      background="#ababab"
      img-width="1024"
      img-height="480"
      style="text-shadow: 1px 1px 2px #333;"
      @sliding-start="onSlideStart"
      @sliding-end="onSlideEnd"
    >
      <!-- Text slides with image -->
      <b-carousel-slide
        img-src="/images/img/home1.jpg"></b-carousel-slide>

      <!-- Slides with custom text -->
      <b-carousel-slide img-src="/images/img/home2.jpg">
      
      </b-carousel-slide>

      <!-- Slides with image only -->
      <b-carousel-slide img-src="/images/img/home3.jpg"></b-carousel-slide>

      <!-- Slides with img slot -->
      <!-- Note the classes .d-block and .img-fluid to prevent browser default image alignment -->
      <b-carousel-slide>
        <template #img>
          <img
            class="d-block img-fluid w-100"
            width="1024"
            height="480"
            src="/images/img/7.jpg"
            alt="image slot"
          >
        </template>
      </b-carousel-slide>
    </b-carousel>
<ProductListComponents />

<br/>
<br/>
<FooterComponent/>
    
</div>
</template>
<script>
import Navbar from './Navbar.vue';
import ProductListComponents from './ProductListComponents.vue';
import FooterComponent from './FooterComponent.vue';

  export default {
      components: {
    
    Navbar,
    ProductListComponents,
    FooterComponent,

  },
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

.topnav {
  display: flex;
}

.topnav .vs {
  padding-right: 50px;
  padding-left: 800px;
}
</style>

