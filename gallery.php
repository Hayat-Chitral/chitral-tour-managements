<?php
include "include/header.php";
?>
<div class="container-fluid px-0">
    <div class="hero_carosel owl-carousel owl-theme">
        <div class="item">
            <div class="hero-img">
                <img src="Images/gallery/gallerybg (1).jpg" alt="" class="img-fluid">
            </div>
            <div class="desc ">
                <span class="tag ">Welcome</span>
                <h2>Photography is on it's way.</h2>
                <p class="carsl_cnt">Qaqlasht is a beautiful valley located in the northern region of Pakistan,
                    specifically in the Upper Chitral District of Khyber Pakhtunkhwa province. The valley is known for
                    its breathtaking natural beauty and rich cultural heritage, making it a popular tourist destination
                    for travelers from all over the world.</p>
                <p class="carsl_btn"><a href="#gallery" class="btn-gradient-bg">View Galleries </a></p>
            </div>
        </div>
        <div class="item">
            <div class="hero-img">
                <img src="Images/gallery/gallerybg (2).jpg" alt="" class="img-fluid">
            </div>
            <div class="desc ">
                <span class="tag ">Discover</span>
                <h2>Discover New Things</h2>
                <p class="carsl_cnt">The historical educational institution in Chitral, which was established in 1937 by
                    Sir Nasir-ul-Mulk.
                </p>
                <p class="carsl_btn"><a href="famousplaces.php" class="btn-gradient-bg">Learn More</a></p>
            </div>
        </div>
        <div class="item">
            <div class="hero-img">
                <img src="Images/gallery/gallerybg (4).jpg" alt="" class="img-fluid">
            </div>
            <div class="desc ">
                <span class="tag ">Photography</span>
                <h2>Capture interesting things.</h2>
                <p class="carsl_cnt">Garam Chashma is a town located in the Chitral district of Khyber Pakhtunkhwa
                    province in Pakistan. The town is known for its hot springs, which are a popular tourist attraction
                    in the region.
                </p>
                <p class="carsl_btn"><a href="#" class="btn-gradient-bg">View More</a></p>
            </div>
        </div>
        <div class="item">
            <div class="hero-img">
                <img src="Images/gallery/gallerybg (5).jpg" alt="" class="img-fluid">
            </div>
            <div class="desc">
                <span class="tag">Work Hard</span>
                <h2>creative minds</h2>
                <p class="carsl_cnt">Qaqlasht is a scenic hill station located in the Chitral district of Khyber
                    Pakhtunkhwa province in Pakistan. It is situated at an altitude of 7,500 feet above sea level and is
                    known for its natural beauty, serene atmosphere, and pleasant climate.
                </p>
                <p class="carsl_btn"><a href="#" class="btn-gradient-bg">Learn More</a></p>
            </div>
        </div>
        <div class="item">
            <div class="hero-img">
                <img src="Images/gallery/gallerybg (6).jpg" alt="" class="img-fluid">
            </div>
            <div class="desc ">
                <span class="tag">Passion</span>
                <h2>Travelling...</h2>
                <p class="carsl_cnt">It leaves you speechless, then turns you into a storyteller. My passion is
                    learning about life through travelling and exploring new things. It excites me when I visit new
                    places, learn about different cultures, and see other people live a life that is different from
                    mine.
                </p>
                <p class="carsl_btn"><a href="#" class="btn-gradient-bg">Learn More</a></p>
            </div>
        </div>
    </div>
    <div class="slider-counter"></div>
</div>

<div class="container" id="gallery">
    <div class="row mt-2">
        <?php
            $fetchimages= mysqli_query($Connection, "SELECT * FROM gallery ORDER BY id ASC");
            if ($fetchimages) 
            {
                while ($row=mysqli_fetch_array($fetchimages)) 
                { 
                    $imageURL = 'AdminPage/Images/DropZone/'.$row["image"];
                    ?>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4 mygalleryimgs mt-2">
            <div class="card mygallery" data-toggle="modal" data-target="#galleyimages"
                data-image1="AdminPage/Images/DropZone/<?php echo $row['image']; ?>">
                <img class="card-img-top" src="<?php echo $imageURL; ?>" alt="Gallery Images">
            </div>
        </div>
        <?php
                }
            }else
                {
                    echo mysqli_error();
                }
        ?>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="galleyimages" tabindex="-1" role="dialog" aria-labelledby="galleyimagesTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-lg p-1">
                <img class="card-img-top" id="galleryimg" alt="Gallery Images">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php
// include "../includes/scripts.php";
?>
<?php
include "include/footer.php";
?>