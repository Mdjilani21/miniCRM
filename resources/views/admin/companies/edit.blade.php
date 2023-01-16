@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Company Edit</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Company Edit</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content center">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('companies/'.$companies->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="inputName">Company Name</label>
                                    <input type="text" id="companyname" name="companyname" class="form-control" value="{{ $companies->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="inputemail">Company Email</label>
                                    <input type="text" id="companyemail" name="companyemail" class="form-control" value="{{ $companies->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="customFile">Company Logo</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="companylogo" name="companylogo" value="{{ $companies->logo }}">
                                        <label class="custom-file-label" for="customFile" id="logoUpload">Choose
                                            File</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader">Website</label>
                                    <input type="text" id="companywebsite" name="companywebsite" class="form-control" value="{{ $companies->website }}">
                                </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Back</a>
                    <input type="submit" value="Update" class="btn btn-success">
                </div>
            </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
