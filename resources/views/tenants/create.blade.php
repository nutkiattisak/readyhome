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
                                <a href="{{ route('rooms.manage-rooms', $room_id) }}">จัดการ</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a>เพิ่มผู้เช่า</a>
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
                    <h4 class="card-title">เพิ่มข้อูลผู้เช่า</h4>
                <form method="POST" action="{{ route('rooms.manage-tenants.store') }}">
                    @csrf
                    <input type="hidden" name="room_id" value="{{ $room_id }}">
                        <div class="form-row">
                            <div class="col-md-5">
                                <div class="position-relative form-group">
                                    <label for="firstname" class="">ชื่อจริง</label>
                                    <input name="firstname" id="firstname" placeholder="ชื่อจริง" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="position-relative form-group">
                                    <label for="lastname" class="">นามสกุล</label>
                                    <input name="lastname" id="lastname" placeholder="นามสกุล" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="position-relative form-group">
                                    <label for="nickname" class="">ชื่อเล่น</label>
                                    <input name="nickname" id="nickname" placeholder="ชื่อเล่น" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-2">
                                <div class="position-relative form-group">
                                    <label for="gender" class="">เพศ</label>
                                    <select name="gender" id="gender" placeholder="เพศ" class="form-control">
                                        <option value="male">ชาย</option>
                                        <option value="female">หญิง</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="position-relative form-group">
                                    <label for="phone" class="">เบอร์โทร</label>
                                    <input name="phone" id="phone" placeholder="เบอร์โทร" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="position-relative form-group">
                                    <label for="id_number" class="">หมายเลขบัตรประชาชน</label>
                                    <input name="id_number" id="id_number" placeholder="หมายเลขบัตรประชาชน" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                 
                        <div class="form-row">
                            <div class="col-md-1">
                                <div class="position-relative form-group">
                                    <label for="birth_date" class="">วันเกิด</label>
                                    <select name="birth_date[2]" id="birth_date" placeholder="วันเกิด" type="text" class="form-control">
                                        @for ($i = 1; $i <= 31; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="position-relative form-group">
                                    <label for="booking_id" class="">เดือนเกิด</label>
                                    <select name="birth_date[1]" id="birth_date_month" placeholder="เดือนเกิด" type="text" class="form-control">
                                        
                                            <option value="1">มกราคม</option>
                                            <option value="2">กุมภาพันธ์</option>
                                            <option value="3">มีนาคม</option>
                                            <option value="4">เมษายน</option>
                                            <option value="5">พฤษภาคม</option>
                                            <option value="6">มิถุนายน</option>
                                            <option value="7">กรกฎาคม</option>
                                            <option value="8">สิงหาคม</option>
                                            <option value="9">กันยายน</option>
                                            <option value="10">ตุลาคม</option>
                                            <option value="11">พฤศจิกายน</option>
                                            <option value="12">ธันวาคม</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="position-relative form-group">
                                    <label for="birth_date" class="">ปีเกิด</label>
                                    <select name="birth_date[0]" id="birth_date" placeholder="วันเกิด" type="text" class="form-control">
                                        @for ($i = 2020; $i >= 1970; $i--)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="email" class="">อีเมล</label>
                                    <input name="email" id="rate" placeholder="อีเมล" type="email" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="position-relative form-group">
                                    <label for="address" class="">ที่อยู่</label>
                                    <input name="address" id="address" placeholder="ที่อยู่" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                   
                      
                        <button type="submit" class="mt-2 btn btn-primary">เพิ่มผู้เช่า</button>
                    </form>
                </div>
            </div>
        </div>
   
    </div>
</div>
@endsection