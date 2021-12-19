<?php include("includes/header.php"); ?>


        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

    
            
        <!-- Only for testig the connection -->
        <?php
        if($database->connection){

            echo "it works";
        }  
        ?>
        <!-- Only for testig the connection -->
         

            </div>




            <!-- Blog Sidebar Widgets Column -->
      
            
                 <?php include("includes/sidebar.php"); ?>

 

        </div>
        <!-- /.row -->

        <?php include("includes/footer.php"); ?>
