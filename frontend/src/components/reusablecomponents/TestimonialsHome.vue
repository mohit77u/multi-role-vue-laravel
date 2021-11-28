<template>
  <div class="testimonial-content">
    <hooper :settings="hooperSettings">
      <slide v-for="(testimonial, index) in testData" :key="index">
        <div class="testimonial-slides">
          <div class="testimonials-inner">
            <div class="left-content">
              <h5>{{ testimonial.name }}</h5>
              <p>{{ testimonial.designation }}</p>
              <p>{{ testimonial.description }}</p>
              <div class="ratings">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
            <div class="right-content">
              <img
                v-bind:src="'/static/images/' + testimonial.image"
                alt="test1"
              />
            </div>
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
            itemsToShow: 2,
          },
        },
      },
      testData: [
        {
          name: "Wanjiku Karanja",
          designation: "Partner, Law Lab Africa",
          description: "I had a pleasant experience ! The team at mxpertz were communicative and professional. They delivered the work in a timely manner and were very helpful.",
          image: "test1.jpg",
        },
        {
          name: "Ikenna Nwaiwu",
          designation: "Principal Consultant, Ikenna Consulting",
          description: "MXPERTZ completed the project on time and within budget. Their great communication skills encouraged close collaboration.",
          image: "test2.jpg",
        },
        {
          name: "Marquis Dendy",
          designation: "Professional Athlete, Nike",
          description: "I will be hiring this team again very professional great service !. Most liked about them is their friendly service and prompt responses. Good luck",
          image: "test3.jpg",
        },
      ],
    };
  },
};
</script>