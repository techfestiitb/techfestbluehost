@extends('kannu.topLayer')

@section('title','Solarizer| Workshops ')




@section('styling')

.content-mobile li{font-size: 3vh;padding: 2vh;}

.overlay-content{top:20%;}
.psMobi{width:100%;text-align:center;font-size:2vh;margin: 1vh;margin-top:0.5vh;}
@media (max-width: 62em) and (orientation: landscape){
.parent {
    height: 50%;
}
.heading{margin-top:5}
.headMobile{}

.content-mobile li{font-size: 3vh;padding: 0vh;}
.overlay-content{top:10%;}
.psMobi{margin: 0.1vh;}
.grid{
	position: fixed;
    left: 60%;
}
#mobiPrize{
	<!-- font-size:3vh; -->
	text-align:center;
}
.centerLapi{
		height: 50% !important;
	}
.hrMobi{width:96%;margin-bottom:1vh}
<!-- .overlay-content{top:15%;} -->
}

@endsection

@section('style')
<style type="text/css">

	@media(min-width: 62em){
			body{
				height: 100%;
			}
			html{
				height: 100%;

			}
			#overall{
				height:100%;
			}

	}
	.centerLapi{
		height: 50% !important;
	}

</style>


@endsection

@section('centerOne')



<!-- center element left section for laptop compleate -->
<div style="" class="contentLaptop">
	<img src="img/eventFinal/tabImg.png" class="img-responsive" style="max-width: 107%;">
	<div style="position: fixed;
	top: 23vh;
	left: 10vw;
	">

	<h4 style="font-family: 'pirulen';    font-size: 3vh;
	letter-spacing: 3px;color: #fefefe" id="abhinav">Solarizer Workshop</h4>
	<hr style="margin-top: 0px;
	border: 1.5px solid #dafcff;
	-webkit-box-shadow: 0px 0px 289px 104px rgba(0,131,177,0.77);
-moz-box-shadow: 0px 0px 289px 104px rgba(0,131,177,0.77);
box-shadow: 0px 0px 13px 2px rgba(0,131,177,0.77);
">

</div>
<!-- <div class="row" > -->

<!-- first extend  -->
	<div class="col-sm-5 centerLapi" style="position: fixed;
	top: 32vh;font-size: 1.8rem;height: 36%;overflow: scroll;overflow-x: hidden;
	left: 9vw;color: #fefefe;font-family: 'Play', sans-serif;width:50%;
	">

	<div id="kaushik0" class="kaushik" style="display: block;">
		<p class="content-sub-heading" style="font-size:25px;">ABOUT</p>
		<p style="color: yellow">Date: 28th-29th December 2017<br>
      Venue: LA 301<br>
      Reporting Time: 8am<br>
    Time: 9am-5pm</p><br>
		<p>
		It aims to make students solar smart and provide them with theoretical and practical hands on training in the field of solar energy. The courses have been designed such that anyone can learn and acquire the knowledge from basic to advanced, thus gaining thorough understanding of the concepts.
		</p>
	</div>
	<div id="kaushik1" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">DETAILS</p>
		<p>
		<b> Date:</b> 28th-29th December 2017<br>

		<br><b>Duration:</b>  2 Days [8 hrs per day]<br>

		<br><b>Venue:</b> IIT Bombay <br>

		<br><b>Cost of Workshop:</b>₹ 2,000/- per person<br>
        <br><b>No. of Team Members: </b> 1<br>
         <br><b>Refund Deadline:</b> 1st November 2017, No Refunds will be entertained after the Deadline.<br>
		        <br><b>**Limited number of seats</b><br>
<br><b>**If the Workshop gets cancelled, all the participants will be given full refund, irrespective of the Deadline.</b><br>
		<!-- <br><br><b>Team Specification:</b>Participants will have to register individually. <br> -->
		<!-- <br><b>*No refunds will be entertained </b> -->
		</p>
	</div>
	<div id="kaushik2" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">CONTENT</p>
		<p>

		<b>DAY 1:</b><br><br>
			<b>Introduction​ ​talk</b><br>
