<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title"><?php echo $login_session_name?></h3>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-3 col-lg-3" align="center">
										<img alt="User Pic" src="../img/profile_img.png" class="img-circle img-responsive">
									</div>
									<div class=" col-md-9 col-lg-9">
										<table class="table table-user-information">
											<tbody>
												<tr>
													<td>E-mail:</td>
													<td><b><?php echo $login_session_email?></b></td>
												</tr>
												<tr>
													<td>Yeni Şifreniz:</td>
													<td>
														<input maxlength="45" id="user_new_pass" type="password">
													</td>
												</tr>
												<tr>
													<td>Yeni Şifre Onayı:</td>
													<td>
														<input maxlength="45" id="user_new_pass_c" type="password">
													</td>
												</tr>
											</tbody>
										</table>
										<div id="profile_update_alert" class="alert alert-info" role="alert" style="text-align:center ; display: none;">
											<b id="pass_validate"></b>
										</div>
	   								</div>
								</div>
							</div>
							<div class="panel-footer">
								<div class="row">
									<div class="pull-right">
										<button id="profileGuncelle" class="btn btn-success">
											<span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"> </span> Kaydet
										</button>
									</div>
								</div>
								<div class="alert alert-info" role="alert">
									<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
									<span class="sr-only">Bilgi:</span>Eğer diğer bilgileri değiştirmek istiyorsanız sistem yöneticisine başvurunuz.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			