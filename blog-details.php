<?php
include 'layouts/header.php';
?>
<?php
$id = $_GET['id'];
$details = $db->prepare("SELECT * FROM blog WHERE id=$id");
$details->execute();
$detail = $details->fetch(PDO::FETCH_ASSOC);
?>
<?php
if (isset($_POST['commentForm']))
{
    $subject = $_POST['subject'];
    $blog_id = $_POST['blog_id'];
    $user_id = $_POST['user_id'];
    $text = $_POST['text'];

    $post = $db->prepare("INSERT INTO comments (blog_id, user_id, text, subject) VALUES (?, ?, ?, ?)");
    $check = $post->execute(array($blog_id, $user_id, $text, $subject));
    if ($check)
    {
        echo 'Başarılı';
    }
    else
    {
        echo 'Hata !!';
    }
    
}
elseif (isset($_POST['answerForm']))
{
    $subject = $_POST['subject'];
    $comment_id = $_POST['comment_id'];
    $user_id = $_POST['user_id'];
    $text = $_POST['text'];

    $post = $db->prepare("INSERT INTO answer (comment_id, user_id, text, subject) VALUES (?, ?, ?, ?)");
    $check = $post->execute(array($comment_id, $user_id, $text, $subject));
}
?>


<!-- main-area -->
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg04.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2><?php echo    $_SESSION['id'];
                         ?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $detail['title']; ?></li>
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
                        <div class="blog-post blog-details-wrap mb-60">
                            <div class="blog-post-thumb position-relative mb-35">
                                <img src="img/blog/<?php echo $detail['file']; ?>" alt="">
                                <span class="blog-post-date"><?php echo date("d/m/Y,  H:i", strtotime($detail['date'])); ?></span>
                            </div>
                            <div class="blog-post-content blog-details-content">
                                <h4><?php echo $detail['title']; ?></h4>
                                <div class="blog-post-meta">
                                    <ul>
                                        <li><i class="far fa-user"></i>By <a href="#"><?php echo $detail['author']; ?></a></li>
                                        <li><i class="far fa-comments"></i>Yorum</li>
                                        <li><i class="fas fa-tags"></i><a href="#"><?php echo $detail['tag']; ?></li>
                                        </ul>
                                    </div>
                                    <p><?php echo $detail['description']; ?></p>
                                    <div class="blog-details-img">
                                        <img src="img/blog/blog_details_img01.jpg" alt="img">
                                        <img src="img/blog/blog_details_img02.jpg" alt="img">
                                    </div>
                                    <p>Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestlibos dolor auctor
                                        tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentue
                                        ipsum Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset
                                    sheets containing Lorem Ipsum passags, and more recently with desktop publishing software.</p>
                                    <p>Farming dolor sit amet, consectetur adipiscing elit. Cras sollicitin, tellus vitae condimem egestlibers dolosr auctor
                                        tellus, eu consectetur neque elit quinunc. Cras elemenm pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum
                                    Quisque thsr augue ipsum, vehicula tellus maximus.</p>
                                    <div class="blog-post-bottom">
                                        <div class="blog-details-tag">
                                            <i class="fas fa-tags"></i>
                                            <a href="#">
                                                <?php
                                                $sonn = str_replace(',', ' | ', $detail['tag']);
                                                echo $sonn;
                                                ?></a>
                                            </div>
                                            <div class="blog-post-share">
                                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                                <a href="#"><i class="fab fa-pinterest-square"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="avatar-post mt-50 mb-90">
                                    <ul>
                                        <li>
                                            <div class="post-avatar-img">
                                                <img src="img/blog/post_avatar_img.png" alt="img">
                                            </div>
                                            <div class="post-avatar-content">
                                                <h5>Thomas Harrison</h5>
                                                <p>Farming dolor sit amet, consectetur adipiscing elit. Cras sollicitin, tellus vitacondimem egestlibers dolosr auctor
                                                tellus, eu consectetur neque.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-comment-wrap mb-80">

                                    <div class="sidebar-title mb-50">
                                        <?php
                                        $id = $_GET['id'];
                                        $yorumlar = 
                                        $db->prepare("SELECT 
                                            comments.id as commentId,
                                            comments.user_id,
                                            comments.date as date,
                                            comments.text as text,
                                            comments.subject as subject,
                                            users.name as name,
                                            users.surname as surname,
                                            users.id,
                                            blog.title as blogs_title
                                            FROM comments
                                            INNER JOIN users ON comments.user_id = users.id
                                            INNER JOIN blog ON comments.blog_id = blog.id
                                            WHERE comments.blog_id = $id");
                                        $yorumlar->execute();
                                        ?>
                                        <h3>Yorumlar (<?php echo $yorumlar->rowCount(); ?>)</h3>
                                    </div>
                                    <ul>
                                        <?php

                                        while ($yorum = $yorumlar->fetch(PDO::FETCH_ASSOC))
                                        {
                                            $commentId = $yorum['commentId']
                                            ?>
                                            <li>
                                                <div class="blog-comment-avatar">
                                                    <img src="img/blog/comment_avatar01.jpg" alt="">
                                                </div>
                                                <div class="blog-comment-content">
                                                    <h5><a href="#"><?php echo $yorum['name'].' '.$yorum['surname']; ?></a><span><?php echo date("d/m/Y,  H:i", strtotime($yorum['date'])); ?></span></h5>
                                                    <p><?php echo $yorum['text']; ?></p>
                                                    <p><a href="blog-details.php?id=<?php echo $id ?>&commentId=<?php echo $yorum['commentId'] ?>" name="answerForm">Cevpla</a></p>
                                                </div>
                                            </li>
                                            <?php
                                            $answers = $db->prepare("SELECT answer.id as answerId,
                                                answer.comment_id as anCommentId,
                                                answer.user_id as anUserId,
                                                answer.text as anText,
                                                answer.date as anDate,
                                                users.name as anName,
                                                users.surname as anSurname,
                                                users.id,
                                                answer.subject as anSubject
                                                FROM answer
                                                INNER JOIN users ON answer.user_id = users.id
                                                WHERE answer.comment_id = $commentId");
                                            
                                            $answers->execute();
                                            while ($answer = $answers->fetch(PDO::FETCH_ASSOC)) {

                                                ?>
                                                <li class="children">
                                                    <div class="blog-comment-avatar">
                                                        <img src="img/blog/comment_avatar02.jpg" alt="">
                                                    </div>
                                                    <div class="blog-comment-content">
                                                        <h5><a href="#"><?php echo $answer['anName'].' '.$answer['anSurname'] ?></a><span><?php echo date("d/m/Y,  H:i", strtotime($answer['anDate'])); ?></span></h5>
                                                        <p><?php echo $answer['anText']; ?></p>
                                                        <a href="#">REPLY _</a>
                                                    </div>
                                                </li>
                                                <?php
                                            } }
                                            ?>

                                        </ul>
                                    </div>
                                    <div class="comment-reply-box">
                                        <div class="sidebar-title mb-40">
                                            <h3>Yorum Birak</h3>
                                        </div>
                                        <?php
                                        $commentId = '';
                                        if (isset($_GET['commentId'])) {
                                            $commentId = $_GET['commentId'];
                                            $name = 'answerForm';
                                        }else{
                                            $name = 'commentForm';
                                        }
                                        ?>
                                        <?php
                                        if (isset($_SESSION['mail']))
                                        { 
                                            ?>

                                            <form method="POST"  class="comment-form">
                                                <p>Bizimle iletişime geçin..*</p>
                                                <textarea name="text" placeholder="Yorumunuz buraya.."></textarea>
                                                <input hidden="" name="user_id" type="text" value="<?php echo $_SESSION['id']; ?>">
                                                <input hidden="" name="blog_id" type="text" value="<?php echo $id; ?>">
                                                <input hidden="" name="comment_id" type="text" value="<?php echo $commentId; ?>">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" name="subject" placeholder="Konu*">
                                                    </div>
                                                </div>
                                                <button name="<?php echo $name; ?>" class="btn gradient-btn">Gönder</button>
                                            </form>

                                            <?php
                                        }
                                        else
                                        {
                                            echo '<div class="sidebar-title mb-40">
                                            <h3>Yorum Yapabilmeniz için giriş yapınız.</h3>
                                            </div>
                                            <div class="sidebar-title mb-40">
                                            <a href="login.php"><h3>Giriş Yap</h3></a>
                                            </div>
                                            ';
                                        }
                                        ?>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <aside class="blog-sidebar-wrap">
                                        <div class="widget mb-35">
                                            <div class="blog-sidebar-inner">
                                                <div class="sidebar-title mb-35">
                                                    <h3>Son Postları</h3>
                                                </div>
                                                <div class="rc-post">
                                                    <?php
                                                    $details->execute();
                                                    while($detail = $details->fetch(PDO::FETCH_ASSOC))
                                                    {
                                                        ?>
                                                        <ul>
                                                            <li>
                                                                <div class="rc-post-thumb">
                                                                    <a href="blog-details.php?id=<?php echo $detail['id']; ?>"><img style="width: 100px;" src="img/blog/<?php echo $detail['file']; ?>" alt="img"></a>
                                                                </div>
                                                                <div class="rc-post-content">
                                                                    <h5><a href="blog-details.php?id=<?php echo $detail['id']; ?>"><?php echo $detail['title']; ?></a></h5>
                                                                    <span><?php echo date('d-m-Y, H:i', strtotime($detail['date'])) ?></span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <?php
                                                    }
                                                    ?>
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


            <?php include 'layouts/footer.php';