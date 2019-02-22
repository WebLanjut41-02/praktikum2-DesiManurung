<html>
	<head>
		<title>TUGAS PAKET</title>
	</head>
	<body>
		<h1>TUGAS PAKET</h1>
		<hr>

		<a href='<?php echo base_url("paketya/tambah"); ?>'>Tambah Data</a><br><br>

		<table border="1" cellpadding="7">
			<tr>
				<th>ID  </th>
				<th>Tanggal Paket Datang  </th>
				<th>Sasaran  </th>
				<th>Penerima  </th>
				<th>Isi Paket  </th>
                <th>Tanggal Paket Diambil  </th>
				<th colspan="2">Aksi</th>
			</tr>

			<?php
			if( ! empty($paket_pos)){
				foreach($paket_pos as $data){
					echo "<tr>
					<td>".$data->id."</td>
					<td>".$data->tanggal_datang."</td>
					<td>".$data->sasaran."</td>
					<td>".$data->penerima."</td>
					<td>".$data->isi_paket."</td>
					<td>".$data->tanggal_ambil."</td>
					<td><a href='".base_url("paketya/ubah/".$data->id)."'>Ubah</a></td>
					<td><a href='".base_url("paketya/hapus/".$data->id)."'>Hapus</a></td>
					</tr>";
				}
			}else{ 
				echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
			}
			?>
		</table>
	</body>
</html>
