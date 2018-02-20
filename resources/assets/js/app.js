
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue';
import VeeValidate from 'vee-validate';



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.use(VeeValidate);

const app = new Vue({
    el: '#app'
});

$(document).on('click', '#new_product', function(){
    $('#new_product__form').toggle();
});

$(document).on('click', '#new_product', function(){
    $('#new_product__form').addClass();
});

$(document).on('click', '.edit_modal', function(){
    $('#edit_modal').modal('show');

    $('#id').val($(this).data('id'));
    $('#title').val($(this).data('title'));
    $('#desc').val($(this).data('desc'));
    $('#price').val($(this).data('price'));
    $('#image_modal').attr('src', $(this).data('image'));
});

$(document).on('click', '.delete_modal', function(){
    $('#delete_modal').modal('show');

    $('.id').val($(this).data('id'));
    $('.title').val($(this).data('title'));
    $('.title-name').html($(this).data('title'));

});

$(document).on('click', '.delete_from_basket', function(){
    $('#delete_basket_modal').modal('show');

    $('.id').val($(this).data('id'));
    $('.title-name').html($(this).data('title'));
});

$(document).on('click', '.basket_delete', function() {
    var item = $(this).closest('.card_body');
    var id = $('input[name = id]').val();

    $.ajax({
        'method': 'post',
        'url': '/basket_delete/' + id,
        'data': {
            '_token': $('input[name = _token]').val(),
            'id': id,
            },
        success: function (data) {
            console.log('hey');
            $('#delete_basket_modal').modal('hide');
            if (item) {
                $(item).remove();
            }
            location.reload();
        }
    });
});