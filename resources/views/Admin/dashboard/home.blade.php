@extends('Admin.master')
@section('title')
    DashBoard
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Profile -->
            <div class="outer-w3-agile col-xl mt-3 mx-xl-3 p-xl-0 px-md-5">
                <div class="header">
                    <div class="text">
                        <img src="images/profile.jpg" class="img-fluid rounded-circle" alt="Responsive image">
                        <h2>{{ Auth::user()->name }}</h2>
                        <a target="_blank" href="www.gmail.com">
                            <p>{{ Auth::user()->email }}</p>
                        </a>
                    </div>
                </div>
                <div class="container-flud">
                    <div class="followers row">
                        <div class="f-left col">
                            <a href="#">
                                <i class="far fa-comments"></i>
                            </a>
                        </div>
                        <div class="f-left col border-left border-right">
                            <a href="#">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                        <div class="f-left col">
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <ul class="prof-widgt-content">
                    <li class="menu">
                        <ul>
                            <li class="button">
                                <a href="#">
                                    <i class="fas fa-envelope"></i> Messages
                                    <span>13</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <ul class="icon-navigation">
                                    <li>
                                        <a href="#">Inbox
                                            <span class="float-right">[09]</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Outbox
                                            <span class="float-right">[01]</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Sent messages
                                            <span class="float-right">[03]</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <ul>
                            <li class="button">
                                <a href="#">
                                    <i class="fas fa-user"></i> Profile</a>
                            </li>
                            <li class="dropdown">
                                <ul class="icon-navigation">
                                    <li>
                                        <a href="#">Change your pic</a>
                                    </li>
                                    <li>
                                        <a href="#">Change your username</a>
                                    </li>
                                    <li>
                                        <a href="#">About us</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact me</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--// Profile -->
            <!-- Calender -->
            <div class="outer-w3-agile col-xl mt-3">
                <h4 class="tittle-w3-agileits mb-4">Multi range Calender</h4>
                <div class="multi-select-calender"></div>
                <div class="box"></div>
            </div>
            <!--// Calender -->
        </div>
    </div>
@endsection