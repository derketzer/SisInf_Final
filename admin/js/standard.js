$(document).ready(function(){
	tinyMCE.init({
		mode : "exact",
		elements : "input-tiny",
		theme : "advanced",
		plugins : "table,advhr,advimage,advlink,paste,fullscreen,noneditable,contextmenu",
		        
		// Theme options - button# indicated the row# only
		theme_advanced_buttons1 : "pasteword,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,bullist,numlist,|,outdent,indent,|,undo,redo,|,link,unlink,|,cleanup,code",
		theme_advanced_buttons2 : "table,hr,removeformat,visualaid,|,sub,sup,|,charmap,fullscreen",
		theme_advanced_buttons3 : "",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		paste_use_dialog : false,
		theme_advanced_resizing : true,
		theme_advanced_resize_horizontal : true,
		apply_source_formatting : true,
		force_p_newlines : true,	
		relative_urls : true,
		width: 600,
		height: 300
	});
});