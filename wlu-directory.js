jQuery(document).ready(function($) {
	switchDir( 'a' );
	
	$("input[name='dirtype']").click(function() { 
		if ($(this).val() === "alpha") {
			switchDir('a');
		} else if ($(this).val() === "dept") {
			switchDir('d');
		} else {
			switchDir('s');
		}
	} );
});

function switchDir( type ) {
	var url = wppath.path + "/wlu-directory/directory-display.php";
	
	jQuery( "#directory_block" ).hide();
	jQuery( "#load-spinner" ).show();
	
	if ( type == 'a' ) {
		var posting = jQuery.post( url, { action: 'alpha' } );
	} else if ( type == 'd' ) {
		var posting = jQuery.post( url, { action: 'dept' } );
	} else if ( type == 's' ) {
		var posting = jQuery.post( url, { action: 'subj' } );
	}

	posting.done( function( data ) {
		jQuery( "#directory_block" ).empty().append(data);
		jQuery( "#load-spinner" ).hide();
		jQuery( "#directory_block" ).fadeIn();
	} );
}