<ul>
 <li>Solar Energy Scenario in India & Job Opportunities</li>
 <li>Basics of Solar Photovoltaic Technology (PV)</li></ul>
<br><br>
<b>
11:30 PM- Talk on Energy Scenario in India - Mr Rajesh Kumar, Regional Executive Director (Western Region      1), NTPC Limited
</b>
<br><br>


<br>
 ​<b>Simulation​ ​&​ ​PV​ ​System​ ​Design</b><br><ul>
 <li>Basics of simulation tool</li>
 <li>Concepts of PV System Design</li>
 <li>Design a Solar Power Plant to light/power your own house/college</li>
 <li>Understand the Variables that determine PV system size based on international model</li>
</ul><br>
<b>Understand the system design using simulation tool</b><br>
<ul> <li>Hands on experience to determine</li>
 <li>PV size, Inverter & Battery Capacity using tool</li>
 <li>Estimation of monthly power generation and financial savings</li>
</ul><br>
<b>Day​ ​2:</b><br>
 ​<br><b>Hands​ ​on​ ​Session</b><br>
<ul><li>Solar Operated Mobile Charger</li>
<li>Design and build your own Solar Mobile Charger</li>
<li>Get practical insight into basic and advanced features</li>
<li>Light seeking Robot</li>
 <li>Design and build your own Vision 180</li>
 <li>Get practical insight into basic and advanced features</li>
</ul>
<br><b>Product​ ​Demonstration​ ​&​ ​Discussion</b><br>
<ul><li>Solar Tracker</li>
<li>Solar intensity meter</li>
</ul>
<br>For more detail Content <a href="/resource/workshop/Solarizer1.pdf">Click Here</a>


		</p>
	</div>
	<div id="kaushik3" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">RULES</p>
		<p>
			<b>Eligibility :   </b>
            <br>Participants having a valid ID card of their respective educational institutions are eligible for the workshop. <br>

            <br><b>Team specifications  :</b>
     		<br>Participants will have to register individually. <br>
			<br><b>Prerequisites :</b>
			<br>Each participant should bring one laptop with CD-ROM drive, a dongle/Jio and a working laptop Webcam preferably with Windows 8 OS or above (No VISTA).  <br>
			<br><b>Certificate criterion :</b>
            <br>Participants should be present in all the sessions. Failing this, no certificate will be awarded to the participant.<br>
		</p>
	</div>
	<div id="kaushik4" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">CONTACT US</p>
		<div class="col-sm-12">
			<p>
				<p>Himanshu kala<br>
					himanshu@techfest.org<br>
					+91 8828290544<br>
				<br></p>
			</p>
		</div>
		<div class="col-sm-2"></div>
		<!-- <div class="col-sm-5">
			<p>Himanshu Kala<br>
 			Events Manager <br>
			himanshu@techfest.org<br>
			+91 8828290544
		</div> -->
	</div>

<div style="height:2vh;"></div>
</div>




