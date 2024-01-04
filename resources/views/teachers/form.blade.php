@include('layout.master')
@include('layout.preloader')
@include('layout.sidebar')
<div class="content">
    @include('layout.navbar')
    <div class="container mt-5">
        <form action="{{ route('teacherForm') }}" method="POST">
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
                        <input type="text" class="form-control" name="name" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="address" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="mobile" id="floatingPassword"
                            placeholder="Mobile">
                        <label for="floatingPassword">Mobile</label>
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
