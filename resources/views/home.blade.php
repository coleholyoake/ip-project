@extends('master')

@section('content')

<div class="above-the-fold">
    <h1>Some Above-The-Fold Content</h1>
    <div class="container">	
	    <div class="row">
	    	<div class="col-sm-2 col-sm-offset-5 col-xs-4 col-xs-offset-4 scroll-down">
	    		<img id="before" class="visible center-block" src="img/scroll_arrow.svg" width="40%">
	    		<img id="after" class="hidden center-block" src="img/scroll_text.svg" width="50%">
	    	</div>
	    </div>
	</div>
</div>  


@endsection