<div class="row comeon" style="position:relative; left:10vh;">
	<div class="col-sm-4">
        <section class="demo-3" class="lapitopi" >
				<div class="grid">
					<a  id="compi01" href="#">
						<div class="box" style="margin-left: 0rem;">
							<p class="btnText" style="color:#dafdff;" >
								     DETAILS
							</p>
							<a href="/resource/workshop/Solarizer1.pdf" target="_blank"> <!--======================================================== -->
							<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
								<line class="top" x1="0" y1="0" x2="200" y2="0"/>
								<line class="left" x1="0" y1="0" x2="0" y2="50"/>
								<line class="bottom" x1="0" y1="50" x2="200" y2="50"/>
								<line class="right" x1="200" y1="50" x2="200" y2="0"/>

								<line id="ro01" x1="0" y1="0" x2="200" y2="0"/>
								<line id="ro02" x1="0" y1="0" x2="0" y2="50"/>
								<line id="ro03" x1="0" y1="50" x2="200" y2="50"/>
								<line id="ro04" x1="200" y1="50" x2="200" y2="0"/>
							</svg>
							</a>

						</div>
					</a>
				</div>
		</section>
    </div>
	<div class="col-sm-4">
		<div class="col-sm-12 prize">
			<p class="prizes">Date<br> 28-29th December 2017</p>
		</div>
	</div>
	<div class="col-sm-4">
        <section class="demo-3" class="lapitopi">
				<div class="grid">
					<a id="compi02" href="#">
						<div class="box" style="margin-left: 0rem;">
							<p class="btnText" style="color:#dafdff" id="compiName02">
								<a href="#" id="compiName02" style="color:#dafdff">CLOSEDf
								 !</a>
							</p>
							<a id="compi02" href="#"><!-- ============================================== -->
							<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
								<line class="top" x1="0" y1="0" x2="200" y2="0"/>
								<line class="left" x1="0" y1="0" x2="0" y2="50"/>
								<line class="bottom" x1="0" y1="50" x2="200" y2="50"/>
								<line class="right" x1="200" y1="50" x2="200" y2="0"/>

								<line id="ro01" x1="0" y1="0" x2="200" y2="0"/>
								<line id="ro02" x1="0" y1="0" x2="0" y2="50"/>
								<line id="ro03" x1="0" y1="50" x2="200" y2="50"/>
								<line id="ro04" x1="200" y1="50" x2="200" y2="0"/>
							</svg>
							</a>
						</div>
					</a>
				</div>
		</section>
	</div>
</div>
</div>

<!-- center element left section for laptop compleate -->



<!-- center elements start for mobile -->


<div class="mobileCenter">

	<h4 id="heading" class="heading">Solarizer Workshop</h4>

	<hr class="hrMobi">


<div class="parent" style="font-family: 'Play';">

		<div class="child">
			<p class="headMobile">ABOUT</p>
			<p class="contentMobile">
				<p style="color: yellow">Date: 28th-29th December 2017<br>
      Venue: LA 301<br>
      Reporting Time: 8am<br>
    Time: 9am-5pm</p><br>
				It aims to make students solar smart and provide them with theoretical and practical hands on training in the field of solar energy. The courses have been designed such that anyone can learn and acquire the knowledge from basic to advanced, thus gaining thorough understanding of the concepts.
			</p>
		</div>

		<div class="child">
			<p class="headMobile">DETAILS</p>
			<p class="contentMobile">
				<b> Date:</b> 28th-29th December 2017<br>

		<br><b>Duration:</b>  2 Days [8 hrs per day]<br>

		<br><b>Venue:</b> IIT Bombay <br>

		<br><b>Cost of Workshop:</b>₹ 2,000/- per person<br>
        <br><b>No. of Team Members: </b> 1<br>
         <br><b>Refund Deadline:</b> 1st November 2017, No Refunds will be entertained after the Deadline.<br>
		        <br><b>**Limited number of seats</b><br>
				<!-- <br><br><b>Team Specification:</b>Participants will have to register individually. <br> -->
				<!-- <br><b>*No refunds will be entertained </b> -->
		</div>


		<div class="child">
			<p class="headMobile">CONTENT</p>
			<p>
				<ul class="contentMobile" style="list-style-type: none;">
			        <b>DAY 1:</b><br><br>
			<b>Introduction​ ​talk</b><br>
<ul>
 <li>Solar Energy Scenario in India & Job Opportunities</li>
 <li>Basics of Solar Photovoltaic Technology (PV)</li>
</ul>
<br><br>
<b>
11:30 PM- Talk on Energy Scenario in India - Mr Rajesh Kumar, Regional Executive Director (Western Region      1), NTPC Limited
</b>
<br><br>


 ​<b>Simulation​ ​&​ ​PV​ ​System​ ​Design</b><br><ul>
 <li>Basics of simulation tool</li>
 <li>Concepts of PV System Design</li>
 <li>Design a Solar Power Plant to light/power your own house/college</li>
 <li>Understand the Variables that determine PV system size based on international model</li>
</ul><br>
<b>Understand the system design using simulation tool</b><br>
<ul> <li>Hands on experience to determine</li>
 <li>PV size, Inverter & Battery Capacity using tool</li>
 <li>Estimation of monthly power generation and financial savings</li>
