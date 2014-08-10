


var $form 	= $('#formulario'),
	$button	= $('#mostrar-form'),
	$list	= $('#contenido');



function mostrarForm(e){
	e.preventDefault();
	$form.slideToggle();
	$list.slideToggle();
	
}


$button.click(mostrarForm)

