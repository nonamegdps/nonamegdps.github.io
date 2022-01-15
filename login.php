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
$r = generate(10);
$is = $_GET["is"];
$site = $_GET["site"];
$a = check($is, $site, $r);
if ($a == "") {
    $gg = 0;
    echo "Не удалось отправить запрос серверу";
} else {

/* require_once "connection.php";
    $sql = "INSERT INTO view1 (id) VALUES ('h')";
    if(mysqli_query($link, $sql)) {

    } else {

    }
    } else {
        $b = $a;
    }
    if ($a == -1) {
        $b = "такой аккаунт уже есть, нажмите Далее";
    }
    echo "<div class='a'>$b</div><br />";
    $iss = $is + 1;
    echo "<br /><a href='?is=$iss&site=$site'>Try again</a> | <a href='/stres'>Stop</a><br />$site | Created: $is accounts";
}
*/
}
if ($a == 1) {
    echo "<script>
function a() {
    location.href='?is=$iss&site=$site';
}
setTimeout(a, 100);
</script>";
}


function check($is, $s, $r)
{
    $k = $GLOBALS["key"];
    if ($curl = curl_init()) {
        curl_setopt($curl, CURLOPT_URL, $s);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, "userName=$r$is&password=123456&email=$r@nuke.com");
        $out = curl_exec($curl);
        return $out;
        curl_close($curl);
    }
}
?>
