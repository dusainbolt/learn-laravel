@extends('layout')
@section('content')
    <div>Day la lop hoc cua tao</div>
    <table class="table table-striped table-hover">
        <th>Id</th>
        <th>Name</th>
        <th>Avatar</th>
        <th>Nguoi tao</th>
        <th>Mon hoc</th>
        <th>Trang thai</th>
        <th>Ngay tao</th>
        <th>Chinh sua</th>

        @foreach($list_class as $class)
            <tr>
                <td>{{$class->id}}</td>
                <td>{{$class->name}}</td>
                <td>
                    <img style="width: 40px;" src="{{$class->avatar}}" alt="avatar_user"/>
                </td>
                <td>{{$class->userId}}</td>
                <td>{{$class->subjectId}}</td>
                <td class="status-color-{{$class->status}}">{{getStatusTextClass($class->status)}}</td>
                <td>{{$class->created_at}}</td>
                <td style="width: 120px;"><a class="link">Chinh sua</a></td>
            </tr>
        @endforeach
    </table>
@endsection
