@extends('layouts.app')
@section('custom-style')
    <style>
      .card-img-overlay {
    opacity: 0;
    transition: opacity 0.5s;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    display: flex;
    justify-content: start;
    align-items: end;
    padding: 10px;
  }
  .card:hover .card-img-overlay {
    opacity: 1;
  }
  .overlay-icon {
    color: white;
    font-size: 64px;
    margin: 0 10px;
    background: rgba(255, 255, 255); 
    border-radius: 50%; 
    padding: 15px; 
    border: 2px solid #fff; 
  }
  .bi{
    font-size: 64px
  }
  .overlay-icon:hover {
    background: rgba(255, 255, 255); 
  }

    </style>
@endsection

@section('content')
    <section class="container my-5">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="heading-underline">Portfolio</h2>
                <p>Through vast and echoing corridors of innovation, the web developer forges ahead. Necessity demands from
                    their craft a medley of skill and creativity. From the shadows of complex challenges, they emerge with
                    solutions that illuminate the path of progress.</p>
            </div>
        </div>



        <div class="row g-4">
            @foreach ($projects as $project)
                <div class="col-md-4">
                    <div class="card">
                      <img src="{{ asset('storage/images/' . $project->image) }}" class="card-img" alt="...">                        {{-- <img src="{{ $project->image }}" class="card-img" alt="..."> --}}
                        <div class="card-img-overlay d-flex justify-content-end align-items-start">
                          <!-- Your overlay content here -->
                          <div class="image-overlay-icons">
                            
                            <a href="{{route('projects.single',$project->uuid)}}"><i class="bi bi-link-45deg" style="font-size: 64px"></i></a> 
                          </div>
                        </div>
                      </div>
                    
                </div>
            @endforeach

        </div>
    </section>
@endsection
