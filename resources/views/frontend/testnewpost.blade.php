@extends('frontendtemplate')

@section('content')
<!-- Main layout -->
<main>

	<div class="container">

		<!-- Section: Create Page -->
		<section class="my-5">

			<!-- Grid row -->
			<div class="row">

				<!-- Grid column -->
				<div class="col-lg-8">

					<!-- First card -->
					<div class="card mb-4 post-title-panel">
						<div class="card-body">
							<div class="md-form mt-1 mb-0">
								<input type="text" id="form1" class="form-control">
								<label class="form-check-label" for="form1" class="">Post title</label>
							</div>
						</div>
					</div>


					<div>
            <textarea id="summernote"></textarea>     
          </div>
					
					
					<!-- First card -->

					<!-- Second card -->
            <!-- <div class="card mb-4">
              <textarea name="" id="post_content"></textarea>
          </div> -->
          <!-- Second card -->

          <!-- Third Card -->
            <!-- <div class="card mb-4">
              <div class="card-body">
                <div class="md-form mb-0 mt-2">
                  <textarea type="text" id="form7" class="md-textarea form-control" rows="3"></textarea>
                  <label class="form-check-label" for="form7">Post Body</label>
                </div>
              </div>
          </div> -->
          <!-- Third Card -->
          <button class="btn btn-primary" style="float: left;">Publish</button>
          <button class="btn btn-primary" style="float: right;">Cancel</button>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4">

      	<!-- Card -->
      	<div class="card card-cascade narrower">

      		<!-- Card image -->
      		<div class="view view-cascade gradient-card-header blue-gradient">
      			<h4 class="font-weight-500 mb-0">Categories</h4>
      		</div>
      		<!-- Card image -->

      		<!-- Card content -->
      		<div class="card-body card-body-cascade">
      			<fieldset class="form-check mb-4">
      				<input class="form-check-input" type="checkbox" id="color-1">
      				<label class="form-check-label" for="color-1">Material Design</label>
      			</fieldset>
      			<fieldset class="form-check mb-4">
      				<input class="form-check-input" type="checkbox" id="color-2">
      				<label class="form-check-label" for="color-2">Tutorials</label>
      			</fieldset>
      			<fieldset class="form-check mb-4">
      				<input class="form-check-input" type="checkbox" id="color-3">
      				<label class="form-check-label" for="color-3">Marketing Automation</label>
      			</fieldset>
      			<fieldset class="form-check mb-4">
      				<input class="form-check-input" type="checkbox" id="color-4">
      				<label class="form-check-label" for="color-4">Design Resources</label>
      			</fieldset>
      			<fieldset class="form-check">
      				<input class="form-check-input" type="checkbox" id="color-5">
      				<label class="form-check-label" for="color-5">Random Stories</label>
      			</fieldset>
      		</div>
      		<!-- Card content -->

      	</div>
      	<!-- Card -->

      </div>
      <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Create Page -->

</div>

</main>
<!-- Main layout -->


<script>
    $('#summernote').summernote({
      placeholder: 'Hello Bootstrap 4',
      tabsize: 2,
      height: 100
    });
</script>



@endsection
