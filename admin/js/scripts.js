$(document).ready(function(){

	let user_href;
	let user_href_splitted;
	let user_id;
	let image_src;
	let image_href_splitted;
	let image_name;

	$(".modal_thumbnails").click(function(){
		$("#set_user_image").prop('disabled', false);
		user_href = $("#user-id").prop('href');
		user_href_splitted = user_href.split("=");
		user_id = user_href_splitted[user_href_splitted.length -1];

		image_src = $(this).prop("src");
		image_href_splitted = image_src.split("/");
		image_name = image_href_splitted[image_href_splitted.length -1];
	});

	$("#set_user_image").click(function(){
		$.ajax({
			url: "include/ajax_code.php",
			data:{image_name: image_name, user_id:user_id},
			type: "POST",
			success:function(data){
				if(!data.error){
					location.reload(true);
				}
			}

		});



	});

	tinymce.init({ selector:'textarea' });

});

