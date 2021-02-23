@extends('layouts.app')

@section('content')
<div class="flex justify-center">
  <div class="w-8/12 bg-white p-6 rounded-lg">
      <h3 class="text-center text-2xl font-medium mb-5">Info Pengunaan Situs :</h3>
      <div class="flex flex-col md:flex-row gap-4">

        <div class="bg-yellow-300 rounded-lg flex-1">
          <h3 class="text-7xl text-center text-white p-5">1</h3>
          <div class="p-3">
            Untuk mencoba fungsi CRUD Post secara cepat tanpa <a href={{ route('register') }}><b>register</b></a> terlebih dahulu. gunakan akun dummy berikut ini:
            <br><br>
            - budi@abcd.com : 123456
            <br>
            - joko@abcd.com : 123456
          </div>
        </div>
        <div class="bg-red-300 rounded-lg flex-1">
          <h3 class="text-7xl text-center text-white p-5">2</h3>
          <div class="p-3">
            Untuk mencoba fungsi <b>notifikasi melalui email</b> like pada Post yang anda posting, mohon gunakan email anda (disarankan email dummy) dengan  <a href={{ route('register') }}><b>register</b></a> terlebih dahulu.
          </div>
        </div>
        <div class="bg-green-300 rounded-lg flex-1">
          <h3 class="text-7xl text-center text-white p-5">3</h3>
          <div class="p-3">
            Untuk mencoba fungsi <b><a href="{{ route('password.request') }}">lupa password</a></b>, mohon gunakan email anda (disarankan email dummy) dengan <a href={{ route('register') }}><b>register</b></a> terlebih dahulu.
          </div>
        </div>

      </div>
  </div>
</div>
@endsection
