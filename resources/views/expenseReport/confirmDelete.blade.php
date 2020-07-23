@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
              <h1>Delete Report {{ $report->id }} ?</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
          <form action="/expense_reports/{{ $report->id }}" method="POST">
            {{ csrf_field() }}<!--@csfr-->
            {{ method_field('delete') }}<!--@method('delete')-->
              <button class="btn btn-primary" type="submit">Delete</button>
              <a class="btn btn-secondary" href="/expense_reports">Back</a>
          </form>
        </div>
    </div>
@endsection
