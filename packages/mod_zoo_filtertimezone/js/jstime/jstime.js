/**
 * @version     1.0.0
 * @package     mod_zoo_filtertimezone
 * @copyright   Copyright (C) 2012. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Andreas Dionysopoulos & SIA OE <info@500web.gr> - http://www.500web.gr
 */


zone=0;
isitlocal=true;
ampm='';



function updatezoo_filtertimezone(z, x){
zone=z.options[z.selectedIndex].value;
//alert(x);
var message = zone;
window.location.href = 'http://buzzflash.osdcs.com/date-filter/11-date-filter?time='+x+'&timezone='+message;
isitlocal=(z.options[0].selected)?true:false;
//var e = document.getElementById("gmt");
//var strGmt = zone.options[e.selectedIndex].value;
//var n=strGmt.indexOf(";");
//alert(n);
//var message = zone;
//window.location.href = 'http://buzzflash.osdcs.com/index.php?option=com_zoo&view=frontpage&layout=frontpage&Itemid=152&timezone='+message;
	
}
function checkTimeZone() {
   var rightNow = new Date();
   var date1 = new Date(rightNow.getFullYear(), 0, 1, 0, 0, 0, 0);
   var date2 = new Date(rightNow.getFullYear(), 6, 1, 0, 0, 0, 0);
   var temp = date1.toGMTString();
   var date3 = new Date(temp.substring(0, temp.lastIndexOf(" ")-1));
   var temp = date2.toGMTString();
   var date4 = new Date(temp.substring(0, temp.lastIndexOf(" ")-1));
   var hoursDiffStdTime = (date1 - date3) / (1000 * 60 * 60);
   var hoursDiffDaylightTime = (date2 - date4) / (1000 * 60 * 60);
   if (hoursDiffDaylightTime == hoursDiffStdTime) { 
     // alert("Time zone is GMT " + hoursDiffStdTime + ".\nDaylight Saving Time is NOT observed here.");
   } else {
   //   alert("Time zone is GMT " + hoursDiffStdTime + ".\nDaylight Saving Time is observed here.");
   
   }
   
   return hoursDiffStdTime;
}

function getTimezone(){

	var e = document.getElementById("gmt");
    	var strGmt = e.options[e.selectedIndex].value;
	//alert(strGmt);
	var n=strGmt.indexOf(";");
	//alert(n);
	//alert(strGmt.substring(0,n));
	
	return strGmt.substring(0,n);
}
function getHemisphere(){

	var e = document.getElementById("gmt");
    var strHemisphere = e.options[e.selectedIndex].value;
	var n=strHemisphere.indexOf(";");

	return strHemisphere.substring(n+1);
}

function WorldZooFiltertimezone(){
	now=new Date();
	ofst=now.getTimezoneOffset()/60;
	//alert(ofst);
	
	secs=now.getSeconds();
	sec=-1.57+Math.PI*secs/30;
	mins=now.getMinutes();
	min=-1.57+Math.PI*mins/30;
	var timezone=getTimezone();
	var hemisphere=getHemisphere();
	var hr_min=0;
	var n=timezone.indexOf(".");
	if (n>0){
		var timezone_hr=timezone.substring(0,n);
		var timezone_min=timezone.substring(n+1);
		var hr_min;
		timezone=timezone_hr;
		mins=now.getMinutes()+parseInt(timezone_min);
		if (mins>=60){
			mins=mins-60;
			hr_min=1;
		}else{
			hr_min=0;
		}

	}
	
		
	if (isitlocal){
		hr=now.getHours();
	}else{
		var y= new Date().getFullYear();
		var jan= -(new Date(y, 0, 1, 0, 0, 0, 0).getTimezoneOffset()),
		jul= -(new Date(y, 6, 1, 0, 0, 0, 0).getTimezoneOffset()),
		diff= jan-jul;
		//alert('diff:'+diff);
		
		if(diff> 0){
			if (hemisphere=='north'){
				hr=(now.getHours()+parseInt(hr_min) + parseInt(ofst)) + parseInt(timezone)+1;
			}else{
				//alert('south');
				hr=(now.getHours()+parseInt(hr_min) + parseInt(ofst)) + parseInt(timezone);
			}
			//return 'N';
		}	
		if(diff< 0){ 
			if (hemisphere=='north'){
			//	alert('north');
				hr=(now.getHours()+parseInt(hr_min) + parseInt(ofst)) + parseInt(timezone)+1;
			}else{
				//alert('south');
				hr=(now.getHours()+parseInt(hr_min) + parseInt(ofst)) + parseInt(timezone);
			}
			
		}
	}
	

	if (hr < 0){
		hr+=24;
	}
	if (hr > 23) {
		hr-=24;
	}
	
	var finaltime=hr+':'+((mins < 10)?"0"+mins:mins)+':'+((secs < 10)?"0"+secs:secs);

	if (document.all){
		worldzoo_filtertimezone.innerHTML=finaltime;
	}else{
		if (document.getElementById){
			document.getElementById("worldzoo_filtertimezone").innerHTML=finaltime;
		}else{
			if (document.layers){
				document.worldzoo_filtertimezone.document.worldzoo_filtertimezone2.document.write(finaltime);
			}
			document.worldzoo_filtertimezone.document.worldzoo_filtertimezone2.document.close()
		}
	}
	var message = timezone;http://buzzflash.osdcs.com/index.php?option=com_zoo&view=frontpage&layout=frontpage&Itemid=152
	window.location.href = 'http://buzzflash.osdcs.com/index.php?option=com_zoo&view=frontpage&layout=frontpage&Itemid=152&'+message;
	//alert(timezone);
	setTimeout('WorldZooFiltertimezone()',1000);
	
}

window.onload=WorldZooFiltertimezone


