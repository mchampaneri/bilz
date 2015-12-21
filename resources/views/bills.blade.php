@extends('frames.container')

@section('title')
	Bills Page
@endsection

@section('page')
	<div class="page-header">
		<h1>Bills<small>It will show Information for today ONLY !!!</small></h1>
	</div>

	<div class="row">

		<div class="panel panel-default">
			<div class="panel-heading">
				New Bill
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-primary">
							<div class="panel-heading">
								New Customer
							</div>
							<div class="panel-body">
								{!! Form::open(['url'=>route('customers.store'),'method'=>'post'])  !!}
								
								{!! Form::label('Customer Name') !!}

								{!! Form::text('name') !!}

								{!! Form::label('Contact Number') !!}

								{!! Form::text('contact_number') !!}

								{!! Form::label('Address') !!}
								 </br>

								{!! Form::textarea('Address','Address  Here',['class'=>'form-control']) !!} 

								{!! Form::submit('Customer',['class'=>'btn btn-default']) !!}

								{!! Form::close()!!}
							</div>
							<div class="panel-footer">
								Fill Detail To get the bill page
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel panel-primary">
							
						</div>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				Generate A Blank Bill
			</div>
		</div>
	</div>
@endsection