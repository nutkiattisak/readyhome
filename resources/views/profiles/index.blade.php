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
                        <span class="d-inline-block">บัญชีผู้ใช้</span>
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
                                    <a>บัญชีผู้ใช้</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
    
        </div>
    </div>          
    
   
  
    {{-- <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <form acction="{{ route('users.update-profile') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label text-right">ชื่อจริง</label>
                            <div class="col-sm-10">
                            <input name="firstname" id="firstname" placeholder="ชื่อจริง" type="text" class="form-control" value="{{ $user->firstname }}">
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label text-right">นามสกุล</label>
                            <div class="col-sm-10">
                                <input name="lastname" id="lastname" placeholder="นามสกุล" type="text" class="form-control" value="{{ $user->lastname }}">
                            </div>
                        </div>
                        
                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label text-right">เบอร์โทรศัพท์</label>
                            <div class="col-sm-10">
                                <input name="phone" id="phone" placeholder="เบอร์โทรศัพท์" type="text" class="form-control" value="{{ $user->phone }}">
                            </div>
                        </div>
                        
                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label text-right">อีเมล</label>
                            <div class="col-sm-10">
                                <input name="email" id="email" placeholder="email" type="email" class="form-control" value="{{ $user->email }}" readonly>
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
    </div> --}}
</div>
@endsection