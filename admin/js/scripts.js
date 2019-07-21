$(document).ready(function(){

	let user_href;
	let user_href_splitted;
	let user_id;
	let image_src;
	let image_href_splitted;
	let image_id;

	$(".modal_thumbnails").click(function(){
		$("#set_user_image").prop('disabled', false);
		user_href = $("#user-id").prop('href');
		user_href_splitted = user_href.split("=");
		user_id = user_href_splitted[user_href_splitted.length -1];

		image_src = $(this).prop("src");
		image_href_splitted = image_src.split("/");
		image_id = image_href_splitted[image_href_splitted.length -1];
	});

	tinymce.init({ selector:'textarea' });

});

