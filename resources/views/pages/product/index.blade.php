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
                @foreach($product as $p)

            <div class="col-md-3">
              <div class="card">
                @php
                $i=1;
                @endphp
                @foreach($p->image as $images)
                @if($i>0)

  <img class="card-img-top feature-img" src="{{asset('images/products/'.$images->image)}}" alt="Card image cap">
  @endif
  @php $i--; @endphp
  @endforeach
  <div class="card-body">
    <h4 class="card-title"><a href="{{route('slug',$p->slug)}}">{{$p->title}}</a></h4>
    <p class="card-text">TK.{{$p->price}}</p>
    <a href="#" class="btn btn-outline-secondary">Add to cart</a>
  </div>
</div>
</div>

      @endforeach



						
					</div>
				</div>
				
			</div>
		</div>
	</div>
	@endsection

	