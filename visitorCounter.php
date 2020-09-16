<head>
    <title>Visitor Counter in php</title>

</head>

<body>
<center> <h1>Visitor counter </h1></center>
<?php

# getting IP
$ip= $_SERVER['REMOTE_ADDR'];
echo "Your IP Address is:".$ip;

# for connecting with database
$con=mysqli_connect('localhost','root','','Visitor')

# for inserting ip here
$query= 'insert into visitors(ip) values ('$ip')'
mysqli_query($con,$query);

# counting ips
$q="select * from visitors";
$f=mysqli_num_rows($f);
$count = mysqli_num_rows($f);
echo "Total Visitors:".$count;

?>
</body>
</html>