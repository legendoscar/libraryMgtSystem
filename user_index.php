<?php require_once('includes/session.php'); ?>
  
  
<?php require_once('includes/user_header.php'); ?>

  
  <!-- ======= Hero Section ======= -->

  <section id="hero" class="d-flex align-items-center">
    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Bettter Library use Experience With Lib-Cater</h1>
          <h2>Maintains the record of the library.</h2>
          <div style="margin-bottom: 4.7rem;"><a href="#" class="btn-get-started" data-toggle="tooltip" title="Search, reserve, download, read and share books of interest." data-trigger="focus" data-placement="right">Get started <i class="bx bx-chevron-down"></i></a></div>
        </div>
        <div class="col-xl-4 col-lg-6 pb-5 pb-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
          <img src="assets/booksImg/library/3_books.png" class="img-fluid animated w-100" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

<main id="main">

  <section class="record" id="record">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title" data-aos="fade-up">
            <h2>Books</h2>
            <p>Search and reserve available books</p>
          </div>
        </div>

       
          <div class="col-lg-12 mb-4">
            <!-- <form action="includes/search.php" method="POST"> -->
              <div class="form-group has-feedback">
                <input type="text" name="search" class="form-control" id="search_item" placeholder="Search for Title or Author" >
                <button type="submit" name="submit" id="btn_search" class=" form-control-feedback text-white" style="background: #7b27d8; border: 0;" autocomplete="off"><i class="bx bx-search"></i></button>
              </div>
            <!-- </form> -->
          </div>
        </div>       
  
        <div class="row" id="search_area">
          <?php 
          
          $query_book = "SELECT * FROM books WHERE deleted = 1 ORDER BY id LIMIT 15";
          $book_res = mysqli_query($conn, $query_book);

          while($row = mysqli_fetch_assoc($book_res)){?>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 mt-5" data-aos="zoom-in">
              <div class="card border-0 p-0 m-0 single-book text-center">
                  <div class="card-img p-0 m-0">
                    <a href="book_details.php?book_id=<?=base64_encode($row['id'])?>" class="" target="_blank">
                      <img src="<?=$photo = (!empty($row['photo']))? 'dashboard/images/uploads/'.$row['photo'] : "assets/img/anato_book.jpg"?>" class="img-fluid w-100 h-100" style="border-radius: 0;border: 1px dashed #7b27d8;">
                    </a>
                  </div>
                  <div class="book-cap">
                    <h5>Title: </h5>
                    <p><?=$row['title']?></p>
                    <h5>Author: </h5>
                    <p><?=$row['author']?></p>
                    <h5 class="status"><?=$status = ($row['status'] == 0) ? '<span class="label label-success">available</span>' : '<span class="label label-danger">not available</span>';?></h5>
                  </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
  </section>


    <!-- Start Fiction section -->
        
    <section class="fiction" id="fiction">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title float-left" data-aos="flip-up">
              <h2>New Fiction</h2>
            </div>
          </div>
        </div>
        
        <div class="row">
            
          <?php 
        
          $fict_query = "SELECT * FROM books WHERE category_id = 15 AND deleted = 1";
          $fict_res = mysqli_query($conn, $fict_query);

            while($fict_row = mysqli_fetch_assoc($fict_res)){?>
              <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 mt-2" data-aos="zoom-out">
                <div class="card border-0 bg-none p-0 m-0 single-book text-center">
                    <div class="card-img p-0 m-0">
                      <a href="book_details.php?book_id=<?=base64_encode($fict_row['id'])?>" class="" target="_blank">
                        <img src="<?=$photo = (!empty($fict_row['photo']))? 'dashboard/images/uploads/'.$fict_row['photo'] : "assets/img/literature/dasel.jpg"?>" class="img-fluid w-100 h-100" style="border-radius: 0;border: 1px dashed #7b27d8;  ">
                      </a>
                    </div>
                    <div class="book-cap bg-none">
                      <h5>Title: </h5>
                      <p><?=$fict_row['title']?></p>
                    </div>
                </div>
              </div>
            <?php } ?>
        </div>
      </div>
    </section>

    <!-- End Fiction section -->


    <!-- Start Non-Fiction section -->
        
    <section class="fiction" id="fiction">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title float-left" data-aos="zoom-in">
              <h2>New Non-Fiction</h2>
            </div>
          </div>
        </div>
        
      <!-- <div class="fiction_item owl-carousel"> -->
        <div class="row">
            <?php 
          
            $query_fict = "SELECT * FROM books WHERE category_id = 14 AND deleted = 1 ORDER BY id LIMIT 12";
            $res_fict = mysqli_query($conn, $query_fict);

              while($row_fict = mysqli_fetch_assoc($res_fict)){?>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 mt-2" data-aos="zoom-in">
                  <div class="card border-0 p-0 m-0 single-book text-center">
                      <div class="card-img p-0 m-0">
                        <a href="book_details.php?book_id=<?=base64_encode($row_fict['id'])?>" class="" target="_blank">
                          <img src="<?=$photo = (!empty($row_fict['photo']))? 'dashboard/images/uploads/'.$row_fict['photo'] : "assets/img/literature/dasel.jpg"?>" class="img-fluid w-100 h-100" style="border-radius: 0;border: 1px dashed #7b27d8;  ">
                        </a>
                      </div>
                      <div class="book-cap bg-none">
                        <h5>Title: </h5>
                        <p><?=$row_fict['title']?></p>
                      </div>
                  </div>
                </div>
              <?php } ?>
          </div>
        <!-- </div> -->
      </div>
    </section>

    <!-- End Fiction section -->


   <?php require_once('contact.php');?>
  </main><!-- End #main -->

   
  <?php require_once('footer.php');?>
  
  <script>
    $(function(){
      $('#search_item').keyup(function(){
          var searchKey = $(this).val();
          $.ajax({
            method: "POST",
            url: "includes/search.php",
            data: {search: searchKey},
            success: function(response){
              $('#search_area').html(response);
            }
        });
      });

    $('[data-toggle="tooltip"]').tooltip();

    })
  </script>
  
</body>

</html>