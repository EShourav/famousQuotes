@extends('layouts.user_layout')

@section('user_content')

	<div id="quotes" class="container" style="background-image: url(../assets_frontend/img/154.jpg); background-size: auto 100%; background-position: center center; color: white;" >
		
		<?php

			foreach ($search_result as $quotes) {?>
				<h1 class="font-weight-bold">{{$quotes->q_details}}</h1>
				<h3 class="font-italic text-right"> ---{{$quotes->q_author}}</h3>

			<?php }


		?>
<div class="input-group">



  <form action="/action_page.php" type="get" action="{{ url('/query') }}">
  	{{ csrf_field()}}
      <input type="text" placeholder="Search Quotes" name="search">
      <button type="submit" style="background-color: transparent;
    background-repeat: no-repeat;
    border-radius: 12px;
    cursor: pointer;
    overflow: hidden;
    outline: none;
    margin-bottom: 2px;"><i class="fa fa-search"></i></button>
    </form>

		</div>

</div>



@endsection