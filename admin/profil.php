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
					<div>Profil Sayfası
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
										$postId = $_POST['id'];
										$profils = $db->prepare("SELECT * FROM users WHERE id=$postId");
										$profils->execute();
										$profil = $profils->fetch(PDO::FETCH_ASSOC);

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
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
					<div class="row">
						<div class="col-md-6">
							<div class="main-card mb-3 card">
								<div class="card-body"><h5 class="card-title">Input Groups</h5>
									<div>
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">@</span></div>
											<input placeholder="username" type="text" class="form-control"></div>
											<br>
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text"><input aria-label="Checkbox for following text input" type="checkbox" class=""></span></div>
												<input placeholder="Check it out" type="text" class="form-control"></div>
												<br>
												<div class="input-group"><input placeholder="username" type="text" class="form-control">
													<div class="input-group-append"><span class="input-group-text">@example.com</span></div>
												</div>
												<br>
												<div class="input-group">
													<div class="input-group-prepend"><span class="input-group-text">$</span><span class="input-group-text">$</span></div>
													<input placeholder="Dolla dolla billz yo!" type="text" class="form-control">
													<div class="input-group-append"><span class="input-group-text">$</span><span class="input-group-text">$</span></div>
												</div>
												<br>
												<div class="input-group">
													<div class="input-group-prepend"><span class="input-group-text">$</span></div>
													<input placeholder="Amount" step="1" type="number" class="form-control">
													<div class="input-group-append"><span class="input-group-text">.00</span></div>
												</div>
											</div>
										</div>
									</div>
									<div class="main-card mb-3 card">
										<div class="card-body"><h5 class="card-title">Input Group Button Dropdown</h5>
											<div class="input-group">
												<div class="input-group-prepend">
													<button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-secondary">Button Dropdown</button>
													<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu"><h6 tabindex="-1" class="dropdown-header">Header</h6>
														<button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
														<button type="button" tabindex="0" class="dropdown-item">Another Action</button>
														<div tabindex="-1" class="dropdown-divider"></div>
														<button type="button" tabindex="0" class="dropdown-item">Another Action</button>
													</div>
												</div>
												<input type="text" class="form-control"></div>
											</div>
										</div>
										<div class="main-card mb-3 card">
											<div class="card-body"><h5 class="card-title">Input Group Button Shorthand</h5>
												<div>
													<div class="input-group">
														<div class="input-group-prepend">
															<button class="btn btn-secondary">To the Left!</button>
														</div>
														<input type="text" class="form-control"></div>
														<br>
														<div class="input-group"><input type="text" class="form-control">
															<div class="input-group-append">
																<button class="btn btn-secondary">To the Right!</button>
															</div>
														</div>
														<br>
														<div class="input-group">
															<div class="input-group-prepend">
																<button class="btn btn-danger">To the Left!</button>
															</div>
															<input placeholder="and..." type="text" class="form-control">
															<div class="input-group-append">
																<button class="btn btn-success">To the Right!</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="main-card mb-3 card">
												<div class="card-body"><h5 class="card-title">Input Group Sizing</h5>
													<div>
														<div class="input-group input-group-lg">
															<div class="input-group-prepend"><span class="input-group-text">@lg</span></div>
															<input type="text" class="form-control"></div>
															<br>
															<div class="input-group">
																<div class="input-group-prepend"><span class="input-group-text">@normal</span></div>
																<input type="text" class="form-control"></div>
																<br>
																<div class="input-group input-group-sm">
																	<div class="input-group-prepend"><span class="input-group-text">@sm</span></div>
																	<input type="text" class="form-control"></div>
																</div>
															</div>
														</div>
														<div class="main-card mb-3 card">
															<div class="card-body"><h5 class="card-title">Input Group Addon</h5>
																<div>
																	<div class="input-group">
																		<div class="input-group-prepend"><span class="input-group-text">To the Left!</span></div>
																		<input type="text" class="form-control"></div>
																		<br>
																		<div class="input-group"><input type="text" class="form-control">
																			<div class="input-group-append"><span class="input-group-text">To the Right!</span></div>
																		</div>
																		<br>
																		<div class="input-group">
																			<div class="input-group-prepend"><span class="input-group-text">To the Left!</span></div>
																			<input placeholder="and..." type="text" class="form-control">
																			<div class="input-group-append"><span class="input-group-text">To the Right!</span></div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="main-card mb-3 card">
																<div class="card-body"><h5 class="card-title">Input Group Button</h5>
																	<div>
																		<div class="input-group">
																			<div class="input-group-prepend">
																				<button class="btn btn-secondary">I'm a button</button>
																			</div>
																			<input type="text" class="form-control"></div>
																			<br>
																			<div class="input-group"><input type="text" class="form-control">
																				<div class="input-group-append">
																					<button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-secondary">Button Dropdown</button>
																					<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu"><h6 tabindex="-1" class="dropdown-header">Header</h6>
																						<button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
																						<button type="button" tabindex="0" class="dropdown-item">Another Action</button>
																						<div tabindex="-1" class="dropdown-divider"></div>
																						<button type="button" tabindex="0" class="dropdown-item">Another Action</button>
																					</div>
																				</div>
																			</div>
																			<br>
																			<div class="input-group">
																				<div class="input-group-prepend">
																					<button class="btn btn-outline-secondary">Split Button</button>
																					<button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle dropdown-toggle-split btn btn-outline-secondary"><span
																						class="sr-only">Toggle Dropdown</span></button>
																						<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu"><h6 tabindex="-1" class="dropdown-header">Header</h6>
																							<button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
																							<button type="button" tabindex="0" class="dropdown-item">Another Action</button>
																							<div tabindex="-1" class="dropdown-divider"></div>
																							<button type="button" tabindex="0" class="dropdown-item">Another Action</button>
																						</div>
																					</div>
																					<input placeholder="and..." type="text" class="form-control">
																					<div class="input-group-append">
																						<button class="btn btn-secondary">I'm a button</button>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
															<form class="">
																<div class="row">
																	<div class="col-md-6">
																		<div class="main-card mb-3 card">
																			<div class="card-body"><h5 class="card-title">Checkboxes</h5>
																				<div class="position-relative form-group">
																					<div>
																						<div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox">Check this
																						custom checkbox</label></div>
																						<div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox2" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox2">Or this
																						one</label></div>
																						<div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox3" disabled="" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox3">But
																						not this disabled one</label></div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="main-card mb-3 card">
																			<div class="card-body"><h5 class="card-title">Inline</h5>
																				<div class="position-relative form-group">
																					<div>
																						<div class="custom-checkbox custom-control custom-control-inline"><input type="checkbox" id="exampleCustomInline" class="custom-control-input"><label class="custom-control-label"
																							for="exampleCustomInline">An inline custom
																						input</label></div>
																						<div class="custom-checkbox custom-control custom-control-inline"><input type="checkbox" id="exampleCustomInline2" class="custom-control-input"><label class="custom-control-label"
																							for="exampleCustomInline2">and another one</label>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="main-card mb-3 card">
																			<div class="card-body"><h5 class="card-title">Radios</h5>
																				<div class="position-relative form-group">
																					<div>
																						<div class="custom-radio custom-control"><input type="radio" id="exampleCustomRadio" name="customRadio" class="custom-control-input"><label class="custom-control-label" for="exampleCustomRadio">Select
																						this custom radio</label></div>
																						<div class="custom-radio custom-control"><input type="radio" id="exampleCustomRadio2" name="customRadio" class="custom-control-input"><label class="custom-control-label" for="exampleCustomRadio2">Or
																						this one</label></div>
																						<div class="custom-radio custom-control"><input type="radio" id="exampleCustomRadio3" disabled="" class="custom-control-input"><label class="custom-control-label" for="exampleCustomRadio3">But not this
																						disabled one</label></div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="main-card mb-3 card">
																			<div class="card-body"><h5 class="card-title">Form Select</h5>
																				<div class="row">
																					<div class="col-md-6">
																						<div class="position-relative form-group"><label for="exampleCustomSelect" class="">Custom Select</label><select type="select" id="exampleCustomSelect" name="customSelect" class="custom-select">
																							<option value="">Select</option>
																							<option>Value 1</option>
																							<option>Value 2</option>
																							<option>Value 3</option>
																							<option>Value 4</option>
																							<option>Value 5</option>
																						</select></div>
																						<div class="position-relative form-group"><label for="exampleCustomMutlipleSelect" class="">Custom Multiple Select</label><select multiple="" type="select" id="exampleCustomMutlipleSelect"
																							name="customSelect" class="custom-select">
																							<option value="">Select</option>
																							<option>Value 1</option>
																							<option>Value 2</option>
																							<option>Value 3</option>
																							<option>Value 4</option>
																							<option>Value 5</option>
																						</select></div>
																					</div>
																					<div class="col-md-6">
																						<div class="position-relative form-group"><label for="exampleCustomSelectDisabled" class="">Custom Select Disabled</label><select type="select" id="exampleCustomSelectDisabled" name="customSelect"
																							disabled="" class="custom-select">
																							<option value="">Select</option>
																							<option>Value 1</option>
																							<option>Value 2</option>
																							<option>Value 3</option>
																							<option>Value 4</option>
																							<option>Value 5</option>
																						</select></div>
																						<div class="position-relative form-group"><label for="exampleCustomMutlipleSelectDisabled" class="">Custom Multiple Select Disabled</label><select multiple="" type="select"
																							id="exampleCustomMutlipleSelectDisabled"
																							name="customSelect" disabled="" class="custom-select">
																							<option value="">Select</option>
																							<option>Value 1</option>
																							<option>Value 2</option>
																							<option>Value 3</option>
																							<option>Value 4</option>
																							<option>Value 5</option>
																						</select></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>

												<?php
												include 'layouts/footer.php';
												?>