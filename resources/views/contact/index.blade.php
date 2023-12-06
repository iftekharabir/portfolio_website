@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <h2>Contact</h2>
            <p class="mb-4">Great sorrows and necessary support. His requirements stem from an elusive entity, indeed..</p>

            <div class="mb-3">
                <h4>Location:</h4>
                <p>Noakhali</p>
            </div>

            <div class="mb-3">
                <h4>Email:</h4>
                <p>info@iftekharabir.com</p>
            </div>

            <div class="mb-3">
                <h4>Call:</h4>
                <p>+01878833666</p>
            </div>



        </div>

        <div class="col-lg-6">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" id="name">
                    @error('name')
                        <div style="display: block" class="invalid-feedback ">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        id="email">
                </div>
                @error('email')
                    <div style="display: block" class="invalid-feedback ">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject"
                        id="subject">
                </div>

                @error('subject')
                    <div style="display: block" class="invalid-feedback ">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control @error('message') is-invalid @enderror" name="message" id="message" rows="3"></textarea>
                </div>
                @error('message')
                    <div style="display: block" class="invalid-feedback ">
                        {{ $message }}
                    </div>
                @enderror
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>

            @error('subject')
                <div style="display: block" class="invalid-feedback ">
                    {{ $message }}
                </div>
            @enderror
            
            </form>
        </div>
    </div>
@endsection
