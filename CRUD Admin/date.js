function realdate() {

	var date = new Date();

	document.getElementById('date').innerHTML = date;

	/*var rtclock = new Date();

	var hours = rtclock.getHours();
	var minutes = rtclock.getMinutes();
	var seconds = rtclock.getSeconds();

	//add AM and PM system

	var ampm = ( hours < 12 ) ? "AM" : "PM";

	//convert to 24 hours format

	hours = ( hours > 12 ) ? hours - 12 : hours;

	//pad the hours, minutes and seconds with leading zeros

	hours = ("0" + hours).slice(-2);
	minutes = ("0" + minutes).slice(-2);
	seconds = ("0" + seconds).slice(-2);

	//display the clock

	document.getElementById('clock').innerHTML = 
		hours + " : " + minutes + " : " + seconds + "\t" + ampm;
	var t = setTimeout(realtimeclock, 500);*/






}