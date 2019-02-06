@extends('layouts.app')
@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Hosts Infectados</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Lista de hosts</h2>
                    <p>Busque por algum campo para filtrar correspondentes:</p>  
                    
                    <a href="{{route('home')}}" class="btn btn-primary">Retorno</a>
                    <br><br>
                    
                    <input class="form-control" id="myInput" type="text" placeholder="Search..">
                    <br>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Online</th>
                            <th>IP</th>
                            <th>Created_at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody id="myTable">
                            @foreach($hosts as $host)
                            <tr>
                                <td>{{$host->id}}</td>
                                <td>{{$host->online}}</td>
                                <td>{{$host->ip}}</td>
                                <td>{{$host->created_at}}</td>
                                <td>
                                    <a href="{{route('dracula.hosts.view',[$host->id])}}" class="btn btn-primary">View</a>
                                    <a href="{{route('home',[$host->id])}}" class="btn btn-success">Index</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
@endsection
