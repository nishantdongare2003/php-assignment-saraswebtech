    <?php 

        require "templates/header.php";

    ?>

    <!-- Here Show The Validation errors -->
    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>


    <!-- Use The Flashdata Of When The User ADD,UPDATE,DELETE the employess Record and also find any error -->

    <?php if($this->session->flashdata('error')): ?>
        <div class='alert alert-danger text-center'>
            <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>

    <?php if($this->session->flashdata('added')): ?>
        <div class='alert alert-success text-center'>
            <?php echo $this->session->flashdata('added'); ?>
        </div>
    <?php endif; ?>

    <?php if($this->session->flashdata('updated')): ?>
        <div class='alert alert-success text-center'>
            <?php echo $this->session->flashdata('updated'); ?>
        </div>
    <?php endif; ?>

    <?php if($this->session->flashdata('delete')): ?>
        <div class='alert alert-success text-center'>
            <?php echo $this->session->flashdata('delete'); ?>
        </div>
    <?php endif; ?>

   
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class='text-center'>Employee Management System</h1>
                        <a href="#" data-toggle="modal" data-target="#exampleModal" class='btn btn-lg btn-success float-right'><strong>+</strong>Add Employee</a>
                    </div>
                    <div class="card-body">

                    <table class='table table-bordered text-center'>
                        <thead >
                            <tr>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>PHONE</th>
                                <th>DEPARTMENT</th>
                                <th>DESIGNATION</th>
                                <th>SALARY</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach($employees as $emp): ?>
                            <tr>
                                <td><?php echo $emp['name']; ?></td>
                                <td><?php echo $emp['email']; ?></td>
                                <td><?php echo $emp['phone']; ?></td>
                                <td><?php echo $emp['department']; ?></td>
                                <td><?php echo $emp['designation']; ?></td>
                                <td><?php echo $emp['salary']; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>Employee_Controller/View/<?php echo $emp['id'] ?>" class='btn btn-primary'>View</a>
                                    <a href="<?php echo base_url(); ?>Employee_Controller/Edit/<?php echo $emp['id']; ?>" class='btn btn-success'>Edit</a>
                                    <a href="<?php echo base_url(); ?>Employee_Controller/Delete/<?php echo $emp['id'];?>" onclick="return confirm('Are You Sure You Want  Delete This Employee Data')"  class='btn btn-danger'>Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>


                    </table>


                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="<?php echo base_url(); ?>Employee_Controller/Add_employee" method='POST'>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title" id="exampleModalLabel">Add Employee</h1>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            
                            <label>Name</label>
                            <input type="text"  name='name' class='form-control' placeholder='Enter Your Name'>

                            <label>Email</label>
                            <input type="text"  name='email' class='form-control' placeholder='Enter Your Email'>

                            <label>Phone</label>
                            <input type="text"  name='phone' class='form-control' placeholder='Enter Your Phone'>

                            <label>Department</label>
                            <input type="text"  name='department' class='form-control' placeholder='Enter Your Department'>

                            <label>Designation</label>
                            <input type="text"  name='designation' class='form-control' placeholder='Enter Your Designation'>

                            <label>Salary</label>
                            <input type="text"  name='salary' class='form-control' placeholder='Enter Your Salary'>
                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Add Empployee</button>
                        </div>
                    </div>

                </form>

            </div>
            </div>






        </div>
    </div>


    <?php 

        require "templates/footer.php";

    ?>
