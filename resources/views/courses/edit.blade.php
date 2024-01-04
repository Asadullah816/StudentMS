@include('layout.master')
@include('layout.preloader')
@include('layout.sidebar')
<div class="content">
    @include('layout.navbar')
    <form action="{{ route('courseEdit', $course->id) }}" method="POST">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif
        @csrf
        <div class="form">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Courses Form</h6>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" value="{{ $course->name }}" name="name"
                        id="floatingInput" placeholder="">
                    <label for="floatingInput">{{ $course->name }}</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" value="{{ $course->syllabus }}" name="syllabus"
                        id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">{{ $course->syllabus }}</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" value="{{ $course->duration }}" name="duration"
                        id="floatingPassword" placeholder="Mobile">
                    <label for="floatingPassword">{{ $course->duration }}</label>
                </div>
                <div class="d-flex justify-content-center align-items-center form-floating mb-3">
                    <button type="submit" class="align-self-center btn btn-outline-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
@include('layout.script')
