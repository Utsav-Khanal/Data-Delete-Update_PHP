<!DOCTYPE html>
<html>
    <head>
        <title>Display Records from database</title>
    </head>

    <body>

    <style>
        #editbtn{
            background-color: green;
            color: white;
            font-size: 17px;
        }

        #delete{
            background-color: red;
            color: white;
            font-size: 17px;
        }
    </style>
        <table border="2">
            <tr>
                <th>Roll No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email Address</th>
                <th>Gender</th>
                <th>Country</th>
                <th>Language Known</th>
                <th colspan="2">Operation</th>
            </tr>

            <?php
            
include("connection.php");
$query = "SELECT * from checkbox";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{
    while($result=mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <td>".$result['roll']."</td>
        <td>".$result['firstname']."</td>
        <td>".$result['lastname']."</td>
        <td>".$result['email']."</td>
        <td>".$result['gender']."</td>
        <td>".$result['country']."</td>
        <td>".$result['language']."</td>
        

        <td> <a href='update.php?rn=$result[roll]&fn=$result[firstname]&ln=$result[lastname]&em=$result[email]&gn=$result[gender]&con=$result[country]&lan=$result[language]'><input type='submit' value='Edit/Update' id='editbtn'></a></td>
        <td> <a href= 'delete.php?rn=$result[roll]' onclick='return checkdelete()'><input type='submit' value='Delete' id='delete'></a></td>
        </tr>
        ";

    }
}
else{
    echo "No records found";
}

?>
    </table>

    <script>
            function checkdelete()
            {
                return confirm('Are you sure you want to delete this record');
            }
            </script>
        
    </body>
</html>



