<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap5.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container w-50 " style="padding: 10px;" >
    <form method="post" style="margin:40px; padding:30px;">
        
<p  class="form-label">username </p> <input  class="form-control  d-grid gap-2 col-6 mx-auto " style="border-radius: 17px;"  type="text" name="text" required>

<p  class="form-label ">password </p>  <input type="password" class="form-control d-grid gap-2 col-6 mx-auto  " style="border-radius: 17px;" name="password"required>


<p class="form-label">Gmail </p>  <input class="form-control  d-grid gap-2 col-6 mx-auto "style="border-radius: 17px;" type="gmail" name="hesham2" required>
<br>
<select class="form-control h-25" style="border-radius: 17px;">
    <option>gender</option>
    <option>male</option>
    <option>femal</option>
</select>

<br>
<br>

<button style="width: 90%;" class="btn btn-warning btn-lg  d-grid gap-2 col-6 mx-auto " type="submit" name="send">register</button>

</div>
    </form>

    <?php
$das = 'heshammahmoud ';
$fas = '1234';
$asd = 'heshammahmoud046@gmail.com';

if(isset($_POST['send'])){
$hesham  =  $_POST['text'];
$mohamed  =  $_POST['password'];
$rami  =  $_POST['hesham2'];
session_start();
$_SESSION['bb'] = $_POST['text'];
$_SESSION['bbb'] =  $_POST['password'];
$_SESSION['bbbb'] =  $_POST['hesham2'];

if($das === $hesham && $fas === $mohamed && $asd === $rami){
echo  "<div class='alert alert-warning '>تم تسجيل الدخول 
<button type='button' class='btn-close' data-bs-dismiss='alert'></button>
</div> ";
}else{
    echo  "<div sryle  class='alert alert-warning '>خطا في اسم المستخد او كلمه المرور
<button type='button' class='btn-close' data-bs-dismiss='alert'></button>
</div> ";
}
}
    ?>




<script src="bootstrap5.js"></script>
</body>
</html>