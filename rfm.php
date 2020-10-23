<?php
echo "
█ █▀▄ █ █▀█ ▀█▀ ░ █▀█ █▀▀ █▀█ █▀█ █░░ █▀▀ █▄▄ █▀█
█ █▄▀ █ █▄█ ░█░ ▄ █▀▀ ██▄ █▄█ █▀▀ █▄▄ ██▄ █▄█ ▀▀█                           
\n";
echo "# Name  : Aprizal_\n";
echo "# Name Tools  : Responsive File Manager Brute Force\n";
echo "# Email : violet.last71@gmail.com\n";
echo "[+] Target : ";
$url = trim(fgets(STDIN));
echo "\n";

$list = "rfm.txt";
$open = fopen("$list","r");
$size = filesize("$list");
$read = fread($open,$size);
$lists = explode("\r\n",$read);
$green = "\e[32;3m";
$red = "\e[31;3m";
foreach($lists as $dir)
	{

    $nah = curl_init();
    curl_setopt($nah, CURLOPT_URL, $url.$dir);
    curl_setopt($nah, CURLOPT_HEADER, 1);
    curl_setopt($nah, CURLOPT_RETURNTRANSFER, 1); 
    $result = curl_exec($nah);
	$httpcode = curl_getinfo($nah, CURLINFO_HTTP_CODE);
	curl_close($nah);
		if($httpcode == 200) {   
			echo $green."[+] $url".$dir." >>> Found //Saved as result.txt//\n";
			$fp = fopen("result.txt", 'a');
			fwrite($fp, $url.$dir."\n");
            fclose($fp);
          }
    }
?>