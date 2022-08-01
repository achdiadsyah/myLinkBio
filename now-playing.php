<?php

$url = "https://api.spotify.com/v1/me/player/currently-playing?market=ID";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
   "Authorization: Bearer BQCWx84Q_WPWHjrW6wGRrcTTID7NypF00L6Ac9CtAE0AYxefmHFxEZtMhB7TqTngyCQ-V8aWbnoV3ukWhGeSDQilKt8eHSQf9uitsrXBMy1VfwP1knL5WsLtgcPfDDp4xQPc5UZXCTE8sXGuf_yCtTYuKiQAkfWN6uBFVUl_eOe0W15eM2m_2K0dJt0HuWK2cAvLQ-t-95qk",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$resp = curl_exec($curl);
curl_close($curl);
echo $resp;
exit();
?>