<?php

$con = mysqli_connect("localhost" , "root" , "" , "ogani") or die("Db not Connected");


?>

<div class="row clock-wrap">
<div class="col clockinner1 clockinner">
<h1 class="days">29</h1>
<span class="smalltext">Days</span>
</div>
<div class="col clockinner clockinner1">
<h1 class="hours">23</h1>
<span class="smalltext">Hours</span>
</div>
<div class="col clockinner clockinner1">
<h1 class="minutes">55</h1>
<span class="smalltext">Mins</span>
</div>
<div class="col clockinner clockinner1">
<h1 class="seconds">53</h1>
<span class="smalltext">Secs</span>
</div>
</div>