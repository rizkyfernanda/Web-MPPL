$(document).ready(function(){

	$( "#form1" ).show();
	$( "#form2" ).hide();
	$( "#form3" ).hide();
	$( "#step" ).text("1");
	$( ".title").text("Basic Details");
	$( ".subtitle").text("Next: Skills");

	$( "#step1-next, #step3-prev" ).click(function(e) {
		e.preventDefault();
		window.scrollTo({top: 0, behavior: "smooth"});
		$( "#form1" ).hide();
		$( "#form2" ).show();
		$( "#form3" ).hide();
		$( "#step" ).text("2");
		$( ".title").text("Skills");
		$( ".subtitle").text("Next: Additional Preferences");
	});

	$( "#step2-prev" ).click(function(e) {
		e.preventDefault();
		$( "#form1" ).show();
		$( "#form2" ).hide();
		$( "#form3" ).hide();
		$( "#step" ).text("1");
		$( ".title").text("Basic Details");
		$( ".subtitle").text("Next: Skills");
	});

	$( "#step2-next" ).click(function(e) {
		e.preventDefault();
		$( "#form1" ).hide();
		$( "#form2" ).hide();
		$( "#form3" ).show();
		$( "#step" ).text("3");
		$( ".title").text("Additional Preferences");
		$( ".subtitle").text("Next: Search");
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