@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
#filtros
    </div>
    <div class="card-body">

        <table class="table-condensed" style="width:100%">
       <thead>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th style="width:50">Ações</th>
        </tr>
       </thead>
       <tbody>
        @foreach ($plans as $plan)
        <tr>
            <td>
                {{$plan->name}}
            </td>
            <td>
                {{$plan->price}}
            </td>
            <td>
                {{$plan->description}}
            </td>
            <td style="width:10px;">
                <a href="#" class="btn btn-warning">excluir</a></td>
          </tr>
        @endforeach
    </tbody>

      </table>
    </div>

        <div class="card-footer">
            {!! $plans->links() !!}

          </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
