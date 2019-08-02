<?php
	include 'head.php';
?>
                                    <div class="col-md-6">
										<div class="card full-height">
                                  <div class="card-body">
									<div class="card-title">Overall statistics</div>
									<div class="card-category">Information about statistics in your project</div>
									<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-1"></div>
											<h6 class="fw-bold mt-3 mb-0">Your Project Pending %</h6>
										</div>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-2"></div>
											<h6 class="fw-bold mt-3 mb-0">Your Project Completed %</h6>
										</div>
										
									</div>
									  </div>
										</div> </div>
                               

                                     

                         <div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">Total income & spend statistics</div>
									<div class="row py-3">
										<div class="col-md-4 d-flex flex-column justify-content-around">
											<div>
												<h6 class="fw-bold text-uppercase text-success op-8">Total Income</h6>
												<h3 class="fw-bold">&#8377 9,782</h3>
											</div>
											<div>
												<h6 class="fw-bold text-uppercase text-danger op-8">Total Spend</h6>
												<h3 class="fw-bold">&#8377 1,248</h3>
											</div>
										</div>
										<div class="col-md-8">
											<div id="chart-container">
												<canvas id="totalIncomeChart"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                               <div></div>
                                  
<!--
                               <div class="col-md-4">

                               <div class="card card-primary">
								<div class="card-header">
									<div class="card-title">Overall Profit</div>
	<div class="card-category">March 25 - April 02</div>
								</div>
								<div class="card-body pb-0">
									<div class="mb-4 mt-2">
										<h1>&#8377 4,578.58</h1>
									</div>
									<div class="pull-in">
										<canvas id="dailySalesChart"></canvas>
									</div>
								</div>
								   </div> </div>
-->
                             
                        <div class="col-sm-6 col-md-3">
							<div class="card card-stats card-secondary card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-analytics"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Project Completed</p>
												<h4 class="card-title">3</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round card-danger">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-error text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Project Failed</p>
												<h4 class="card-title">0</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

                          <div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round card-success">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-coins text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Total Revenue</p>
												<h4 class="card-title">&#8377 1,345</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-12 col-sm-6 col-md-3">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<div>
											<h5><b>Current Project</b></h5>
											<p class="text-muted">A.I. Self Driving Car</p>
										</div>
										<h3 class="text-danger fw-bold"></h3>
									</div>
									<div class="progress progress-sm">
										<div class="progress-bar bg-warning w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between mt-2">
										<p class="text-muted mb-0">Completed</p>
										<p class="text-muted mb-0">50%</p>
									</div>
								</div>
							</div>
</div>


                    <h4 class="page-title">Current Target</h4>
					
						<div class="col-md-12">
							
							<ul class="timeline">
								<li>
									<div class="timeline-badge"><i class="flaticon-message"></i></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Mussum ipsum cacilds</h4>
											<p><small class="text-muted"><i class="flaticon-message"></i> 11 hours ago via Twitter</small></p>
										</div>
										<div class="timeline-body">
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										</div>
									</div>
								</li>
								<li class="timeline-inverted">
									<div class="timeline-badge warning"><i class="flaticon-alarm-1"></i></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Mussum ipsum cacilds</h4>
										</div>
										<div class="timeline-body">
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										</div>
									</div>
								</li>
								<li>
									<div class="timeline-badge danger"><i class="flaticon-error"></i></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Mussum ipsum cacilds</h4>
										</div>
										<div class="timeline-body">
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										</div>
									</div>
								</li>
								<li class="timeline-inverted">
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Mussum ipsum cacilds</h4>
										</div>
										<div class="timeline-body">
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										</div>
									</div>
								</li>
								<li>
									<div class="timeline-badge info"><i class="flaticon-price-tag"></i></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Mussum ipsum cacilds</h4>
										</div>
										<div class="timeline-body">
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											<hr>
											<div class="btn-group dropdown">
												<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
													<span class="btn-label">
														<i class="fa fa-cog"></i>
													</span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li>
														<a class="dropdown-item" href="#">Action</a>
														<a class="dropdown-item" href="#">Another action</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#">Something else here</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Mussum ipsum cacilds</h4>
										</div>
										<div class="timeline-body">
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										</div>
									</div>
								</li>
								<li class="timeline-inverted">
									<div class="timeline-badge success"><i class="flaticon-credit-card-1"></i></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Mussum ipsum cacilds</h4>
										</div>
										<div class="timeline-body">
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										</div>
									</div>
								</li>
							</ul>
						
					</div>






<?php
	include 'foot.php';
?>