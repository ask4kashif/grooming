@extends('admin.layout.app')
@section('title', 'Edit about ')
@section('css')
    <link href="{{ asset('templates/summernote/summernote.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<form method="POST" action="{{ route('admin.about.update', $about->slug) }}" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{Storage::url($about->image)}}" alt="not available" class="img-fluid">
                <div>
                    <button type="submit" class="btn btn-outline-success mt-2 form-control">Update</button>
                </div>
            </div>
            <div class="col-md-8">
                    @csrf
                    @method('PUT')
                    <label for="title">Title</label>
                    <input id="title" type="text" name="title"
                        class="@error('title') is-invalid @enderror form-control" placeholder="Enter title"
                        value="{{ $about->title }}"
                        @error('title')
                        <strong style="color: red">{{ $message }}</strong>
                    @enderror
                        </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Choose image</label>
                        <input class="form-control" type="file" id="image" name="image">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="summernote" class="form-control @error('description') is-invalid @enderror" name="description"
                            placeholder="Enter description">{{ $about->description }}</textarea>
                        @error('description')
                            <strong style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('templates/summernote/summernote.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endsection
