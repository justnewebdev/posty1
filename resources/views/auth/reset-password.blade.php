@extends('layouts.app')

@section('content')
<div class="flex justify-center">
  <div class="w-6/12 md:w-4/12 bg-white p-6 rounded-lg my-10">
    <h3 class="text-center p-2">Reset your password</h3>
    <form action="{{ route('password.update') }}" method="POST">
      @csrf
      <div class="mb-4">
        <label class="sr-only">Email</label>
        <input type="text" name="email" id="email" placeholder="Your email" class="bg-grey-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">

        @error('email')
          <div class="text-red-500 mt-2 text-sm">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-4">
        <label class="sr-only">Password</label>
        <input type="password" name="password" id="password" placeholder="Your password" class="bg-grey-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">

        @error('password')
          <div class="text-red-500 mt-2 text-sm">
            {{ $message }}
          </div>
        @enderror

      </div>
      <div class="mb-4">
        <label class="sr-only">Password Confirmation</label>
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat Your Password" class="bg-grey-100 border-2 w-full p-4 rounded-lg @error('password_confirmation') border-red-500 @enderror" value="">

        @error('password_confirmation')
          <div class="text-red-500 mt-2 text-sm">
            {{ $message }}
          </div>
        @enderror
      </div>

      <input type="hidden" name="token" value="{{ $token }}">


      <div class="mb-4">
        <button class="bg-blue-500 px-3 py-4 text-white w-full rounded-lg">Reset</button>
      </div>
    </form>
  </div>
</div>
@endsection
