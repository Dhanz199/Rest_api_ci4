<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengenal Tabel HTML</title>
</head>
<body>

	<center>
		<h2>SENSUS HARIAN PASIEN RAWAT JALAN / IGD</h2>
		<h4>RSUD MALINGPING PROV. BANTEN</h4>
		<h5>Hari / Tanggal </h5>
	</center>

    <table border="1"  style="width: 100%">
		<h4>Poliklinik....</h4>
        <tr>
            <th rowspan="2">No</th>
            <th rowspan="2">Nomor Rm</th>
            <th rowspan="2">Nama Pasien</th>
            <th rowspan="2">Alamat</th>

            <th colspan="2">Jk/Umur</th>
            <th colspan="2">Kunjungan</th>
            <th colspan="5">Asal Pasien Rujukan</th>
            <th rowspan="2">Diagnosa</th>
			<th colspan="2">Kasus</th>
            <th colspan="5">Keadaan Pasien</th>
            <th rowspan="2">Tindakan</th>

        </tr>
        <tr>
			<!-- Jenis Kelamin -->
            <th>LK</th>
            <th>P</th>
			
			<!-- Kunjungan -->
            <th>Baru</th>
            <th>Lama</th>

			<!-- Asal Rujukan -->
            <th>Datang Sendiri</th>
            <th>Puskesmas</th>
            <th>Dr. Praktek</th>
            <th>Bidan</th>
            <th>Lain-Lain</th>

			<!-- Kasus -->
			<th>Baru</th>
			<th>Lama</th>

			<!-- Keadaan Pasien -->
			<th>Pulang</th>
			<th>Dirawat</th>
			<th>Dirujuk</th>
			<th>Meninggal</th>
			<th>DOA</th>
        </tr>
        <tr>
            <td>1</td>
            <td>12341231</td>
            <td>Robby</td>
            <td>Jl. Disana</td>
            <td>L</td>
            <td></td>
            <td>Baru</td>
            <td></td>
            <td>Datang sendiri</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>IBP</td>
            <td></td>
            <td>Lama</td>
            <td>Pulang</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Niwa Ustens</td>
        </tr>
        <tr>
            <td>Rendi</td>
            <td>84</td>
            <td>70</td>
            <td>75</td>
        </tr>
        <tr>
            <td>Alfian</td>
            <td>96</td>
            <td>70</td>
            <td>71</td>
        </tr>
    </table>

	<h5>Mengetahui :</h5>
	<h4>DokterPoliklinik</h4>

	<script>
		window.print();
	</script>
</body>
</html>