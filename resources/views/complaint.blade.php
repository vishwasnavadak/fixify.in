@extends('header')
@section('content')
<div class="login-body">
    <article class="container-login center-block">
		<section>
			<ul id="top-bar" class="nav nav-tabs nav-justified">
				<li><a href="#">Let us know more</a></li>
			</ul>
			<div class="tab-content tabs-login col-lg-12 col-md-12 col-sm-12 cols-xs-12">
				<div id="login" class="tab-pane fade active in">
          <h4>{{$complaint}}</h4>
					<form method="post" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal" action="user/login">
            {{ csrf_field() }}
						<div class="form-group ">
							<input type="text" class="form-control" name="input1" placeholder="Input1"/>
						</div>
            <div class="form-group ">
							<input type="text" class="form-control" name="input2" placeholder="Input2"/>
						</div>
            <div class="form-group ">
							<input type="text" class="form-control" name="input3" placeholder="Input3"/>
						</div>
            <div class="form-group ">
							<input type="text" class="form-control" name="input4" placeholder="Input4"/>
						</div>
            <div class="form-group ">
							<input type="text" class="form-control" name="input5" placeholder="Input5"/>
						</div>
						<div class="form-group ">
								<button type="submit" class="btn btn-lg btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</section>
	</article>
</div>
@stop
