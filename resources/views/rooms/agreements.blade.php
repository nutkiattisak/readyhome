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
                        <span class="d-inline-block">สัญญา</span>
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
                                <a href="{{ route('rooms.manage-rooms', $id) }}">จัดการ</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a>สัญญา</a>
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
                    <h4 class="card-title">สัญญา</h4>
                    <form class="" method="POST">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="firstname" class="">ชื่อจริง</label>
                                    <input name="firstname" id="firstname" placeholder="ชื่อจริง" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="lastname" class="">นามสกุล</label>
                                    <input name="lastname" id="lastname" placeholder="นามสกุล" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="phone" class="">เบอร์โทร</label>
                                    <input name="phone" id="phone" placeholder="เบอร์โทร" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="id_number" class="">หมายเลขบัตรประชาชน</label>
                                    <input name="id_number" id="id_number" placeholder="หมายเลขบัตรประชาชน" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="start_date" class="">วันที่เริ่มสัญญา</label>
                                    <input name="start_date" id="start_date" placeholder="วันที่เริ่มสัญญา" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="end_date" class="">วันที่สิ้นสุดสัญญา</label>
                                    <input name="end_date" id="end_date" placeholder="วันที่สิ้นสุดสัญญา" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="rate" class="">ค่าเช่าต่อเดือน</label>
                                    <input name="rate" id="rate" placeholder="ค่าเช่าต่อเดือน" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="deposit" class="">เงินประกัน</label>
                                    <input name="deposit" id="deposit" placeholder="เงินประกัน" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
              

                  
                        
                        
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="booking_amount" class="">เงินจอง</label>
                                    <input name="booking_amount" id="booking_amount" placeholder="เงินจอง" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="booking_id" class="">เลขที่ใบจอง</label>
                                    <input name="booking_id" id="booking_id" placeholder="เลขที่ใบจอง" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="startdate" class="">เลขมิเตอร์ประปาเข้าพัก</label>
                                    <input name="bookingamount" id="rate" placeholder="เงินจอง" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="examplePassword11" class="">เลขมิเตอร์ไฟฟ้าเข้าพัก</label>
                                    <input name="bookingid" id="bookingid" placeholder="เลขที่ใบจอง" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                      
                        <button class="mt-2 btn btn-primary">บันทึกสัญญา</button>
                    </form>
                </div>
            </div>
        </div>
   
    </div>
</div>
@endsection