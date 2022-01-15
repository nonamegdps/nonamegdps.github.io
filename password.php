<?php
session_start();
if($_SESSION['pass'] != 0) {
    header("Location: /stres");
    die();
}
$password = $_GET["pass"];
if($password == "") {
    
} else {
    if($password != "amogussusdshfgsgdfhadsfg") {
        
    } else {
        $_SESSION['pass'] = 1;
        header("Location: /stres");
        die();
    }
}
?>

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<style>
body {
/* background-color: #eaeaea;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='199' viewBox='0 0 100 199'%3E%3Cg fill='%23c5c5c5' fill-opacity='0.4'%3E%3Cpath d='M0 199V0h1v1.99L100 199h-1.12L1 4.22V199H0zM100 2h-.12l-1-2H100v2z'%3E%3C/path%3E%3C/g%3E%3C/svg%3E");
/\ Если захочешь более-менее нормальный фон*/
background-image: url(https://aptkop.ru/files/Screenshot_132.png);
}

@keyframes show {
 0% {
     transform: translate(100px);
      opacity: 0;
  }
  100% {
transform: translate(0px);
      opacity: 1;
  }
}

.form {
  animation: show 1s;
  background: rgba( 255, 255, 255, 0.8 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 9.0px );
-webkit-backdrop-filter: blur( 9.0px );
border: 1px solid rgba( 255, 255, 255, 0.18 );
}
.card:hover {
 opacity: 0.5;
backdrop-filter: blur( 9.0px );
-webkit-backdrop-filter: blur( 9.0px );

}

</style>
<body style="font-family: Inter;">
<div class="form mx-auto max-w-lg  p-4 rounded-lg mt-32">
<img src="https://minotar.net/helm/APTKOP/100.png" class="mx-auto my-8 rounded-lg w-16">
<p class="text-center text-xl font-semibold text-gray-900 mx-auto ">403</p>
<p class="text-center text-base font-medium text-gray-700 mx-auto" >Доступ запрещён</p>
<div class="mx-4 my-12">
</div>
<div onclick="location.href='/'" class="cursor-pointer card footer mt-12 mb-8 p-4 mx-4 flex bg-gray-100 rounded-lg">
<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
</svg>
<a class="text-center mx-auto" href="#">Главная</a>
</div>
</body>
</div>