
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// bootstrap material design
require('bootstrap-material-design');
$.material.init();
// bootstrap material design

// Owl Carousel
require('owl.carousel');
// carousel home page
$('.owl-carousel').owlCarousel({
  animateOut: 'slideOutDown',
  animateIn: 'flipInX',
  smartSpeed: 450,
  margin: 5,
  responsive:{
    0:{
      items:1
    },
    768:{
      items:2
    },
    992:{
      items:3
    },
    1200:{
      items:4
    }
  }
});
// Owl Carousel


$('[data-toggle="tooltip"]').tooltip();

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));

// const app = new Vue({
//     el: '#app'
// });
