<?php require_once ('inc/header.php')?>

<!-- Page Header-->
        <header class="masthead" style="background-image: url('<?= BASE_URL.'public/' ?>assets/img/post.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
        
                            
                            <h2 class="subheading"><?= $post['title'] ?></h2>
                            <span class="meta">
                                Posted by
                                <a href="#!"><?= $post['author'] ?></a>
                                on <?= date("F , d , Y" , strtotime($post['created_at']));?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">                      
                        <p><?= substr($post['content'],0,503)?>.</p>
                        <h2 class="section-heading"><?= $post['title'] ?></h2>
                        <p><?= substr($post['content'],503,803)?>.</p>
                        <p><?= substr($post['content'],805,200)?>.</p>
                        <blockquote class="blockquote">The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.</blockquote>
                        <p>Spaceflights cannot be stopped. This is not the work of any one man or even a group of men. It is a historical process which mankind is carrying out in accordance with the natural laws of human development.</p>
                        <h2 class="section-heading"><?= $post['author'] ?></h2>
                        <p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>
                        <a href="#!"><img class="img-fluid" src= " <?='public/'?>assets/img/post-sample-image.jpg" alt="..." /></a>
                        <span class="caption text-muted">To go places and do things that have never been done before – that’s what living is all about.</span>
                        <p><?= substr($post['content'],900,600)?>.</p>
                        <p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a fundamental truth to our nature, Man must explore, and this is exploration at its greatest.</p>
                        <p>
                            Placeholder text by
                            <a href="http://spaceipsum.com/">Space Ipsum</a>
                            &middot; Images by
                            <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>
                        </p>
                    </div>
                </div>
            </div>
        </article>

<?php require_once ('inc/footer.php')?>