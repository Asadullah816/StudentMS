@include('layout.master')
@include('layout.preloader')
@include('layout.sidebar')
<div class="content">
    @include('layout.navbar')
    <div class="container mt-5">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Teachers Table</h6>
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"> Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($teacher as $data)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->address }}</td>
                            <td>{{ $data->mobile }}</td>
                            <td><a href="{{ route('teacherProfile', $data->id) }}"
                                    class="btn btn-square btn-outline-success m-2"><i class="bi bi-person"></i></a>
                                <a href="{{ route('teacheredit', $data->id) }}"
                                    class=" btn btn-square btn-outline-info m-2"><i class="bi bi-pen"></i></a>
                                <a href="{{ route('teacherDelete', $data->id) }}"
                                    class="btn btn-square btn-outline-danger m-2 "><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    @empty
                    @endforelse


                </tbody>
            </table>
            <div class="d-flex justify-content-center align-items-center mt-5">
                <a href="{{ route('teacherform') }}" class=" btn btn-outline-success">Add New Teacher</a>
            </div>
        </div>
    </div>

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
@include('layout.script')
