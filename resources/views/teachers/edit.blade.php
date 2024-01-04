@include('layout.master')
@include('layout.preloader')
@include('layout.sidebar')
<div class="content">
    @include('layout.navbar')
    <div class="container mt-5">
        <form action="{{ route('teacherEdit', $teacher->id) }}" method="POST">
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
                    <h6 class="mb-4">Teachers Form</h6>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" value="{{ $teacher->name }}" name="name"
                            id="floatingInput" placeholder="">
                        <label for="floatingInput">{{ $teacher->name }}</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" value="{{ $teacher->address }}" name="address"
                            id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">{{ $teacher->address }}</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" value="{{ $teacher->mobile }}" name="mobile"
                            id="floatingPassword" placeholder="Mobile">
                        <label for="floatingPassword">{{ $teacher->mobile }}</label>
                    </div>
                    <div class="d-flex justify-content-center align-items-center form-floating mb-3">
                        <button type="submit" class="align-self-center btn btn-outline-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
@include('layout.script')
