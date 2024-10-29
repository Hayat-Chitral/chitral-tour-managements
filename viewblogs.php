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
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="Images/gallery/gallerybg (1).jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>This is Heading<h5>
                            <p>This is Content</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Images/gallery/gallerybg (2).jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>This is Heading<h5>
                            <p>This is Content</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Images/gallery/gallerybg (4).jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>This is Heading<h5>
                            <p>This is Content</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Images/gallery/gallerybg (5).jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>This is Heading<h5>
                            <p>This is Content</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Images/gallery/gallerybg (6).jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>This is Heading<h5>
                            <p>This is Content</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="container-fluid mt-1 px-3">
    <div class="container mb-2">
        <?php
            $catagoryId=isset($_GET['fullblogs'])?$_GET['fullblogs']:NULL;
            $GetBlogs=mysqli_query($Connection, "SELECT * FROM author_blogs WHERE id=$catagoryId");
            if (!$GetBlogs) {
                die($Connection);
            }else{
                while ($Row=mysqli_fetch_array($GetBlogs)) { 
        ?>
        <h4 class="text-dark"><?php echo $Row['blog_heading']; ?></h4>
        <p class="text-justify"> <?php echo $Row['blog_desc']; ?></p>
 

     <img class='author-image img-fluid' src="<?php echo 'AdminPage/Images/Author_Images/'.$Row['author_img']; ?>">
        <?php   }?>
        <?php } ?>
    </div>
</div>
<?php 
 include "Include/footer.php";
?>