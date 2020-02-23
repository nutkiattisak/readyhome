@extends('layouts.app')

@section('content')
<div class="app-main__inner">
    <div class="app-page-title app-page-title-simple">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div>
                    <div class="page-title-head center-elem">
                        <span class="d-inline-block pr-2">
                            <i class="pe-7s-culture icon-gradient bg-mean-fruit"></i>
                        </span>
                        <span class="d-inline-block">ห้องพัก {{ $room->name }}</span>
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
                                    <a>ห้องพัก</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a>จัดการ</a>
                                </li>
                                
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block pr-3">
                    <select id="custom-inp-top" type="select" class="custom-select">
                        <option>Select period...</option>
                        <option>Last Week</option>
                        <option>Last Month</option>
                        <option>Last Year</option>
                    </select>
                </div>
                <button type="button" data-toggle="tooltip" data-placement="left" class="btn btn-dark" title="" data-original-title="Show a Toastr Notification!">
                    <i class="fa fa-battery-three-quarters"></i>
                </button>
            </div>
        </div>
    </div>          
    
   
    @if($tenants->count() > 0)
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">สัญญา
                    <div class="btn-actions-pane-right">
                        
                    </div>
                   
                </div>
                <div class="card-body text-center">
                    <button type="button" class="mb-2 mr-2 btn-pill btn btn-success btn-lg " data-toggle="modal" data-target="#agreementsForm">
                        <i class="fa fa-plus"></i> เพิ่มรายะเอียดสัญญา
                    </button>
                </div>
         
            </div>
        </div>

    </div>
    
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">ผู้เช่า
                    <div class="btn-actions-pane-right">
                        <div role="group" class="btn-group-sm btn-group">
                        <a href="{{ route('rooms.manage-tenants.create', $room->room_id) }}" class="active btn btn-primary"><i class="fa fa-plus"></i> เพิ่มผู้เช่า</a>
                        </div>
                    </div>
                </div> 
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        @if($tenants->count() > 0)
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-left">ชื่อผู้พัก</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($tenants as $key => $tenant)
                            <tr>
                            <td class="text-center text-muted">{{ $key+1 }}</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="widget-content-left">
                                                    <img width="40" class="rounded-circle" src="{{ asset('assets/img/avatars/4.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">
                                                    {{ $tenant->firstname."  ".$tenant->lastname }}
                                                </div>
                                                <div class="widget-subheading opacity-7">
                                                    <i class="pe-7s-call"></i> {{ $tenant->phone }}
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                <a href="{{ route('rooms.manage-tenants.edit', $tenant->tenant_id) }}" type="button" id="tenantEdit" class="btn btn-warning btn-sm">แก้ไข</a>
                                    <a href="" type="button" id="tenantDel" class="btn btn-danger btn-sm">ลบ</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        @else
                        <tfoot>
                            <tr>
                                <td colspan="3" class="text-center"><h6>ไม่มีข้อมูล</h6></td>
                            </tr>
                        </tfoot>
                        @endif
                    </table>
                </div>
                
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">ประวัติผู้พัก</div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Name</th>
                            <th class="text-center">วันที่เริ่มสัญญา</th>
                            <th class="text-center">วันสิ้นสุดสัญญา</th>
                            <th class="text-center">วันที่ออก</th>
                           
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center text-muted">1</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="widget-content-left">
                                                    <img width="40" class="rounded-circle" src="{{ Gravatar::src('1') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">John Doe</div>
                                                <div class="widget-subheading opacity-7">Web Developer</div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">10/01/2560</td>
                                <td class="text-center">
                                    12/10/2063
                                </td>
                                <td class="text-center">
                                    12/10/2063
                                </td>
                                
                            </tr>
                
                        </tbody>
                    </table>
                </div>
               
            </div>
        </div>
    </div>

</div>





@endsection