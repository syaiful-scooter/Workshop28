<!-- <div class="row"> -->
									<!-- <div class="col-xs-12"> -->
										<h3 class="header smaller lighter blue">jQuery dataTables untuk data mahasiswa</h3>

										<div class="clearfix">
											<div class="pull-right tableTools-container">
												<!-- <div class="dt-buttons btn-overlap btn-group">
													<a class="dt-button buttons-collection buttons-colvis btn btn-white btn-primary btn-bold" tabindex="0" aria-controls="dynamic-table" data-original-title="" title="">
														<span><i class="fa fa-search bigger-110 blue"></i><span class="hidden">Show/hide columns</span></span>
													</a>
													<a class="dt-button buttons-copy buttons-html5 btn btn-white btn-primary btn-bold" tabindex="0" aria-controls = "dynamic-table" data-original-title="" title="">
														<span><i class="fa fa-copy bigger-110 pink"></i><span class="hidden">Copy to clipboard</span></span>
													</a>
													<a class="dt-button buttons-csv buttons-html5 btn btn-white btn-primary btn-bold" tabindex="0" aria-controls="dynamic-table" data-original-title="" title="">
															<span><i class="fa fa-database bigger-110 orange"></i><span class="hidden">Export to CSV</span></span>
													</a>
													<a class="dt-button buttons-print btn btn-white btn-primary btn-bold" tabindex="0" aria-controls="dynamic-table" data-original-title="" title=""><span><i class="fa fa-print bigger-110 grey"></i><span class="hidden">Print</span></span>
													</a>
												</div> -->
											</div>
										</div>

										<div class="table-header">Data Mahasiswa</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
												<div class="row">
													<div class="col-xs-6">
														<!-- <div class="dataTables_length" id="dynamic-table_length">
															<label>Display <select name="dynamic-table_length" aria-controls="dynamic-table" class="form-control input-sm">
																<option value="10">10</option>
																<option value="25">25</option>
																<option value="50">50</option>
																<option value="100">100</option>
															</select> records
														</label>
													</div> -->
												</div>
												<div class="col-xs-6">
													<!-- <div id="dynamic-table_filter" class="dataTables_filter">
														<label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dynamic-table"></label>
													</div> -->
												</div>
											</div>

											<table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dynamic-table_info">
												<thead>
													<tr role="row"><th class="center sorting_disabled" rowspan="1" colspan="1" aria-label="">
															<label class="pos-rel">
																<input type="checkbox" class="ace">
																<span class="lbl"></span>
															</label>
														</th>
													<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="NAMA: activate to sort column ascending">NAMA</th>
													<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="ALAMAT: activate to sort column ascending">ALAMAT</th>
													<th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="USIA: activate to sort column ascending">USIA</th>
													<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="JURUSAN: activate to sort column ascending">JURUSAN</th>
													<th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th>
													<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="">EDIT</th>
												</tr>
												</thead>

												<tbody>
												<?php $i=0;
													foreach ($list_data as $key ){
														$i++;

														if ($i % 2 == 0){
															$gage="even";
														}else {
															$gage="odd";
														}

														?>


												<tr role="row" class=<?php echo $gage;?> >
													<td class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace">
															<span class="lbl"></span>
														</label>
													</td>
													<td><?php echo $i; ?></td>
													<td><?php echo $key['nama']; ?></td>
													<td><?php echo $key['alamat'];  ?></td>
													<td><?php echo $key['jurusan'];  ?></td>
													<td class="hidden-480"><?php echo $key['usia'];  ?></td>
													<!-- <td class="hidden-480">
														<span class="label label-sm label-inverse arrowed-in">Flagged</span>
													</td> -->

													<td>
														<div class="hidden-sm hidden-xs action-buttons">
															<a class="blue" href="#">
																<i class="ace-icon fa fa-search-plus bigger-130"></i>
															</a>

															<a class="green" href="#">
																<i class="ace-icon fa fa-pencil bigger-130"></i>
															</a>

															<a class="red" href="#">
																<i class="ace-icon fa fa-trash-o bigger-130"></i>
															</a>
														</div>

														<div class="hidden-md hidden-lg">
															<div class="inline pos-rel">
																<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																	<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																</button>

																<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																	<li>
																		<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</td>
												</tr>
											<?php } ?>
										</tbody>
									</table>

<!-- ======================================================================= -->


											<div class="row">
												<div class="col-xs-6">
													<!-- <div class="dataTables_info" id="dynamic-table_info" role="status" aria-live="polite">Showing 21 to 23 of 23 entries</div> -->
												</div>
												<div class="col-xs-6">
													<!-- <div class="dataTables_paginate paging_simple_numbers" id="dynamic-table_paginate">
														<ul class="pagination">
															<li class="paginate_button previous" aria-controls="dynamic-table" tabindex="0" id="dynamic-table_previous">
																<a href="#">Previous</a>
															</li>
															<li class="paginate_button " aria-controls="dynamic-table" tabindex="0">
																<a href="#">1</a>
															</li>
															<li class="paginate_button " aria-controls="dynamic-table" tabindex="0">
																<a href="#">2</a>
															</li>
															<li class="paginate_button active" aria-controls="dynamic-table" tabindex="0">
																<a href="#">3</a>
															</li>
															<li class="paginate_button next disabled" aria-controls="dynamic-table" tabindex="0" id="dynamic-table_next">
																<a href="#">Next</a>
															</li>
														</ul>
													</div> -->
												</div>
											</div>

											</div>
										</div>
									<!-- </div> -->
								<!-- </div> -->
