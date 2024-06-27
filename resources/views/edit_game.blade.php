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
                            <h3 class="card-title">Edit Game</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ url("alternatif/$alternatif->id") }}" method="POST">
                            @CSRF
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="alternatif">Nama Game: </label>
                                    <input type="text" class="form-control" name="alternatif" id="alternatif" value="{{ $alternatif->alternatif }}">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="c1">Harga: </label>
                                    <input type="text" class="form-control" name="c1" id="c1" value="{{ $alternatif->c1 }}">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="c2">Ukuran: </label>
                                    <input type="text" class="form-control" name="c2" id="c2" value="{{ $alternatif->c2 }}">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="c3">Review: </label>
                                        <select class="form-control" name="c3" id="c3" value="{{ $alternatif->c3 }}">
                                            <option value="1">Overwhelmingly Negative</option>
                                            <option value="2">Very Negative</option>
                                            <option value="3">Negative</option>
                                            <option value="4">Mostly Negative</option>
                                            <option value="5">Mixed</option>
                                            <option value="6">Mostly Positive</option>
                                            <option value="7">Positive</option>
                                            <option value="8">Very Positive</option>
                                            <option value="9">Overwhelmingly Positive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="c4">Visual: </label>
                                        <select class="form-control" name="c4" id="c4" value="{{ $alternatif->c4 }}">
                                            <option value="1">Okay</option>
                                            <option value="2">Good</option>
                                            <option value="3">excellent</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="c5">Story in Game: </label>
                                    <input type="text" class="form-control" name="c5" id="c5" value="{{ $alternatif->c5 }}">
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
