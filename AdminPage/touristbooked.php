<?php
include "includes/header.php";
include "includes/sidebar.php";
?>
<div class="tile">


<h4 class="pl-3">Bookings</h4>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive bg-white p-3">
                <table id="myTable" class="table table-hover">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th class="thead-border text-white">Name</th>
                        <th class="thead-border text-white">Email</th>
                        <th class="thead-border text-white">Phone No</th>
                        <th class="thead-border text-white">Country</th>
                        <th class="thead-border text-white">City</th>
                        <th class="thead-border text-white">Check In</th>
                        <th class="thead-border text-white">Check Out</th>
                        <th class="thead-border text-white">Rooms</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <?php 
                        $Fetch= mysqli_query($Connection, "SELECT * from tourists_booking"); 
                        if (!$Fetch)
                        {
                            echo mysqli_error();
                        }else
                        {
                            while($row=mysqli_fetch_array($Fetch))
                            {?>
                    <tr class="text-center">
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone_number']; ?></td>
                        <td><?php echo $row['country']; ?></td>
                        <td><?php echo $row['city']; ?></td>
                        <td><?php echo $row['check_in']; ?></td>
                        <td><?php echo $row['check_out']; ?></td>
                        <td><?php echo $row['rooms']; ?></td>
                    </tr>
                    <?php }?>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<?php
include "includes/footer.php"
?>