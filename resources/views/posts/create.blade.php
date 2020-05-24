@extends('welcome')

@section('content')
    <form action="{{route('post.store')}}" method="post">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title"/>
        <label for="content">Content</label>
        <textarea name="content" id="content"></textarea>
        <label for="submit">Save</label>
        <button type="submit">Save</button>
    </form>
@endsection
