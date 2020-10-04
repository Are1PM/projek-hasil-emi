
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Persetujuan Servis</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <form action="apps/pengajuan/pemeliharaan/proses-konfirmasi.php" method="post">
    <div class="modal-body">
        <div class="form-group">
            <input type="hidden" value="<?= $_POST['id_pengajuan_servis']; ?>" name="id_pengajuan_servis">
        </div>
        <div class="form-group">
            <label>Status</label>
            <select name="id_status" class="form-control">
                <option value="">--Pilih--</option>
                <option value="1">Setuju</option>
                <option value="2">Tidak Setuju</option>
            </select>
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control" rows="3" placeholder="*Masukkan keterangan jika ditolak"></textarea>
        </div>
    </div>
        <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
        <button type="submit" class="btn btn-primary" name="proses">Simpan</button>
        </div>
    </div>
    </form>
</div>


