{{-- <html>

<head>
    <title>show game</title>
</head>

<body>
    <h1>List Game</h1>
    <label for="nama">Nama Game: </label>
    <input type="text" value="{{ $alternatif->alternatif }}">
    <br>
    <label for="nama">c1: </label>
    <input type="text" value="{{ $alternatif->c1 }}">
    <br>
    <label for="nama">c2: </label>
    <input type="text" value="{{ $alternatif->c2 }}">
    <br>
    <label for="nama">c3: </label>
    <input type="text" value="{{ $alternatif->c3 }}">
    <br>
    <label for="nama">c4: </label>
    <input type="text" value="{{ $alternatif->c4 }}">
    <br>
    <label for="nama">c5: </label>
    <input type="text" value="{{ $alternatif->c5 }}">
    <br>
    <button onclick="window.location.href='{{ url('alternatif') }}'">Kembali</button>

</body>

</html> --}}

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
                            <h3 class="card-title">List Game</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="alternatif">Nama Game: </label>
                                    <input type="text" class="form-control" name="alternatif" id="alternatif" value="{{ $alternatif->alternatif }}">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="c1">c1: </label>
                                    <input type="text" class="form-control" name="c1" id="c1" value="{{ $alternatif->c1 }}">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="c2">c2: </label>
                                    <input type="text" class="form-control" name="c2" id="c2" value="{{ $alternatif->c2 }}">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="c3">c3: </label>
                                    <input type="text" class="form-control" name="c3" id="c3" value="{{ $alternatif->c3 }}">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="c4">c4: </label>
                                    <input type="text" class="form-control" name="c4" id="c4" value="{{ $alternatif->c4 }}">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="c5">c5: </label>
                                    <input type="text" class="form-control" name="c5" id="c5" value="{{ $alternatif->c5 }}">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button onclick="window.location.href='{{ url('alternatif') }}'">Kembali</button>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
