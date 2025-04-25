<?php 

    require "templates/header.php";

?>



    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class='text-center'>Update Employee Data</h1>
                        
                    </div>

                    <div class="card-body">

                    <form action="<?php echo base_url('employee-update/'.$employee['id']); ?>" method='POST'>

                    <input type="hidden" value='<?php echo $employee['id']; ?>'  name='id'>

                    <label>Name</label>
                    <input type="text" value='<?php echo $employee['name']; ?>'  name='name' class='form-control' placeholder='Enter Your Name'>

                    <label>Email</label>
                    <input type="text" value='<?php echo $employee['email'] ?>'  name='email' class='form-control' placeholder='Enter Your Email'>

                    <label>Phone</label>
                    <input type="text"  value='<?php echo $employee['phone'] ?>' name='phone' class='form-control' placeholder='Enter Your Phone'>

                    <label>Department</label>
                    <input type="text" value='<?php echo $employee['department'] ?>' name='department' class='form-control' placeholder='Enter Your Department'>

                    <label>Designation</label>
                    <input type="text" value='<?php echo $employee['designation'] ?>'  name='designation' class='form-control' placeholder='Enter Your Designation'>

                    <label>Salary</label>
                    <input type="text" value='<?php echo $employee['salary'] ?>'  name='salary' class='form-control' placeholder='Enter Your Salary'>

                    <a href=" <?php base_url(); ?>Employee_Controller" class='btn btn-danger mt-3'>Cancle</a>

                    <input type="submit"  class='btn btn-success mt-3' value="Update">

                    <button></button>
                   





                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>








<?php 

    require "templates/footer.php";

?>
