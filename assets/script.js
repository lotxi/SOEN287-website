<!-- hide script from old browsers
function privacyPolicy() {
			alert('This privacy policy discloses the privacy practices for Stuff Seller. We are the sole owners of the information collected on this site. We only have access to/collect information that you voluntarily give us via email or web forms on this website. We will not sell or rent this information to anyone. We will use your information solely to advertise your items or to respond to your inquiries. We will not share your information with any third party outside of our organization, other than as necessary to fulfill your request. You may opt out of any future contacts from us at any time. You can do the following at any time by contacting us via the email address or phone number given on our website');
			}


function updateClock ( )
{
  var currentTime = new Date ( );

 var currentTime = new Date ( );
var currentHours = currentTime.getHours ( );
var currentMinutes = currentTime.getMinutes ( );
var currentSeconds = currentTime.getSeconds ( );
var currentMonth= currentTime.getMonth();

if (currentHours < 10)
	currentHours="0"+currentHours;
if (currentMinutes < 10)
	currentMinutes="0"+currentMinutes;
if (currentSeconds < 10)
	currentSeconds="0"+currentSeconds;
switch (currentMonth){
	case 0:
	currentMonth="January";
	break;
	case 1: 
	currentMonth="February";
	break;
	case 2:
	currentMonth="March";
	break;
	case 3: 
	currentMonth="April";
	break;
	case 4:
	currentMonth="May";
	break;
	case 5: 
	currentMonth="June";
	break;
	case 6:
	currentMonth="July";
	break;
	case 7: 
	currentMonth="August";
	break;
	case 8:
	currentMonth="September";
	break;
	case 9: 
	currentMonth="October";
	break;
	case 10:
	currentMonth="November";
	break;
	case 11: 
	currentMonth="December";
	break;
}

var currentTimeString= currentTime.getDate()+" "+currentMonth+" " +currentTime.getFullYear()+", " + currentHours+":"+currentMinutes+":"+currentSeconds;

  // Update the time display
  document.getElementById("dateAndTime").firstChild.nodeValue = currentTimeString;
}


 
// end hiding script from old browsers -->