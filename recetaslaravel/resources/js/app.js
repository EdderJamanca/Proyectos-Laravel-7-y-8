/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
 import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel';
 import VueSweetalert2 from 'vue-sweetalert2';
 import stiloSweetalert2 from 'sweetalert2/dist/sweetalert2.min.css';

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.use(stiloSweetalert2);
Vue.use(VueSweetalert2);
Vue.config.ignoredElements=['trix-editor','trix-toolbar'];
Vue.component('fecha-receta',require('./components/fecha.vue').default);
Vue.component('eliminar-receta',require('./components/eliminarReceta.vue').default);
Vue.component('like-boton',require('./components/like.vue').default);

const app = new Vue({
    el: '#app',
});
// const btnCorazon = document.querySelector('.like-btn');
// btnCorazon.addEventListener('click', function(){
//     btnCorazon.classList.toggle('like-active');
// });

jQuery(document).ready(function(){
    jQuery('.owl-carousel').owlCarousel({
        margin:10,
        loop:true,
        autoplay:true,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })
})