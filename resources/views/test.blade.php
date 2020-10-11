@extends("base")
@section("main")
<h1>test</h1>
<table>
  <tr bgcolor=#aaaaaa>
    <td>name</td>
  </tr>
  @foreach($names as $name)
  @if($loop->odd)
  <!-- 控制迴圈裡的狀態 -->
  <tr bgcolor=#ccccff>
    @else
  <tr bgcolor=#ffcccc>
    @endif
    <td>{{$name}}</td>
  </tr>
  @endforeach
</table>
@endsection