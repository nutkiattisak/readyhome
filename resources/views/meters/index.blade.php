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
                        <span class="d-inline-block">จดมิเตอร์</span>
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
                                    <a>มิเตอร์</a>
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
                <div class="card-header">จดมิเตอร์
                    <div class="btn-actions-pane-right">
                        <div role="group" class="btn-group-sm btn-group">
                        <a href="{{ route('meters.create') }}" class="active btn btn-primary"><i class="fa fa-plus"></i> เพิ่มใบจดมิเตอร์</a>
                        </div>
                    </div>
                </div>
                <div class="main-card card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                  
                                    <div class="widget-content-left">
                                        <div class="widget-heading">วันที่จด : 11/01/2563</div>
                                        <div class="widget-subheading">A short profile description</div>
                                    </div>
                                    <div class="widget-content-right">
                                        
                                        <button class="btn-wide mb-2 mr-2 btn-icon btn btn-info"><i class="pe-7s-volume btn-icon-wrapper"> </i> มิเตอร์น้ำ</button>
                                        <button class="btn-wide mb-2 mr-2 btn-icon btn btn-danger"><i class="pe-7s-volume btn-icon-wrapper"> </i> มิเตอร์ไฟ</button>

                                        <div class="mb-2 mr-2 dropleft btn-group">
                                            <button class="btn-wide btn btn-primary">Dropleft</button>
                                            <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-primary"><span class="sr-only">Toggle Dropdown</span></button>
                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                                <button type="button" tabindex="0" class="dropdown-item">รายงาน</button>
                                                <button type="button" tabindex="0" class="dropdown-item">ลบ</button>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item d-none">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <p class="text-center">ยังไม่มีข้อมูลการจดมิเตอร์</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
              
               
            </div>
        </div>
    </div>

</div>
@endsection