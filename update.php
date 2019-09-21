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
                $id = $_GET['id'];

                    $sql = "SELECT * FROM students WHERE id={$id}";
                    $result = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_assoc($result);
                    

                    if(isset($_REQUEST['update'])){
                        if(($_POST['name'] == '') || ($_POST['roll'] == '') || ($_POST['email'] == '')){
                            echo "All fields are require";
                        }else{
                            $name = $_POST['name'];
                            $roll = $_POST['roll'];
                            $email = $_POST['email'];

                        $sql = "UPDATE students SET name='$name', roll='$roll', email = '$email' WHERE id={$id}";

                            if(mysqli_query($conn,$sql)){
                                echo "Update Student Successful";
                            }
                        }
                    }
                    
                    
                
                ?>
                <div style="height:10px"></div>
                <form method="POST">
                    <div class="form-group">
                        <input type="name" name="name" class="form-control" value="<?php echo $row['name'];?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="roll" class="form-control" value="<?php echo $row['roll'];?>">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" value="<?php echo $row['email'];?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="update" class="form-control btn-success" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php 
    include_once "footer.php";
?>