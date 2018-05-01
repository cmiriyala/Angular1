<?php

session_start();



if ((!isset($_SESSION['username']))) {
    header('Location: ../NoAccess.html');
    exit();
} else {
    $username = $_SESSION['username'];
}


?>


<div class="container"> 
    <p> Hi <?php echo $username; ?>, welcome to your dashboard. </p>
    <div class="panel-body"> 
        <table class="table table-striped">
            <thead>
                <tr>
                <th>Day</th>
                <th>Workout</th>
                <th>Sets</th>
                <th>Repetetions</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>Day</td>
                <td>Workout</td>
                <td>Sets</td>
                <td>Repetetions</td>
                <td>Action</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>  

