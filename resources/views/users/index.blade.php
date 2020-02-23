@extends('layouts.app')

@section('content')
<div class="app-main__inner">
    <div class="app-page-title ">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div>
                    <div class="page-title-head center-elem">
                        <span class="d-inline-block pr-2">
                            <i class="pe-7s-culture icon-gradient bg-mean-fruit"></i>
                        </span>
                        <span class="d-inline-block">ผู้ใช้</span>
                    </div>
                    <div class="page-title-subheading opacity-10">
                        <nav class="" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a>
                                        <i aria-hidden="true" class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a>ผู้ใช้</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>          

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">ผู้ใช้
                    <div class="btn-actions-pane-right">
                        <div role="group" class="btn-group-sm btn-group">
                        <a href="{{ route('users.create') }}" class="active btn btn-primary">เพิ่มผู้ใช้</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>ชื่อ</th>
                                <th class="text-center">อีเมล</th>
                                <th class="text-center">เบอร์โทรศัพท์</th>
                                <th class="text-center">สิทธิ์</th>
                                <th class="text-center">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                            <tr>
                            <td class="text-center text-muted">{{ $key+1 }}</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="widget-content-left">
                                                    <img width="40" class="rounded-circle" src="{{ Gravatar::src('nut.official4407@gmail.com') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="widget-content-left flex2">
                                            <div class="widget-heading">{{ $user->firstname }} {{  $user->lastname  }}</div>
                                                <div class="widget-subheading opacity-7">Web Developer</div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">{{ $user->email }}</td>
                                <td class="text-center">
                                    {{ $user->phone}}
                                </td>
                                <td class="text-center">
                                    {{ $user->role}}
                                </td>
                                <td class="text-center">
                                   <button class="btn btn-sm btn-warning">แก้ไข</button>
                                   <button class="btn btn-sm btn-danger">ลบ</button>
                                </td>
                            </tr>
                            @endforeach
                
                        </tbody>
                    </table>
                </div>
               
            </div>
        </div>
    </div>

</div>
@endsection