@extends('layouts.master')
	<!-- navebar ok -->
	<!-- Sidebar and contain -->
	@section('content')
	<div class="container margin-top-20">
		<div class="row">
			<div class="col-md-4">
     @include('partials.product-sidebar')
				
			</div>

			<div class="col-md-8">
				<div class="widget">
					<h3>Product</h3>
          <div class="row">
                
                

            <div class="col-md-3">
              <div class="card">
<!--  -->
  <div class="card-body">
    <h4 class="card-title">{{$search->title}}</h4>
    <p class="card-text">TK.{{$search->price}}</p>
    
  </div>
</div>
</div>

      



						
					</div>
				</div>
				
			</div>
		</div>
	</div>
	@endsection

	