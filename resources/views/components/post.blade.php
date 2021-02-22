@props(['post'=>$post])

<div class="mb-4">
  <a href="{{ route('users.posts', $post->user) }}" class="font-bold">{{$post->user->name}} </a><span class="text-gray-500">({{{ $post->user->username }}})</span><span class="text-gray-400"> {{ $post->created_at->diffForHumans() }}</span>
  <p>{{ $post->body }}</p>

  <div class="flex items-center">
    @auth
      @if(!$post->likedBy(auth()->user()))
        <form action="{{ route('posts.like', $post) }}" method="POST" class="mr-1">
          @csrf
          <button class="text-blue-500">Like </button>
        </form>
      @else
        <form action="{{ route('posts.like', $post) }}" method="POST">
          @csrf
          @method('DELETE')
          <button class="text-blue-500 mr-2"> Unlike</button>
        </form>
      @endif
    @endauth

    @can('delete', $post)
      <form action="{{ route('posts.destroy', $post) }}" method="post">
          @csrf
          @method('DELETE')
          <button class="text-red-500">Delete</button>
      </form>
    @endcan

    <span class="text-gray-400">{{ $post->likes->count() }} {{Str::plural('like', $post->likes->count())}}</span>
  </div>

</div>
