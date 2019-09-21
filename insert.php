<?php 
    include_once "header.php";
    include_once "connection.php";
?>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="insert-form">
                <div style="height:30px"></div>
                <h3>Please add Student</h3>
                <div style="height:20px"></div>

                <?php

                    if(isset($_REQUEST['insert'])){
                        if(($_POST['name'] == '') || ($_POST['roll'] == '') || ($_POST['email'] == '')){
                            echo "All fields are require";
                        }else{
                            $name = $_POST['name'];
                            $roll = $_POST['roll'];
                            $email = $_POST['email'];

                            $sql = "INSERT INTO students(name, roll, email) VALUE('$name', '$roll', '$email')";

                            if(mysqli_query($conn,$sql)){
                                echo "Add Student Successful";
                            }
                        }
                    }
                    
                    
                
                ?>
                <div style="height:10px"></div>
                <form method="POST">
                    <div class="form-group">
                        <input type="name" name="name" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="roll" class="form-control" placeholder="Your Roll">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="insert" class="form-control btn-success" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php 
    include_once "footer.php";
?>