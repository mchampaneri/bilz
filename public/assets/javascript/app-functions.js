$(document).ready(function() {

	/**** Adding Boot strape class to the all componants **/
	$('input,label').before('<div class="form-group">');
	$('input[type="text"],input[type="password"],select').addClass('form-control');
	$('input,label').after('</div>');
	$('.hideable').hide();
	// $('.expandable').next('.box-body').slideUp();

});

/****************  UI Contollers **************/

$('.expandable').on('click',function() {
		$('.box-body').slideUp();
		$(this).next('.box-body').slideToggle();

	
});

/***************** functions *****/

function disp(page)
{
	$('.box').hide();
	$(page).show();
}
