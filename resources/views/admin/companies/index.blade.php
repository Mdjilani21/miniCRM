@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Company</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Company</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <!-- Main content -->
        <section class="content">
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Company Details</h3>

                    <div class="card-tools">
                        <a class="btn btn-primary btn-sm" href="{{ route('companies.create') }}">
                            <i class="fas fa-plus">
                            </i>
                            Create
                        </a>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-12 order-1 order-md-2" style="text-align: center">
                    <h3 class="text-primary"><i class="fas fa-paint-brush"></i> {{ $companies->name }}</h3>
                    <p class="text-muted">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                        stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure
                        terr.</p>
                    <br>
                    <div class="text-primary center" style="text-align: center">
                        <p class="text-sm">
                        <h4>Company Email</h4>
                        <b class="d-block">{{ $companies->email }}</b>
                        </p>
                        <p class="text-sm">
                        <h4>Company Logo</h4>
                        <b class="d-block">{{ $companies->logo }}</b>
                        </p>
                        <p class="text-sm">
                        <h4>Company Website</h4>
                        <b class="d-block">{{ $companies->website }}</b>
                        </p>
                    </div>

                    <h4>Employee of this Company</h4>

                    <ul class="list-unstyled">
                        @foreach ($employeeList as $companyDetails)
                            <li>
                                {{-- <a href="" class="btn-link text-secondary">{{ $companyDetails->name }}</a> --}}

                                <ul class="list-unstyled">
                                    @foreach ($companyDetails->getEmployee as $employee)
                                        <li>
                                            <a href="" class="btn-link text-secondary">{{ $employee->firstname }}
                                                {{ $employee->lastname }}</a>
                                        </li>
                                    @endforeach

                                </ul>

                            </li>
                            <li>
                        @endforeach
                        <h5>Total Employee</h5>
                        <a href="" class="btn-link text-secondary"> {{ $employee->count() }}</a>
                        {{-- <a href="" class="btn-link text-secondary"> {{ $employeeDetails->employees->count() }}</a> --}}
                    </ul>



                    <h5 class="mt-5 text-muted">Project files</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i>
                                Functional-requirements.docx</a>
                        </li>
                        <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i>
                                UAT.pdf</a>
                        </li>
                        <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i>
                                Email-from-flatbal.mln</a>
                        </li>
                        <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i>
                                Logo.png</a>
                        </li>
                        <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i>
                                Contract-10_12_2014.docx</a>
                        </li>
                    </ul>
                    <div class="text-center mt-5 mb-3">
                        {{-- <a href="#" class="btn btn-sm btn-primary">Add files</a>
                      <a href="#" class="btn btn-sm btn-warning">Report contact</a> --}}
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Back</a>
                        <a class="btn btn-info btn-sm" href="{{ url('companies/' . $companies->id . '/edit') }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>


            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
