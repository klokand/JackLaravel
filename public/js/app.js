var test = 0;
$.ajaxSetup({
   headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});
$(function(){
        //We hide de the result div on start
        $('#feedback').hide();
		$("#ajaxMyAccount").validate({
			rules:{
				oldPassword:{
					required:true,
					minlength:6,
					remote:{
						url:"checkOldEmailP",
						type:"post",
						data:{
							oldPassword:function(){
								return $("#oldPassword").val();
							},
							_token:function(){
								return $('input[name=_token]').val();
							}
						},
						success:function(data){
							var result = $.trim(data);
							if(result =="1"){
								console.log("first if");
							$("#oldPasswordCheckInputAjax").attr("class","form-group has-success has-feedback");
							$("#oldPasswordCheckStatus").attr("class","glyphicon glyphicon-ok form-control-feedback");
							test =1;
							}else if(result=="2"){
							test =0;
							console.log("second if");
								$("#oldPasswordCheckInputAjax").attr("class","form-group has-error has-feedback");
								$("#oldPasswordCheckStatus").attr("class","glyphicon glyphicon-remove form-control-feedback");
							}
						},
					}	
				},
				newPassword:{
					required:true,
					minlength:6,
				},
				tryNewPassword:{
					required:true,
					minlength:6,
					equalTo:"#newPassword",
				}
			},
			messages:{
				tryNewPassword:{
					equalTo:"This doesn't match the above password!",
				}
			}
		});
});

$('#ajaxMyAccount').submit(function(event) {
	
	/* stop form from submitting normally */
	if($('#ajaxMyAccount').valid()){
		if(test ==1){
			event.preventDefault();
			var newPassWord = $('input[name=newPassword]').val();
			var token =$('input[name=_token]').val();
			console.log(newPassWord);
			var url ="updatePassword";
			var $post ={};
			$post.newPassword = newPassWord;
			$post._token = token;
			
			//ajax post the form
			$.ajax({
			type:"POST",
			url: url,
			data: $post,
			cache:false,
			success:function(data){
				$('#message').text(data);
				$('#feedback').show();
				$("#oldPasswordCheckInputAjax").attr("class","form-group");
				$("#oldPasswordCheckStatus").attr("class","form-control-feedback");
				$("#oldPassword").val("");
				$("#newPassword").val("");
				$("#tryNewPassword").val("");
			}
		});
		return false;
		}
		
	}
	});



$('#ajaxCompanyName').submit(function(event) {
	
	/* stop form from submitting normally */
  	event.preventDefault();
	var newCompanyName = $('input[name=company_name]').val();
	var token =$('input[name=_token]').val();
	console.log(newCompanyName);
		var url ="updateCompanyName";
		var $post ={};
		$post.companyName = newCompanyName;
		$post._token = token;
	  	//ajax post the form
		$.ajax({
			type:"POST",
			url: url,
			data: $post,
			cache:false,
			success:function(data){
				$('#message').text(data);
				$('#feedback').show();
			}
		});
		return false;
	});

	$('#whatWeDoTag').submit(function(event) {
	
	/* stop form from submitting normally */
  	event.preventDefault();
	var newWhatWeDo = $('textarea[name=what_we_do]').val();
	console.log(newWhatWeDo);//testing
	var token =$('input[name=_token]').val();
		var url ="updateWhatWeDo";
		var $post ={};
		$post.whatWeDo = newWhatWeDo;
		$post._token = token;
	  	//ajax post the form
		$.ajax({
			type:"POST",
			url: url,
			data: $post,
			cache:false,
			success:function(data){
				$('#message').text(data);
				$('#feedback').show();
			}
		});
		return false;
	});
	$('#aboutUsTag').submit(function(event) {
	
	/* stop form from submitting normally */
  	event.preventDefault();
	var newAboutUs = $('textarea[name=about_us]').val();
	console.log(newAboutUs);
	var token =$('input[name=_token]').val();
		var url ="updateAboutUs";
		var $post ={};
		$post.aboutUs = newAboutUs;
		$post._token = token;
	  	//ajax post the form
		$.ajax({
			type:"POST",
			url: url,
			data: $post,
			cache:false,
			success:function(data){
				$('#message').text(data);
				$('#feedback').show();
			}
		});
		return false;
	});

	$('#ajaxStrengths').submit(function(event) {
	
	/* stop form from submitting normally */
  	event.preventDefault();
	var newStrength1 = $('textarea[name=strength_1]').val();
	var newStrength2 = $('textarea[name=strength_2]').val();
	var newStrength3 = $('textarea[name=strength_3]').val();
	var token =$('input[name=_token]').val();
		var url ="updateStrengths";
		var $post ={};
		$post.strength1 = newStrength1;
		$post.strength2 = newStrength2;
		$post.strength3 = newStrength3;
		$post._token = token;
	  	//ajax post the form
		$.ajax({
			type:"POST",
			url: url,
			data: $post,
			cache:false,
			success:function(data){
				$('#message').text(data);
				$('#feedback').show();
			}
		});
		return false;
	});
	

$('#ajaxServices').submit(function(event) {
	
	/* stop form from submitting normally */
  	event.preventDefault();
	var newService1 = $('textarea[name=service_1]').val();
	var newService2 = $('textarea[name=service_2]').val();
	var newService3 = $('textarea[name=service_3]').val();
	var newService4 = $('textarea[name=service_4]').val();
	var newService5 = $('textarea[name=service_5]').val();
	var newService6 = $('textarea[name=service_6]').val();
	var token =$('input[name=_token]').val();
		var url ="updateServices";
		var $post ={};
		$post.service_1 = newService1;
		$post.service_2 = newService2;
		$post.service_3 = newService3;
		$post.service_4 = newService4;
		$post.service_5 = newService5;
		$post.service_6 = newService6;
		$post._token = token;
	  	//ajax post the form
		$.ajax({
			type:"POST",
			url: url,
			data: $post,
			cache:false,
			success:function(data){
				$('#message').text(data);
				$('#feedback').show();
			}
		});
		return false;
	});
	
$('#ajaxContact').submit(function(event) {
	
	/* stop form from submitting normally */
  	event.preventDefault();
	var newPostAddress = $('input[name=post_address]').val();
	var newEmailAddress = $('input[name=email_address]').val();
	var newPhoneAddress = $('input[name=phone_number]').val();
	var token =$('input[name=_token]').val();
		var url ="updateContact";
		var $post ={};
		$post.postAddress = newPostAddress;
		$post.emailAddress = newEmailAddress;
		$post.phoneAddress = newPhoneAddress;
		$post._token = token;
	  	//ajax post the form
		$.ajax({
			type:"POST",
			url: url,
			data: $post,
			cache:false,
			success:function(data){
				$('#message').text(data);
				$('#feedback').show();
			}
		});
		return false;
	});
	   
	   