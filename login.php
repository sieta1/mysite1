<?php include 'layouts/header.php'; ?>
<?php
if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $mail = $_POST['mail'];
    $password = md5($_POST['password']);
    $passwordConfirm = md5($_POST['passwordConfirm']);
    if ($password == $passwordConfirm)
    {
        $select = $db->prepare("SELECT  * FROM users WHERE mail = '$mail'");
        $select->execute();
        if ($select->rowCount() > 0)
        {
            echo "Böyle bir kulanıcı bulunmaktadır";
        }
        else
        {
                    #$name = $_POST['name'];
                    #$surname = $_POST['surname'];
                    #$mail = $_POST['mail'];
                    #$mdPassword = $_POST['password'];
                    #$passwordConfirm = $_POST['passwordConfirm'];

                    #$mdPassword = md5($password);

            $register = $db->prepare("INSERT INTO users (name, surname, mail, password) VALUES (?, ?, ?, ?)");
            $register->execute([$name, $surname, $mail, $password]);

                    #$_SESSION['name'] = $name;
                    #$_SESSION['mail'] = $mail;

            if ($register->rowCount() > 0) {

                  $veriler = $db->prepare("SELECT * FROM users
                    WHERE mail = '$mail' AND password = '$password'");
                $veriler->execute();
                
                if ($veriler->rowCount() > 0)
                {
                    $cek = $veriler->fetch(PDO::FETCH_ASSOC);

                    $_SESSION['name']       = $cek['name'];
                    $_SESSION['mail']       = $cek['mail'];
                    $_SESSION['surname']    = $cek['surname'];
                    $_SESSION['id']         = $cek['id'];


                    echo "Giriş Yaptınız";
                    header('Location: index.php?status=1');
                
               
                echo 'Kaydınız oluştu. Giriş yapabilirsiniz.';
                        header('Location: index.php'); #Logout = 1 Yazılacaktır.
                    }else{
                        echo 'Hata Oluşmuştur';
                    }}
                
           
        } }

        else
            {
                echo 'Şifreler Eşlemiyor !';
            }}
        ?>
        <main>
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg02.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2>CONTACT US</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">İletişim</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb-shape"><img src="img/images/breadcrumb_shape01.png" alt=""></div>
                <div class="breadcrumb-shape"><img src="img/images/breadcrumb_shape02.png" alt=""></div>
            </section>
            <?php
            if (isset($_POST['giris']))
            {
                $mail = $_POST['mail'];
                $password = md5($_POST['password']);

                $veriler = $db->prepare("SELECT * FROM users
                    WHERE mail = '$mail' AND password = '$password'");
                $veriler->execute();
                
                if ($veriler->rowCount() > 0)
                {
                    $cek = $veriler->fetch(PDO::FETCH_ASSOC);
                    $_SESSION['name'] = $cek['name'];
                    $_SESSION['mail'] = $cek['mail'];
                    $_SESSION['surname'] = $cek['surname'];
                    $_SESSION['id'] = $cek['id'];


                    echo "Giriş Yaptınız";
                    header('Location: index.php?status=1');
                }
                else
                {
                    #$_SESSION['mail'] = $mail;
                    echo '<div style="text-align: center; margin: 10%;" class="alert alert-danger" role="alert">
                    E-mail yada Parola Yanlış !
                    </div>';
                        #header('Location: index.php?status=0');
                }


            }
            ?>

            <section class="contact-area">
                <div class="contact-wrap pt-120 pb-120">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-8">
                                <div class="section-title text-center mb-70">
                                    <h2 class="title"><span>Giriş</span> Yapın</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-10 col-lg-12">
                                <div class="contact-form">
                                    <form action="" method="POST">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" name="mail" placeholder="mail*">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="password" placeholder="şifre*">
                                            </div>
                                        </div>
                                        <button name="giris" class="btn gradient-btn">Giriş</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div id="contact-map"></div>-->
            </section>
            <section class="contact-area">
                <div class="contact-wrap pt-120 pb-120">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-8">
                                <div class="section-title text-center mb-70">
                                    <h2 class="title"><span>Kayıt</span> olun</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-10 col-lg-12">
                                <div class="contact-form">
                                    <form action="" method="POST">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="text" name="name" placeholder="Ad*">
                                            </div>
                                            <div class="col-md-12">
                                                <input type="text" name="surname" placeholder="Soyad">
                                            </div>
                                            <div class="col-md-12">
                                                <input type="email" name="mail" placeholder="Email*">
                                            </div>
                                            <div class="col-md-12">
                                                <input type="text" name="password" placeholder="Şifre*">
                                            </div>
                                            <div class="col-md-12">
                                                <input type="text" name="passwordConfirm" placeholder="Şifre onayla*">
                                            </div>
                                        </div>
                                        <button name="submit" class="btn gradient-btn">Kayıt ol</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div id="contact-map"></div>-->
            </section>
            <!-- contact-area-end -->
        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
        <?php include 'layouts/footer.php'; ?>