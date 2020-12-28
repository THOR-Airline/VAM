<?php
	/**
	 * @Project: Virtual Airlines Manager (VAM)
	 * @Author: Alejandro Garcia
	 * @Web http://virtualairlinesmanager.net
	 * Copyright (c) 2013 - 2016 Alejandro Garcia
	 * VAM is licensed under the following license:
	 *   Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International (CC BY-NC-SA 4.0)
	 *   View license.txt in the root, or visit http://creativecommons.org/licenses/by-nc-sa/4.0/
	 */
?>
<?php
	include ('./vam_index_header.php');
    include ('./helpers/conversions.php');
	if (!isset($_GET["page"]) || trim($_GET["page"]) == "") {
		?>
		<?php
			$sql = 'select callsign, arrival, departure, flight_status, name, surname, pending_nm, plane_type from vam_live_flights vf, gvausers gu where gu.gvauser_id = vf.gvauser_id ';
			if (!$result = $db->query($sql)) {
				die('There was an error running the query [' . $db->error . ']');
			}
			$row_cnt = $result->num_rows;
			$sql = "SELECT flight_id FROM `vam_live_flights` WHERE UNIX_TIMESTAMP (now())-UNIX_TIMESTAMP (last_update)>180";
			if (!$result = $db->query($sql)) {
				die('There was an error running the query [' . $db->error . ']');
			}
			while ($row = $result->fetch_assoc())
			{
				$sql_inner = "delete from vam_live_acars where flight_id='".$row["flight_id"]."'";
				if (!$result_acars = $db->query($sql_inner))
				{
				die('There was an error running the query [' . $db->error . ']');
				}
				$sql_inner = "delete from vam_live_flights where flight_id='".$row["flight_id"]."'";
				if (!$result_acars = $db->query($sql_inner))
				{
				die('There was an error running the query [' . $db->error . ']');
				}
			}
			if ($row_cnt>0){
		?>
		<div class="row" id="live_flights">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title"><IMG src="images/icons/ic_flight_takeoff_white_18dp_1x.png">&nbsp;<?php echo "LIVE FIGHTS" ?></h3>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-hover" id="live_flights_table">
							<?php
									echo "<tr><th>" . LF_CALLSIG . "</th><th>" . LF_PILOT . "</th><th>" . LF_DEPARTURE . "</th><th>" . LF_ARRIVAL . "</th><th>" . FLIGHT_STAGE . "</th><th>". BOOK_ROUTE_ARICRAFT_TYPE . "</th><th>" . PERC_DONE ."</th><th>" . PENDING_NM . "</th></tr>";
							?>
							</table>
						<?php include ('./vam_live_flights_map.php') ?>
					</div>
				</div>
			</div>
		</div>
		<?php
		}
		?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Content Row aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
												Pilotos</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
												<td><?php echo $num_pilots; ?></td></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-users fa-fw fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Flota</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><td><?php echo $num_planes; ?></td></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-plane fa-fw fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Rutas
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><td><?php echo $num_routes; ?></td></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-globe fa-fw fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Vuelos Totales</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><td><?php echo $num_fskeeper + $num_pireps + $num_reports + $num_vamacars - $num_fsacars_rejected - $num_fskeeper_rejected - $num_pireps_rejected - $num_vamacars_rejected ; ?></td></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-suitcase fa-fw fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->

                                <div class="card-header py-3">
                                    <h5 class="m-0 font-weight-bold text-primary">BIENVENIDO A THOR AIRLINES</h5>
                                </div>
                                <div class="card-body">
                                    <p>Bienvenido a Thor Airlines, una aerolinea ficticia que vuela en las redes de vuelo <strong>IVAO</strong> y <strong>VATSIM</strong> donde todo el mundo es bienvenido. </p>
									<p>Si eres nuevo en los simuladores o no sabes volar una avion de la flota tenemos la <strong>Academia de Thor</strong>. </p>
									<p>Tenemos formadores tanto para pilotos como para ATC, eventos y más cosas que puedes descubrir si te unes. </p>
                                    <p class="mb-0">Tenemos 3 subcompañias aparte de Thor; Thor Express, Thor Cargo y Thor Luxury</p>
                                </div>
                            </div>
                                <!-- Card Body -->


                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
								<!-- Card Header - Dropdown -->
								<div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Discord</h6>
                                </div>
                                <div class="card-body">
								<a href="https://discord.com/invite/GBHcRWu" target="_blank"><IMG src="https://discordapp.com/api/guilds/673136869520965633/widget.png?style=banner2" alt="Discord Banner 2" style="width: 60%; height: 60%;"></a>
								</div>
								<div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Redes de vuelo</h6>
                                </div>
                                <div class="card-body">
									<a href="https://ivao.aero/" target="_blank"><img src="https://vam.thorairlines.com/vam/images/thor/IVAO_Logo.png" width="60" height="60"></a>
									<a href="https://vatsim.net/" target="_blank"><img src="https://vam.thorairlines.com/vam/images/thor/vatsimlogo.jpg" width="50" height="50"></a>
									<a href="https://es.ivao.aero/" target="_blank"><img src="https://vam.thorairlines.com/vam/images/thor/IVAO_ES.png" width="60" height="60"></a>
								</div>
								<!--<div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Musica para volar</h6>
                                </div>
                                <div class="card-body">
									<audio id="rpplayerek" preload="auto" controls="" loop=""><source src="https://s2.radioparty.pl:8015/stream?nocache=3169" type="audio/mpeg"></audio>
								</div>
                                 Card Body -->
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Live Flighs</h6>
								</div>

								<div class="panel-body">
									<div class="table-responsive">
									<table class="table table-hover" id="live_flights_table">
									<?php
										echo "<tr><th>" . LF_CALLSIG . "</th><th>" . LF_PILOT . "</th><th>" . LF_DEPARTURE . "</th><th>" . LF_ARRIVAL . "</th><th>" . FLIGHT_STAGE . "</th><th>". BOOK_ROUTE_ARICRAFT_TYPE . "</th><th>" . PERC_DONE ."</th></tr>";
									?>
									</table>
								<?php include ('./vam_live_flights_map.php') ?>
								</div>
							</div>
                            </div>

                            

                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Meteorologia</h6>
                                </div>
                                <div class="card-body">
								<iframe width="700" height="500" src="https://embed.windy.com/embed2.html?lat=39.572&amp;lon=-2.725&amp;zoom=5&amp;level=surface&amp;overlay=wind&amp;menu=&amp;message=true&amp;marker=&amp;calendar=&amp;pressure=true&amp;type=map&amp;location=coordinates&amp;detail=&amp;detailLat=39.569&amp;detailLon=2.650&amp;metricWind=kt&amp;metricTemp=%C2%B0C&amp;radarRange=-1" frameborder="0"></iframe>
                                </div>
                            </div>
						</div>
					</div>	
					<div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->

                                <div class="card-header py-3">
                                    <h5 class="m-0 font-weight-bold text-primary">Últimos vuelos</h5>
                                </div>
                                <div class="card-body">
						<?php
							$db = new mysqli($db_host , $db_username , $db_password , $db_database);
							$db->set_charset("utf8");
							if ($db->connect_errno > 0) {
								die('Unable to connect to database [' . $db->connect_error . ']');
							}
							$sql = "select gvauser_id,a1.name as dep_name, a2.name as arr_name, a1.iso_country as dep_country,a2.iso_country as arr_country,
							callsign,pilot_name,departure,arrival,DATE_FORMAT(date,'$va_date_format') as date_string, date, format(time,2) as time
							from v_last_5_flights v, airports a1, airports a2
							where v.departure=a1.ident and v.arrival=a2.ident and time is not null order by date desc";
							if (!$result = $db->query($sql)) {
								die('There was an error running the query [' . $db->error . ']');
							}
						?>
						<div class="table-responsive">
							<table class="table table-hover">
								<?php
									echo "<thead><tr><th>" . LF_CALLSIG . "</th><th>" . LF_PILOT . "</th><th>" . LF_DEPARTURE . "</th><th>" . LF_ARRIVAL . "</th><th>" . LF_FLIGHTDATE . "</th><th>" . LF_FLIGHTTIME . "</th></tr></thead>";
									while ($row = $result->fetch_assoc()) {
										echo '<td>';
										echo '<a href="./index.php?page=pilot_details&pilot_id=' . $row["gvauser_id"] . '">' . $row["callsign"] . '</a></td><td>';
										echo $row["pilot_name"] . '</td><td>';
										echo '<IMG src="images/icons/ic_flight_takeoff_black_18dp_2x.png" WIDTH="20" HEIGHT="20" BORDER=0 ALT="">&nbsp;<IMG src="images/country-flags/'.$row["dep_country"].'.png" WIDTH="25" HEIGHT="20" BORDER=0 ALT="">&nbsp;<a href="./index.php?page=airport_info&airport=' . $row["departure"] . '">' . $row["departure"] . '</a></td><td>';
										echo '<IMG src="images/icons/ic_flight_land_black_18dp_2x.png" WIDTH="20" HEIGHT="20" BORDER=0 ALT="">&nbsp;<IMG src="images/country-flags/'.$row["arr_country"].'.png" WIDTH="25" HEIGHT="20" BORDER=0 ALT="">&nbsp;<a href="./index.php?page=airport_info&airport=' . $row["arrival"] . '">' . $row["arrival"] . '</a> </td><td>';
										echo $row["date_string"] . '</td><td>';
										echo '<i class="fa fa-clock-o"></i>&nbsp;'.convertTime($row["time"],$va_time_format). '</td></tr>';
									}
								?>
							</table>
						</div>
					</div>
                            </div>
                                <!-- Card Body -->


                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
								<!-- Card Header - Dropdown -->
								<div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tweets</h6>
                                </div>
                                <div class="card-body">
						<a class="twitter-timeline" href="https://twitter.com/ThorVirtual"
						   data-widget-id="525729765416660992">Tweets de @ThorVirtual</a>
						<script>!function (d, s, id) {
								var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
								if (!d.getElementById(id)) {
									js = d.createElement(s);
									js.id = id;
									js.src = p + "://platform.twitter.com/widgets.js";
									fjs.parentNode.insertBefore(js, fjs);
								}
							}(document, "script", "twitter-wjs");</script>
					</div>
								<div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Nuevos Pilotos</h6>
                                </div>
                                <div class="card-body">
						<?php
							$db = new mysqli($db_host , $db_username , $db_password , $db_database);
							$db->set_charset("utf8");
							if ($db->connect_errno > 0) {
								die('Unable to connect to database [' . $db->connect_error . ']');
							}
							$sql = "select gvauser_id, concat(callsign,'-',name,' ',surname) as pilot , DATE_FORMAT(register_date,'$va_date_format') as register_date from gvausers where activation=1 order by DATE_FORMAT(register_date,'%Y%m%d') desc limit 5";
							if (!$result = $db->query($sql)) {
								die('There was an error running the query [' . $db->error . ']');
							}
						?>
						<table class="table table-hover">
							<?php
								echo "<thead><tr><th>" . NEWPILOT . "</th><th>" . NEWJOINED . "</th></tr></thead>";
								while ($row = $result->fetch_assoc()) {
									echo "<td>";
									echo '<a href="./index.php?page=pilot_details&pilot_id=' . $row["gvauser_id"] . '">' . $row["pilot"] . '</a></td><td>';
									echo $row["register_date"] . '</td></tr>';
								}
							?>
						</table>
								</div>
								<!--<div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Musica para volar</h6>
                                </div>
                                <div class="card-body">
									<audio id="rpplayerek" preload="auto" controls="" loop=""><source src="https://s2.radioparty.pl:8015/stream?nocache=3169" type="audio/mpeg"></audio>
								</div>
                                 Card Body -->
                            </div>
                    </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Thor Airlines&copy; 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Login VAM system</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" id="login-form" action="./login.php" role="form"
				      method="post">
					<div class="form-group">
						<label class="control-label col-sm-2" for="user">Callsign:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="user" id="user"
							       placeholder="Enter Callsign">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="password">Password:</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" name="password" id="password"
							       placeholder="Enter password">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<div class="checkbox">
								<label><input type="checkbox"> Remember me</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<div class="checkbox">
								<a href="./index.php?page=password_recover">Recover Password</a>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-primary">Login</button>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>	
		<!-- Row 4 -->
		<br>
		<!-- HOME PAGE End -->
	<?php
	}
	if (!isset($_GET["page"]) || trim($_GET["page"]) == "") {
	} else {
		$Existe = file_exists($_GET["page"] . ".php");
		if ($Existe == true) {
			include($_GET["page"] . ".php");
		} else {
			echo "Page Not Found";
		}
	}
?>
</div>
<!--?php include('footer.php');?-->
</body>
</html>
