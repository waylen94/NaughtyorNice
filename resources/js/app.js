
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});



//initial js function
(function($) {
	  "use strict"; // Start of use strict

	  // Smooth scrolling using jQuery easing
	  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: (target.offset().top - 72)
	        }, 1000, "easeInOutExpo");
	        return false;
	      }
	    }
	  });

	  // Closes responsive menu when a scroll trigger link is clicked
	  $('.js-scroll-trigger').click(function() {
	    $('.navbar-collapse').collapse('hide');
	  });

	  // Activate scrollspy to add active class to navbar items on scroll
	  $('body').scrollspy({
	    target: '#mainNav',
	    offset: 75
	  });

	  // Collapse Navbar
	  var navbarCollapse = function() {
	    if ($("#mainNav").offset().top > 100) {
	      $("#mainNav").addClass("navbar-scrolled");
	    } else {
	      $("#mainNav").removeClass("navbar-scrolled");
	    }
	  };
	  // Collapse now if page is not at top
	  navbarCollapse();
	  // Collapse the navbar when page is scrolled
	  $(window).scroll(navbarCollapse);

	  // Magnific popup calls
	  $('#portfolio').magnificPopup({
	    delegate: 'a',
	    type: 'image',
	    tLoading: 'Loading image #%curr%...',
	    mainClass: 'mfp-img-mobile',
	    gallery: {
	      enabled: true,
	      navigateByImgClick: true,
	      preload: [0, 1]
	    },
	    image: {
	      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
	    }
	  });

	})(jQuery); // End of use strict