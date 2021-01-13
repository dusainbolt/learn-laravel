@extends('layout')
@section('content')
    <table class="table table-striped table-hover">
        <th>Id</th>
        <th>name</th>
        <th>Avatar</th>
        <th>description</th>
        <th>Nguoi Tao</th>
        <th>Trang Thai</th>
        <th>Ngay tao</th>
        <th>Chinh sua</th>
        @foreach($listSubject as $subject)
            <tr>
                <td>{{$subject->id}}</td>
                <td>{{$subject->name}}</td>
                <td>
                    <img style="width: 40px;" src="{{$subject->avatar}}" alt="avatar_user"/>
                </td>
                <td>{{$subject->description}}</td>
                <td>{{$subject->userId}}</td>
                <td class="status-color-{{$subject->status}}">
                    {{getStatusTextSubject($subject->status)}}
                </td>

                <td>{{$subject->created_at}}</td>
                <td style="width: 120px;"><a class="link">Chinh sua</a></td>
            </tr>
        @endforeach
    </table>
@endsection

