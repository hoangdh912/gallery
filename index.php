<?php include("includes/header.php"); ?>

<?php 

$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;

$items_per_page = 4;

$items_total_count = Photo::count_all();

$photos = Photo::find_all();

 ?>

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-12">

                <div class="thumnails row">    

                    <?php foreach ($photos as $photo) : ?>

                        <div class="col-xs-6 col-md-3">

                            <a href="photo.php?id=<?php echo $photo->id; ?>" class="thumbnail">
                                <img class="home_page_photo img-responsive" src="admin/<?php echo $photo->picture_path(); ?>">
                            </a>

                        </div>

                    <?php endforeach; ?>
             
                </div>
            </div>




            
            
        <!-- /.row -->

        <?php include("includes/footer.php"); ?>
