@extends("base")
@section("main")
<h1>gossip</h1>
<hr>
<form method="POST" action="{{route('news.postit')}}">
    @csrf
    message: <input name=message type=text size=40>
    <input type="submit">
</form><br>
<table class="table table-hover table-dark">
    <thead>
        <tr>
            <th>ID</th>
            <th>message</th>
            <th>date</th>
            <th>manage</th>
        </tr>
    </thead>
    <tbody>
        @foreach($messages as $msg)
        <tr>
            <td>{{$msg->id}}</td>
            <td>{{$msg->message}}</td>
            <td>{{$msg->postdate}}</td>
            <td><a href="/del/{{$msg->id}}/">delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection