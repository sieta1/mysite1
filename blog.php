
<?php 
include 'layouts/header.php';
?>


<!-- main-area -->
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg04.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>blog Right Sidebar</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">ANASAYFA</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- blog-area -->
    <section class="inner-blog-area" data-background="img/bg/blog_bg02.jpg">
        <div class="container">
            <div class="blog-inner-wrap">
                <div class="row">
                    <div class="col-lg-8">
                        <?php
                        $dBlog = $db->prepare("SELECT * FROM blog");
                        $dBlog->execute();
                        while($blog = $dBlog->fetch(PDO::FETCH_ASSOC))
                        {
                            ?>
                            <div class="blog-post mb-60">
                                <div class="blog-post-thumb position-relative mb-35">
                                    <a href="blog-details.php?id=<?php echo $blog['id']; ?>"><img src="img/blog/<?php echo $blog['file']; ?>" alt=""></a>
                                    <span class="blog-post-date"><?php echo date("d/m/Y,  H:i", strtotime($blog['date'])); ?></span>
                                </div>
                                <div class="blog-post-content">
                                    <h4><a href="blog-details.php?id=<?php echo $blog['id']; ?>"><?php echo $blog['title']; ?></a></h4>
                                    <div class="blog-post-meta">
                                        <ul>
                                            <li><i class="far fa-user"></i>By <a href="#"><?php echo $blog['author']; ?></a></li>
                                            <li><i class="far fa-comments"></i>Comment</li>
                                            <li><i class="fas fa-tags"></i>
                                                <a href="#"><?php echo $blog['tag']; ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <p><?php echo substr($blog['description'], 0, 200); ?>...</p>
                                    <div class="blog-post-bottom">
                                        <a href="blog-details.php?id=<?php echo $blog['id'] ?>">Daha Fazla.. <span>+</span></a>
                                        <div class="blog-post-share">
                                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                                            <a href="#"><i class="fab fa-twitter-square"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-square"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <!--
                        <div class="pagination-wrap mt-60">
                            <ul>
                                <li><a href="#">first</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">next</a></li>
                            </ul>
                        </div>-->
                    </div>
                    <div class="col-lg-4">
                        <aside class="blog-sidebar-wrap">
                            <div class="widget mb-35">
                                <div class="blog-sidebar-inner">
                                    <div class="sidebar-title mb-35">
                                        <h3>Son Postlar..</h3>
                                    </div>
                                    <div class="rc-post">
                                        <?php
                                        $recent = $db->prepare("SELECT * FROM blog ORDER BY id LIMIT 1");
                                        $recent->execute();
                                        while($post = $recent->fetch(PDO::FETCH_ASSOC))
                                        {
                                            ?>
                                            <ul>
                                                <li>
                                                    <div class="rc-post-thumb">
                                                        <a href="blog-details.php?id=<?php echo $post['id']; ?>"><img style="width: 100px;" src="img/blog/<?php echo $post['file']; ?>" alt="img"></a>
                                                    </div>
                                                    <div class="rc-post-content">
                                                        <h5><a href="blog-details.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h5>
                                                        <span><?php echo date('d-m-Y, H:i', strtotime($post['date'])) ?></span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="blog-sidebar-inner">
                                <div class="sidebar-title mb-25">
                                    <h3>Etiketler..</h3>
                                </div>
                                <div class="tag-list">
                                    <ul>
                                        <?php
                                        $newTag = $db->prepare("SELECT * FROM blog");
                                        $newTag->execute();
                                        while($tag = $newTag->fetch(PDO::FETCH_ASSOC))
                                        {
                                            $newTags = explode(',', $tag['tag']);
                                            foreach ($newTags as $key => $value) {
                                                ?>
                                                <li><a href="#"><?php echo $value; ?></a></li>
                                                <?php
                                            }
                                            ?>
                                            <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog-area-end -->

</main>
<!-- main-area-end -->


<?php
include 'layouts/footer.php';
?>