// Set the date we're counting down to
var stop = false;

function countDown(sec){
	// Update the count down every 1 second
	var x = setInterval(function() {
		alert('ok');
    document.getElementById("msgWait").innerHTML =  sec + "s ";

		// If the count down is over, write some text 
		if (sec < 0) {
			clearInterval(x);
			
			window.location.href = "../../index.html">';
		}
		sec--;
	}, 1000);
	
}
