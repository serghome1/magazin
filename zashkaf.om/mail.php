<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>�������� �����</title>
</head>
<body >
<?php
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['mess'])) {$mess = $_POST['mess'];}
if (isset($_POST['mess1'])) {$mess1 = $_POST['mess1'];}

$to = "serg_home83@ukr.net"; /*������� ��� ����� ������������ �����*/
$headers = "Content-type: text/plain; charset = UTF-8";
$subject = "��������� � ������ �����";
$message = "��� ����������: $name \n����������� �����: $email \n����� ��������: $mess \n���������: $mess1";
$send = mail ($to, $subject, $message, $headers);
if ($send == 'true')
{
echo "<b>������� �� �������� ������ ���������!<p>";
echo "<a href=index.html>�������,</a> ����� ��������� �� ������� ��������";
}
else 
{
echo "<p><b>������. ��������� �� ����������!";
}
?>
</body>
</html>