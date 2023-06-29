<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
  
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fornecedores</title>
     <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
    
</body>
</html>

@section('title', 'Apresentar')

    @extends('adminlte::page')

@section('content')


<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <img class="card-img-top img-responsive img-thumbnail" src="{{ asset('img/cards/provide_plant.png')}}"  style="height: 50px; width: 50px;"alt="Imagem" >
                  Confirmar a exclusão
              </div>
          </div>
      </div>
  </div>
</div>   


   <!-- Fim do Formulario de despesa_conta --> 
   <form action="{{ route('provide.destroy',[ 'provide' => $provide->id ])}}" method="POST"  enctype="multipart/form-data">

    @method('DELETE')
  
         <div class="form-group">
         {!! csrf_field() !!}  


  <div class="form-group">

    <div class="container">
        <div class="row">
          <div class="bolder">Nome:</div>
        </div>
        <div class="row">
          <div class="form-control">{{ $provide->name}}</div>
        </div>
        <br>
        <div class="row">
          <div class="bolder">Endereço:</div>
        </div>
        <div class="row">
          <div class="form-control">{{ $provide->adress}}</div>
        </div>
        <br>
        <div class="row">
          <div class="bolder">Cidade:</div>
        </div>
        <div class="row">
          <div class="form-control">{{ $provide->city}}</div>
        </div>
        <br>
        <div class="row">
          <div class="bolder">Telefone:</div>
        </div>
        <div class="row">
          <div class="form-control">{{ $provide->phone}}</div>
        </div>
        <br>
        <div class="bg-light">Observação</div>
        <div class="row">
            <textarea class="form-control" rows="3" >{{$provide->note }} </textarea>
        </div>
        <br>
        <div class="row">
          Imagem :
          <img src="{{ asset('storage/provides/'.$provide->image)}}" class="img-thumbnail elevation-2"  style="max-width: 50px;"> 
        </div>
    </div>
    
    <p></p>
  
             <div class="form-group">
                  <button type="submit" class="btn btn-outline-danger" >Confirma a exclusão dessa atividade</button>
                  <a href="{{ url('/provide') }}" class="float-right" >Voltar </a> 
             </div>
         </div>
     </form>

</div>
</div>
<a href="#" id="ancora"></a>


@endsection

