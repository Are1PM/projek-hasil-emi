<?php
require_once "../../config/KoneksiBasisData.php";
require_once "MengelolaPersetujuanbbm.php";
$id_persetujuan_bbm = $_GET['id_persetujuan_bbm'];

$ambil = new  MengelolaPersetujuanbbm($id_persetujuan_bbm,'','','');

$data = $ambil-> MencariPersetujuanbbm();



?>
<script type="text/javascript">
  window.print();
</script>
<style type="text/css">
  .tg {
    border-collapse: collapse;
    border-spacing: 0;
    border: none;
  }

  .tg td {
    font-family: Arial, sans-serif;
    font-size: 14px;
    padding: 10px 5px;
    border-style: solid;
    border-width: 0px;
    overflow: hidden;
    word-break: normal;
  }

  .tg th {
    font-family: Arial, sans-serif;
    font-size: 14px;
    font-weight: normal;
    padding: 10px 5px;
    border-style: solid;
    border-width: 0px;
    overflow: hidden;
    word-break: normal;
  }

  .tg .tg-lboi {
    border-color: inherit;
    text-align: left;
    vertical-align: middle;
  }

  .tg .tg-c3ow {
    border-color: inherit;
    text-align: center;
    vertical-align: top;
  }

  .tg .tg-y9rc {
    text-decoration: underline;
    border-color: inherit;
    text-align: left;
    vertical-align: middle;
  }

  .tg .tg-iiav {
    font-weight: bold;
    text-decoration: underline;
    border-color: inherit;
    text-align: center;
    vertical-align: middle;
  }

  .tg .tg-0pky {
    border-color: inherit;
    text-align: left;
    vertical-align: top;
  }
</style>
<table class="tg" style="table-layout: fixed; width: 893px;">
  <colgroup>
    <col style="width: 238px">
    <col style="width: 22px">
    <col style="width: 37px">
    <col style="width: 313px">
    <col style="width: 200px">
    <col style="width: 83px">
  </colgroup>
  <tr>
    <th class="tg-y9rc" style="font-size: 12pt">BANK INDONESIA KENDARI</th>
    <th class="tg-0pky"></th>
    <th class="tg-lboi"></th>
    <th class="tg-0pky"></th>
    <th class="tg-0pky"></th>
    <th class="tg-0pky" colspan="2" style="font-size: 12pt">No. Kupon</th>
  </tr>
  <tr>
    <td class="tg-lboi"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky" colspan="3" style="font-size: 12pt"><b style="text-decoration: underline;">PERMINTAAN BBM UNTUK KENDARAAN DINAS</b> </td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-lboi" style="font-size: 12pt">Kepada</td>
    <td class="tg-0pky" style="font-size: 12pt">:</td>
    <td class="tg-0pky" colspan="4" style="font-size: 12pt">Kepala Seksi Sumber Daya Bank Indonesia Kendari</td>

  </tr>
  <tr>
    <td class="tg-0pky" style="font-size: 12pt">Dari</td>
    <td class="tg-0pky" style="font-size: 12pt">:</td>
    <td class="tg-0pky" colspan="4" style="font-size: 12pt">Driver</td>

  </tr>
  <tr>
    <td class="tg-0pky" style="font-size: 12pt">Perihal</td>
    <td class="tg-0pky" style="font-size: 12pt">:</td>
    <td class="tg-0pky" colspan="4" style="font-size: 12pt">Permintaan BBM untuk Kendaraan Dinas</td>

  </tr>
  <tr>
    <td class="tg-0pky" colspan="4" style="font-size: 12pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dengan ini kami mohon dapat diberikan BBM untuk Kendaraan Dinas <?= $data->plat ?> </td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-0pky" style="font-size: 12pt">Jumlah BBM yang diminta</td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky" style="font-size: 12pt">: <?= $data->voucher ?>
    </td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-0pky" style="font-size: 12pt">Jarak yang ditempuh</td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky" style="font-size: 12pt">: <?= $data->jarak_tempuh ?>
    </td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-0pky" style="font-size: 12pt">Tanggal pengisian</td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky" style="font-size: 12pt">: <?php echo date("Y-m-d"); ?></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-0pky" style="font-size: 12pt">Jenis BBM</td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky" style="font-size: 12pt">: <?= $data->jenis_bbm ?>
    </td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-0pky" style="font-size: 12pt">Tempat pengisian</td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky" style="font-size: 12pt">: <?= $data->nama_spbu ?>                                     
    </td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-c3ow" colspan="3" style="font-size: 12pt">Menyetujui ,<br>BANK INDONESIA KENDARI</td>
    <td class="tg-c3ow"></td>
    <td class="tg-c3ow" colspan="4" style="font-size: 12pt">Kendari, <?php echo date("Y-m-d"); ?><br>Pengemudi</td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
</table>