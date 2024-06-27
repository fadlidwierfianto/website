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
                                <h2>Bobot Kriteria</h2>
                                <table class="table table-bordered border-primary mt-3">
                                    <tr style="text-align: center">
                                        <th>W1</th>
                                        <th>W2</th>
                                        <th>W3</th>
                                        <th>W4</th>
                                        <th>W5</th>
                                        <th>Action</th>
                                    </tr>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($bobot as $c)
                                        <tr>
                                            <td style="text-align: center">{{ $c->w1 }}</td>
                                            <td style="text-align: center">{{ $c->w2 }}</td>
                                            <td style="text-align: center">{{ $c->w3 }}</td>
                                            <td style="text-align: center">{{ $c->w4 }}</td>
                                            <td style="text-align: center">{{ $c->w5 }}</td>
                                            <td style="text-align: center">
                                                <form action="{{ url("bobot/$c->id/edit") }}" method="GET" style="display:inline;">
                                                    <button type="submit" class="btn btn-primary">Edit</button>
                                                </form>
                                            </td>
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

