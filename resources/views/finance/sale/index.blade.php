<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
  
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vendas</title>
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

@section('title', 'Listar')

    @extends('adminlte::page')

@section('content')

<div class='table-responsive'>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          
                <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-md-12">
                          <div class="card">
                              <div class="card-header">
                              <svg xmlns="http://www.w3.org/2000/svg" height="3em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 0C46.3 0 32 14.3 32 32V96c0 17.7 14.3 32 32 32h80v32H87c-31.6 0-58.5 23.1-63.3 54.4L1.1 364.1C.4 368.8 0 373.6 0 378.4V448c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V378.4c0-4.8-.4-9.6-1.1-14.4L488.2 214.4C483.5 183.1 456.6 160 425 160H208V128h80c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H64zM96 48H256c8.8 0 16 7.2 16 16s-7.2 16-16 16H96c-8.8 0-16-7.2-16-16s7.2-16 16-16zM64 432c0-8.8 7.2-16 16-16H432c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16zm48-168a24 24 0 1 1 0-48 24 24 0 1 1 0 48zm120-24a24 24 0 1 1 -48 0 24 24 0 1 1 48 0zM160 344a24 24 0 1 1 0-48 24 24 0 1 1 0 48zM328 240a24 24 0 1 1 -48 0 24 24 0 1 1 48 0zM256 344a24 24 0 1 1 0-48 24 24 0 1 1 0 48zM424 240a24 24 0 1 1 -48 0 24 24 0 1 1 48 0zM352 344a24 24 0 1 1 0-48 24 24 0 1 1 0 48z"/></svg>                                  Vendas
                                  <a class="float-right btn btn-success" href="{{url('sale/create')}}">   Cadastrar</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
           
                @if(Session::has('mensagem_sucesso'))
                       <div class="alert alert-success"> {{ Session::get('mensagem_sucesso')}}</div>
                @endif

                <div class='table-responsive container card p-3'>

                <table id="example1" class="table table-sm  table-bordered table-striped dataTable dtr-inline collapsed " role="grid" aria-describedby="example1_info">
                  
                  <thead>
                      <tr>
                  
                          <th class="sorting_asc" tabindex="0" aria-controls="" rowspan="0" colspan="1"  aria-label="">Data</th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="">Produto</th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="">Área</th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="">Comprador</th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="">Qte</th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="">Unid</th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="">Pr Unit</th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="">Valor</th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="" style="display: none;">CSS grade</th>
                      </tr>
                  </thead>
                

                    <tbody>

                     
                    
                    @foreach($sales as $sale)
                     
                    <tr>
                      <td>  
                        <a href= "{{ route('sale.edit' ,[ 'sale' => $sale->id  ])}}" >{{ $sale->date }}</a>
                      </td>
                      <td>
                        <a href= "{{ route('sale.edit' ,[ 'sale' => $sale->id ])}}" >{{ $sale->crop->name}}</a>
                      </td>
                      <td>
                        <a href= "{{ route('sale.edit' ,[ 'sale' => $sale->id ])}}" >{{ $sale->ground->name}}</a>
                      </td>
                      <td>  
                        <a href= "{{ route('sale.edit' ,[ 'sale' => $sale->id ])}}" >{{ $sale->bayer->name}}</a>
                      </td>
                      <td>
                        <a href= "{{ route('sale.edit' ,[ 'sale' => $sale->id ])}}" >{{ number_format($sale->amount, 2 , ',', '.')  }}</a>
                      </td>
                      <td>
                        <a href= "{{ route('sale.edit' ,[ 'sale' => $sale->id ])}}" >{{ $sale->unity}}</a>
                      </td>
                      <td>  
                        <a href= "{{ route('sale.edit' ,[ 'sale' => $sale->id ])}}" >{{ number_format($sale->price_unit, 2 , ',', '.')  }}</a>              
                      </td>
                      <td>  
                        <a href= "{{ route('sale.edit' ,[ 'sale' => $sale->id ])}}" >{{ number_format($sale->account->amount, 2 , ',', '.')  }}</a>              
                      </td>          
                    </tr>
                       
                      @endforeach
                    </tbody>
                  </table>                  
                </div>
        </div>
    </div>
    
      <div class="">
          <a href="{{ url('admin/home/index') }}" class="float-right fas fa-solid fa-arrow-left" >Voltar </a> 
      </div>
    
</div>

</div>


<!-- ./wrapper -->
<!-- jQuery -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script>
    window.location.href='#ancora';
</script>
<!-- page script -->

@stop


