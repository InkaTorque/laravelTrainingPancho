@extends('main');

@section('title','Register Product')

@section('stylesheets')

	{{Html::style('css/parsley.css')}}
@endsection

@section('content')
<div class="row">
		{!! Form::model($product,['route'=>['products.update',$product->id],'data-parsley-validate'=>'','method'=>'PUT'])!!}	
		<div class="col-md-8">
			{{Form::label('name','Nombre')}}
			{{Form::text('name',null,array('class'=>'form-control','required'=>''))}}

			{{Form::label('detail','Detalle')}}
			{{Form::text('detail',null,array('class'=>'form-control','style'=>'height:150px'))}}

			{{Form::label('amount','Cantidad')}}
			{{Form::number('amount',null,array('class'=>'form-control'))}}
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
						{!! Html::linkRoute('products.show','Cancelar',array($product->id),array('class'=>'btn btn-danger btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{{Form::submit('Guardar Cambios',['class'=>'btn btn-success btn-block'])}}						
					</div>
				</div>
			</div>
		</div>
		{!! Form::close() !!}		
	</div>
@endsection

@section('scripts')
	
	{{ Html::script('js/Parsley/parsley.min.js')}}
	{{ Html::script('js/Parsley/es.js')}}

@endsection