@extends('frontendtemplate')


@section('content')
<!-- Grid column -->
<div class="container my-5">
	<div class="col-lg-8 ml-xl-4 mb-4">
		<!-- Grid row -->
		<div class="row">

			<!-- Grid column -->
			<div class="col-xl-2 col-md-6 text-sm-center text-md-right text-lg-left">
				<p class="orange-text font-small font-weight-bold mb-1 spacing">
					<a>
						<strong>{{$post->categories->name}} </strong>
					</a>
				</p>
			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="col-xl-5 col-md-6 text-sm-center text-md-left">
				<p class="font-small grey-text">
					<em style="margin-left: 20px;"> March 6, 2020</em>
				</p>         
			</div>
			<!-- Grid column -->
			<p class=" text-info font-small font-weight-bold mb-1 spacing" style="float: right;">{{$post->users->name}}</p>

		</div>
		<!-- Grid row -->

		<h4 class="mb-3 dark-grey-text mt-0">
			<strong>
				<a>{{$post->title}}</a>
			</strong>
		</h4>
		<p class="dark-grey-text">{{$post->body}}
		</p>

		
		

	

	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>

</div>

	<div class="fb-comments" data-href="http://localhost:8000/detailpost" data-width="" data-numposts="5"></div>
	</div>
@endsection