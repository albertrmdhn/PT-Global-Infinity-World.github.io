@extends('layouts.themes')

@section('title')
Announcement
@endsection

@section('main')
<div class="container" data-aos="fade-up">
    <div class="row gx-0">
        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
                ini halaman pengumuman
            <div>
        </div>
        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{asset('assets/img-12b.png')}}" class="img-fluid" alt="">
        </div>

    </div>
</div>
@endsection