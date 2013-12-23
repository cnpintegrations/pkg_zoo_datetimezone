<?php
/**
 * @version     1.0.0
 * @package     mod_zoo_filtertime
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Andreas Dionysopoulos & SIA OE <info@500web.gr> - http://www.500web.gr
 */


//-- No direct access
defined('_JEXEC') or die;
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

?>


<div id="zoo_filtertime_datetime-container" class="<?php //echo $moduleclass_sfx ?>" style="width: 718px;">
	<!--<div id="zoo_filtertime_date">
	<?php 	$showdate=JFactory::getDate();
			//echo JHTML::_('date',$showdate,JText::_('DATE_FORMAT_LC3'));
			
	?>
	</div>-->
	
	<div id="worldzoo_filtertime1"></div>
	
	
	<p style="width: 500px; margin-left: 10px; float: left; color: rgb(255, 255, 255) ! important; margin-bottom: 0px; margin-top: 5px;" id="time_filter_links">
		<a style="color: #FFFFFF;" href="buzzflash-headlines">All</a> | 
		<a style="color: #FFFFFF;" href="date-filter/11-date-filter?time=1<?php if($_REQUEST['timezone']){ ?>&timezone=<?php echo $_REQUEST['timezone'];} ?>">Past 1 Hour</a> | 
		<a style="color: #FFFFFF;" href="date-filter/11-date-filter?time=2<?php if($_REQUEST['timezone']){ ?>&timezone=<?php echo $_REQUEST['timezone'];} ?>">Past 2 Hours</a> | 
		<a style="color: #FFFFFF;" href="date-filter/11-date-filter?time=6<?php if($_REQUEST['timezone']){ ?>&timezone=<?php echo $_REQUEST['timezone'];} ?>">Past 6 Hours</a> | 
		<a style="color: #FFFFFF;" href="date-filter/11-date-filter?time=12<?php if($_REQUEST['timezone']){ ?>&timezone=<?php echo $_REQUEST['timezone'];} ?>">Past 12 Hours</a> | 
		<a style="color: #FFFFFF;" href="date-filter/11-date-filter?time=24<?php if($_REQUEST['timezone']){ ?>&timezone=<?php echo $_REQUEST['timezone'];} ?>">Past 24 Hours</a>
	</p>


	<div id="zoo_filtertimes" style="width: 130px; float: left; margin-top: 0px; margin-left: -5px; padding-top: 5px;">
		<select id="gmt" style="width: 137px; height: 19px;" name="city" size="1" onchange="updatezoo_filtertime(this);"> 
			<option value="" <?php if($_REQUEST['timezone']==null){echo 'selected';} ?> >LOCAL</option>
			<option value="0;north" <?php if($_REQUEST['timezone']=='0;north'){echo 'selected1';}?> >ZULU</option> 
			<option value="-12;south" <?php if($_REQUEST['timezone']=='-12;south'){echo 'selected';}?> >GMT-12:00) International Date Line West</option>
			<option value="-11;south" <?php if($_REQUEST['timezone']=='-11;south'){echo 'selected';}?> >(GMT-11:00) Coordinate Universal Time</option>
			<option value="-10;south" <?php if($_REQUEST['timezone']=='-10;south'){echo 'selected';}?> >(GMT-10:00) Hawaii</option>
			<option value="-9;north" <?php if($_REQUEST['timezone']=='-9;north'){echo 'selected';}?> >(GMT-09:00) Alaska</option>
			<option value="-8;north" <?php if($_REQUEST['timezone']=='-8;north'){echo 'selected';}?> >(GMT-08:00) Baja California</option>
			<option value="-8;north" <?php if($_REQUEST['timezone']=='-8;north'){echo 'selected';}?> >(GMT-08:00) Pacific Time (US & Canada)</option>
			<option value="-7;north" <?php if($_REQUEST['timezone']=='-7;north'){echo 'selected';}?> >(GMT-07:00) Tijuana</option>
			<option value="-7;north" <?php if($_REQUEST['timezone']=='-7;north'){echo 'selected';}?> >(GMT-07:00) Mountain Time (US & Canada)</option>
			<option value="-7;north" <?php if($_REQUEST['timezone']=='-7;north'){echo 'selected';}?> >(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
			<option value="-7;south" <?php if($_REQUEST['timezone']=='-7;south'){echo 'selected';}?> >(GMT-07:00) Arizona</option>
			<option value="-6;south" <?php if($_REQUEST['timezone']=='-6;south'){echo 'selected';}?> >(GMT-06:00) Saskatchewan</option>
			<option value="-6;north" <?php if($_REQUEST['timezone']=='-6;north'){echo 'selected';}?> >(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
			<option value="-6;north" <?php if($_REQUEST['timezone']=='-6;north'){echo 'selected';}?> >(GMT-06:00) Central Time (US & Canada)</option>
			<option value="-6;south" <?php if($_REQUEST['timezone']=='-6;south'){echo 'selected';}?> >(GMT-06:00) Central America</option>
			<option value="-5;north" <?php if($_REQUEST['timezone']=='-5;north'){echo 'selected';}?> >(GMT-05:00) Indiana (East)</option>
			<option value="-5;north" <?php if($_REQUEST['timezone']=='-5;north'){echo 'selected';}?> >(GMT-05:00) Eastern Time (US & Canada)</option>
			<option value="-5;south" <?php if($_REQUEST['timezone']=='-5;south'){echo 'selected';}?> >(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
			<option value="-4.30;north" <?php if($_REQUEST['timezone']=='-4.30;north'){echo 'selected';}?> >(GMT-04:30) Caracas</option>
			<option value="-4;south" <?php if($_REQUEST['timezone']=='-4;south'){echo 'selected';}?> >(GMT-04:00) Santiago</option>
			<option value="-4;south" <?php if($_REQUEST['timezone']=='-4;south'){echo 'selected';}?> >(GMT-04:00) Georgetown, Manaus, La Paz ,San Man</option>
			<option value="-4;north" <?php if($_REQUEST['timezone']=='-4;north'){echo 'selected';}?> >(GMT-04:00) Atlantic Time (Canada)</option>
			<option value="-3.30;south" <?php if($_REQUEST['timezone']=='-3.30;south'){echo 'selected';}?> >(GMT-03:30) Newfoundland</option>
			<option value="-3;south" <?php if($_REQUEST['timezone']=='-3;south'){echo 'selected';}?> >(GMT-03:00) Montevideo</option>
			<option value="-3;north" <?php if($_REQUEST['timezone']=='-3;north'){echo 'selected';}?> >(GMT-03:00) Greenland</option>
			<option value="-3;south" <?php if($_REQUEST['timezone']=='-3;south'){echo 'selected';}?> >(GMT-03:00) Buenos Aires</option>
			<option value="-3;south" <?php if($_REQUEST['timezone']=='-3;south'){echo 'selected';}?> >(GMT-03:00) Brasilia</option>
			<option value="-2;north" <?php if($_REQUEST['timezone']=='-2;north'){echo 'selected';}?> >(GMT-02:00) Mid-Atlantic</option>
			<option value="-1;south" <?php if($_REQUEST['timezone']=='-1;south'){echo 'selected';}?> >(GMT-01:00) Cape Verde Is.</option>
			<option value="-1;north" <?php if($_REQUEST['timezone']=='-1;north'){echo 'selected';}?> >(GMT-01:00) Azores</option>
			<option value="0;south" <?php if($_REQUEST['timezone']=='0;south'){echo 'selected';}?> >(GMT) Casablanca</option>
			<option value="0;north" <?php if($_REQUEST['timezone']=='0;north'){echo 'selected';}?> >(GMT) GMT: Dublin, Edinburgh, Lisbon, London</option>
			<option value="0;south" <?php if($_REQUEST['timezone']=='0;south'){echo 'selected';}?> >(GMT) Monrovia, Reykjavik</option>
			<option value="1;north" <?php if($_REQUEST['timezone']=='1;north'){echo 'selected';}?> >(GMT+01:00) Amsterdam,Berlin,Bern,Rome,Stockholm,Vienna</option>
			<option value="1;north" <?php if($_REQUEST['timezone']=='1;north'){echo 'selected';}?> >(GMT+01:00) Belgrade,Bratislava,Budapest,Ljubljana,Prague</option>
			<option value="1;north" <?php if($_REQUEST['timezone']=='1;north'){echo 'selected';}?> >(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
			<option value="1;north" <?php if($_REQUEST['timezone']=='1;north'){echo 'selected';}?> >(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
			<option value="1;south" <?php if($_REQUEST['timezone']=='1;south'){echo 'selected';}?> >(GMT+01:00) West Central Africa</option>
			<option value="2;north" <?php if($_REQUEST['timezone']=='2;north'){echo 'selected';}?> >(GMT+02:00) Athens, Bucharest, Istanbul</option>
			<option value="2;north" <?php if($_REQUEST['timezone']=='2;north'){echo 'selected';}?> >(GMT+02:00) Beirut</option>
			<option value="2;south" <?php if($_REQUEST['timezone']=='2;south'){echo 'selected';}?> >(GMT+02:00) Cairo</option>
			<option value="2;south" <?php if($_REQUEST['timezone']=='2;south'){echo 'selected';}?> >(GMT+02:00) Harare, Pretoria</option>
			<option value="2;north" <?php if($_REQUEST['timezone']=='2;north'){echo 'selected';}?> >(GMT+02:00) Helsinki,Kyiv,Riga,Sofia,Tallinn,Vilnius</option>
			<option value="2;north" <?php if($_REQUEST['timezone']=='2;north'){echo 'selected';}?> >(GMT+02:00) Jerusalem</option>
			<option value="2;north" <?php if($_REQUEST['timezone']=='2;north'){echo 'selected';}?> >(GMT+02:00) Minsk</option>
			<option value="3;south" <?php if($_REQUEST['timezone']=='3;south'){echo 'selected';}?> >(GMT+03:00) Baghdad</option>
			<option value="3;south" <?php if($_REQUEST['timezone']=='3;south'){echo 'selected';}?> >(GMT+03:00) Kuwait, Riyadh</option>
			<option value="3;north" <?php if($_REQUEST['timezone']=='3;north'){echo 'selected';}?> >(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
			<option value="3;south" <?php if($_REQUEST['timezone']=='3;south'){echo 'selected';}?> >(GMT+03:00) Nairobi</option>
			<option value="3.30;north" <?php if($_REQUEST['timezone']=='3.30;north'){echo 'selected';}?> >(GMT+03:30) Tehran</option>
			<option value="4;south" <?php if($_REQUEST['timezone']=='4;south'){echo 'selected';}?> >(GMT+04:00) Abu Dhabi, Muscat</option>
			<option value="4;north" <?php if($_REQUEST['timezone']=='4;north'){echo 'selected';}?> >(GMT+04:00) Baku</option>
			<option value="4;south" <?php if($_REQUEST['timezone']=='4;south'){echo 'selected';}?> >(GMT+04:00) Port Louis</option>
			<option value="4;south" <?php if($_REQUEST['timezone']=='4;south'){echo 'selected';}?> >(GMT+04:00) Tiflida</option>
			<option value="4.30;south" <?php if($_REQUEST['timezone']=='4.30;south'){echo 'selected';}?> >(GMT+04:30) Kabul</option>
			<option value="5;south" <?php if($_REQUEST['timezone']=='5;south'){echo 'selected';}?> >(GMT+05:00) Islamabad, Karachi</option>
			<option value="5;south" <?php if($_REQUEST['timezone']=='5;south'){echo 'selected';}?> >(GMT+05:00) Tashkent</option>
			<option value="5.30;south" <?php if($_REQUEST['timezone']=='5.30;south'){echo 'selected';}?> >(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
			<option value="5.45;south" <?php if($_REQUEST['timezone']=='5.45;south'){echo 'selected';}?> >(GMT+05:45) Kathmandu</option>
			<option value="6;south" <?php if($_REQUEST['timezone']=='6;south'){echo 'selected';}?> >(GMT+06:00) Ekaterinburg</option>
			<option value="6;north" <?php if($_REQUEST['timezone']=='6;north'){echo 'selected';}?> >(GMT+06:00) Almaty, Novosibirsk</option>
			<option value="6;south" <?php if($_REQUEST['timezone']=='6;south'){echo 'selected';}?> >(GMT+06:00) Astana, Dhaka</option>
			<option value="6.30;south" <?php if($_REQUEST['timezone']=='6.30;south'){echo 'selected';}?> >(GMT+06:30) Yangon (Rangoon)</option>
			<option value="7;south" <?php if($_REQUEST['timezone']=='7;south'){echo 'selected';}?> >(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
			<option value="7;north" <?php if($_REQUEST['timezone']=='7;north'){echo 'selected';}?> >(GMT+07:00) Krasnoyarsk</option>
			<option value="8;south" <?php if($_REQUEST['timezone']=='8;south'){echo 'selected';}?> >(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
			<option value="8;south" <?php if($_REQUEST['timezone']=='8;south'){echo 'selected';}?> >(GMT+08:00) Irkutsk, Ulaan Bataar</option>
			<option value="8;south" <?php if($_REQUEST['timezone']=='8;south'){echo 'selected';}?> >(GMT+08:00) Kuala Lumpur, Singapore</option>
			<option value="8;south" <?php if($_REQUEST['timezone']=='8;south'){echo 'selected';}?> >(GMT+08:00) Perth</option>
			<option value="8;south" <?php if($_REQUEST['timezone']=='8;south'){echo 'selected';}?> >(GMT+08:00) Taipei</option>
			<option value="8;north" <?php if($_REQUEST['timezone']=='8;north'){echo 'selected';}?> >(GMT+09:00) Osaka, Sapporo, Tokyo</option>
			<option value="9;south" <?php if($_REQUEST['timezone']=='9;south'){echo 'selected';}?> >(GMT+09:00) Seoul</option>
			<option value="9.30;south" <?php if($_REQUEST['timezone']=='9.30;south'){echo 'selected';}?> >(GMT+09:30) Adelaide, Darwin</option>
			<option value="10;south" <?php if($_REQUEST['timezone']=='10;south'){echo 'selected';}?> >(GMT+10:00) Yakutsk</option>
			<option value="10;south" <?php if($_REQUEST['timezone']=='10;south'){echo 'selected';}?> >(GMT+10:00) Brisbane</option>
			<option value="10;south" <?php if($_REQUEST['timezone']=='10;south'){echo 'selected';}?> >(GMT+10:00) Canberra, Melbourne, Sydney</option>
			<option value="10;south" <?php if($_REQUEST['timezone']=='10;south'){echo 'selected';}?> >(GMT+10:00) Guam, Port Moresby</option>
			<option value="10;south" <?php if($_REQUEST['timezone']=='10;south'){echo 'selected';}?> >(GMT+10:00) Hobart</option>
			<option value="11;south" <?php if($_REQUEST['timezone']=='11;south'){echo 'selected';}?> >(GMT+11:00) Vladivostok</option>
			<option value="11;south" <?php if($_REQUEST['timezone']=='11;south'){echo 'selected';}?> >(GMT+11:00) Solomon Is., New Caledonia</option>
			<option value="12;south" <?php if($_REQUEST['timezone']=='12;south'){echo 'selected';}?> >(GMT+12:00) Magadan</option>
			<option value="12;south" <?php if($_REQUEST['timezone']=='12;south'){echo 'selected';}?> >(GMT+12:00) Auckland, Wellington</option>
			<option value="12;south" <?php if($_REQUEST['timezone']=='12;south'){echo 'selected';}?> >(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
			<option value="13;south" <?php if($_REQUEST['timezone']=='13;south'){echo 'selected';}?> >(GMT+13:00) Nuku'alofa</option> 
		</select>
	 </div>
	
	
</div>

