<?php
include 'layouts/header.php';
?>
<style>
    table{
        width: 100px;
    }
</style>
    <div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-menu icon-gradient bg-ripe-malin">
                        </i>
                    </div>
                    <div>
                        Bloglar Sayfası
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="row">
                    <div class="col-md-6">
                        <div class="main-card mb-3 card">
                            <?php
                            if (isset($_GET['result'])) {
                                if ($_GET['result'] == 1) {
                                    ?>
                                    <div style="text-align: center;" class="alert alert-success" role="alert">
                                        Başarılı..
                                    </div>
                                    <?php
                                } else {
                                    ?>
                                    <div style="text-align: center;" class="alert alert-danger" role="alert">
                                        işlem Başarısız !
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                            <div class="card-body">
                                <h5 class="card-title">
                                    Blog Listesi
                                </h5>
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="mb-0 table">
                                                <?php
                                                $blogs = $db->prepare("SELECT * FROM blog");
                                                $blogs->execute();
                                                ?>
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>ID</th>
                                                    <th>Başlık</th>
                                                    <th>Açıklama</th>
                                                    <th>Yazar</th>
                                                    <th>Etiket(ler)</th>
                                                    <th>Durum</th>
                                                    <th>Photo</th>
                                                    <th>Tarihi</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $i = 1;
                                                while ($get = $blogs->fetch(PDO::FETCH_ASSOC)) {
                                                    ?>
                                                    <tr>

                                                        <th scope="row"><?php echo $i++; ?></th>
                                                        <td><?php echo $get['id']; ?></td>
                                                        <td><?php echo $get['title']; ?></td>
                                                        <td><?php echo $get['description']; ?></td>
                                                        <td><?php echo $get['author']; ?></td>
                                                        <td><?php echo $get['tag']; ?></td>
                                                        <td><?php echo $get['status']; ?></td>
                                                        <td><img width="100" src="../img/blog/<?php echo $get['file']; ?>" /></td>
                                                        <td><?php echo $get['date']; ?></td>
                                                        <td>
                                                            <a href="kontrol/islem.php?blogId=<?php echo $get['id']; ?>">
                                                                <i class="pe-7s-trash"> </i>
                                                            </a>
                                                            <a href="kontrol/islem.php">
                                                                <i class="pe-7s-credit"> </i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include 'layouts/footer.php';
?>