
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

$(".add-to-cart").on("submit",function(ev){
	ev.preventDefault();

	var $form = $(this);
	var $button = $form.find("[type='submit']");

	//Petición ajax

	$.ajax({
		url: $form.attr("action"),
		method: $form.attr("method"),
		data: $form.serialize(),
		beforeSend: function(){
			$button.val("Cargando...");
		},
		success: function(data){
			$button.css("background-color","#00c853").val("¡Agregado con éxito!");

			$(".circle-shopping-cart").html(data.products_count).addClass("highlight");

			console.log(data);
			setTimeout(function(){
				restartButton($button);
			},2000);
		},
		error: function(){
			console.log(err);
			$button.css("background-color","#d50000").val("¡Hubo un error!");
			setTimeout(function(){
				restartButton($button);
			},2000);
		}
	});
	return false;
});

function restartButton($button){
	$button.val("Agregar al carrito").attr("style","");
	$(".cicrcle-shopping-cart").removeClass("highlight");
}