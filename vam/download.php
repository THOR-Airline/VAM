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
	require('check_login.php');
	require_once('create_template_fskeeper.php');
	require_once('create_template_fsacars.php');
	$id = $_SESSION["id"];
	$link_fskeeper = "tmp_templates/vam_fskeeper_$id.zip";
	$link_fsacars = "tmp_templates/vam_fsacars_$id.zip";
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading"><IMG src="images/icons/ic_cloud_download_white_18dp_1x.png">&nbsp;<?php echo DOWNLOADS; ?></div>
			<br>
			<div class="table-responsive">
			<!-- Table -->
				<table id="downloads" class="table table-hover">
					<thead><tr>
						<th> <?php echo DOWNLOAD_NAME; ?> </th>
						<th> <?php echo DOWNLOAD_LINK; ?> </th>
					</tr></thead>
					<tr>
						<td>
							SIM ACARS 1.4.0
						</td>
						<td>
							<a href="<?php echo "vamacars/SIM_ACARS_1.4.0.zip" ; ?>  ">Link</a>
						</td>
					</tr>
					<tr>
						<td>
							Aerobask DR401
						</td>
						<td>
							<a href="<?php echo "vamacars/Aerobask_DR401_Thor.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							Carenado Do228
						</td>
						<td>
							<a href="<?php echo "vamacars/Carenado Do228_Thor.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							Carenado Beechcraft 1900D
						</td>
						<td>
							<a href="<?php echo "vamacars/Carenado_B190_Thor.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							Carenado PC12
						</td>
						<td>
							<a href="<?php echo "vamacars/Carenado_pc12_THOR.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							Carenado Saab 340
						</td>
						<td>
							<a href="<?php echo "vamacars/Carenado_SF34_Thor.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							FlightFactor Boeing 757
						</td>
						<td>
							<a href="<?php echo "vamacars/FF757_THOR.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							FlightFactor Boeing 767F
						</td>
						<td>
							<a href="<?php echo "vamacars/FF767F_THOR.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							FlightFactor Airbus 350
						</td>
						<td>
							<a href="<?php echo "vamacars/FFa350_Thor.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							FlyJSim Boeing 722F
						</td>
						<td>
							<a href="<?php echo "vamacars/FlyJsim_722F - THOR.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							IXEG Boeing 733
						</td>
						<td>
							<a href="<?php echo "vamacars/IXEG_B733_Thor.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							RWDesign Cessna Citation Mustang
						</td>
						<td>
							<a href="<?php echo "vamacars/RWD_Citation mustang_Thor.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							COLIMATA Concorde FXP
						</td>
						<td>
							<a href="<?php echo "vamacars/CONC_Thor.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							Toliss Airbus 319
						</td>
						<td>
							<a href="<?php echo "vamacars/Toliss_a319_Thor.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							Toliss Airbus 321
						</td>
						<td>
							<a href="<?php echo "vamacars/Toliss_a321_Thor.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							Boeing 738 ZIBO MOD
						</td>
						<td>
							<a href="<?php echo "vamacars/ZIBO_738_Thor.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							Ground Handling
						</td>
						<td>
							<a href="<?php echo "vamacars/GHD_Thor.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							FlightFactor Boeing 777-300ER (77W)
						</td>
						<td>
							<a href="<?php echo "vamacars/77WThor.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							FlightFactor Boeing 757-200
						</td>
						<td>
							<a href="<?php echo "vamacars/757 THOR.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							FlightFactor Boeing 757-200 Repsol Honda MotoGP Tour
						</td>
						<td>
							<a href="<?php echo "vamacars/757 THOR RHT.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							Just FLight Cessna 152
						</td>
						<td>
							<a href="<?php echo "vamacars/JF_C152_Thor.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							Cessna 172 por defecto XPlane 11
						</td>
						<td>
							<a href="<?php echo "vamacars/C172_THR.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							Carenado Cessna 550 Citation II
						</td>
						<td>
							<a href="<?php echo "vamacars/C550_CitationII_Thor.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							FlyJSim Boeing 737-200
						</td>
						<td>
							<a href="<?php echo "vamacars/B732_Thor.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							Walter White Boeing 737-600
						</td>
						<td>
							<a href="<?php echo "vamacars/B736_Thor.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							Beechcraft Baron 58 por defecto XPlane 11
						</td>
						<td>
							<a href="<?php echo "vamacars/BE58_Thor.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							RWDesign Dehavilland DHC6 Twin Otter
						</td>
						<td>
							<a href="<?php echo "vamacars/DHC6_Thor.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							FlightFactor Airbus 320
						</td>
						<td>
							<a href="<?php echo "vamacars/FFA a320_Thor.rar" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							Torrent Spain UHD XPlane 11
						</td>
						<td>
							<a href="<?php echo "vamacars/SpainUHD.torrent" ; ?> " >Link</a>
						</td>
					</tr>
					<tr>
						<td>
							Airbus 320 NEO Microsoft Flight Simulator 2020
						</td>
						<td>
							<a href="<?php echo "vamacars/TEXTURE.THOR.rar" ; ?> " >Link</a>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
