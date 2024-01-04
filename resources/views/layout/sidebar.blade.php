<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="{{ route('home') }}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Student MS</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('img/user.jpg') }}" alt=""
                    style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('home') }}" class="nav-item nav-link {{ Request::is('/') ? ' active' : '' }}"><i
                    class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ Request::is('students*') ? ' active' : '' }}"
                    data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Students </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="" class="dropdown-item">Students Profile</a>
                    <a href="{{ route('studentform') }}" class="dropdown-item">Students Form</a>
                    <a href="{{ route('studentApplications') }}" class="dropdown-item">Students Applications</a>
                    <a href="" class="dropdown-item">Another Action for students</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ Request::is('teachers*') ? ' active' : '' }}"
                    data-bs-toggle="dropdown"><i class="fa fa-book me-2"></i>Teachers </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="" class="dropdown-item">Teachers Profile</a>
                    <a href="{{ route('teacherform') }}" class="dropdown-item">Teachers Form</a>
                    <a href="{{ route('teacherTable') }}" class="dropdown-item">Teachers </a>
                    <a href="" class="dropdown-item">Another Action for Teachers</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ Request::is('courses*') ? ' active' : '' }}"
                    data-bs-toggle="dropdown"><i class="fa fa-book me-2"></i>Courses </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="" class="dropdown-item">Courses Profile</a>
                    <a href="{{ route('courseform') }}" class="dropdown-item">Courses Form</a>
                    <a href="{{ route('courseTable') }}" class="dropdown-item">Courses </a>
                    <a href="" class="dropdown-item">Another Action for Courses</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ Request::is('batches*') ? ' active' : '' }}"
                    data-bs-toggle="dropdown"><i class="fa fa-book me-2"></i>Batches </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('batchform') }}" class="dropdown-item">Batches Form</a>
                    <a href="{{ route('batchTable') }}" class="dropdown-item">Batches </a>
                    <a href="" class="dropdown-item">Another Action for Batches</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ Request::is('enrollments*') ? ' active' : '' }}"
                    data-bs-toggle="dropdown"><i class="fa fa-book me-2"></i>Enrollments </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('enrollform') }}" class="dropdown-item">Enrollment Form</a>
                    <a href="{{ route('enrollTable') }}" class="dropdown-item">Enrollments </a>
                    <a href="" class="dropdown-item">Another Action for Enrollments</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ Request::is('payments*') ? ' active' : '' }}"
                    data-bs-toggle="dropdown"><i class="fa fa-book me-2"></i>Payments </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('paymentform') }}" class="dropdown-item">Payment Form</a>
                    <a href="{{ route('paymentTable') }}" class="dropdown-item">Payments </a>
                    <a href="" class="dropdown-item">Another Action for Payments</a>
                </div>
            </div>
            {{-- <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
            <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
            <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
            <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">Sign In</a>
                    <a href="signup.html" class="dropdown-item">Sign Up</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                    <a href="blank.html" class="dropdown-item">Blank Page</a>
                </div>
            </div> --}}
        </div>
    </nav>
</div>
