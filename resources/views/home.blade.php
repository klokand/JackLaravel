@extends('app')

@section('content')
<div class="container">

	<div id ="feedback" class="row alert alert-success alert-dismissible fade in" role ="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
			<strong id="message"></strong>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
	<li role="presentation"><a href="#myAccountTag" role="tab" data-toggle="tab">My Account</a></li>
    <li role="presentation" class="active"><a href="#companyNameTag" role="tab" data-toggle="tab">Company Name</a></li>
	<li role="presentation"><a href="#whatWeDoTag"  role="tab" data-toggle="tab">What We Do</a></li>
    <li role="presentation"><a href="#aboutUsTag"  role="tab" data-toggle="tab">About Us</a></li>
    <li role="presentation"><a href="#strengthTag" role="tab" data-toggle="tab">Strength</a></li>
    <li role="presentation"><a href="#serviceTag" role="tab" data-toggle="tab">Service</a></li>
	<li role="presentation"><a href="#contactTag" role="tab" data-toggle="tab">Contact Us</a></li>
  </ul>


					</div>
				</div>
				<div class="panel-body">
					 <!-- Tab panes -->
  <div class="tab-content">
	<div role="tabpanel" class="tab-pane" id="myAccountTag">
		{{-- Form Starts Here --}}
		{!!Form::model($user,array('id' => 'ajaxMyAccount'))!!}
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
		{!! Form::label('AccountId','E-Mail Address',['for'=>'accountEmail'])!!}
	 {!!Form::text('email',null,['disabled','class'=>'form-control'])!!}
		</div>
		<div class="form-group">
		{!! Form::label('oldPassword','Old Password',['for'=>'oldPassword'])!!}
		{!!Form::password('oldPassword',['class'=>'form-control'])!!}
		</div>
		<div class="form-group">
		{!! Form::label('newPassword','New Password',['for'=>'newPassword'])!!}
		{!!Form::password('newPassword',['class'=>'form-control'])!!}
		</div>
		<div class="form-group">
		{!! Form::label('tryNewPassword','Try Again New Password',['for'=>'tryNewPassword'])!!}
		{!!Form::password('tryNewPassword',['class'=>'form-control'])!!}
		</div>
		{!!Form::submit('Edit!')!!}
		{!!Form::close()!!}
		{{-- Form Ends Here --}}
	</div>
	
    <div role="tabpanel" class="tab-pane active" id="companyNameTag">

		{{-- Form Starts Here --}}
		{!!Form::model($pageInfor,array('id' => 'ajaxCompanyName'))!!}
		<div class="form-group">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		{!! Form::label('companyName','Company Name',['for'=>'companyName'])!!}	{!!Form::text('company_name',null,['class'=>'form-control'])!!}
		</div>
		{!!Form::submit('Edit!')!!}
		{!!Form::close()!!}
		{{-- Form Ends Here --}}

	</div>
	<div role="tabpanel" class="tab-pane" id="whatWeDoTag">
		{{-- Form Starts Here --}}
		{!!Form::model($pageInfor,array('id' => 'ajaxWhatWeDo'))!!}
		<div class="form-group">
		{!! Form::label('whatWeDo','What We Do',['for'=>'aboutUs'])!!}
		{!!Form::textarea('what_we_do',null,['class'=>'form-control'])!!}
		</div>
		{!!Form::submit('Edit!')!!}
		{!!Form::close()!!}
		{{-- Form Ends Here --}}
	</div>
	
    <div role="tabpanel" class="tab-pane" id="aboutUsTag">
		{{-- Form Starts Here --}}
		{!!Form::model($pageInfor,array('id' => 'ajaxAboutUs'))!!}
		<div class="form-group">
		{!! Form::label('aboutUs','About Us',['for'=>'aboutUs'])!!}
		{!!Form::textarea('about_us',null,['class'=>'form-control'])!!}
		</div>
		{!!Form::submit('Edit!')!!}
		{!!Form::close()!!}
		{{-- Form Ends Here --}}
	</div>
    <div role="tabpanel" class="tab-pane" id="strengthTag">
		{{-- Form Starts Here --}}
		{!!Form::model($pageInfor,array('id' => 'ajaxStrengths'))!!}
		<div class="form-group">
		{!! Form::label('strength1','strength 1',['for'=>'strength1'])!!}
		{!!Form::textarea('strength_1',null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group">
		{!! Form::label('strength2','strength 2',['for'=>'strength2'])!!}
		{!!Form::textarea('strength_2',null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group">
		{!! Form::label('strength3','strength 3',['for'=>'strength3'])!!}
		{!!Form::textarea('strength_3',null,['class'=>'form-control'])!!}
		</div>
		{!!Form::submit('Edit!')!!}
		{!!Form::close()!!}
		{{-- Form Ends Here --}}
	</div>
    <div role="tabpanel" class="tab-pane" id="serviceTag">
		{{-- Form Starts Here --}}
		{!!Form::model($pageInfor,array('id' => 'ajaxServices'))!!}
		<div class="form-group">
		{!! Form::label('service1','service one',['for'=>'service1'])!!}
		{!!Form::textarea('service_1',null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group">
		{!! Form::label('service2','service two',['for'=>'service2'])!!}
		{!!Form::textarea('service_2',null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group">
		{!! Form::label('service3','service three',['for'=>'service3'])!!}
		{!!Form::textarea('service_3',null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group">
		{!! Form::label('service4','service four',['for'=>'service4'])!!}
		{!!Form::textarea('service_4',null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group">
		{!! Form::label('service5','service five',['for'=>'service5'])!!}
		{!!Form::textarea('service_5',null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group">
		{!! Form::label('service6','service six',['for'=>'service6'])!!}
		{!!Form::textarea('service_6',null,['class'=>'form-control'])!!}
		</div>
		{!!Form::submit('Edit!')!!}
		{!!Form::close()!!}
		{{-- Form Ends Here --}}
	</div>
	<div role="tabpanel" class="tab-pane" id="contactTag">
		{{-- Form Starts Here --}}
		{!!Form::model($pageInfor,array('id' => 'ajaxContact'))!!}
		<div class="form-group">
		{!! Form::label('postAddress','Post Address',['for'=>'postAddress'])!!}
		{!!Form::text('post_address',null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group">
		{!! Form::label('emailAddress','email Address',['for'=>'emailAddress'])!!}
		{!!Form::text('email_address',null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group">
		{!! Form::label('phoneNumber','Phone Number',['for'=>'phoneNumber'])!!}
		{!!Form::text('phone_number',null,['class'=>'form-control'])!!}
		</div>
		{!!Form::submit('Edit!')!!}
		{!!Form::close()!!}
		{{-- Form Ends Here --}}
	</div>
  </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
