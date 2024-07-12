@extends('layout.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <!-- /.card-body -->
            <div class="card">
                <div class="card-body">
                    <div class="container text-center">
                        <div class="row align-items-start">
                            <div class="col-10">
                                <h2>Tabel Solusi Ideal Negatif</h2>
                                <table class="table table-bordered border-primary mt-3">
                                    <tr style="text-align: center">
                                        <th></th>
                                        <th>c1</th>
                                        <th>c2</th>
                                        <th>c3</th>
                                        <th>c4</th>
                                        <th>c5</th>
                                    </tr>
                                    @foreach ($solusinegatif as $a)
                                        <tr>
                                            <td>A-</td>
                                            <td style="text-align: center">{{ $a->am1 }}</td>
                                            <td style="text-align: center">{{ $a->am2 }}</td>
                                            <td style="text-align: center">{{ $a->am3 }}</td>
                                            <td style="text-align: center">{{ $a->am4 }}</td>
                                            <td style="text-align: center">{{ $a->am5 }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
