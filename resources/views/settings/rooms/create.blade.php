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
                        <span class="d-inline-block">เพิ่มห้อง</span>
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
                                    <a>เพิ่มห้องพัก</a>
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
                <div class="card-body">
                <form method="POST" action="{{ route('rooms-settings.store') }}">
                        @csrf
                        
                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label text-right">ชื่อห้อง</label>
                            <div class="col-sm-10">
                                <input name="name" id="name" placeholder="ชื่อห้อง" type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="role" class="col-sm-2 col-form-label text-right">สถานะ</label>
                            <div class="col-sm-10">
                                <select name="status" id="status" class="form-control">
                                    <option value="1">ไม่ว่าง</option>
                                    <option value="0">ว่าง</option>
                                    <option value="2">จอง</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="position-relative row form-group">
                            <label for="phone" class="col-sm-2 col-form-label text-right">ค่าห้อง</label>
                            <div class="col-sm-10">
                                <input name="rate" id="rate" placeholder="ค่าห้อง" type="text" class="form-control" value="">
                            </div>
                        </div>
                        
                        <div class="position-relative row form-group">
                            <label for="email" class="col-sm-2 col-form-label text-right">เปิด/ปิดใช้งาน</label>
                            <div class="col-sm-10">
                                <input name="active" id="active" placeholder="active" type="checkbox" class="form-control" value="true">
                            </div>
                        </div>

                        <div class="position-relative row form-check">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection