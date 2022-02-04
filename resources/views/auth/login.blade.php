@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
      <div class="w-8/12 bg-white p-6 rounded-lg">
        @if (session('status'))
          <div class="bg-red-500 p-4 rounded-lg mb-5 text-white text-center">
            {{session('status')}}
          </div>
        @endif
        <form action="{{route('login')}}" method="post">
          @csrf
          <div class="mb-4">
            <label for="username" class="sr-only">Username</label>
            <input type="text" name="username" id="username" placeholder="Username" class="bg-gray-100 border-2 w-full my-4 p-4 rounded-lg @error('name')border-red-500 @enderror" value="{{old('username')}}">
            @error('username')
              <div class="text-red-500 mt-2 text-sm">
                {{$message}}
              </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" class="bg-gray-100 border-2 w-full my-4 p-4 rounded-lg  @error('name')border-red-500 @enderror">
            @error('password')
              <div class="text-red-500 mt-2 text-sm">
                {{$message}}
              </div>
            @enderror
          </div>
          <div class="mb-4">
            <div class="flex-items-center">
              <input type="checkbox" name="remember" id="remember" class="mx-2">
              <label for="remember">Remember me</label>
            </div>
          </div>
          <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-5 rounded font-medium w-full">Register</button>
          </div>
            
          </div>
        </form>
       </div>
    </div>
@endsection