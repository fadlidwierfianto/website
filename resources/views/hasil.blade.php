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
                            <div class="col"></div>
                            <div class="col-10">
                                <h2>Hasil Akhir SPK</h2>
                                <table class="table table-bordered border-primary mt-3">
                                    <tr style="text-align: center">
                                        <th>No</th>
                                        <th>Alternatif</th>
                                        <th>Nilai Presensi</th>
                                    </tr>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($hasil as $b)
                                        <tr>
                                            <td style="text-align: center">{{ $i }}</td>
                                            <td style="text-align: center">{{ $b->alternatif }}</td>
                                            <td style="text-align: center">{{ $b ->v }}</td>
                                        </tr>
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                </table>
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

