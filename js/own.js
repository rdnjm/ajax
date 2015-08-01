$( document ).ready(
	function(){
		$( '#empNum' ).keyup( function(){
			$.post( "js/connString.php", {
				empNum : $( '#empNum' ).val()
			}, function( data ){
				$( '#output' ).html( data );
			});
		})
	}
);