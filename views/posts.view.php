<?php require_once ('inc/header.php')?>


        <!-- Page Header-->
        <header class="masthead" style="background-image: url('<?= BASE_URL.'public/' ?>assets/img/posts.jpg');">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7 text-center">
                <div class="page-heading">
                    <h1 class="display-1">BLOG</h1>
                    <span class="subheading">Oops!</span>
                            
                            <span class="subheading"></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <?php foreach($all_data as $post): ?>
                    <div class="post-preview">
                        <a href="<?= "index.php?page=post&id=".$post['id'] ?>">
                            <h2 class="post-title"><?= $post['title'] ?></h2>
                            <h3 class="post-subtitle"><?= substr($post['content'],0,100)."...." ?></h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!"><?= $post['author'] ?></a>
                            on <?= date("F , d , Y" , strtotime($post['created_at']));?>
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <?php endforeach ;?>
                    <!-- Post preview-->
                    <!-- Pager-->
                    <!-- Pagination-->
                   <!-- Pagination-->
<div class="d-flex justify-content-center mb-4">
<!-- Pagination-->
<div class="d-flex justify-content-center mb-4">
    <?php if ($current_page > 1): ?>
        <a class="btn btn-secondary me-2" href="<?= BASE_URL ?>index.php?page=<?= $current_page - 1 ?>">← Previous</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
        <a class="btn <?= $i == $current_page ? 'btn-primary' : 'btn-outline-primary' ?> me-2" href="<?= BASE_URL ?>index.php?page=<?= $i ?>">
            <?= $i ?>
        </a>
    <?php endfor; ?>

    <?php if ($current_page < $total_pages): ?>
        <a class="btn btn-secondary" href="<?= BASE_URL ?>index.php?page=<?= $current_page + 1 ?>">Next →</a>
    <?php endif; ?>
</div>


            </div>
        </div>
<?php require_once ('inc/footer.php')?>