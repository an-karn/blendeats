<?php 
// for clamv subdirectory issue
// replace with  /~username/ for clamv upload
$home = "/~igiri/" ?>



<nav class="navbar navbar-expand-lg navbar-dark bg-def">
    <a class="navbar-brand" href="<?php echo $home ?>"> <img src="<?php echo $home.'assets/img/logo.png' ?>" width="" height="30" alt="" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $home  ?> "> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $home.'maintenance/' ?> " class="nav-link">Maintenance</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $home.'search/' ?> " class="nav-link">Search</a>
            </li>

            <li class="nav-item">
                <a href="mailto: aa.singh(at)jacobs-university.de" class="nav-link" target="_blank">Contact Us</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $home.'imprint.php' ?>" class="nav-link" target="_blank">Imprint</a>
            </li>

        </ul>
<?php
if(isset($_SESSION['user']))
{
    echo "<a href='$home"."login/logout.php' class='btn btn-outline-light my-2 my-sm-0' > Logout </a> ";
    echo "<a href='$home"."login/signup.php' class='btn btn-outline-light my-2 my-sm-0' > Sign Up </a> ";

}else{
    echo "<a href='$home"."login/login.php' class='btn btn-outline-light my-2 my-sm-0' > Login </a> ";
    echo "<a href='$home"."login/signup.php' class='btn btn-outline-light my-2 my-sm-0' > Sign Up </a> ";
}
?>


    </div>
</nav>
