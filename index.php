<?php
session_start();
if($_SESSION['pass'] == 1) {
    include "password.php";
    exit();
}
if($_SESSION['allow'] == 1) {
    include "captcha.php";
    exit();
}
?>


<div align="center">
    <h2>GDPS Stresser</h2><br />
    <p>
        <?php
        session_start();
        if($_GET['err'] != 3) {
            $_SESSION['set'] = 0;
        }
            if($_GET["err"] == 1) {
                echo "URL is invalid";
            }if($_GET["err"] == 2) {
                echo "This hosting forebidden for stresser";
            }if($_GET["err"] == 3) {
                echo "You aleready have active stresser! Press stop in this stresser to stop!";
            }
        ?>
    </p>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <p>Account spam:</p>
    <input id="link1" style="width:300px" placeholder="Ссылка на регистрацию" value="DOMAIN/accounts/registerGJAccount.php" /><button onclick="str()">Start</button>
    <p>Level spam:</p>
    <input id="link2" style="width:300px" placeholder="Ссылка на загрузку уровней" value="DOMAIN/incl/levels/uploadGJLevel.php" /><button onclick="strs()">Start</button>
    <p>Leaderboard spam:</p>
    <input id="link3" style="width:300px" placeholder="Ссылка на users" value="DOMAIN/updateGJUserScore22.php" /><button onclick="stsrs()">Start</button>
    <script>
        function str() {
            var a = document.getElementById("link1").value;
            if (a == "DOMAIN/accounts/registerGJAccount.php" || a == undefined) {
                alert("Error");
            } else {
                location.href = 'set.php?set=3&site=' + a + "&is=1";
            }
        }

        function strs() {
            var a = document.getElementById("link2").value;
            if (a == "DOMAIN/accounts/registerGJAccount.php" || a == undefined) {
                alert("Error");
            } else {
                location.href = 'set.php?set=1&site=' + a;
            }
        }

        function stsrs() {
            var a = document.getElementById("link3").value;
            if (a == "DOMAIN/updateGJUserScore22.php" || a == undefined) {
                alert("Error");
            } else {
                location.href = 'set.php?set=2&site=' + a;
            }
        }
    </script>
    <p><?php

    ?></p>
    <p>More comes soon</p>
            <!--<br />
<p>1 Все данные, которые вы найдёте на нашем портале, распространяются исключительно бесплатно и предоставляются исключительно в ознакомительных целях. Мы не даём гарантии того, что совершенно вся информация является полной и актуальной. Следовательно, вы самостоятельно принимаете решение о посещении aptkop.ru использовании размещённой на нём информации, и несёте ответственность за эти действия.<br />
Наша администрация стремится предоставить каждому пользователю достоверные и точные данные, но мы также не можем на 100% исключить возникновения ошибок.<br />
<br /><br />
2 Содержимое всего нашего портала предоставляется в открытом формате «как есть», так что никаких договоров и договорённостей между сайтом и конечными пользователями не заключается.
<br />Администрация не может гарантировать факта того, что появление ошибочной информации на сайте полностью исключается. Содержимое aptkop.ru, теоретически, может нарушать права третьих лиц. Также не гарантируется бесперебойный доступ к сайту и его содержимому.
<br /><br />
3 Администрация стремится поддерживать данные, расположенные на нём, точными, актуальными и правомерными, но она не несёт ответственности за действия лиц, которые были осуществлены на основании информации с pro-zarabotok.com, прямые или косвенные.
<br /><br />
4 В некоторых разделах pro-zarabotok.com можно встретить ссылки на внешние ресурсы. Это не значит, что администрация одобряет содержимое этих сайтов или же поощряет вас к переходу на них. Она также не несёт какой-либо ответственности за содержимое этих сайтов или же его доступность. Все ссылки на сторонние ресурсы размещаются исключительно для удобства пользователей.
<br />Полную ответственность за рекламу, размещённую на сайте, несут рекламодатели. Администрация не несёт ответственности за любые последствия взаимоотношений с рекламодателями, в том числе и за убытки.
<br /><br />
5 Не существует обстоятельств, в которых администрация pro-zarabotok.com будет нести ответственность за ущерб, возникший у какой-либо из сторон.
<br />Помимо точности и актуальности содержимого, администрация не несёт ответственности за мнения и предложения, размещённые в статьях, расположенных на нём. Помимо этого, ввиду отсутствия защиты передаваемых данных, администрация не может нести ответственности за пересылаемую вами информацию.
<br /><br />
6 Сайт имеет полной право использовать cookies для хранения общей и вашей личной информации. Посещая данный ресурс, вы даёте на это полное согласие.
<br /><br />
7 Администрация может удалить, изменить или же редактировать любые данные, расположенные на сайте, включая информацию, переданную пользователями. Она также сохраняет полное право не уведомлять пользователей о внесённых изменениях.
<br /><br />
8 Права на дизайн, торговые марки, названия товаров, служб и организаций, размещённые на данном сайте являются собственностью их владельцев. То, что они упоминаются на сайте, не даёт пользователям права использование их третьими лицами. Если же материалы всё же были использованы, то ответственность за это несёт непосредственно лицо, которое приняло решение об их использовании.
<br /><br />
9 Совершенно все данные, расположенные на данном сайте, защищаются законодательствами РФ и ЕС, включая их положения об охране авторских и смежных прав.
<br /><br />
10 Все графики, рисунки, логотипы и компоновка каждой страницы данного сайта защищены авторским правом.
<br /><br />
11 Пользователи сайта оставляющие отзывы и комментарии о деятельности других компаний, самостоятельно несут ответственность за их содержание.

12 Сайт pro-zarabotok.com не гарантирует заработок в интернете и данный сайт не служит обучающим материалом для заработка,</p>-->
</div>
