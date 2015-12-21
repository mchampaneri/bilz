


Our Product List

<table class="table table-hover">

	<thead>
		<th>Product Name</th>
		<th>Price Per Unit</th>
	</thead>
	<tbody>
	@foreach ($products as $product) 
		<tr>
			<td>{{$product->name}}</td>
			<td>{{$product->price}}</td>
		</tr>
	@endforeach		
	</tbody>
</table>
