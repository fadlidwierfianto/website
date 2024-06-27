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
                                 <h2>Daftar Game</h2>
                                 <form action="{{ url('alternatif/create') }}" style="display:inline;">
                                     <button type="submit" class="btn btn-secondary">Tambah Game</button>
                                 </form>
                                 {{-- <a href="{{ url('coba/create') }}">Tambah Game</a> --}}
                                 <table class="table table-bordered mt-4">
                                     <tr style="text-align: center">
                                         <th>No</th>
                                         <th>Alternatif</th>
                                         <th>c1</th>
                                         <th>c2</th>
                                         <th>c3</th>
                                         <th>c4</th>
                                         <th>c5</th>
                                         <th>Action</th>
                                     </tr>
                                     @php
                                         $i = 1;
                                     @endphp
                                     @foreach ($alternatif as $a)
                                         <tr>
                                             <td style="text-align: center">{{ $i }}</td>
                                             <td style="text-align: center">{{ $a->alternatif }}</td>
                                             <td style="text-align: center">{{ $a->c1 }}</td>
                                             <td style="text-align: center">{{ $a->c2 }}</td>
                                             <td style="text-align: center">{{ $a->c3 }}</td>
                                             <td style="text-align: center">{{ $a->c4 }}</td>
                                             <td style="text-align: center">{{ $a->c5 }}</td>
                                             <td style="text-align: center">
                                                 <form action="{{ url("alternatif/$a->id") }}" method="GET"
                                                     style="display:inline;">
                                                     <button type="submit" class="btn btn-success">Show</button>
                                                 </form>

                                                 <form action="{{ url("alternatif/$a->id/edit") }}" method="GET"
                                                     style="display:inline;">
                                                     <button type="submit" class="btn btn-primary">Edit</button>
                                                 </form>

                                                 <form action="{{ url("alternatif/$a->id") }}" method="POST"
                                                     style="display:inline;">
                                                     @csrf
                                                     @method('DELETE')
                                                     <button type="submit" class="btn btn-danger">Delete</button>
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
