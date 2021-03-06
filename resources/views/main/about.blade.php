@extends('layouts.customer')

@section('content')
<div class="container my-5">
    <div class="rounded-3 px-5 py-4 shadow">
        <div class="row g-5">
            <div class="col-lg-8">
                <h2 class="fw-bold text-orange mb-4">ABOUT US</h2>
                <p class="mb-5">
                    Jempol adalah Jembatan Penjualan Online yang wewadahi seluruh masyarakat UPN Veteran Jakarta
                    untuk berjualan online dan mengenalkan produknya untuk dijual di lingkungan internal kampus UPN
                    Veteran Jakarta.
                </p>
                <h4 class="fw-bold mb-3">Our Services</h4>
                <div class="row g-2">
                    @foreach ($services as $service)
                    <div class="col-md-3">
                        <div class="border border-2 rounded-3 p-3 h-100 d-flex flex-column justify-content-center">
                            <img data-src="{{ asset($service->icon) }}" 
                            class="d-block w-50 mx-auto lazy" 
                            data-bg="{{ asset('img/static/placeholder-image.png') }}" 
                            alt="{{ config('app.name') . ' ' . $service->slogan }}">
                            <p class="text-center fw-bold mb-0">{{ $service->slogan }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="d-md-flex align-items-center mt-5">
                    <img src="image/group.png" class="d-block w-25 mx-auto mx-sm-5 mb-3" alt="">
                    <div>
                        <p class="fw-bolder">For more information, contact us!</p>
                        <p class="mb-2">
                            <box-icon name='phone-call' color='#FC3515' class="align-middle me-3"></box-icon>
                            085817922089
                        </p>
                        <p class="mb-2">
                            <box-icon name='mail-send' color='#FC3515' class="align-middle me-3"></box-icon>
                            jempolupnvj@gmail.com
                        </p>
                        <a href="https://api.whatsapp.com/send?phone=6285817922089" class="rounded-circle me-2">
                            <img src="image/whatsapp.png"alt="" width="40px">
                        </a>
                        <a href="https://instagram.com/jempol.upnvj" class="rounded-circle">
                            <img src="image/instagram.png"alt="" width="40px">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex flex-column justify-content-around">
                <img data-src="image/jempol.png" class="d-block w-100 lazy" alt=""
                data-bg="{{ asset('img/static/placeholder-image.png') }}" >
                <div>
                    <h4 class="text-center fw-bold mb-4">Created By</h4>
                    <img src="image/logo/mardhika.png" class="d-block w-25 mx-auto" alt="">
                    <div class="d-flex justify-content-evenly">
                        <img data-src="{{ asset('image/logo/kesekretariatan.png') }}"
                        data-bg="{{ asset('img/static/placeholder-image.png') }}"  
                        class="d-block w-25 lazy" alt="">
                        <img data-src="{{ asset('image/logo/kominfo.png') }}"
                        data-bg="{{ asset('img/static/placeholder-image.png') }}"
                        class="d-block w-25 lazy" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection