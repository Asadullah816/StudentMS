@include('layout.master')
@include('layout.preloader')
@include('layout.sidebar')
<div class="content">
    @include('layout.navbar')
    <div class="container bg-secondary rounded h-100 p-4 mt-5">
        <h6 class="mb-4">Payments Status</h6>
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Enrollment No</th>
                    <th scope="col">Ammount</th>
                    <th scope="col">Payment Date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($payment as $data)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ isset($data['enrollment']['enroll_no']) }}</td>
                        <td>{{ $data['ammount'] }}</td>
                        <td>{{ $data['paid_date'] }}</td>
                        <td><a href="{{ route('paymentProfile', $data['id']) }}"
                                class="btn btn-square btn-outline-success m-2"><i class="bi bi-person"></i></a>
                            <a href="{{ route('paymentedit', $data['id']) }}"
                                class=" btn btn-square btn-outline-info m-2"><i class="bi bi-pen"></i></a>
                            <a href="{{ route('paymentDelete', $data['id']) }}"
                                class="btn btn-square btn-outline-danger m-2 "><i class="bi bi-trash"></i></a>

                        </td>
                    </tr>
                @empty
                @endforelse


            </tbody>
        </table>
        <div class="d-flex justify-content-center align-items-center mt-5">
            <a href="{{ route('paymentform') }}" class=" btn btn-outline-success">Add more Payment</a>
            <a href="{{ route('download') }}" class=" btn btn-outline-success">Download</a>
        </div>



    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
@include('layout.script')
