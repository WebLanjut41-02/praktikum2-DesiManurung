<html>
	<head>
		<title>TUGAS PAKET</title>
	</head>
	<body>
		<h1>TUGAS PAKET</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>

		<?php echo form_open("paketya/ubah/".$paket_pos->nis); ?>
			<table cellpadding="8">
				<tr>
                <tr>
                <tr>
                    <td>ID</td>
                    <td><input type="text" name="input_id" value="<?php echo set_value('input_id'); ?>"></td>
                </tr>
                <tr>
                    <td>Tanggal Paket Datang</td>
                    <td><input type="text" name="input_tanggal_datang" value="<?php echo set_value('input_tanggal_datang'); ?>"></td>
                </tr>
                <tr>
                    <td>Sasaran</td>
                    <td><input type="text" name="input_sasaran" value="<?php echo set_value('input_sasaran'); ?>"></td>
                </tr>
                <tr>
                    <td>Penerima</td>
                    <td><input type="text" name="input_penerima" value="<?php echo set_value('input_penerima'); ?>"></td>
                </tr>
                <tr>
                    <td>Isi Paket</td>
                    <td><textarea name="input_isi_paket"><?php echo set_value('input_isi_paket'); ?></textarea></td>
                </tr>
                <tr>
                    <td>Tanggal Paket Diambil</td>
                    <td><textarea name="input_tanggal_ambil"><?php echo set_value('input_tanggal_ambil'); ?></textarea></td>
                </tr>
			</table>
				
			<hr>
			<input type="submit" name="submit" value="Ubah">
			<a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
		<?php echo form_close(); ?>
	</body>
</html>
