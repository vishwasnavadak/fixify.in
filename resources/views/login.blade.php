@extends('header')
@section('content')
<div class="login-body">
    <article class="container-login center-block">
		<section>
      @if(isset($error))
        <div class="alert alert-info">
          <strong>Note!</strong>{{$error}}
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
              <a href="#" class="btn btn-primary form-control">Facebook</a>
            </div>
            <div class="col-sm-6">
              <a href="#" class="btn btn-danger form-control">Google</a>
            </div>
          </div>
          <center><h3>---------- OR ----------</h3></center>
					<form method="post" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal" action="user/login">
            {{ csrf_field() }}
						<div class="form-group ">
							<input type="text" class="form-control" name="login" placeholder="Email"/>
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
					<form method="post" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal" action="user/register">
						<div class="form-group ">
							<label for="login" class="sr-only">Name</label>
								<input type="text" class="form-control" name="login" id="login_value"
									placeholder="Name" tabindex="1" value="" />
						</div>
						<div class="form-group ">
							<label for="password" class="sr-only">Phone</label>
								<input type="password" class="form-control" name="password" id="password"
									placeholder="Phone" value="" tabindex="2" />
						</div>
            <div class="form-group ">
							<label for="password" class="sr-only">Email</label>
								<input type="password" class="form-control" name="password" id="password"
									placeholder="Email" value="" tabindex="2" />
						</div>
            <div class="form-group ">
							<label for="password" class="sr-only">Password</label>
								<input type="password" class="form-control" name="password" id="password"
									placeholder="Password" value="" tabindex="2" />
						</div>
            <div class="form-group ">
							<label for="password" class="sr-only">Re-enter Password</label>
								<input type="password" class="form-control" name="password" id="password"
									placeholder="Re-enter Password" value="" tabindex="2" />
						</div>
            <center><h3>---------- OR ----------</h3></center>
            <div class="row form-group">
              <div class="col-sm-6">
                <a href="#" class="btn btn-primary form-control">Facebook</a>
              </div>
              <div class="col-sm-6">
                <a href="#" class="btn btn-danger form-control">Google</a>
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
