@extends('templates.default')

@section('content')
    <div class="row">
    	<div class="col-lg-6">
    		<h3>Your Connections</h3>
    			@if (!$friends->count())
   					<p>You Have No Connections.</p>
   				@else
   					@foreach ($friends as $user)
   						@include('user.partials.userblock')
   					@endforeach
   				@endif
    	</div>

    	<div class="col-lg-6">
    		<h4>Connections Requests</h4>
          @if (!$requests->count())
            <p>You Have Connections Request.</p>
          @else
            @foreach ($requests as $user)
              @include('user.partials.userblock')
            @endforeach
          @endif
    	</div>
    </div>
@stop