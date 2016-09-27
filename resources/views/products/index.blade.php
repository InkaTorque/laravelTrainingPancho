@extends('main');

@section('title','Register Product')

@section('stylesheets')
	{{Html::style('css/indexStyles.css')}}
@endsection

@section('content')
	<div class="row">	
		<div class="col-md-10">
			<h1>Todos los Productos</h1>
		</div>
		<div class="col-md-2">
			{!! Html::linkRoute('products.create','Crear Nuevo Producto','',array('class' => 'btn btn-block btn-primary btn-index-new')) !!}
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Cantidad</th>
					<th>Creado en</th>
					<th></th>
					<th></th>
				</thead>
				<tbody>
					@foreach($products as $product)
					<tr>
						<th>{{$product->id}}</th>
						<td>{{$product->name}}</td>
						<td>{{$product->detail}}</td>
						<td>{{$product->amount}}</td>
						<td>{{date('j M, Y H:i',strtotime($product->created_at))}}</td>
						<td>{!! Html::linkRoute('products.show','Ver',array($product->id),array('class' => 'btn btn-default')) !!}</td>
						<td>{!! Html::linkRoute('products.edit','Editar',array($product->id),array('class' => 'btn btn-default')) !!}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="text-center">
				{!! $products->links(); !!}
			</div>
		</div>
	</div>

@endsection

@section('scripts')

@endsection