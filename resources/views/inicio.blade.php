@extends('layouts.app')



@section('content')


  <div class="container">
     <div class="row ">
        <div class="col-md-10 mx-auto">
           <div class="card">
              <div class="card-header">
                <h4 class="text-center lead">Lista de Productos</h4>
                 <p>{{$products->total() }} -  registro </p>
              </div>
              <div class="card-body">
              <div class="alert alert-info"></div>
                   <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                        <th scope="row">{{ $product->id}}</th>
                        <td>{{ $product->name}}</td>
                        <td>
                        
                        {!! Form::open(['route'=>['destroy', $product->id], 'method'=>'DELETE'])  !!}
                         <a href="" class="delete">
                           <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>  
                        {!! Form::close()!!}
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                  <span class="float-right">{{$products->links()}}</span>   
              </div>
           </div>
        </div>
     </div>
  </div>

@endsection


@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
<script src="{{ asset('js/script.js') }}"></script>

@endsection()