
<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Admin
            <small>Subheading</small>
        </h1>

        <!-- Only for testig the connection -->
        <?php
        if($database->connection){

            echo "- The connection to databae works." . "<br>" . "<br>";
        }  
        ?>
        <!-- Only for testig the connection -->
        
        <?php
    // fetch one user
        //$sql = "SELECT * FROM users WHERE id=1";
        //$result = $database->query($sql);
        //$user_found = mysqli_fetch_array($result);
        //echo $user_found['username'];

    // fetch list of users

          
    echo "- Get useres from the users table." . "<br>"; 
    $result_set= User::find_all_users();
    while($row = mysqli_fetch_array($result_set)){
    echo " * " . $row['first_name'] . " " . $row['last_name'] . "<br>";
    }

    echo "<br>";
    echo "- Get usere by id." . "<br>";
    $found_user = User::find_users_by_id(2);
    echo " * " .$found_user['username'];


    echo "<br><br>";
    echo "- Get user information by <b>properties</b>." . "<br>";
    $found_user = User::find_users_by_id(2);
    $user = new User();
    $user->id = $found_user['id'];
    $user->username = $found_user['username'];
    $user->password = $found_user['password'];
    $user->last_name = $found_user['last_name'];
    $user->first_name = $found_user['first_name'];
    echo " * " . $user->username;

    echo "<br><br>";
    echo "- Get user information by <b>Auto Instantation</b>." . "<br>";
    $found_user = User::find_users_by_id(2);
    $user= User::instantation($found_user);
    echo " * " . $user->id;


    echo "<br><br>";
    echo "- Get user information by <b>Auto Instantation with loop</b>." . "<br>";
    $users_by_loop= User::find_all_users_2();
    foreach($users_by_loop as $user){
    echo " * " . $user->username . "<br>";
    }
    
    ?>


        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-file"></i> Blank Page
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

</div>