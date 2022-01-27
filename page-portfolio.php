<!-- Header Template File -->
    <?php get_header(); ?>

    <nav class="navbar_container">
      <div class="navbar">
    
      <?php $args = array(
        'theme_location' => 'primary'
              );
              wp_nav_menu( $args );
               ?>
    </div>
    </nav>


    <main>
      <section class="leading mb-5">
        <br></br>
        <br></br>
        <h5 class="typgraphy_header">Kinetic Typography</h5>
          <video class="video" preload controls loop muted autoplay>
          <source type="video/mp4" src="./assets/portfolio/kinetic_typography.mp4"/>
        <source>Your Browser does not support HTML Video Element/>
          </video>

    <!-- bootstrap code -->


    <div class="gallery_grid">

    </div>
    <div class="container-fluid bg-3 text-center ">
    <h3>Book Covers</h3><br>
    <div class="row gallery">
    <div class="col-sm-4">
      <p>Macbeth 2015 Poster 1</p>
      <img src="./assets/portfolio/Macbeth_1.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4">
      <p>Macbeth 2015 Poster 2</p>
      <img src="./assets/portfolio/Macbeth_Final.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4">
      <p>Only Lovers Left Poster</p>
      <img src="./assets/portfolio/Movie_Poster.png" class="img-responsive" style="width:100%" alt="Image">
    </div>
    </div>
    </div><br>

    <div class="container-fluid bg-3 text-center">
    <div class="row gallery">
    <div class="col-sm-6">
      <p>Wish Tree Book Cover 1</p>
      <img src="./assets/portfolio/wish_tree_cover2.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-6">
      <p>Wish Tree Book Cover 2</p>
      <img src="./assets/portfolio/wish_tree_cover1.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    </div>
    </div><br><br><div class="container-fluid bg-3 text-center">
    <div class="row gallery">
    <div class="col-12">
      <p>Instagram Ad</p>
      <img src="./assets/portfolio/instagram.png" class="img-responsive" style="width:100%" alt="Image">
    </div>
    </div>





    <!-- Footer Template File-->
    <?php get_footer();  ?>
