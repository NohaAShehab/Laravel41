@extends("layouts.app")

@section("body")
    <form class="form-control mb-3" action="/posts/submit" method="Post">
        @csrf
        <table class="form-control bg-primary.bg-gradient" >
            <tr>
                <td>
                    Title
                </td>
                <td>
                    <input  class="form-control mb-3" type="text" name="title">
                </td>
            </tr>
            <tr>
                <td>Description </td>
                <td>
                    <input   class="form-control" type="text" name="description">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" class="btn btn-success" >
                </td>
            </tr>
        </table>
    </form>

@endsection
