<!--================Home Banner Area =================-->
<!-- <section class="banner_area">
  <div class="banner_inner d-flex align-items-center" style="background:
  linear-gradient(
         rgba(0, 0, 0, 0.5),
         rgba(0, 0, 0, 0.5)
       ),
  url(<?= base_url('images/posting/large/' . $posting->photo) ?>); background-repeat: no-repeat; background-size: cover; ">
     <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
     <div class="container">
        <div class="banner_content text-center">
           <h2 class="mb-0"><?= $posting->title?></h2>
        </div>
     </div>
  </div>
</section> -->
<!--================End Home Banner Area =================-->
<div class="mt-4">
    &nbsp;
</div>
<!--<div class="">-->
<!--    &nbsp;-->
<!--</div>-->

<!--================News Area =================-->
<section class="news_area single-post-area mt-5">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="main_blog_details">
               <div class="d-flex justify-content-center">
                  <img class="img-fluid" style="width: 64rem;" src="<?= base_url("images/posting/large/$posting->photo") ?>" alt="">
               </div>
               <h4><?= $posting->title ?></h4>
               <div class="user_details">
                  <div class="float-left">
                     <a class="gad_btn" href="<?= base_url("blog/category/$posting->slug") ?>"><?= $posting->category_name ?></a>
                  </div>
                  <div class="float-right">
                     <div class="media">
                        <div class="media-body">
                           <p><?= mediumdate_indo($posting->date) ?></p>
                        </div>
                     </div>
                  </div>
               </div>
               <p><?= $posting->content ?></p>
            </div>
         </div>
         
         <!-- ================Sidebar================== -->
         <?php 
         // $this->load->view('front/layouts/_sidebar', $trending) 
         ?>
         <!-- ================End of Sidebar================== -->

      </div>
   </div>
</section>
<!--================End News Area =================-->
	