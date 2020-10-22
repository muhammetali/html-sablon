<?php
require_once('header.php');
?>
							<!--begin::Content-->
							<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
								<!--begin::Subheader-->
								<!--begin::Entry-->
								<div class="d-flex flex-column-fluid">
									<!--begin::Container-->
									<div class="container">
										<!--begin::Card-->
										<div class="card card-custom gutter-t">
											<div class="card card-custom gutter-b example example-compact">
												<div class="card-header">
													<h3 class="card-title">Sipariş Ekle</h3>
													<div class="card-toolbar">
														<div class="example-tools justify-content-center">
														</div>
													</div>
												</div>
												<!--begin::Form-->
												<form class="form">
													<div class="card-body">
														
														<div class="form-group row">
															<label class="col-lg-2 col-form-label text-right">Müşteri Tipi:</label>
															<div class="col-lg-3">
																<div class="input-group">
																	<select class="form-control" id="exampleSelect1">
																		<option>Şahıs</option>
																		<option>Şirket</option>
																	</select>
																</div>
															</div>
															<label class="col-lg-2 col-form-label text-right">Adres:</label>
															<div class="col-lg-4">
															<textarea type="text" class="form-control"></textarea>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-2 col-form-label text-right">Ad Soyad:</label>
															<div class="col-lg-3">
																<input type="text" class="form-control"/>
															</div>
															<label class="col-lg-2 col-form-label text-right">Şehir:</label>
															<div class="col-lg-4">
																<div class="input-group">
																	<select class="form-control" id="exampleSelect1">
																		<option>İstanbul</option>
																		<option>Konya</option>
																		<option>Karaman</option>
																	</select>
																</div>
															</div>
														</div>
														
														<div class="form-group row">
															<label class="col-lg-2 col-form-label text-right">E-Posta:</label>
															<div class="col-lg-3">
																<input type="text" class="form-control"/>
															</div>
															<label class="col-lg-2 col-form-label text-right">İlçe:</label>
															<div class="col-lg-4">
																<select class="form-control" id="exampleSelect1">
																		<option>Ermenek</option>
																		<option>Beylikdüzü</option>
																		<option>Bahçelievler</option>
																	</select>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-2 col-form-label text-right">Telefon Numarası:</label>
															<div class="col-lg-3">
																<input type="text" class="form-control"/>
															</div>
															<label class="col-lg-2 col-form-label text-right">Posta Kodu:</label>
															<div class="col-lg-3">
																<div class="input-group">
																	<input type="text" class="form-control"/>
																	
																</div>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-2 col-form-label text-right">TC Kimlik No:</label>
															<div class="col-lg-3">
																<input type="text" class="form-control"/>
															</div>
															
														</div>
														<div class="form-group row">
															<label class="col-lg-2 col-form-label text-right">Vergi Dairesi:</label>
															<div class="col-lg-3">
																<input type="text" class="form-control"/>
															</div>
															
														</div>
														
														<!-- begin: Example Code-->
														<div class="example-code mt-10">
															<ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
																<li class="nav-item">
																	<a class="nav-link active" data-toggle="tab" href="#example_code_html_2">HTML</a>
																</li>
															</ul>
															<div class="tab-content">
																<div class="tab-pane active" id="example_code_html_2" role="tabpanel">
																	<div class="example-highlight">
																		<pre style="height:400px">
																		</pre>
																	</div>
																</div>
															</div>
														</div>
														<!-- end: Example Code-->
													</div>
													<div class="card-footer">
														<div class="row">
															<div class="col-lg-2"></div>
															<div class="col-lg-10">
																<button type="reset" class="btn btn-success mr-2">Kaydet</button>
															</div>
														</div>
													</div>
												</form>
												<!--end::Form-->
											</div>
										</div>
										<!--end::Card-->
									</div>
									<!--end::Container-->
								</div>
								<!--end::Entry-->
							</div>
							<!--end::Content-->
                    <?php
                    require_once('footer.php');
                    ?>