<style>
  table {
    font-family: "Times New Roman", Times, serif;
  }
  #table-head {
    width: 100%;
    /* margin-bottom: 15px; */
  }
  #table-body {
    width: 100%;
    margin-top: 15px;
    margin-bottom: 15px;
  }
  #table-body, #table-body th, #table-body td {
    border: 1px solid #000;
    border-collapse: collapse;
  }
  #table-footer {
    width: 100%;
  }
</style>

<table id="table-head">
  <thead>
    <tr>
      <th rowspan="6" width="50">
        <img src="{{ public_path('/img/ARSIPUSDA.png') }}" alt="" style="height: 80px;">
      </th>
      <th colspan="3" style="font-size: 24px">Dinas Perpustakaan dan Arsip Daerah Kota Wakanda</th>
    </tr>
    <tr>
      <th colspan="3" style="font-size: 12px">{{ $setting->alamat }}</th>
    </tr>
    <tr>
      <th colspan="3" style="font-size: 12px">Telp. {{ $setting->telpon }}, Fax. {{ $setting->telpon }}</th>
    </tr>
    <tr>
      <th colspan="3" style="font-size: 12px">website : www.simpusda.wakandakota.go.id, Email : {{ $setting->email }}</th>
    </tr>
    <tr>
      <th colspan="3" style="font-size: 18px">{{ $type }}</th>
    </tr>
    <tr>
      <th colspan="3" style="font-size: 14px">Per Pendaftaran Periode {{ $tgl_awal }} s/d {{ $tgl_akhir }}</th>
    </tr>
  </thead>
</table>

<hr>
<hr>

<table border="1" id="table-body">
  <thead>
    <tr>
      <th><b>No</b></th>
      <th><b>Jenis Keanggotaan</b></th>
      <th><b>Total</b></th>
    </tr>
  </thead>
  <tbody>
    @php
      $total = 0;
    @endphp
    @foreach ($members as $key => $value)
      <tr>
        <td align="center">{{ $loop->iteration }}</td>
        <td>{{ $value->type }}</td>
        <td align="center">{{ $value->total }}</td>
      </tr>
      @php
        $total += $value->total;
      @endphp
    @endforeach
    <tr>
      <td colspan="2"><b>Total</b></td>
      <td align="center"><b>{{ $total }}</b></td>
    </tr>
  </tbody>
</table>

<table id="table-footer">
  <tbody>
    <tr>
      <td align="right" colspan="3">Banjarmasin, {{ $tgl_sekarang }}</td>
    </tr>
    <tr>
      <td align="right" colspan="3">Penanggung Jawab</td>
    </tr>
    <tr>
      <td colspan="4" style="height:50px"></td>
    </tr>
    <tr>
      <td align="right" colspan="3" style="font-size: 14px"><b>{{ $setting->pemangku }}</b></td>
    </tr>
    <tr>
      <td align="right" colspan="3" style="font-size: 14px"><b>NIP. {{ $setting->nip_pemangku }}</b></td>
    </tr>
  </tbody>
</table>