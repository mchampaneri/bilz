@extends('frames.container')

@section('title')
	Products
@endsection

@section('page')
	<div class="page-header">
		<h1>Inventory<small>Change will reflected in the database</small></h1>
	</div>

	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					Add New Product
				</div>
				<div class="pane-body">
					{!! Form::open(['method'=>'post','url'=>route('products.store')]) !!}
						{!! Form::label('Product Name')!!}
						{!! Form::text('name')!!}
						{!! Form::label('Price') !!}
						{!! Form::text('price')!!}
						{!! Form::submit()!!}
					{!! Form::close()!!}
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					Current inventory Status
				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Product Name</th>
								<th>Price Per Unit</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($products as $product) 
								<tr>
									<td> {{ $product->name }} </td>		
									<td> {{ $product->price }} </td>
								</tr>				
							@endforeach()
						</tbody>
					</table>
				</div>
				<div class="panel-footer">
					<div class="pull-left">
						Total Products:    
					</div>
					<div class="pull-right"> 
						Total Items:
					</div>
					<div style="clear: both"></div>
				</div>
			</div>
		</div>
	</div>
@endsection