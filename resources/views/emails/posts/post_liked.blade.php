@component('mail::message')
# One of your post got liked

{{ $liker->name }} like one of your post

@component('mail::button', ['url' =>  route('posts.show', $post)] )
  View Post
@endcomponent

@endcomponent
