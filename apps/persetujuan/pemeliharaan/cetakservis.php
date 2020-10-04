<?php
require_once "../../config/KoneksiBasisData.php";
require_once "MengelolaPersetujuanservis.php";
$id_persetujuan_servis = $_GET['id_persetujuan_servis'];

$ambil = new  MengelolaPersetujuanservis($id_persetujuan_servis,'','','');

$data = $ambil-> MencariPersetujuanservis();



?>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-s6c7{border-color:inherit;font-size:18px;font-weight:bold;text-align:center;text-decoration:underline;vertical-align:top}
.tg .tg-x928{border-color:inherit;font-family:"Times New Roman", Times, serif !important;;font-size:16px;text-align:left;
  vertical-align:top}
.tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
.tg .tg-0lax{text-align:left;vertical-align:top}
.tg .tg-amwm{font-weight:bold;text-align:center;vertical-align:top}
</style>
<table class="tg" style="table-layout: fixed; width: 1192px">
<colgroup>
<col style="width: 373px">
<col style="width: 290px">
<col style="width: 289px">
<col style="width: 240px">
</colgroup>
<thead>
<tr>
    <th class="tg-c3ow" colspan="3"><img align="left" src="../lembar-desposisi-pejabat/BI-LOGO.png" width="180px" height="50px"> </th>
    <th class="tg-7btt"></th>
    <th class="tg-0pky"></th>
    <th class="tg-0pky"></th>
  </tr>
  <tr>
    <th class="tg-0pky"></th>
    <th class="tg-0pky"></th>
    <th class="tg-0pky"></th>
    <th class="tg-x928">Lamp1.13 Buku II SOP-MLBI</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-s6c7" colspan="2">SURAT TUGAS</td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-0lax"></td>
    <td class="tg-amwm" colspan="2">No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/77/Kdi/Srt/B<br>PEMBERITAHUAN KERJA KEPADA PIHAK KETIGA (EKSTERN)</td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-0pky">Satuan Kerja Pelapor</td>
    <td class="tg-0pky" colspan="3">Pengemudi <?= $data->nama_driver ?></td> 
  </tr>
  <tr>
    <td class="tg-0pky">Hari / Tanggal</td>
    <td class="tg-0pky" colspan="3"></td>
  </tr>
  <tr>
    <td class="tg-0pky">Uraian Laporan <?= $data->uraian_laporan ?> </td>
    <td class="tg-0pky" colspan="3">Permohonan service kendaraan dinas BI No.Pol. () dengan rincian/keluhan sbb :<br>1.</td>
  </tr>
  <tr>
    <td class="tg-0pky">Rekanan Pelaksana <?= $data->nama_tempat_servis ?></td>
    <td class="tg-0pky" colspan="3"></td>
  </tr>
  <tr>
    <td class="tg-0pky">Lahan Pekerjaan</td>
    <td class="tg-0pky" colspan="3">Melakukan perbaikan/service kendaraan dinas tersebut diatas dengan rincian :<br>1.</td>
  </tr>
  <tr>
    <td class="tg-0pky">Pengawas Pekerjaan</td>
    <td class="tg-0pky" colspan="3">Satuan LA dan Pengemudi</td>
  </tr>
  <tr>
    <td class="tg-0pky">Jangka Waktu Pelaksanaan <?= $data->jangka_waktu ?></td>
    <td class="tg-0pky" colspan="3">hari</td>
  </tr>
  <tr>
    <td class="tg-0pky">Tempat Pelaksanaan Pekerjaan <?= $data->nama_tempat_servis ?></td>
    <td class="tg-0pky" colspan="3"></td>
  </tr>
  <tr>
    <td class="tg-0pky">Petugas Pelaksana<br>(Nama &amp; Jabatan)</td>
    <td class="tg-0pky" colspan="3"></td>
  </tr>
  <tr>
    <td class="tg-0pky">Keterangan</td>
    <td class="tg-0pky" colspan="3">Apabila dalam pelaksanaan pekerjaan terdapat penggantian suku cadang selain rincian tersebut diatas, agar melakukan konfirmasi terlebih dahulu kepada petugas Bank Indonesia Kendari Cq. Seksi Logistik Telpon. 0401-312655 ext.8257 ()</td>
  </tr>
  <tr>
    <td class="tg-0pky"><br>Pelaksana/Bengkel :<br>PT. Hadji Kalla Kendari<br><br>ttd/stemp.<br><br><br><br><br><span style="text-decoration:underline">(..................................................)</span></td>
    <td class="tg-0pky"></td>
    <td class="tg-c3ow" colspan="2">Kendari, <br>Kantor Perwakilan Bank Indonesia Provinsi<br>Sulawesi Tenggara<br><br><br><br><br><br><br><span style="text-decoration:underline">Gunawan</span><br>Manajer</td>
  </tr>
  <tr>
    <td class="tg-0pky" colspan="4">Pekerjaan yang dilaksanakan :.....................................................................................................................................................................................................................</td>
  </tr>
  <tr>
    <td class="tg-c3ow" colspan="4">Kendari,........................<br>Mengetahui/Menyetujui Pekerjaan telah selesai<br>Kantor Perwakilan Bank Indonesia<br>Provinsi Sulawesi Tenggara</td>
  </tr>
  <tr>
    <td class="tg-0pky">Harap ditagihkan ke KPWDN Prov. Sultra<br>Jl. Sultan Hasanuddin No.150, Kendari Barat, Kendari<br>dengan dilampiri :<br>         1. Kuitansi rangkap 2 (dua) bermeterai cukup<br>         2. Faktur Pajak Asli<br>         3. Surat Pengantar Tagihan<br>         4. Tembusan / Copy Surat Tugas</td>
    <td class="tg-0pky" colspan="3"></td>
  </tr>
</tbody>
</table>
<script>
  window.print();
</script>