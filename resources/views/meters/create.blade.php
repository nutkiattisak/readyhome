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
                        <span class="d-inline-block">เพิ่มใบจดมิเตอร์</span>
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
                                <li class="breadcrumb-item">
                                    <a>เพิ่มใบจดมิเตอร์</a>
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
                <form acction="{{route('rooms-settings.store')}}" method="POST">
                        @csrf
                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label text-right">วันที่จด</label>
                            <div class="col-sm-10">
                                <input name="recorddate" id="recorddate" placeholder="วันที่จด" type="text" class="form-control" value="">
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

@section('script')

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    
<script>
    flatpickr("#recorddate",{
        enableTime: false,
        disableMobile: "true"
    });
    
</script>
@endsection

@section('css')

<link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_red.css">


@endsection