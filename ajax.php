

<?php 


/*ПОМЕЩАЕМ ДАННЫЕ ИЗ ПОЛЕЙ В ПЕРЕМЕННЫЕ*/
$service_select = $_POST["servise_select"];
$name = $_POST["name"];
$guests = $_POST["guests"];
$phone = $_POST["phone"];

$dateTime = date("m.d.Y [H:i]");



include("mailer.php");


/*ЕСЛИ ВСЕ ПОЛЯ ЗАПОЛНЕНЫ НАЧИНАЕМ СОБИРАТЬ ДАННЫЕ ДЛЯ ОТПРАВКИ*/
$to = "oxanacheryssss@gmail.com"; /* Адрес, куда отправляем письма*/
$subject = "Бронирование на сайте debri.agatech.ru от ".$dateTime; /*Тема письма*/
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: <mailer@agatech.ru>\r\n";/*ОТ КОГО*/

/*ВО ВНУТРЬ ПЕРЕМЕННОЙ $message ЗАПИСЫВАЕМ ДАННЫЕ ИЗ ПОЛЕЙ */

$message = '

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body style="text-align: center; font-family: arial;">





<div style="width:100%; background: #eee; padding:30px; display: inline-block;">
<div  style="width:600px; background: #eee; padding:0px; display: inline-block;">

<div style="text-align: center; background-color: #fff;padding: 30px;border-radius: 3px;color: #fff;line-height: 24px; margin: 0px 0px 0px 0px;">
<h2 style="margin-top: 10px; color:#000">Заявка на сайте <span style="color: #203c97;text-shadow: 1px 1px 0px #000000a8;">Тестовый сайт Дебри</span></h2>

<table style=" margin-top: 20px; text-align: left; width: 100%;">
<tr>
<td style="width: 100%; color: #000;">
<ul style="list-style-type: none; margin: 0px;padding: 0px; font-size: 12px;">
<li style="width: 100%; padding: 0px 0px; border-bottom:1px solid #eee;"><span>Дата:</span> <b style="float: right;">'.$dateTime.'</b></li>

<li style="width: 100%; padding: 0px 0px; border-bottom:1px solid #eee;"><span>Услуга:</span> <b style="float: right;">'.$service_select.'</b></li>
<li style="width: 100%; padding: 0px 0px; border-bottom:1px solid #eee;"><span>Имя:</span> <b style="float: right;">'.$name.'</b></li>
<li style="width: 100%; padding: 0px 0px; border-bottom:1px solid #eee;"><span>Количсетво:</span> <b style="float: right;">'.$guests.'</b></li>
<li style="width: 100%; padding: 0px 0px; border-bottom:1px solid #eee;"><span>Номер телефона:</span> <b style="float: right;">'.$phone.'</b></li>
</ul>
</td>
</tr>
</table>

</div>



<table style="text-align: center; font-size: 10px; width: 100%; padding: 10px 0px;">
<tr>
<td>Техподдержка </td>
<td>ООО "Агатеч Корпорейшн"</td>
<td>+7 (927) 2<b>70-53-30</b></td>
<td>support@agatech.ru</td>
<td><a style="" href="https://agatech.ru/">www.agatech.ru</a></td>
</tr>
</table>




</div>
</div>



</body>
</html>


';

$send = smtpmail("support@agatech.ru", $subject , $message , $headers);


?>

<?php if ($send): ?>
<div class="reservation-inner done">
    <button class="reservation-inner__close">
        <img src="img/close-light.svg" alt="Закрыть" srcset="">
    </button>
    <h2 class="reservation-inner__title title">Бронирование прошло успешно!</h2>
    <p class="reservation-inner__subtitle">Мы свяжемся с вами в ближайшее время!</p>        
</div>
<?php else: ?>
<div class="reservation-inner done">
    <button class="reservation-inner__close">
        <img src="img/close-light.svg" alt="Закрыть" srcset="">
    </button>
    <h2 class="reservation-inner__title title">Что-то пошло не так</h2>
    <p class="reservation-inner__subtitle">Заявка не отправлена по техническим причинам</p>            
</div>
<?php endif ?>




