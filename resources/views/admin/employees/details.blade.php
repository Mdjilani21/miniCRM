@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Employee</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Employee</li>
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
                    <h3 class="card-title">Employee Details</h3>

                    <div class="card-tools">
                        <a class="btn btn-primary btn-sm" href="{{ route('employees.create') }}">
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
                    <h3 class="text-primary"><i class="fas fa-paint-brush"></i> {{ $employees->firstname }} {{ $employees->lastname }}</h3>
                    <p class="text-muted">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
                    <br>
                    <div class="text-primary center" style="text-align: center">
                      <p class="text-sm"><h4>Worked at</h4>
                        <b class="d-block">{{ $employees->company }}</b>
                      </p>
                      <p class="text-sm"><h4>Email</h4>
                        <b class="d-block">{{ $employees->email }}</b>
                      </p>
                      <p class="text-sm"><h4>Phone</h4>
                        <b class="d-block">{{ $employees->phone }}</b>
                      </p>
                    </div>
      
                    <h5 class="mt-5 text-muted">Project files</h5>
                    <ul class="list-unstyled">
                      <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
                      </li>
                      <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                      </li>
                      <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                      </li>
                      <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                      </li>
                      <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
                      </li>
                    </ul>
                    <div class="text-center mt-5 mb-3">
                      {{-- <a href="#" class="btn btn-sm btn-primary">Add files</a>
                      <a href="#" class="btn btn-sm btn-warning">Report contact</a> --}}
                      <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a>
                      <a class="btn btn-info btn-sm" href="{{ url('employees/'.$employees->id.'/edit') }}">
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
