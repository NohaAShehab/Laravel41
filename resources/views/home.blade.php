<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1> Blog Index</h1>
{{--        <table class="table">--}}
{{--            <tr>--}}
{{--                <th> Posts </th>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>--}}
{{--                    {{strtoupper($postsData["post1"])}}--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>--}}
{{--                    {{$postsData["post2"]}}--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>--}}
{{--                    {{$postsData["post3"]}}--}}
{{--                    @if($postsData["post3"] < 5)--}}
{{--                       <h1> PostData is greater than 5 </h1>--}}
{{--                    @elseif($postsData["post3"]> 100)--}}
{{--                        <h2> the value = {{$postsData["post3"]}} </h2>--}}
{{--                    @else--}}
{{--                       // <h1> test datytttt</h1>--}}
{{--                    @endif--}}

{{--                    @while ($postsData["post3"] > 0)--}}
{{--                        <p>I'm looping forever.</p>--}}

{{--                    @endwhile--}}
{{--                    --}}
{{--                    --}}
{{--                </td>--}}
{{--            </tr>--}}
{{--            --}}{{--   This is a balde comment --}}
{{--        </table>--}}
{{--        --}}
        <table class="table">
            <tr>
                <th> index </th>
                <th> key</th>
                <th> value</th>
            </tr>
            @foreach($postsData as $key=>$post)
                <tr>
                    <td>{{$loop->remaining}}</td>
                    <td> {{$key}}</td>
                    <td> {{$post}}</td>
                </tr>
            @endforeach
{{--            @forelse($postsData as $key=>$post)--}}
{{--                <tr>--}}
{{--                    <td> {{$key}}</td>--}}
{{--                    <td> {{$post}}</td>--}}
{{--                </tr>--}}
{{--            @empty--}}
{{--                <h1> no items inside array</h1>--}}
{{--            @endforelse--}}
        </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
