@extends('main');

@section('title','Register Product')

@section('stylesheets')
	
	{{Html::style('css/parsley.css')}}

@endsection

@section('content')
	
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>
				Crate a New Product
			</h1>
			<hr>
			{!! Form::open(['route' => 'products.store','data-parsley-validate'=>'']) !!}
				{{Form::label('name','Nombre')}}
				{{Form::text('name',"",array('class'=>'form-control','required'=>''))}}

				{{Form::label('detail','Detalle')}}
				{{Form::text('detail',null,array('class'=>'form-control','style'=>'height:150px'))}}

				{{Form::label('amount','Cantidad')}}
				{{Form::number('amount','',array('class'=>'form-control'))}}

				{{Form::submit('Registrar Producto',array('class'=> 'btn btn-success btn-lg btn-block','style'=>'margin-top:20px','required'=>''))}}
			{!! Form::close() !!}
		</div>
	</div>

@endsection

@section('scripts')
	
	{{ Html::script('js/Parsley/parsley.min.js')}}
	{{ Html::script('js/Parsley/es.js')}}

@endsection