<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Language" content="en">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
	<meta name="description" content="This is an example dashboard created using build-in elements and components.">
	<meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<link href="./main.css" rel="stylesheet"></head>
<body>
	<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
		<div class="app-header header-shadow">
			<div class="app-header__logo">
				<div class="logo-src"></div>
				<div class="header__pane ml-auto">
					<div>
						<button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</button>
					</div>
				</div>
			</div>
			<div class="app-header__mobile-menu">
				<div>
					<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>
			</div>
			<div class="app-header__menu">
				<span>
					<button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
						<span class="btn-icon-wrapper">
							<i class="fa fa-ellipsis-v fa-w-6"></i>
						</span>
					</button>
				</span>
			</div>    <div class="app-header__content">
				<div class="app-header-left">
					<div class="search-wrapper">
						<div class="input-holder">
							<input type="text" class="search-input" placeholder="Type to search">
							<button class="search-icon"><span></span></button>
						</div>
						<button class="close"></button>
					</div>
        </div>


				</div>
			</div>        
			<div class="app-main">
				<div class="app-sidebar sidebar-shadow">
					<div class="app-header__logo">
						<div class="logo-src"></div>
						<div class="header__pane ml-auto">
							<div>
								<button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
									<span class="hamburger-box">
										<span class="hamburger-inner"></span>
									</span>
								</button>
							</div>
						</div>
					</div>
					<div class="app-header__mobile-menu">
						<div>
							<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
								<span class="hamburger-box">
									<span class="hamburger-inner"></span>
								</span>
							</button>
						</div>
					</div>
					<div class="app-header__menu">
						<span>
							<button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
								<span class="btn-icon-wrapper">
									<i class="fa fa-ellipsis-v fa-w-6"></i>
								</span>
							</button>
						</span>
					</div>    

				</div>

				<div class="app-main__outer">
					<div class="app-main__inner">
						<div class="app-page-title">
							<div class="page-title-wrapper">
								<div class="page-title-heading">
									<div class="page-title-icon">
										<i class="pe-7s-graph text-success">
										</i>
									</div>
									<div>GİRİŞ SAYFASI

									</div>
								</div>
								<div class="page-title-actions">


								</div>    </div>
							</div>            

							<div class="main-card mb-3 card">
								<?php
								if (isset($_GET['result'])) 
								{ 
									if ($_GET['result'] == 0)
									{
										?>
										<div style="text-align: center;" class="alert alert-danger" role="alert">
											Böyle bir admin yok !
										</div>
										<?php
									}

									?>

									<?php								
								}
								?>
								<div class="card-body"><h5 class="card-title">Kullanıcı Bilgileri</h5>
									<div>
										<form class="form-inline" action="kontrol/islem.php" method="POST">
											<div class="mb-2 mr-sm-2 mb-sm-0 position-relative form-group">
												<label for="" class="mr-sm-2">Email</label>
												<input name="mail" placeholder="something@idk.cool" type="email"
												class="form-control">
											</div>
											<div class="mb-2 mr-sm-2 mb-sm-0 position-relative form-group">
												<label for="" class="mr-sm-2">Password
												</label>
												<input name="password" placeholder="don't tell!" type="password"
												class="form-control">
											</div>
											<button name="loginForm" class="btn btn-primary">Giriş</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
							<div class="main-card mb-3 card">
								<div class="card-body"><h5 class="card-title">Grid</h5>
									<form class="">
										<div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Email</label>
											<div class="col-sm-10"><input name="email" id="exampleEmail" placeholder="with a placeholder" type="email" class="form-control"></div>
										</div>
										<div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Password</label>
											<div class="col-sm-10"><input name="password" id="examplePassword" placeholder="password placeholder" type="password" class="form-control"></div>
										</div>
										<div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Select</label>
											<div class="col-sm-10"><select name="select" id="exampleSelect" class="form-control"></select></div>
										</div>
										<div class="position-relative row form-group"><label for="exampleSelectMulti" class="col-sm-2 col-form-label">Select Multiple</label>
											<div class="col-sm-10"><select multiple="" name="selectMulti" id="exampleSelectMulti" class="form-control"></select></div>
										</div>
										<div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Text Area</label>
											<div class="col-sm-10"><textarea name="text" id="exampleText" class="form-control"></textarea></div>
										</div>
										<div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">File</label>
											<div class="col-sm-10"><input name="file" id="exampleFile" type="file" class="form-control-file">
												<small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
											</div>
										</div>
										<fieldset class="position-relative row form-group">
											<legend class="col-form-label col-sm-2">Radio Buttons</legend>
											<div class="col-sm-10">
												<div class="position-relative form-check"><label class="form-check-label"><input name="radio2" type="radio" class="form-check-input"> Option one is this and that—be sure to include why it's great</label></div>
												<div class="position-relative form-check"><label class="form-check-label"><input name="radio2" type="radio" class="form-check-input"> Option two can be something else and selecting it will deselect option
												one</label></div>
												<div class="position-relative form-check disabled"><label class="form-check-label"><input name="radio2" disabled="" type="radio" class="form-check-input"> Option three is disabled</label></div>
											</div>
										</fieldset>
										<div class="position-relative row form-group"><label for="checkbox2" class="col-sm-2 col-form-label">Checkbox</label>
											<div class="col-sm-10">
												<div class="position-relative form-check"><label class="form-check-label"><input id="checkbox2" type="checkbox" class="form-check-input"> Check me out</label></div>
											</div>
										</div>
										<div class="position-relative row form-check">
											<div class="col-sm-10 offset-sm-2">
												<button class="btn btn-secondary">Submit</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php include 'layouts/footer.php'; ?>