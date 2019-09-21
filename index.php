<?php 
    include_once "header.php";
    include_once "connection.php";

    if(isset($_REQUEST['delete'])){
        if($_POST['id']){
            $sql = "DELETE FROM students WHERE id={$_POST['id']}";
            if(mysqli_query($conn, $sql)){
                echo "Delete Successfullt";
            }
        }
    }
?>
               <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="show-all-student">
                        <h2>Students</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Roll</th>
                                    <th>Email</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $sql = "SELECT * FROM students";
                                $result = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result)>0):
                                    while($row = mysqli_fetch_assoc($result)):
                            ?>
                                <tr>
                                    <td><?php echo $row['id'];?></td>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['roll'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td><a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-success">Edit</a></td>
                                    <td>
                                        <form method="POST">
                                            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                            <input type="submit" name="delete" class="btn btn-danger" value="Delete">
                                        </form>
                                    </td>
                                </tr>
                            <?php 
                                endwhile;
                            endif;
                            ?>
                            </tbody>
                        </table>
                    </div>
               </div>
<?php 
    include_once "footer.php";
?>