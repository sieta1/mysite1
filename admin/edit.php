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
                    <div>Profil Düzenle
                    </div>
                </div>    </div>
        </div>

        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="row">
                    <div class="col-md-6">
                        <div class="main-card mb-3 card">
                            <?php
                            if (isset($_GET['result'])){
                                if ($_GET['result'] == 1){
                                    ?>
                                    <div style="text-align: center;" class="alert alert-success" role="alert">
                                        Başarılı..
                                    </div>
                                    <?php
                                }
                                else
                                {
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
                                    Profil Bilgileri
                                </h5>
                                <form class="" action="kontrol/islem.php" method="POST">
                                    <?php
                                    $sessionId = $_SESSION['id'];
                                    $profils = $db->prepare("SELECT * FROM users WHERE id=$sessionId");
                                    $profils->execute();
                                    $profil = $profils->fetch(PDO::FETCH_ASSOC);

                                    ?>
                                    <?php
                                        if (isset($_GET['edit']))
                                        {
                                            ?>


                                    <input type="hidden" name="id" value="<?php echo $profil['id']; ?>">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail" class="">Ad
                                        </label>
                                        <input name="name" id="exampleEmail" placeholder="with a placeholder" type="text" value="<?php echo $profil['name']; ?>" class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="examplePassword" class="">
                                            Soyad
                                        </label>
                                        <input name="surname"value="<?php echo $profil['surname']; ?>" id="examplePassword" placeholder="password placeholder" type="text"
                                               class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="examplePassword" class="">
                                            Mail
                                        </label>
                                        <input name="mail" value="<?php echo $profil['mail']; ?>" id="examplePassword" placeholder="password placeholder" type="email"
                                               class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="examplePassword" class="">
                                            Şifre
                                        </label>
                                        <input name="password" id="examplePassword" placeholder="password placeholder" type="password"
                                               class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="examplePassword" class="">
                                            Şifre Tekrarla
                                        </label>
                                        <input name="password2" id="examplePassword" placeholder="password placeholder" type="password"
                                               class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="exampleFile" class="">
                                            Profil resmi
                                        </label>
                                        <input name="file" name="file" id="exampleFile" type="file" class="form-control-file">
                                        <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                    </div>
                                    <button name="updateUser" class="mt-1 btn btn-primary">Submit</button>
                                    <?php
                                      }
                                    ?>
                                </form>
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