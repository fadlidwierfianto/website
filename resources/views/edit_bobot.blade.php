@extends('layout.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <!-- /.card-body -->
            <div class="card">
                <div class="card-body">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Bobot</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ url("bobot/$bobot->id") }}" method="POST">
                            @CSRF
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="alternatif">w1: </label>
                                    <input type="text" class="form-control" name="w1" id="w1" value="{{ $bobot->w1 }}">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="c1">w2: </label>
                                    <input type="text" class="form-control" name="w2" id="w2" value="{{ $bobot->w2 }}">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="c2">w3: </label>
                                    <input type="text" class="form-control" name="w3" id="w3" value="{{ $bobot->w3 }}">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="c5">w4: </label>
                                    <input type="text" class="form-control" name="w4" id="w4" value="{{ $bobot->w4 }}">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="c5">w5: </label>
                                    <input type="text" class="form-control" name="w5" id="w5" value="{{ $bobot->w5 }}">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
