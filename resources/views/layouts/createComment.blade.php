@extends('layouts.main')
@section('title','Create')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Buat Komen</h1>
            <form action="{{ route('comment.store') }}" method="POST" {{--enctype="multipart/form-data" --}}>
                @csrf
                {{-- <input type="hidden" name="comment_id" value="4"> perlu dikerjakan --}}
                <input type="hidden" name="post_id" value="{{$post->id}}">
                {{-- <input type="hidden" name="topik_id" value="4"> --}}
                {{-- <input type="hidden" name="picture" value="4"> --}}
                <div class="form-group">
                    <label for="content">Content</label>
                    <input type="text" class="form-control" id="nim" placeholder="Content" name="content">
                </div>
                {{--<div class="form-group">
                    <label for="picture">Gambar</label>
                    <input type="file" name="picture" id="gambar">
                </div>--}}
                <button type="submit" class="btn btn-primary">Tambah Komentar</button>
            </form>
        </div>
    </div>
</div>
@endsection