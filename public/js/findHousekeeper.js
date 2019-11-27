$(document).ready(function(){

	e.preventDefault();
	alert('hi');

	$( "#form1" ).show();
	$( "#form2" ).hide();
	$( "#form3" ).hide();

	$( "#step1-next, #step3-prev" ).click(function(e) {
		e.preventDefault();
		window.scrollTo({top: 0, behavior: "smooth"});
		$( "#form1" ).hide();
		$( "#form2" ).show();
		$( "#form3" ).hide();
	});

	$( "#step2-prev" ).click(function(e) {
		e.preventDefault();
		$( "#form1" ).show();
		$( "#form2" ).hide();
		$( "#form3" ).hide();
	});

	$( "#step2-next" ).click(function(e) {
		e.preventDefault();
		$( "#form1" ).hide();
		$( "#form2" ).hide();
		$( "#form3" ).show();
	});

	history.pushState(null, null, location.href);
	window.onpopstate = function () {

		if(		 $( "#form1" ).is(":visible") )
			window.location.href = "/";
		
		else if( $( "#form2" ).is(":visible") ) 
		{	
			$( "#form1" ).show();
			$( "#form2" ).hide();
		}

		else if( $( "#form3" ).is(":visible") ) 
		{	
			$( "#form2" ).show();
			$( "#form3" ).hide();
		}

	};

});