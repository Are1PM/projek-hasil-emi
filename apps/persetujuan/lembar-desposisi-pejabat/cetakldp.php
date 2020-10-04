<?php
require_once "../../config/KoneksiBasisData.php";
require_once "MengelolaPersetujuanldp.php";
$id_persetujuan_ldp = $_GET['id_persetujuan_ldp'];

$ambil = new  MengelolaPersetujuanldp($id_persetujuan_ldp,'','','');

$data = $ambil->MencariPersetujuanldp();



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

  .tg .tg-c3ow {
    border-color: inherit;
    text-align: center;
    vertical-align: top
  }

  .tg .tg-7btt {
    font-weight: bold;
    border-color: inherit;
    text-align: center;
    vertical-align: top
  }

  .tg .tg-0pky {
    border-color: inherit;
    text-align: left;
    vertical-align: top
  }

  .tg .tg-2xbj {
    font-weight: bold;
    font-size: 18px;
    border-color: inherit;
    text-align: center;
    vertical-align: top
  }
</style>
<style type="text/css">
  .safar {
    border-collapse: collapse;
    border-spacing: 0;
  }

  .safar td {
    font-family: Arial, sans-serif;
    font-size: 14px;
    padding: 10px 5px;
    border-style: solid;
    border-width: 1px;
    overflow: hidden;
    word-break: normal;
    border-color: black;
  }

  .safar th {
    font-family: Arial, sans-serif;
    font-size: 14px;
    font-weight: normal;
    padding: 10px 5px;
    border-style: solid;
    border-width: 1px;
    overflow: hidden;
    word-break: normal;
    border-color: black;
  }

  .safar .safar-c3ow {
    border-color: inherit;
    text-align: center;
    vertical-align: top
  }

  .safar .safar-7btt {
    font-weight: bold;
    border-color: inherit;
    text-align: center;
    vertical-align: top
  }

  .safar .safar-0pky {
    border-color: inherit;
    text-align: left;
    vertical-align: top
  }

  .safar .safar-2xbj {
    font-weight: bold;
    font-size: 18px;
    border-color: inherit;
    text-align: center;
    vertical-align: top
  }
</style>
<table class="tg" style="table-layout: fixed; width: 746px">
  <colgroup>

    <col style="width: 80px">
    <col style="width: 25px">
    <col style="width: 194px">
    <col style="width: 67px">
    <col style="width: 180px">
    <col style="width: 200px">
  </colgroup>
  <tr>
    <th class="tg-c3ow" colspan="3"><img align="left" src="BI-LOGO.png" width="180px" height="50px"> </th>
    <th class="tg-7btt"></th>
    <th class="tg-0pky"></th>
    <th class="tg-0pky"></th>
  </tr>
  <tr>
    <td class="tg-2xbj" colspan="6" style="font-size: 18pt">LEMBAR DISPOSISI PEJABAT</td>
  </tr>
  <style type="text/css">
    #border {
      border-right-style: 4%;
    }
  </style>
</table>
<table class="safar" style="table-layout: fixed; width: 746px">
  <tr>
    <td class="tg-0pky" colspan="4" style="font-size: 14pt">Perihal : <?= $data->perihal; ?></td>
    <td class="tg-0pky" colspan="2" style="font-size: 14pt">Tanggal : <?php echo date("Y-m-d"); ?></td>
  </tr>
</table>
<table class="tg" style="table-layout: fixed; width: 746px">
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-0pky" colspan="4" style="font-size: 14pt">Kepada</td>
    <td class="tg-0pky" colspan="15" style="font-size: 14pt">: Unit SLA</td>
    <td class="tg-0pky" colspan="4"></td>
  </tr>
  <tr>
    <td class="tg-0pky" colspan="4" style="font-size: 14pt">Dari</td>
    <td class="tg-0pky" colspan="15" style="font-size: 14pt">: <?= $data->nama_unit_kerja ?></td>
    <td class="tg-0pky" colspan="4"></td>
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
    <td class="tg-0pky" colspan="20" style="font-size: 14pt"> &nbsp; &nbsp; &nbsp; &nbsp; Sehubungan dengan rencana kegiatan unit pengelolaan uang rupiah, mohon kiranya bantuan Saudara untuk menyiapkan Driver / Pengemudi. Adapun rencana kegiatan yang dimaksud adalah sebagai berikut :</td>
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
<table class="safar" style="table-layout: fixed; width: 746px">
  <tr>
    <td class="tg-c3ow" style="font-size: 14pt">No</td>
    <td class="tg-c3ow" style="font-size: 14pt">Hari/Tanggal </td>
    <td class="tg-c3ow" colspan="3" align="center" style="font-size: 14pt">Kegiatan</td>
    <td class="tg-c3ow" style="font-size: 14pt">Kebutuhan Driver</td>
  </tr>
  <tr id="border">
    <td class="tg-c3ow">1</td>
    <td class="tg-0pky" style="font-size: 14pt;"> <?= $data->tanggal_berangkat; ?></td>
    <td class="tg-0pky" colspan="3" style="font-size: 14pt;"><?= $data->kegiatan; ?></td>
    <td class="tg-c3ow" style="font-size: 14pt;"><?= $data->kebutuhan_driver; ?> Orang</td>
  </tr>
</table>
<table class="tg" style="table-layout: fixed; width: 746px">
  <tr>
    <td class="tg-0pky" colspan="6" style="font-size: 14pt">Demikian, atas kerjasama Saudara kami ucapkan terima kasih.</td>
  </tr>
  <tr>
    <td class="tg-c3ow"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-c3ow"></td>
    <td class="tg-c3ow" colspan="2" style="font-size: 14pt">Kendari, <?php echo date("Y-m-d"); ?><br></td>
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
    <td class="tg-c3ow" colspan="2" style="font-size: 14pt"><span style="text-decoration:underline">
    <?= $data->manajer ?>
    </span><br>Manajer</td>
  </tr>
  <tr>
    <td class="tg-c3ow"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-c3ow"></td>
    <td class="tg-0pky"></td>
  </tr>
</table>