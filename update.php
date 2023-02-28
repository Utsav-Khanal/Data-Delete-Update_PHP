<?php

use JetBrains\PhpStorm\Language;

        include("connection.php");
        error_reporting(0);


       $rn= $_GET['rn'];
       $fn= $_GET['fn'];
       $ln= $_GET['ln'];
       $em= $_GET['em'];
       $gn= $_GET['gn'];
       $con= $_GET['con'];
       $lan= $_GET['lan'];
       $b = explode(",",$lan);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
       

    <!--Update Form-->

    <form action="" method="GET">

    <table align="center" border="0" cellspacing="15">

        <tr>
            <td>Roll No</td>
                <td><input type="text" value="<?php echo "$rn" ?>" name="roll" </td>
            </tr>

    <tr>
    <td>First Name</td>
        <td><input type="text" value="<?php echo "$fn" ?>" name="fname"></td>
    </tr>

    <tr>
    <td>Last Name</td>
        <td><input type="text" value="<?php echo "$ln" ?>" name="lname"></td>
    </tr>

    <tr>
        <td>Email Address</td>
            <td><input type="email" value="<?php echo "$em" ?>" name="email"></td>
    </tr>

    <tr>
        <td>Gender</td>
        <td>Male<input type="radio" name="gender" value="male" required
        <?php
        if($gn=="male")
        {
            echo "checked";
        }

        ?>
        >
            Female<input type="radio" name="gender" value="female" required
            <?php
        if($gn=="female")
        {
            echo "checked";
        }
        ?>
        >
        </td>
    </tr>

    

    <tr>
        <td>Select City</td>
        <td>
            <select name="country">
                <option> Select Country</option>

                <option value="Nepal"
                <?php
                if($con == 'Nepal')
                {
                    echo "selected";
                }
                
                ?>
                >Nepal</option>

                <option 
                <?php
                if($con == 'India')
                {
                    echo "selected";
                }
                
                ?>
                
                >India</option>

                <option 
                <?php
                if($con == 'China')
                {
                    echo "selected";
                }
                
                ?>
                
                >China</option>

            </select>
        </td>
    </tr>

    <tr>
        <td>Choose Language</td>
        <td>Nepali<input type="checkbox" value="Nepali" name="language[]" 
        <?php
        if(in_array("Nepali",$b))
        {
            echo "checked"; 
        }

        ?>
        >
        
            English<input type="checkbox" value="English" name="language[]"
            <?php
        if(in_array("English",$b))
        {
            echo "checked"; 
        }

        ?>
            
            >  <br>

            Hindi<input type="checkbox" value="Hindi" name="language[]"
            <?php
        if(in_array("Hindi",$b))
        {
            echo "checked"; 
        }

        ?>
            
            >

            Chinese<input type="checkbox" value="Chinese" name="language[]"
            <?php
        if(in_array("Chinese",$b))
        {
            echo "checked"; 
        }

        ?>
            
            >

        </td>
    </tr>

    <tr>
        <td align="center" colspan="2">
           <input id="btn" type="submit" value="Update Details" name="submit"></a>
        </td>
    </tr>
    </table>
</form>

</body>
</html>

<?php

if($_GET['submit'])
{
    $rollno = $_GET['roll'];
    $firstname = $_GET['fname'];
    $lastname = $_GET['lname'];
    $email = $_GET['email'];
    $gender = $_GET['gender'];
    $country = $_GET['country'];
    $language = $_GET['language'];
    //conversion
    $chkstr = implode(",",$language);

    $query = "UPDATE checkbox SET roll='$rollno',firstname='$firstname',lastname='$lastname',email='$email',gender='$gender',country='$country',language='$chkstr' WHERE roll='$rollno' ";

    $data = mysqli_query($conn,$query);

    if($data)
    {
        echo "<script>alert('Record Updated')</script>";

        ?>

        <META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/phpproject/multiple_checkbox/display.php">

        <?php
    }
    else{
        echo "Failed to update record";
    }
}


?>