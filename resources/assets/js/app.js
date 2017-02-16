
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

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

// Bootstrap TreeviewJS
require('./bootstrap-treeview');
$('#categories').treed();
// Bootstrap TreeviewJS

// SewwtAlert2
const swal = require('sweetalert2');

deleteCat = function (id) {
  swal.queue([{
    title: 'Esta seguro?',
    confirmButtonText: 'Eliminar',
    text: 'No podrás revertir esto!',
    showCancelButton: true,
    cancelButtonText: 'Cancelar',
    cancelButtonColor: '#d33',
    showLoaderOnConfirm: true,
    preConfirm: function () {
      return new Promise(function (resolve) {
        $.ajax({
          method: "DELETE",
          url: "/admin/categories/" + id,
          data: { id: id }
        })
          .done(function (data) {
            $('tr.cat_'+id).remove()
            swal.insertQueueStep(data)
            resolve()
          })
      })
    }
  }])
}

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
