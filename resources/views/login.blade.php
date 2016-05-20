@extends('header')
@section('content')
<div class="login-body">
    <article class="container-login center-block">
		<section>
      @if($errors->any())
        <div class="alert alert-danger">
          @foreach($errors->all() as $error)
            <strong>Note!</strong> {{$error}}
          @endforeach
        </div>
      @endif
			<ul id="top-bar" class="nav nav-tabs nav-justified">
				<li class="active"><a href="#login">Login</a></li>
				<li><a href="#register">Register</a></li>
			</ul>
			<div class="tab-content tabs-login col-lg-12 col-md-12 col-sm-12 cols-xs-12">
				<div id="login" class="tab-pane fade active in">
					<h2><i class="glyphicon glyphicon-log-in"></i> Login to Fixify</h2>
          <div class="row form-group">
            <div class="col-sm-6">
              <a href="social/redirect/facebook" class="btn form-control social fb">
                <i class="fa fa-facebook"></i>
                <span>Facebook</span>
              </a>
            </div>
            <div class="col-sm-6">
              <a href="social/redirect/google" class="btn form-control social go">
                <i class="fa fa-google-plus"></i>
                <span>Google +</span>
              </a>
            </div>
          </div>
          <center><h3>OR</h3></center>
					<form method="post" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal" action="user/login">
            {{ csrf_field() }}
						<div class="form-group ">
							<input type="text" class="form-control" name="email" placeholder="Email"/>
						</div>
						<div class="form-group ">
								<input type="password" class="form-control" name="passwd" placeholder="Password">
						</div>
						<div class="form-group ">
								<button type="submit" class="btn btn-lg btn-primary">Submit</button>
						</div>
					</form>
				</div>
        <div id="register" class="tab-pane fade active in">
					<h2><i class="glyphicon glyphicon-log-in"></i> Register to Fixify</h2>
					<form method="post" onsubmit="return validate()" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal" action="user/register">
            {{ csrf_field() }}
            <div class="form-group">
							<div class="row">
							  <div class="col-sm-6">
							    <input type="text" class="form-control req" name="fName" placeholder="First Name">
							  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="lName" placeholder="Second Name">
                </div>
							</div>
						</div>
						<div class="input-group form-group">
							<span class="input-group-addon"><i class="fa fa-phone"></i></span>
							<input type="text" class="form-control" name="phone" placeholder="Phone">
						</div>
            <div class="form-group input-group">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input type="email" class="form-control req" name="email" placeholder="Email">
						</div>
            <div class="form-group input-group">
							<span class="input-group-addon"><i class="fa fa-key"></i></span>
								<input type="password" class="form-control req" name="passwd" placeholder="Password">
						</div>
            <div class="form-group input-group">
							<span class="input-group-addon"><i class="fa fa-key"></i></span>
								<input type="password" class="form-control req" name="passwd2" placeholder="Re-enter Password">
						</div>
            <center><h3>---------- OR ----------</h3></center>
            <div class="row form-group">
              <div class="col-sm-6">
                <a href="#" class="btn btn-primary form-control social">
                  <i class="fa fa-facebook"></i>
                  <span>Facebook</span>
                </a>
              </div>
              <div class="col-sm-6">
                <a href="#" class="btn btn-danger form-control social">
                  <i class="fa fa-google-plus"></i>
                  <span>Google +</span>
                </a>
              </div>
            </div>
						<div class="form-group ">
								<button type="submit" name="log-me-in" id="submit" tabindex="5" class="btn btn-lg btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</section>
	</article>
</div>
@stop
