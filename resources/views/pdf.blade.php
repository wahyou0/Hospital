<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Hospital - Boot &amp; UI </title>

		<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: left;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: left;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>
	</head>

	<body>
		<div class="invoice-box">
			<table cellpadding="0" cellspacing="0">

				<tr class="total">
					<td></td>

					<td>Bukti Registrasi Pasien</td>
				</tr>
				<tr class="item">
					<td>Nomor Registrasi</td>
					<td class="fw-semibold">{{ $data->no_registrasi }}</td>
				</tr>
				<tr class="item">
					<td>Nomor Antrian</td>
					<td class="fw-semibold"> {{ $data->no_antrian }} </td>
				</tr>
				<tr class="item">
					<td>Jenis Pasien</td>
					<td class="fw-semibold">{{ $data->jenis_pasien }}</td>
				</tr>
				<tr class="item">
					<td>No. Rekam Medis</td>
					<td class="fw-semibold">{{ $data->no_rekam_medis }}</td>
				</tr>
				<tr class="item">
					<td>Nama Pasien</td>
					<td class="fw-semibold">{{ $data->nama_pasien }}</td>
				</tr>
				<tr class="item">
					<td>NIK Pasien</td>
					<td class="fw-semibold">{{ $data->nik }}</td>
				</tr>
				<tr class="item">
					<td>Tempat / Tgl. Lahir</td>
					<td class="fw-semibold">{{ $data->tempat_lahir }}/{{ $data->tgl_lahir}}</td>
				</tr>
				<tr class="item">
					<td>Kontak Pasien</td>
					<td class="fw-semibold">{{ $data->no_hp }}</td>
				</tr>
				<tr class="item">
					<td>Cara Bayar</td>
					<td class="fw-semibold">{{ $data->cara_bayar }}</td>
				</tr>
				<tr class="item">
					<td>Poliklinik Tujuan</td>
					<td class="fw-semibold">{{ $data->poli_tujuan }}</td>
				</tr>
				<tr class="item">
					<td>Tanggal kunjungan</td>
					<td class="fw-semibold">{{ $data->tgl_kunjungan }}</td>
				</tr>
			</table>
		</div>
	</body>
</html>