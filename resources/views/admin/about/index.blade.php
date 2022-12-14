@extends('admin.layout.app')
@section('title','About page')
@section('content')
<div class="container">
    <section id="about" class="text-center">
        <h4 class="my-2">About page</h4>
        <a href="{{route('admin.about.edit',$about->slug)}}" class="btn btn-outline-success my-4 text-center">Edit about page</a>
        <div class="row my-5">
            <div class="col-md-4">
                <img src="{{asset('about.jpg')}}" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-8">
                <p class="text-justify">
                    {!! $about->description !!}
                </p>
            </div>
        </div>
    </section>
</div>
@endsection
