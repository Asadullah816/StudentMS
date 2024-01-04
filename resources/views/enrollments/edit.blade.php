@include('layout.master')
@include('layout.preloader')
@include('layout.sidebar')
<div class="content">
    @include('layout.navbar')
    <div class="container mt-5">
        <form action="{{ route('enrollEdit', $enroll->id) }}" method="POST">
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
                    <h6 class="mb-4">Enrollments Form</h6>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" value="{{ $enroll->enroll_no }}" name="enroll_no"
                            id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Enrollment Number</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" value="{{ $enroll->join_date }}" name="join_date"
                            id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Join Date</label>
                    </div>
                    <select name="batch_id" class="form-select form-select-lg mb-3"
                        aria-label=".form-select-lg example">
                        <option>Select Batch</option>
                        <option selected>Batch : {{ $enroll->batch->name }}</option>
                        @foreach ($batch as $data)
                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                        @endforeach

                    </select>
                    <select name="student_id" class="form-select form-select-lg mb-3"
                        aria-label=".form-select-lg example">

                        <option>Select Student</option>
                        <option selected>Student : {{ $enroll->student->name }}</option>
                        @foreach ($student as $data)
                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                        @endforeach
                    </select>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" value="{{ $enroll->fee }}" name="fee"
                            id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Fee</label>
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
