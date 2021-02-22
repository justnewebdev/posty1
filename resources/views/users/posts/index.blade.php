@extends('layouts.app')

@section('content')
<div class="flex justify-center">
  <div class="w-8/12">

    <div class="p-6">
      <h3 class="text-2xl font-medium mb-1">{{ $user->name }}</h3>
      <p>Posted: {{ $posts->count() }} {{ Str::plural('post', $posts->count())}} and recieve {{ $user->receivedLikes->count() }} {{Str::plural('like', $user->receivedLikes->count()) }}</p>
    </div>

    <div class="bg-white p-6 rounded-lg">
    @if($posts->count())
      @foreach($posts as $post)
        <x-post :post="$post"/>
      @endforeach
    @else
      <p>{{ $user->name }} does not have any post</p>
    @endif

    {{ $posts->links() }}
    </div>

  </div>
</div>
@endsection
