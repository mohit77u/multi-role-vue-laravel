<template>
  <div class="testimonial-content">
    <hooper :settings="hooperSettings">
      <slide v-for="(testimonial, index) in testAboutData" :key="index">
        <div class="testimonial-slides">
          <img v-bind:src="'/static/images/' + testimonial.image" alt="about-get">
          <div class="about-details">
              <div class="about-inner animate__animated animate__slideInUp animate__delay-1s" id="about-inner" >
                <h6>{{testimonial.name}}</h6>
                <p>{{testimonial.designation}}</p>
              </div>
              <div ></div>
          </div>
        </div>
      </slide>
      <hooper-navigation slot="hooper-addons"></hooper-navigation>
    </hooper>
  </div>
</template>

<script>
import { Hooper, Slide, Navigation as HooperNavigation } from "hooper";
import "hooper/dist/hooper.css";

export default {
  name: "Testimonials",
  components: {
    Hooper,
    Slide,
    HooperNavigation,
  },
  data() {
    return {
      hooperSettings: {
        infiniteScroll: true,
        autoPlay: true,
        playSpeed: 8000,
        spaceBetween: 30,
        wheelControl: false,
        breakpoints: {
          480: {
            itemsToShow: 1,
          },
          768: {
            itemsToShow: 2,
          },
          1024: {
            itemsToShow: 3,
          },
        },
      },
      testAboutData: [
          { image: 'meerag.png', name: 'Meera G', designation: 'Co-founder'},
          { image: 'tushar.jpg', name: 'Tushar M', designation: 'Client Relationship Manager'},
          { image: 'saurabh.jpg', name: 'Saurabh B', designation: 'Delivery Manager'},
      ]
    };
  },
};
</script>