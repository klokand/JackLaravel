$.ajaxSetup({
   headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});
$(function(){
        //We hide de the result div on start
        $('#feedback').hide();
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
	   
	   