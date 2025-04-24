<?php

    require "templates/header.php";

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h1 class='text-center'>Employee Detail</h1>
                </div>
                <div class="card-body">

                <table class='table table-bordered text-center'>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>email</th>
                            <th>Phone</th>
                            <th>Department</th>
                            <th>Designation</th>
                            <th>Salary</th>
                            <th>Created_At</th>
                            <th>Staus</th>
                            <th>Last Updated</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td><?php echo $views['name'] ?></td>
                            <td><?php echo $views['email'] ?></td>
                            <td><?php echo $views['phone'] ?></td>
                            <td><?php echo $views['department'] ?></td>
                            <td><?php echo $views['designation'] ?></td>
                            <td><?php echo $views['salary'] ?></td>
                            <td><?php echo $views['created_at'] ?></td>
                            <td><?php echo $views['status'] ?></td>
                            <td><?php echo $views['updated_at'] ?></td>
                            
                        </tr>
                    </tbody>
                </table>

                <a href="<?php echo base_url(); ?>Employee_Controller" class='btn btn-danger ' >Close</a>

                </div>
            </div>
        </div>
    </div>
</div>






<?php
    require "templates/footer.php";
?>