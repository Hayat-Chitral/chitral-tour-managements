<?php 
//  include "databases/database.php";
 include "Include/header.php";
?>
<div class="container-fluid px-0" id="blogs-bg">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="Images/Blog_Page/blog_banner (1).jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Images/Blog_Page/blog_banner (2).jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Images/Blog_Page/blog_banner (3).jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Images/Blog_Page/blog_banner (4).jpg" alt="Third slide">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt-1 px-3">
    <h1 class="text-center">Write with us</h1>
    <div class="container">
        <div class="row">
            <?php
                $GetBlogs=mysqli_query($Connection, "SELECT * FROM author_blogs");
                if (!$GetBlogs) {
                    echo mysqli_error();
                }else{
                    while ($Row=mysqli_fetch_array($GetBlogs)) { ?>
            <div class="col-lg-6 mt-2 ">
                <a href="viewblogs.php?fullblogs=<?php echo $Row['id']; ?>">
                    <div class="blogcard card">
                    <img class="img-fluid" src="<?php echo "AdminPage/Images/Author_Images/".$Row['author_img']; ?>" alt="Gallery Images">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $Row['blog_heading']; ?> by <span
                                    class="text-success"><?php echo $Row['author_name']; ?></span></h5>
                            <p class="card-text blogscard">
                                <?php
                                echo $Row['blog_desc']; 
                            ?>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <?php   }?>
            <?php } ?>
        </div>
    </div>
</div>

<?php 
 include "Include/footer.php";
?>