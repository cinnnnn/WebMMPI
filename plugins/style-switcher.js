jQuery(document).ready(function($) {
	
		// Color Changer
		$("#preset1" ).click(function(){
			$("#style-switch").attr("href", "css/presets/preset1.css" );
			return false;
		});
		$("#preset2" ).click(function(){
			$("#style-switch").attr("href", "css/presets/preset2.css" );
			return false;
		});
		$("#preset3" ).click(function(){
			$("#style-switch").attr("href", "css/presets/preset3.css" );
			return false;
		});

});