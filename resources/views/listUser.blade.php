@extends('layout')
@section('content')
    <table class="table table-striped table-hover">
        <th>Id</th>
        <th>Ho va ten</th>
        <th>Avatar</th>
        <th>Email</th>
        <th>Ngay sinh</th>
        <th>facebook</th>
        <th>Gioi tinh</th>
        <th>Que quan</th>
        <th>Quyen</th>
        <th>Trang Thai</th>
        <th>Ngay tao</th>
        <th>Chinh sua</th>
        @foreach($list_user as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->fullName}}</td>
                <td>
                    <img style="width: 40px;" src="{{$user->avatar}}" alt="avatar_user"/>
                </td>
                <td>{{$user->email}}</td>
                <td> {{date('m/d/Y', $user->birthday) }}</td>
                <td>
                    <a style="color: blue" target="_blank"
                       href="{{$user->facebook}}">
                      <span class="d-inline-block text-truncate" style="max-width: 150px;">
                    {{$user->facebook}}
                    </span>
                    </a>
                </td>
                <td>{{$user->gender === 1 ? "Nam" : "Nu"}}</td>
                <td>{{$user->country}}</td>
                <td>{{$user->role === 1 ? "ADMIN" : "USER COURSE"}}</td>
                <td class="status-color-{{$user->status}}">
                    {{$user->status === 1 ? "ADMIN" : "USER COURSE"}}</td>
                <td>{{$user->created_at}}</td>
                <td style="width: 120px;"><a class="link">Chinh sua</a></td>
            </tr>
        @endforeach

    </table>

@endsection

