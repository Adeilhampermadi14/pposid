<!DOCTYPE html>
<html>
<head>
    <title>Data Reservasi</title>
</head>
<body>
    <h1>Invoice</h1>
    <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th style="border: 1px solid #000;">ID</th>
                    <th style="border: 1px solid #000;">Kode Booking</th>
                    <th style="border: 1px solid #000;">Nama Penanggung Jawab</th>
                    <th style="border: 1px solid #000;">Tanggal</th>
                    <th style="border: 1px solid #000;">Waktu Mulai</th>
                    <th style="border: 1px solid #000;">Waktu Selesai</th>
                    <th style="border: 1px solid #000;">Kegiatan</th>
                    <th style="border: 1px solid #000;">Jumlah Peserta</th>
                    <th style="border: 1px solid #000;">Jumlah Panitia</th>
                    <th style="border: 1px solid #000;">Nama Ruangan</th>
                    <th style="border: 1px solid #000;">Direktorat</th>
                    <th style="border: 1px solid #000;">Divisi</th>
                    <th style="border: 1px solid #000;">Bagian</th>
                    <th style="border: 1px solid #000;">Pendukung</th>
                    <th style="border: 1px solid #000;">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach($reservasi as $row)
                    <tr>
                        <td style="border: 1px solid #000;">{{$i}}</td>
                        <td style="border: 1px solid #000;">{{ $row->kode_booking }}</td>
                        <td style="border: 1px solid #000;">{{ $row->nama_penanggung_jawab }}</td>
                        <td style="border: 1px solid #000;">{{ $row->tanggal }}</td>
                        <td style="border: 1px solid #000;">{{ $row->waktu_mulai }}</td>
                        <td style="border: 1px solid #000;">{{ $row->waktu_selesai }}</td>
                        <td style="border: 1px solid #000;">{{ $row->kegiatan }}</td>
                        <td style="border: 1px solid #000;">{{ $row->jumlah_peserta }}</td>
                        <td style="border: 1px solid #000;">{{ $row->jumlah_panitia }}</td>
                        <td style="border: 1px solid #000;">{{ $row->nama_ruangan }}</td>
                        <td style="border: 1px solid #000;">{{ $row->direktorat }}</td>
                        <td style="border: 1px solid #000;">{{ $row->divisi }}</td>
                        <td style="border: 1px solid #000;">{{ $row->bagian }}</td>
                        <td style="border: 1px solid #000;">{{ $row->pendukung }}</td>
                        <td style="border: 1px solid #000;">{{ $row->status }}</td>
                    </tr>
                    <?php $i++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
    
    
</body>
</html>
