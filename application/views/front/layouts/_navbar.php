<?php
$this->load->model('category_model', 'category', true);
$navbar   = $this->category->getCategory();

$category = $this->uri->segment(3);
?>

<nav class="navbar navbar-light navbar-expand-lg navbar-light bg-light fixed-top home">
   <div class="container">
      <a href="<?= base_url() ?>" class="navbar-brand d-flex w-50 mr-auto">
         <!-- <img src="<?= base_url('images/brand/logo-via-logohub.png') ?>" alt=""> -->
         <h3 class="mb-0 font-weight-normal d-inline-block"><?= $favicon->web_name ?></h3>
      </a>
      <button class="navbar-toggler" style="cursor: pointer;" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
         <ul class="navbar-nav w-100 justify-content-center">
            <?php foreach ($navbar as $n) : ?>
               <li class="nav-item <?php if ($n->slug === $category) {
                                       echo "active";
                                    } ?> ">
                  <a class="nav-link" href="<?= base_url("blog/category/$n->slug") ?>"><?= $n->category_name ?></a>
               </li>
            <?php endforeach ?>
         </ul>
         <ul class="nav navbar-nav d-sm-none d-lg-flex ml-auto w-100 justify-content-end">
            <li class="nav-item">
               <a class="nav-link" href="<?= base_url() ?>">
                  &nbsp;
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= base_url() ?>">
                  &nbsp;
                  <!-- <i class="fa fa-instagram"></i> -->
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= base_url() ?>">
                  &nbsp;
                  <!-- <i class="fa fa-facebook"></i> -->
               </a>
            </li>
         </ul>
      </div>
   </div>
</nav>