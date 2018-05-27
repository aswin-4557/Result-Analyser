    <?php 
    echo'<script>window.confirm("Are you sure??you want to log out");</script>';
    session_start();  
    unset($_SESSION['sess_user']);  
    session_destroy(); 
    echo "<script>window.location.href='signin.php';</script>" 
    //header("location:signin.html");  
    ?>  
