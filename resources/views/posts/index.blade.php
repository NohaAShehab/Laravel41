@extends("layouts.app")
@section("maindiv")
<h1> All Posts</h1>

{{--    @dump($posts)--}}
{{--@dd($posts)--}}
    <table class="table">
        <tr>
            <th>
                Title
            </th>
            <th>
                Description
            </th>
            <th>
                View
            </th>
            <th>
                Edit
            </th>
            <th>Delete</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td> {{$post->title}}</td>
                <td> {{$post->description}}</td>
                <td>
                    <a type="button"  href="/posts/show/{{$post->id}}" class="btn btn-primary"> Show</a>
                </td>
                <td>
                    <a type="button" class="btn btn-warning"> Edit</a>
                </td>
                <td>
                    <a type="button" class="btn btn-danger"> Edit</a>
                </td>
            </tr>
        @endforeach

    </table>

@endsection

@section("body")

    <a class="btn btn-primary" href="/posts/create" > Add Post</a>
@endsection

