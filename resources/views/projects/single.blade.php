@extends('layouts.app')

@section('custom-style')
@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
      <img src="{{ asset('storage/images/' . $project->image) }}" class="img-fluid"  alt="Portfolio Image">
    </div>
    <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Project information</h3>
            <p class="card-text"><strong>Category:</strong> {{strtoupper($project->category)}}</p>
            <p class="card-text"><strong>Client:</strong> {{strtoupper($project->client)}}</p>
            <p class="card-text"><strong>Project date:</strong> {{strtoupper($project->finish_date)}}</p>
            <p class="card-text"><strong>Project URL:</strong> <a href="{{$project->url}}" target="_blank" rel="noopener noreferrer">{{$project->url}}</a></p>
      
            
          </div>
        </div>
        <h3 class="mt-5">{{$project->name}}</h3>
            <p >{{$project->description}}</p>
      </div>
      
  </div>
@endsection
