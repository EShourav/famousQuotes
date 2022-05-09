@extends('layouts.admin_layout')


@section('title')
	Dashboard | Admin
@endsection

@section('admin_content')
<!-- start: Content -->
	
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Homes</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul>



			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Quotes</h2>
						<div class="box-icon">
							<a href="{{ url('/add_quotes') }}" ><i class="halflings-icon plus"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID</th>
								  <th>Quote</th>
								  <th>Author</th>
								  <th>Actions</th>
							  </tr>
						  </thead>
						  @foreach($all_quotes_info as $quotes)
						  <tbody>
							<tr>
								<td>{{ $quotes-> q_id }}</td>
								<td class="center">{{ $quotes-> q_details }}</td>
								<td class="center">{{ $quotes-> q_author }}</td>
								<td class="center">
									<a class="btn btn-info" href="{{ URL::to('/edit_quotes/'.$quotes->q_id) }}">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="{{URL::to('/delete_quotes/'.$quotes->q_id) }}">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
						  </tbody>
						  @endforeach
					  </table>            
					</div>
				</div><!--/span-->
			</div><!--/row-->
			<!-- end: Content -->
<!-- end: Content -->
@endsection


@section ('js_script')
<!-- start: JavaScript-->

		<script src="../assets_admin/js/jquery-1.9.1.min.js"></script>
		<script src="../assets_admin/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="../assets_admin/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="../assets_admin/js/jquery.ui.touch-punch.js"></script>
	
		<script src="../assets_admin/js/modernizr.js"></script>
	
		<script src="../assets_admin/js/bootstrap.min.js"></script>
	
		<script src="../assets_admin/js/jquery.cookie.js"></script>
	
		<script src='../assets_admin/js/fullcalendar.min.js'></script>
	
		<script src='../assets_admin/js/jquery.dataTables.min.js'></script>

		<script src="../assets_admin/js/excanvas.js"></script>
	<script src="../assets_admin/js/jquery.flot.js"></script>
	<script src="../assets_admin/js/jquery.flot.pie.js"></script>
	<script src="../assets_admin/js/jquery.flot.stack.js"></script>
	<script src="../assets_admin/js/jquery.flot.resize.min.js"></script>
	
		<script src="../assets_admin/js/jquery.chosen.min.js"></script>
	
		<script src="../assets_admin/js/jquery.uniform.min.js"></script>
		
		<script src="../assets_admin/js/jquery.cleditor.min.js"></script>
	
		<script src="../assets_admin/js/jquery.noty.js"></script>
	
		<script src="../assets_admin/js/jquery.elfinder.min.js"></script>
	
		<script src="../assets_admin/js/jquery.raty.min.js"></script>
	
		<script src="../assets_admin/js/jquery.iphone.toggle.js"></script>
	
		<script src="../assets_admin/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="../assets_admin/js/jquery.gritter.min.js"></script>
	
		<script src="../assets_admin/js/jquery.imagesloaded.js"></script>
	
		<script src="../assets_admin/js/jquery.masonry.min.js"></script>
	
		<script src="../assets_admin/js/jquery.knob.modified.js"></script>
	
		<script src="../assets_admin/js/jquery.sparkline.min.js"></script>
	
		<script src="../assets_admin/js/counter.js"></script>
	
		<script src="../assets_admin/js/retina.js"></script>

		<script src="../assets_admin/js/custom.js"></script>
	<!-- end: JavaScript-->
@endsection