@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
              <h1>Edit Report {{ $report->id }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
          <form action="/expense_reports/{{ $report->id }}" method="POST">
            {{ csrf_field() }}<!--@csfr-->
            {{ method_field('PUT') }}<!--@method('put')-->
            <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Type a title">
            </div>
          </form>
          <div class="row">
              <div class="col">
                <button class="btn btn-primary" type="submit">Submit</button>
                <a class="btn btn-secondary" href="/expense_reports">Back</a>
              </div>
          </div>
        </div>
    </div>
@endsection
