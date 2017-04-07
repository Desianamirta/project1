<html>
<pre><h1><center>Dilihat dari Indonesia Wilayah Kudus </center></h1></pre>
<b>FORECAST</b>
  <pre>
  <?php
  $json_string = file_get_contents("http://api.wunderground.com/api/2787748c5dc1150e/forecast/q/Indonesia/Kudus.json");
  $parsed_json = json_decode($json_string);
  $waktu = $parsed_json->forecast->txt_forecast->date;
  $title = $parsed_json->forecast->txt_forecast->forecastday[0]->title;
  $title2 = $parsed_json->forecast->txt_forecast->forecastday[2]->title;
  $fcttext_metric = $parsed_json->forecast->txt_forecast->forecastday[0]->fcttext_metric;
  $fcttext_metric2 = $parsed_json->forecast->txt_forecast->forecastday[2]->fcttext_metric;
  
  echo
	"Informasi Cuaca Hari ini Wilayah Kudus : <br>
		- Waktu ramalan cuaca : $waktu
		- Hari : $title
		- Keterangan cuaca : $fcttext_metric
  
	Informasi Cuaca Esok Hari Wilayah Kudus : <br>
		- Hari : $title2
		- Keterangan cuaca : $fcttext_metric2
			\n";
	?>
	</pre>
<b>SATELLITE</b></br>
  <pre>
  <?php
  $json_string = file_get_contents("http://api.wunderground.com/api/2787748c5dc1150e/satellite/q/Indonesia/Kudus.json");
  $parsed_json = json_decode($json_string);
  $satelit = $parsed_json->satellite->image_url;
  echo
  "Satelit  di wilayah Kudus :</br>
  <img src = '$satelit'>\n";
  ?>
  </pre>
<b>ASTRONOMY</b>
<body>
  <pre>
  <?php
	$json_string = file_get_contents("http://api.wunderground.com/api/2787748c5dc1150e/astronomy/q/Indonesia/Kudus.json");
	$parsed_json = json_decode($json_string);
	$moonphase = $parsed_json->{"moon_phase"}->{"phaseofMoon"};
	$moonphase1 = $parsed_json->{"moon_phase"}->{"percentIlluminated"};
	$moonphase2 = $parsed_json->{"moon_phase"}->{"hemisphere"};
  echo 
  "Fase bulan di wilayah Kudus yaitu fase : ${moonphase}
  Diterangi bulan sebanyak : ${moonphase1} (persen)
  Belahan Bumi : ${moonphase2} \n";
  ?>
  </pre>
<b>PLANNER</b>
  <pre> 
  <?php
  $json_string = file_get_contents("http://api.wunderground.com/api/2787748c5dc1150e/planner_07010731/q/Indonesia/Kudus.json");
  $parsed_json = json_decode($json_string);
  $cuaca = $parsed_json->trip->cloud_cover->cond;
  $suhu = $parsed_json->trip->temp_high->avg->C;
  $suhu1 = $parsed_json->trip->temp_low->avg->C;
  $kode = $parsed_json->trip->airport_code;
  echo
 "Cuaca di wilayah Kudus : $cuaca
  Suhu tertinggi di wilayah Kudus : $suhu <sup>O</sup> C 
  Suhu terendah di wilayah Kudus : $suhu1 <sup>O</sup> C
  Kode Airport wilayah Kudus adalah : $kode\n";
  ?>
  </pre>
 </body>
</html>