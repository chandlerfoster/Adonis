<?php 
  require_once 'header.php';

  if (!$loggedin) die();

  echo "<div class='main'>";

  
?>

Customize your very own workout by selecting the options below!
<form action="plan.php" method="post">
Name:  <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Cardio: <select name="cardio" id="cardio">
    <option value="tread">Treadmill</option>
    <option value="bike">Spin Bicycle</option>
    <option value="elliptical">Elliptical</option>
</select>
Time (mins):
<select name="set" id="set">
    <option value="1">10</option>
    <option value="2">15</option>
    <option value="3">30</option>
    <option value="3">45</option>
    <option value="3">60</option>
</select>

<br>
Weightlift 1:<select name="workout" id="workout">
    <option value="bench">Flat Bench Press</option>
    <option value="squat">Squat</option>
    <option value="deadlift">Deadlift</option>
</select>
Sets:
<select name="set" id="set">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="3">4</option>
    <option value="3">5</option>
</select>
Number of Reps:
<select name="set" id="set">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="3">4</option>
    <option value="3">5</option>
    <option value="3">6</option>
    <option value="3">7</option>
    <option value="3">8</option>
    <option value="3">9</option>
    <option value="3">10</option>
    <option value="3">11</option>
    <option value="3">12</option>
</select>
<br>
Weightlift 2:<select name="workout" id="workout">
    <option value="incline">Incline Bench Press</option>
    <option value="gm">Good Mornings</option>
    <option value="romanian">Romanian Deadlift</option>
</select>
Sets:
<select name="set" id="set">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="3">4</option>
    <option value="3">5</option>
</select>
Number of Reps:
<select name="set" id="set">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="3">4</option>
    <option value="3">5</option>
    <option value="3">6</option>
    <option value="3">7</option>
    <option value="3">8</option>
    <option value="3">9</option>
    <option value="3">10</option>
    <option value="3">11</option>
    <option value="3">12</option>
</select>
<br>
Weightlift 3:<select name="workout" id="workout">
    <option value="dumbbellflys">Dumbbell Flys</option>
    <option value="lunges">Lunges</option>
    <option value="oneleg">1 legged deadlift</option>
</select>
Sets:
<select name="set" id="set">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="3">4</option>
    <option value="3">5</option>
</select>
Number of Reps:
<select name="set" id="set">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="3">4</option>
    <option value="3">5</option>
    <option value="3">6</option>
    <option value="3">7</option>
    <option value="3">8</option>
    <option value="3">9</option>
    <option value="3">10</option>
    <option value="3">11</option>
    <option value="3">12</option>
</select>
<br>
<input type="reset" name="reset">
<input type="submit">
</form>

    </ul></div>
  </body>
</html>
