@extends('layouts.user_layout')

@section('user_content')
	<div id="quotes" class="container" style="background-image: url(../assets_frontend/img/154.jpg); background-size: auto 100%; background-position: center center; color: white;" >
		
		<?php

			$all_quotes = DB::table('tbl_quotes')
						->inRandomOrder()
						->limit(5)
						->get();

			foreach ($all_quotes as $quotes) {?>
				<h1 class="font-weight-bold">{{$quotes->q_details}}</h1>
				<h3 class="font-italic text-right"> ---{{$quotes->q_author}}</h3>

			<?php }


		?>
<div class="input-group">

<button name="button" onClick="history.go(0);" style="background-color: transparent;
    background-repeat: no-repeat;
    border-radius: 12px;
    cursor: pointer;
    overflow: hidden;
    outline: none;
    margin-bottom: 2px;">Get New Quotes</button>

  <form type="get" action="{{ url('/query') }}">
  	{{ csrf_field()}}
      <input type="text" placeholder="Search Quotes" name="search" style="color: black;">
      <button type="submit" style="background-color: transparent;
    background-repeat: no-repeat;
    border-radius: 12px;
    cursor: pointer;
    overflow: hidden;
    outline: none;
    margin-bottom: 2px;"><i class="fa fa-search"></i></button>
    </form>

		</div>


<script >
	$(document).ready(function(){
	$('#button').click(function(){
		$("#quotes").load();
	});

</script>
</div>
@endsection