@extends('main');

@section('title','Register Product')

@section('stylesheets')

@endsection

@section('content')
	<div class="row">		
		<div class="col-md-8">
			<h1>{{$product->name}}</h1>
			<p>{{$product->detail}}</p>
			<h4>Cantidad : {{$product->amount}}</h4>
		</div>
		<div class="col-md-4">
			<div class="well">
				<div class="dl-horizontal">
					<dt>Creado en :</dt>
					<dd>{{date('j M, Y H:i',strtotime($product->created_at))}}</dd>
				</div>
				<div class="dl-horizontal">
					<dt>Ultima Actualizacion en :</dt>
					<dd>{{date('j M, Y H:i',strtotime($product->updated_at))}}</dd>
				</div>
				<hr>				
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('products.edit','Editar',array($product->id),array('class'=>'btn btn-primary btn-block')) !!}
					</div>
					<div class="col-sm-6">

						{!! Form::open(['route'=>['products.destroy',$product->id],'method'=>'DELETE']) !!}

						{!!Form::submit('Borrar',['class'=>'btn btn-danger btn-block'])!!}

						{!! Form::close()!!}
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						{!! Html::linkRoute('products.index','<< Ver Todos los Productos','',array('class'=>'btn btn-default btn-block')) !!}
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection

@section('scripts')

@endsection