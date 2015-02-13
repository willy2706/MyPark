<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>[Taman Bandung] Laporan Masyarakat</h2>
      
      <p>Kapada {{$dinas_terkait->nama}}, </p>
      <p>Kami telah menerima laporan dari masyarakat bahwa terdapat masalah yang terkait dengan dinas Anda.
         Kami sangat berharap Anda dapat memprosesnya. Berikut ini adalah isi dari laporan.</p>
      <p>Tanggal:{{$aduan->tanggal}}</p>
      <p>Taman:{{$taman->nama}}</p>
      <p>Alamat:{{$taman->alamat}}</p>
      <p>Isi Aduan:</p>
      <p>{{$aduan->deskripsi}}</p>
      <br/>
		<p>Terima kasih,</p>
      <p>Taman Bandung</p>
	</body>
</html>