</ul><br>
<b>Day​ ​2:</b><br>
 ​<br><b>Hands​ ​on​ ​Session</b><br>
<ul><li>Solar Operated Mobile Charger</li>
<li>Design and build your own Solar Mobile Charger</li>
<li>Get practical insight into basic and advanced features</li>
<li>Light seeking Robot</li>
 <li>Design and build your own Vision 180</li>
 <li>Get practical insight into basic and advanced features</li>
</ul>
<br><b>Product​ ​Demonstration​ ​&​ ​Discussion</b><br>
<ul><li>Solar Tracker</li>
<li>Solar intensity meter</li>
</ul>
<br>For more detail Content <a href="/resources/workshop/Solarizer1.pdf">Click Here</a>

                </ul>
			</p>
		</div>

		<div class="child">
			<p class="headMobile">RULES</p>

			<p>
				<ul class="contentMobile" style="list-style-type: none;">
				<b>Eligibility :   </b>
            <br>Participants having a valid ID card of their respective educational institutions are eligible for the workshop. <br>

            <br><b>Team specifications  :</b>
     		<br>Participants will have to register individually. <br>
			<br><b>Prerequisites :</b>
			<br>Each participant should bring one laptop with CD-ROM drive, a dongle/Jio and a working laptop Webcam preferably with Windows 8 OS or above (No VISTA).  <br>
			<br><b>Certificate criterion :</b>
            <br>Participants should be present in all the sessions. Failing this, no certificate will be awarded to the participant.<br>
             </ul>
			</p>

		</div>


		<div class="child">
			<div class="contentMobile">
				<div class="row" style="margin: 5vh;text-align: center;">
					<p>Himanshu kala<br>
					himanshu@techfest.org<br>
					+91 8828290544<br>
				<br></p>
					</div>
				<!-- <div class="row" style="margin: 5vh;">
				Himanshu Kala<br>
				Events Manager<br>
				himanshu@techfest.org<br>
				+91 8828290544<br>
				</div> -->
			</div>
		</div>

		<div class="child">
			Div Six
		</div>

</div>







			<div class="psMobi">
			<!-- <hr style="width:93%">	 		 -->
			<a href="#" style="color:white;"><b>Date: 28-29th December 2017</b></a>
			</div>




		<div style="padding-top:0.5vh;" >
				<section class="demo-3" id="mobi" onclick="openNav()">
								<div class="grid" style="position:absolute;left:15%;">
									<div class="box">
									<p class="btnText" style="font-size: 1.5rem;
					text-align: center;
					margin-top: 8%;">Explore More</p>
										<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
											<line class="top" x1="0" y1="0" x2="200" y2="0"/>
											<line class="left" x1="0" y1="0" x2="0" y2="50"/>
											<line class="bottom" x1="0" y1="50" x2="200" y2="50"/>
											<line class="right" x1="200" y1="50" x2="200" y2="0"/>

											<line x1="0" y1="0" x2="200" y2="0"/>
											<line x1="0" y1="0" x2="0" y2="50"/>
											<line x1="0" y1="50" x2="200" y2="50"/>
											<line x1="200" y1="50" x2="200" y2="0"/>
										</svg>
									</div>
								</div>
				</section>
				<section class="demo-3" id="mobi01">
								<div class="grid"  style="position:absolute;right:15%;">
									<div class="box" id="regi">
									<p class="btnText" style="font-size: 1.5rem;
					text-align: center;
					margin-top: 1.5rem;"> CLOSED !</p>
					<a id="compi02" href="#"><!-- ============================================== -->
										<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
											<line class="top" x1="0" y1="0" x2="200" y2="0"/>
											<line class="left" x1="0" y1="0" x2="0" y2="50"/>
											<line class="bottom" x1="0" y1="50" x2="200" y2="50"/>
											<line class="right" x1="200" y1="50" x2="200" y2="0"/>

											<line x1="0" y1="0" x2="200" y2="0"/>
											<line x1="0" y1="0" x2="0" y2="50"/>
											<line x1="0" y1="50" x2="200" y2="50"/>
											<line x1="200" y1="50" x2="200" y2="0"/>
										</svg>
										</a>
									</div>
								</div>
				</section>
		</div>



