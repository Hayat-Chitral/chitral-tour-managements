<?php
include "includes/header.php";
include "includes/sidebar.php";
?>
<div class="container-fluid">
    <div class="tile px-2">
        <h4>View or update your blogs</h4>
        <div class="table-responsive bg-white p-2">
            <table id="myTable" class="table table-hover">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th class="thead-border text-white">Author Name</th>
                        <th class="thead-border text-white">Heading</th>
                        <th class="thead-border text-white">Description</th>
                        <th class="thead-border text-white">View</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
            $getblogdata= mysqli_query($Connection, "SELECT * FROM author_blogs ORDER BY id ASC");
            if (!$getblogdata) {
                echo mysqli_error();
            }else{
                while ($myrow=mysqli_fetch_array($getblogdata)) { ?>
                    <tr>
                        <td><?php echo $myrow['author_name']; ?></td>
                        <td><?php echo $myrow['blog_heading']; ?></td>
                        <td><?php echo $myrow['blog_desc']; ?></td>
                        <td class="d-flex">
                            <a class="btn btn-danger" href="delete.php?blogsdelete=<?php echo $myrow['id']; ?>">Delete</a>
                            <a class="ml-2 btn btn-primary fetchpost_btn" data-toggle="modal"
                                data-target="#postmodal" href="#" data-url="viewpost?id=<?php echo $myrow['id'];?>">View</a>
                        </td>
                    </tr>
                    <?php
                 }
            }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Blogs View Modal -->
<div class="modal fade" id="postmodal" tabindex="-1" role="dialog" aria-labelledby="postmodalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title authorname" id="baname">Blog Heading</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" class="bmodal_body">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-6">
                                <p class="authorname" id="baname"></p>
                            </div>
                            <div class="col-lg-6">
                                <p id="authoremail">Author Email: ---</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <p id="authoraddress">Author Address: ---</p>
                            </div>
                            <div class="col-lg-6">
                                <p id="authorph">Author Phone No: ---</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <p id="authorblurb">Author Blurb: ---</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <p>Author Image: ---</p>
                    </div>
                </div>
                <hr>
                <hr>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <p>Blog Heading: ---</p>
                            </div>
                            <div class="col-lg-12">
                                <p>Blog Description: ---</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <p>Blog Feature Image: ---</p>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a class="btn btn-primary" href="EditPages/editblogs.php">Edit</a>
            </div>
        </div>
    </div>
</div>

<?php
    include "includes/footer.php"
?>