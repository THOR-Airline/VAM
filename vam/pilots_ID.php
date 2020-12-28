<?php
	/**
	 * @Project: Virtual Airlines Manager (VAM)
	 * @Author: Alejandro Garcia
	 * @Web http://virtualairlinesmanager.net
	 * Copyright (c) 2013 - 2016 Alejandro Garcia
	 * VAM is licenced under the following license:
	 *   Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International (CC BY-NC-SA 4.0)
	 *   View license.txt in the root, or visit http://creativecommons.org/licenses/by-nc-sa/4.0/
	 */
?>
<?php include('va_parameters.php');
	$db = new mysqli($db_host , $db_username , $db_password , $db_database); $db->set_charset("utf8"); if ($db->connect_errno > 0) {
	die('Unable to connect to database [' . $db->connect_error . ']');
} $sql = "select * from va_parameters "; if (!$result = $db->query($sql)) {
	die('There was an error running the query [' . $db->error . ']');
} while ($row = $result->fetch_assoc()) {
	$no_count_rejected = $row["no_count_rejected"];
} if ($no_count_rejected == 1) {
	$sql = "select a.name as airport_name, iso_country, gu.hub_id as hubid,v.gva_hours,transfered_hours,gvauser_id,callsign,surname,activation,vatsimid,ivaovid ,transfered_hours, rank, gu.name as name,hub,location, r.image_url as rank_image, iso2, short_name from country_t c, gvausers gu, ranks r, hubs h, (select 0 + sum(time) as gva_hours, pilot from v_pilot_roster_rejected vv group by pilot) as v , airports a where a.ident=gu.location and gu.rank_id=r.rank_id and h.hub_id=gu.hub_id and gu.activation
<>0 and gu.country=c.iso2 and v.pilot = gu.gvauser_id order by callsign asc";
} else {
	$sql = "select a.name as airport_name, iso_country, gu.hub_id as hubid,v.gva_hours,transfered_hours,gvauser_id,callsign,surname,activation,vatsimid,ivaovid ,transfered_hours, rank, gu.name as name,hub,location, r.image_url as rank_image, iso2, short_name from country_t c, gvausers gu, ranks r, hubs h, (select 0 + sum(time) as gva_hours, pilot from v_pilot_roster vv group by pilot) as v , airports a where a.ident=gu.location and gu.rank_id=r.rank_id and h.hub_id=gu.hub_id and gu.activation
    <>0 and gu.country=c.iso2 and v.pilot = gu.gvauser_id order by callsign asc";
} if (!$result = $db->query($sql)) {
	die('There was an error running the query [' . $db->error . ']');
}?>
<?php
						if ($ivao == 1) echo '<th>' . IVAOID . '</th>';
						while ($row = $result->fetch_assoc()) {
						if ($ivao == 1) {
							echo '
                                <td><a href="https://www.ivao.aero/Member.aspx?ID=' . $row["ivaovid"] . '" target="_blank" rel="noopener noreferrer"><img class="aligncenter" src="https://status.ivao.aero/R/' . $row["ivaovid"] . '.png" /></a>';
								'</td>';
						}
						echo '</tr>';
					} $db->close(); ?>
					