</div>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav(0)">&times;</a>
  <div class="overlay-content">
    <a href="#" onclick="closeNav(1)">About</a>
    <a href="#" onclick="closeNav(2)">Details</a>
    <a href="#" onclick="closeNav(3)">Content</a>
    <a href="#" onclick="closeNav(4)">Rules</a>
    <!-- <a href="#" onclick="closeNav(6)">Rules</a> -->
    <a href="#" onclick="closeNav(5)">Contact Us</a>

  </div>
</div>





<script>
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav(argument) {
	var con = document.getElementsByClassName("child");


	if (argument== 0 ) {
    document.getElementById("myNav").style.width = "0%";
	}
	if (argument== 1 ) {
    document.getElementById("myNav").style.width = "0%";
    con[0].style.display="block";
    con[1].style.display="none";
    con[2].style.display="none";
    con[3].style.display="none";
    con[4].style.display="none";
    con[5].style.display="none";
	}

	if (argument== 2 ) {
    document.getElementById("myNav").style.width = "0%";
   con[0].style.display="none";
    con[1].style.display="block";
    con[2].style.display="none";
    con[3].style.display="none";
    con[4].style.display="none";
    con[5].style.display="none";
	}
	if (argument== 3 ) {
    document.getElementById("myNav").style.width = "0%";
    con[0].style.display="none";
    con[1].style.display="none";
    con[2].style.display="block";
    con[3].style.display="none";
    con[4].style.display="none";
    con[5].style.display="none";
	}
	if (argument== 4 ) {
    document.getElementById("myNav").style.width = "0%";
    con[0].style.display="none";
    con[1].style.display="none";
    con[2].style.display="none";
    con[3].style.display="block";
    con[4].style.display="none";
    con[5].style.display="none";
	}
	if (argument== 5 ) {
    document.getElementById("myNav").style.width = "0%";
    con[0].style.display="none";
    con[1].style.display="none";
    con[2].style.display="none";
    con[3].style.display="none";
    con[4].style.display="block";
    con[5].style.display="none";
	}
	if (argument== 6 ) {

	window.location.href="resource/workshop/Solarizer1.pdf";              // ===================================================
    // document.getElementById("myNav").style.width = "0%";
    // con[0].style.display="none";
    // con[1].style.display="none";
    // con[2].style.display="none";
    // con[3].style.display="none";
    // con[4].style.display="block";
    // con[5].style.display="none";
	}





}

</script>




<!-- center elements ends here  -->


<!-- circular bar  right section start for lapi  -->


<div class="circleLapi" style="width: 25vw;">
	<div style="position: relative; top:8vh;">



	<ul class="mainmenu">
		<li ></li>
		<li>
			<div class="crax-top"></div>
		</li>
		<li>
			<a class="vertical " onclick="btn(0)" >
				<p class="yo" id="yo-0" >ABOUT</p>
				<div class="bro" id="bro-0"></div>
				<div class="crax"></div>
			</a>
		</li>
		<li>
			<a class="vertical" onclick="btn(1)">
				<p class="yo" id="yo-1">DETAILS</p>
				<div class="bro" id="bro-1" ></div>
				<div class="crax"></div>
			</a>
		</li>
		<li>
			<a class="vertical" onclick="btn(2)">
				<p class="yo" id="yo-2">CONTENT</p>
				<div class="bro" id="bro-2"></div>
				<div class="crax"></div>
			</a>
		</li>
		<li>
			<a class="vertical" onclick="btn(3)">
				<p class="yo" id="yo-3">RULES</p>
				<div class="bro" id="bro-3"></div>
				<div class="crax"></div>
			</a>
		</li>
		<li>
			<a class="vertical" onclick="btn(4)">
				<p class="yo" id="yo-4">CONTACT US</p>
				<div class="bro" id="bro-4"></div>
				<div class="crax"></div>
			</a>
		</li>


		<li>
			<div class="crax-bottom"></div>
		</li>
	</ul>
	</div>
</div>


@endsection