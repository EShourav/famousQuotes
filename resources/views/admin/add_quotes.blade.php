@extends('layouts.admin_layout')

@section('title')
	Dashboard | Add Quotes
@endsection

@section('admin_content')

	<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="{{ url('/admin') }}">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Add Quotes</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add A Quote</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{ url('/save_quote') }}" method="post">
							{{ csrf_field() }}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Quote</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="quotes">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Author</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="quote_author">
							  </div>
							</div>
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Reset</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection

@section('js_script')
@endsection