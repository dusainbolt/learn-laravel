<?php
define('MENU_ADMIN', [
    [
        "endPoint" => "/user",
        "name" => "Quan li user",
    ],
    [
        "endPoint" => "/class",
        "name" => "Quan li lop hoc",

    ],
    [
        "endPoint" => "/subject",
        "name" => "Quan li mon hoc",
    ],
    [
        "endPoint" => "/manager-class-for-user",
        "name" => "Quan li lop hoc tu user",
        'params' => '/'.rand(1,2)
    ],
]);
//    <li class="nav-item" role="presentation">
//        <a class="nav-link {{checkActiveMenu("")}}"  href="{{'/class-manager-for-user/'.rand(1,2)}}">Quan li lop hoc tu User</a>
//    </li>

?>
