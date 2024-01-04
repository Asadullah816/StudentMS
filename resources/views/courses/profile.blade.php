@include('layout.master')
@include('layout.preloader')
@include('layout.sidebar')
<div class="content">
    @include('layout.navbar')
    <div class="profile container mt-5">
        <div class="testimonial-item text-center">
            <img class="img-fluid rounded-circle mx-auto mb-4" src="{{ asset('img/testimonial-2.jpg') }}"
                style="width: 100px; height: 100px;">
            <h2 class="mb-1">{{ $course->name }}</h2>
            <h4>{{ $course->address }}</h4>
            <h6 class="mb-0">{{ $course->mobile }}</h6>
        </div>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
@include('layout.script')
