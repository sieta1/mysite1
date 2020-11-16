<?php
include 'layouts/header.php';
?>
    <div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-user icon-gradient bg-premium-dark">
                        </i>
                    </div>
                    <div>
                        Üye Sayfası
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
                                    Üye Listesi
                                </h5>
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="mb-0 table">
                                                <?php
                                                $users = $db->prepare("SELECT * FROM users");
                                                $users->execute();
                                                ?>
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>ID</th>
                                                    <th>Ad</th>
                                                    <th>Soyad</th>
                                                    <th>Mail</th>
                                                    <th>Status</th>
                                                    <th>Admin</th>
                                                    <th>Button</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $i = 1;
                                                while ($get = $users->fetch(PDO::FETCH_ASSOC)) {
                                                    ?>
                                                    <tr>

                                                        <th scope="row"><?php echo $i++; ?></th>
                                                        <td><?php echo $get['id']; ?></td>
                                                        <td><?php echo $get['name']; ?></td>
                                                        <td><?php echo $get['surname']; ?></td>
                                                        <td><?php echo $get['mail']; ?></td>
                                                        <td><?php echo $get['status']; ?></td>
                                                        <td><?php echo $get['admin']; ?></td>
                                                        <td>
                                                            <a href="kontrol/islem.php?userId=<?php echo $get['id']; ?>">
                                                                <i class="pe-7s-trash"> </i>
                                                            </a>
                                                            <a href="kontrol/islem.php?edit=<?php echo $get['id']; ?>">
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