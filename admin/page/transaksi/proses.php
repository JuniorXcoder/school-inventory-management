<div class="panel box-shadow-none content-header">
                <div class="panel-body">
                  <div class="col-md-12">
                      <h3 class="animated fadeInLeft">View Transaksi</h3>
                      <p class="animated fadeInDown">
                        Home <span class="fa-angle-right fa"></span> Transaksi <span class="fa-angle-right fa"></span> View transaksi
                      </p>
                  </div>
                </div>
            </div>
<div class="col md-12">
	<form method="post">
	<div class="form-group">
	<label>Lihat Transaksi :</label>
	<select class="form-control" name="report">
		<option value="Harian">Harian Atau Belum Dikembalikan</option>
		<option value="Semua">Semua</option>
	</select>
	</div>
	<div>
		<input type="submit" name="simpan" class="btn btn-primary">
	</div>
</form>
</div>
<?php
	$simpan = isset($_POST['simpan']);
	if ($simpan) {
		$report = $_POST['report'];
		if ($report == "Harian") {
			?>
			<script type="text/javascript">
				window.location.href = "?page=transaction&report=harian";
			</script>
			<?php
		}elseif ($report == "Semua") {
			?>
			<script type="text/javascript">
				window.location.href = "?page=transaction&report=semua";
			</script>
			<?php
		}
	}
?>