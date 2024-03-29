@extends('admin.layout.layout')
@section('content')
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Data Reservasi</h4>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Reservasi</h5>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                     
                    <thead>
                      <tr>
                          <th>ID</th>
                          <th>Kode Booking</th>
                          <th>Nama Penanggung Jawab</th>
                          <th>Tanggal</th>
                          <th>Waktu Mulai</th>
                          <th>Waktu Selesai</th>
                          <th>Kegiatan</th>
                          <th>Jumlah Peserta</th>
                          <th>Jumlah Panitia</th>
                          <th>Nama Ruangan</th>
                          <th>Direktorat</th>
                          <th>Divisi</th>
                          <th>Bagian</th>
                          <th>Pendukung</th>
                          <th>Status</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php $i = $reservasi->firstItem() ?>
                      @foreach($reservasi as $row)
                          <tr>
                              <td>{{$i}}</td>
                              <td>{{ $row->kode_booking }}</td>
                              <td>{{ $row->nama_penanggung_jawab }}</td>
                              <td>{{ $row->tanggal }}</td>
                              <td>{{ $row->waktu_mulai }}</td>
                              <td>{{ $row->waktu_selesai }}</td>
                              <td>{{ $row->kegiatan }}</td>
                              <td>{{ $row->jumlah_peserta }}</td>
                              <td>{{ $row->jumlah_panitia }}</td>
                              <td>{{ $row->nama_ruangan }}</td>
                              <td>{{ $row->direktorat }}</td>
                              <td>{{ $row->divisi }}</td>
                              <td>{{ $row->bagian }}</td>
                              <td>{{ $row->pendukung }}</td>
                              <td>{{ $row->status }}</td>
                          </tr>
                          <?php $i++ ?>
                      @endforeach
                  </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection
