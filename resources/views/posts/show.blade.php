@extends('layouts.app')

@section("maindiv")
    <h1> Post Details</h1>
  <h2> {{$post->title}} </h2>
  <h2>  {{$post->description}} </h2>
  <h2>  {{$post->slug}} </h2>
@endsection


{{--@section("test")--}}
{{--    <h1> this is the test section </h1>--}}
{{--@endsection--}}



{{--@section("warningdiv")--}}
{{--    <a href="#" >Edit  </a>--}}
{{--    <p>--}}
{{--        lkjklj--}}
{{--        lhlhklhkl--}}
{{--        kjgkjjkh--}}
{{--        jhgjhkgjk--}}
{{--    </p>--}}
{{--@endsectionsection("warningdiv")--}}
{{--    <a href="#" >Edit  </a>--}}
{{--    <p>--}}
{{--        lkjklj--}}
{{--        lhlhklhkl--}}
{{--        kjgkjjkh--}}
{{--        jhgjhkgjk--}}
{{--    </p>--}}
{{--@endsection--}}
