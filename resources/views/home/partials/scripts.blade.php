<script type='text/javascript'>

var months = ['January', 'February', 'March', 'April', 'Mey', 'June', 'July', 'August', 'September', 'October', 'November', 'Desember'];

var myDays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friyday', 'Saturday'];

var date = new Date();

var day = date.getDate();

var month = date.getMonth();

var thisDay = date.getDay(),

    thisDay = myDays[thisDay];

var yy = date.getYear();

var year = (yy < 1000) ? yy + 1900 : yy;

tanggallengkap = thisDay + ', ' + day + ' ' + months[month] + ' ' + year;  
document.getElementById("time").innerHTML = tanggallengkap;


const time = new Date().getHours();
let greeting;

if (time < 10) {
greeting = "Good Morning";
} else if (time < 15) {
greeting = "Good Afternoon";
} else if (time < 19) {
greeting = "Good Afternoon";
} else {
greeting = "Good Evening";
}

document.getElementById('greetings').innerHTML = greeting ;
</script>