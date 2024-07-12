@extends('layout.app')

@section('content')
@section('cssdatatable')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" />
@endsection

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
                            <h2>Tabel Normalisasi</h2>
                            <table class="table table-bordered border-primary mt-3" id="hasil">
                                <thead>
                                    <tr style="text-align: center">
                                        <th>No</th>
                                        <th>Alternatif</th>
                                        <th>D+</th>
                                        <th>D-</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($distance as $a)
                                        <tr>
                                            <td style="text-align: center">{{ $i }}</td>
                                            <td style="text-align: center">{{ $a->alternatif }}</td>
                                            <td style="text-align: center">{{ $a->dp }}</td>
                                            <td style="text-align: center">{{ $a->dm }}</td>
                                        </tr>
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                </tbody>
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

@section('scriptdatatable')
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>

<script>
    $(document).ready(function() {
        $('#hasil').DataTable();
    });
</script>
@endsection
