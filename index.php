<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section>
</media>
<section>
    <form id="forms" method="post">
        <div>
        <label>Name:</label>
        <input type="text" name="name"
        placeholder="Enter your name">
        </div>
        <br>
        <div>
            <label>Surname:</label>
            <input type="text" name="surname"
            placeholder="Enter your surname">
        </div>
        <br>
        <div>
            <label>Age:</label>
            <input type="number" name="age"
            placeholder="Enter your age">
        </div>
        <br>
        <div>
            <label>DOB:</label>
            <input type="date" name="dob" 
            placeholder="Enter your dob">
        </div>
        <br>
        <div>
            <label> Password:</label>
            <input type="password" name="password" 
            placeholder="Enter your password">
        </div>
        <br>
        <div>
            <label>Gender:</label>
            <span>Male</span>
            <input type="radio" name="gender"> 
            <span>Female</span>
            <input type="radio" name ="gender">
        </div>
        <br>
        <div>
            <label>Subjects:</label>
            <span>HTML5</span>
            <input type="checkbox" name="subjects">
            <span>CSS3</span>
            <input type="checkbox" name="subjects">
        </div>
        <br>
        <div>
            <label>Email:</label>
            <input type="email" name="email"
            placeholder="Enter your email">
        </div>
        <br>
           <div>
            <label>Profile image:</label>
            <input type="file">
        </div>
        <br>
    </div>
    <div>
     <label>Url:</label>
     <input type="url">
 </div>
 <br>
</div>
<div>
 <label>Country:</label>
 <select name="country">
     <option value="southafrica">South Africa</option>
     <Option value="france">France</Option>
 </select>
</div>
<br>
<div>
     <input type="submit" value="save">
</div>
    </form>
</section>
</body>
</html>

<?php
extract($_REQUEST);
$file=fopen("Information.txt","a");

fwrite($file,"name:");
fwrite($file,$name,"\n");
fwrite($file,"surname:");
fwrite($file,$surname,"\n");
fwrite($file,"age:");
fwrite($file,$age,"\n");
fwrite($file,"dob:");
fwrite($file,$dob,"\n");
fwrite($file,"password:");
fwrite($file,$password,"\n");
fsclose($file);

?>