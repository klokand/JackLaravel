@extends('app')

@section('content')
<div class="container">
	<div class="row alert alert-success alert-dismissible fade in" role ="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
			<strong><!!$loginMessage!!></strong>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#companyName" role="tab" data-toggle="tab">Company Name</a></li>
    <li role="presentation"><a href="#aboutUs"  role="tab" data-toggle="tab">About Us</a></li>
    <li role="presentation"><a href="#strength" role="tab" data-toggle="tab">Strength</a></li>
    <li role="presentation"><a href="#service" role="tab" data-toggle="tab">Service</a></li>
	<li role="presentation"><a href="#contact" role="tab" data-toggle="tab">Contact Us</a></li>
  </ul>


					</div>
				</div>
				<div class="panel-body">
					 <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="companyName">Company Name</div>
    <div role="tabpanel" class="tab-pane" id="aboutUs">what we do</div>
    <div role="tabpanel" class="tab-pane" id="strength">strength</div>
    <div role="tabpanel" class="tab-pane" id="service">service</div>
	<div role="tabpanel" class="tab-pane" id="contact">our number</div>
  </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
