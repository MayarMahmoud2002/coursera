<?php

$message = "";
$error = "";

// $firstName = $_POST['firstName'];
// $lastName = $_POST['lastName'];
// $email = $_POST['email'];
// $password = $_POST['password'];
// $courses = $_POST['courses'];
// $gender = $_POST['gender'];
// $birthDay = $_POST['birthDay'];
// $sql = "insert into registration (firstName,lastName,email, password,courses) values (' $firstName ','$lastName','$email','$password','$courses','$gender','$birthDay')";

// $id = $_SESSION['id'];
// $query = "select * from registration where id = '$id' limit 1";

// $result = mysqli_query($con,$query);
// if($result && mysqli_num_rows($result) > 0)
// {

//     $user_data = mysqli_fetch_assoc($result);
//     return $user_data;
// }

if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST["create"]))) {
    echo "entered";
    $conn = new mysqli("localhost", "root", "", "courses");
    if ($conn->connect_error) {
        echo "Connection Failed:" . $conn->connect_error;

        $sql = "insert into registration(firstName, lastName, email, password,courses,gender,birthDay) 
            VALUES ('" . $_POST["firstName"] . "','" . $_POST["lastName"] . "','" . $_POST["email"] . "','" . $_POST["password"] . $_POST["courses"] . "','" . $_POST["gender"] . "')";
        if (mysqli_query($conn, $sql)) {
            echo "successsss";
        } else {
            echo "error";
        }
        if ($con->query($sql) === TRUE) {
            $message  = "Registration successed";
        } else {
            $error = "Error: " . $sql . "<br>" . $con->error;
        }
        
        // mysqli_close($conn);
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>3amk saleh</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <h1 style="font-size:80px; text-align: center;font-style: italic; color: blue;">Coursera Courses</h1>
    <h1 style="font-size: 40px; text-align: left">About Us :</h1>
    <p style="font-size: 25px">
        Coursera Courses is a global company that offers courses in all scientific disciplines to students around the
        world for free at the hands of specialists around the world , If you want to know more about us, visit this
        <a href="https://ar.wikipedia.org/wiki/%D9%83%D9%88%D8%B1%D8%B3%D9%8A%D8%B1%D8%A7" style="font-style:italic ; font-size: 30 ; color: blue ;">
            Website </a>
    <h1 style="font-size: 40px; text-align: left"> Availabe courses :</h1>



    <details style="margin:30px; ">
        <summary>programming courses </summary>
        <p>C++ Language</p>
        <p>Python Language</p>
        <p>Java Language</p>
        <p\>Php Language</p>

    </details>

    <details style="margin:30px; ">
        <summary>Medical courses </summary>
        <p> Thermometer</p>
        <p>Stethoscope</p>
        <p>Endoscope</p>
        <p\>plain x -ray</p>

    </details>

    <details style="margin:30px; ">
        <summary>Language courses </summary>
        <p> English</p>
        <p>Turkey</p>
        <p>German</p>
        <p\>French</p>

    </details>

    <details style="margin:30px; ">
        <summary>Rights courses </summary>
        <p>Criminal Science</p>
        <p>Human Rights</p>
        <p>Women's Studies</p>
        <p\>Political Science</p>

    </details>


    <embed src="coursera1.png " width="350" style="margin-left: 1000px; margin-top: -250px;">

    </h1>
    </p>
    <embed src="Coursera.gif " width="650" style=" -webkit-margin-start: 30px ;margin-bottom: -350px;">
    <h1 style="font-size: 40px; text-align:left ; margin-left: 800px;">Create An Account </h1>
    <p style="margin-left: 700px; font-size: 25px;">
    <form action="coursera.php" method="POST" style="margin-left: 700px; margin-left: 800px;">
        <input class="form-control" name="firstName" type=" text" placeholder="First Name" style="margin: 10px;">
        <input class="form-control" name="lastName" type="text" placeholder="Last Name" style="margin: 10px;"> <br>
        <input class="form-control" name="email" type="email" placeholder="Email" style="margin: 10px;">
        <input class="form-control" name="password" type="password" placeholder="Password" style="margin: 10px;"> <br>

        <input type="date" style="margin: 10px;"> <br>
        <label class="course" style="margin: 0 70px 0px 5px; ">choose your course : </label>
        <select name="coures" id="coures">
            <option value="programming courses">programming courses</option>
            <option value="Medical courses">Medical courses</option>
            <option value="Language courses">Language courses</option>
            <option value="Rights courses">Rights courses</option>
        </select> <br>

        <label>male</label>
        <input type="radio" value="male" name="male" style="margin: 10px;">
        <label>Female</label>
        <input type="radio" value="female" name="female" style="margin: 10px;"> <br>
        <button type="submit" name="create" style="margin: 10px; width: 50px;">create</button>

    </form>
    </p>
    

</body>

</html>











