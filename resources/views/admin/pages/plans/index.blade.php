@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="{{ route('plans.index') }}" class="active">Planos</a></li>
</ol>

<h1>Planos <a href="{{ route('plans.create') }}" class="btn btn-dark"><i class="fa fa-plus"></i> ADD</a></h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">

        <form action="{{ route('plans.search') }}" method="POST" class="form form-inline">
            @csrf
            <input type="text" name="filter" placeholder="Nome" class="form-control" value="{{ $filters['filter'] ?? '' }}">
            &nbsp;&nbsp;
            <button type="submit" class="btn btn-dark"><i class="fa fa-search"></i> Filtrar</button>
        </form>
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
                R$ {{ number_format($plan->price, 2, ',', '.') }}
            </td>
            <td>
                {{$plan->description}}
            </td>
            <td style="width:160px;">
                <a href="{{ route('details.plan.index', $plan->url) }}" class="btn btn-primary">Detalhes</a>
                <a href="{{ route('plans.edit', $plan->url) }}" class="btn btn-info"> EDITAR</a>
                <a href="{{ route('plans.show', $plan->url) }}" class="btn btn-warning"><i class="fa fa-eye"></i>VER</a>
          </tr>
        @endforeach
    </tbody>

      </table>
    </div>

    <div class="card-footer">
        @if (isset($filters))
            {!! $plans->appends($filters)->links() !!}
        @else
            {!! $plans->links() !!}
        @endif
    </div>
</div>
@stop

@section('css')

    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

    <script> console.log('Hi!'); </script>
@stop
