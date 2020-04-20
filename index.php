<?php
 include 'suspectedcase.php';
$query = insert_data();
   					
?>
<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <?php include 'link/links.php'?>
    <?php include 'css/style.php'?>
  </head>
  <body onload="myFunction()">
  <nav class="navbar navbar-expand-lg nav_style p-3">
    <a class="navbar-brand pl-5" href="#">COVID-19</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto pr-5 text-capitalize">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#aboutid">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#sympid">symptoms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#preventid">prevention</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#contactid">contact</a>
        </li>
      </ul>
     
    </div>
  </nav>

  <div class="main_header">
  	<div class="row w-100 h-100">
  		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
  			<div class="left_side w-100 h-100 d-flex justify-content-center align-items-center">
  				<img src="images/unity.jpg" width="300" height="300">
  			</div>
  		</div>
  		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
  			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
  				<h1>Let's Stay Safe & Fight Togather Against Cor<span class="corona"><img src="images\corona.png" height="100"></span>na  Virus</h1>
  			</div>
  		</div>
  	</div>
  </div>

   <!--**************************************Corona latest updates************************************-->
   <section class="corona_updates container-fluid">
   	<div class="mb-3">
   		<h3 class="text-center text-uppercase">covid-19 Live updates Of The World</h3>
   	</div>

   	    <div class="table-responsive">
          <table class="table table-bordered table-striped text-center" id="tbval">
            <tr>
              <th>Country</th>
              <th>TotalConfirmed</th>
              <th>TotalRecovered</th>
              <th>TotalDeaths</th>
              <th>NewRecovered</th>
              <th>NewDeaths</th>
            </tr>
          </table>
        </div>

   </section>
   <!--**************************************About dection************************************-->
   <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
   		<div class="header_section text-center mb-5 m-4">
   			<h1>About COVID-19</h1>
   		</div>

   		<div class="row pt-5">
   	<div class="col-lg-5 col-md-6 col-12 ml-5">
   		<img src="images/download (1).jpg" class="img-fluid " width="500" height="400">
   	</div>
   	<div class="col-lg-6 col-md-6 col-12">
   		<h2>What is COVID-19?(Corona Virus)</h2>
   		<p class="pt-3">COVID-19 is the infectious disease caused by the most recently discovered coronavirus. This new virus and disease were unknown before the outbreak began in Wuhan, China, in December 2019.</p>
		<p class="pt-3">Coronavirus disease (COVID-19) is an infectious disease caused by a new virus.
			The disease causes respiratory illness (like the flu) with symptoms such as a cough, fever, and in more severe cases, difficulty breathing. You can protect yourself by washing your hands frequently, avoiding touching your face, and avoiding close contact (1 meter or 3 feet) with people who are unwell.</p>
   	</div>
   </div>
   </div>
<!--**************************************corona stmptoms************************************-->
<div class="container-fluid pt-5 pb-5" id="sympid">
   		<div class="header_section text-center mb-5 m-4">
   			<h1>Corona Symptoms</h1>
   		</div>
   		<div class="container">
   			<div class="row">
   				<div class="col-lg-4 col-md-4 col-12 mt-5">
   					<figure class="text-center">
   					<img src="images/cough.jpg" width="120px" height="120px">
   					<figcaption>cough</figcaption>
   					</figure>
   				</div>

   				<div class="col-lg-4 col-md-4 col-12 mt-5">
   					<figure class="text-center">
   					<img src="images/fever.jpg" width="120px" height="120px">
   					<figcaption>Fever</figcaption>
   					</figure>
   				</div>
   				<div class="col-lg-4 col-md-4 col-12 mt-5">
   					<figure class="text-center">
   					<img src="images/cold.jpg" width="120px" height="120px">
   					<figcaption>Cold</figcaption>
   					</figure>
   				</div>
   				<div class="col-lg-4 col-md-4 col-12 mt-5">
   					<figure class="text-center">
   					<img src="images/tired.jpg" width="120px" height="120px">
   					<figcaption>Tiredness</figcaption>
   					</figure>
   				</div>
   				<div class="col-lg-4 col-md-4 col-12 mt-5">
   					<figure class="text-center">
   					<img src="images/breathe.jpg" width="120px" height="120px">
   					<figcaption>Diffculty breathing</figcaption>
   					</figure>
   				</div>
   				<div class="col-lg-4 col-md-4 col-12 mt-5">
   					<figure class="text-center">
   					<img src="images/nose.jpg" width="120px" height="120px">
   					<figcaption>runny nose</figcaption>
   					</figure>
   				</div>

   			</div>
   		</div>
   		<!--**************************************preventation to corona************************************-->
<div class="container-fluid pt-5 pb-5 sub_section" id="preventid">
   		<div class="header_section text-center mb-5 m-4">
   			<h1>6 Steps Against Corona Virus</h1>
   		</div>
   		<div class="container">
   			<div class="row">
   				<div class="col-md-4 col-lg-4 col-12 mt-5">
   					<div class="row">
   						<div class="col-md-4 col-lg-4 col-12">
   							<figure class="text-center">
		   					<img src="images/wash.jpg" width="90px" height="90px">
		   					
		   					</figure>
   						</div>
   						<div class="col-md-8 col-lg-8 col-12">
   							<p>Wash your hand regularly 20 seconds,with soap and water nd alcohol based hand rub</p>
   						</div>
   					</div>
   				</div>
   				<div class="col-md-4 col-lg-4 col-12 mt-5">
   					<div class="row">
   						<div class="col-md-4 col-lg-4 col-12">
   							<figure class="text-center">
		   					<img src="images/news.jpg" width="90px" height="90px">
		   					
		   					</figure>
   						</div>
   						<div class="col-md-8 col-lg-8 col-12">
   							<p>stay informed by watching news & follow the recomended practices</p>
   						</div>
   					</div>
   				</div>
   				<div class="col-md-4 col-lg-4 col-12 mt-5">
   					<div class="row">
   						<div class="col-md-4 col-lg-4 col-12">
   							<figure class="text-center">
		   					<img src="images/home.jpg" width="90px" height="90px">
		   					
		   					</figure>
   						</div>
   						<div class="col-md-8 col-lg-8 col-12">
   							<p>Stay home and self isolate from others in the household if u feel unwell</p>
   						</div>
   					</div>
   				</div>
   				<div class="col-md-4 col-lg-4 col-12 mt-5">
   					<div class="row">
   						<div class="col-md-4 col-lg-4 col-12">
   							<figure class="text-center">
		   					<img src="images/cntct.png" width="90px" height="90px">
		   					
		   					</figure>
   						</div>
   						<div class="col-md-8 col-lg-8 col-12">
   							<p>Avoid close contact (1 meter or 3 feet) with people who are unwell.</p>
   						</div>
   					</div>
   				</div>
   				<div class="col-md-4 col-lg-4 col-12 mt-5">
   					<div class="row">
   						<div class="col-md-4 col-lg-4 col-12">
   							<figure class="text-center">
		   					<img src="images/fever.jpg" width="90px" height="90px">
		   					
		   					</figure>
   						</div>
   						<div class="col-md-8 col-lg-8 col-12">
   							<p>If you have fever, cough anddiffculty breathing,seek medical care early.</p>
   						</div>
   					</div>
   				</div>
   				<div class="col-md-4 col-lg-4 col-12 mt-5">
   					<div class="row">
   						<div class="col-md-4 col-lg-4 col-12">
   							<figure class="text-center">
		   					<img src="images/cover.jpg" width="90px" height="90px">
		   					
		   					</figure>
   						</div>
   						<div class="col-md-8 col-lg-8 col-12">
   							<p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze. </p>
   						</div>
   					</div>
   				</div> 
   			</div>
   		</div>
   	</div>
   		<!--**************************************Contact us to ASAP************************************-->
<div class="container-fluid pt-5 pb-5" id="contactid">
   		<div class="header_section text-center mb-5 m-4">
   			<h1>6 Steps Against Corona Virus</h1>
   		</div>

   		<div class="container">
   			<div class="row">
   				<div class="col-lg-8 offset-lg-2 col-12">
   					<form method="POST" action="suspectedcase.php">
   					
   					    <div class="form-group ">
   					      <label for="inputEmail4">Name</label>
   					      <input type="text" class="form-control" name="name" id="name" placeholder="text">
   					    </div>
   					    <div class="form-group">
   					      <label>Mobile No</label>
   					      <input type="int" class="form-control" name="mobile" id="mobile" placeholder="Mobile No" required autocomplete="off">
   					    </div>
   					  
   					  
   					    <div class="form-group">
   					      <label for="inputEmail4">Email</label>
   					      <input type="email" class="form-control" name="email" id="email" placeholder="Email" required autocomplete="off">
   					    </div>
   					  
   					    <div class="form-check">
   					    	<label>
   					        Select symptoms
   					      </label><br>
   					     <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
								<input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="Cold">
								<label class="custom-control-label" for="customcheckbox1">Cold</label>
   					     	</div>

   					     		 <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
								<input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
								<label class="custom-control-label" for="customcheckbox2">Fever</label>
   					     	</div>

   					     		 <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
								<input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="diffculty in breathe">
								<label class="custom-control-label" for="customcheckbox3">Diffculty in breathe</label>
   					     	</div>

   					     		 <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
								<input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="feeling week">
								<label class="custom-control-label" for="customcheckbox4">Feeling week</label>
   					     	</div>
   					      <div class="form-group">
   					       
   					        <textarea class="form-control" name="msg" id="msg" aria-label="With textarea" rows="3"></textarea>
   					      </div>

   					    </div>
   					 
   					  <button type="submit" name="submit" class="btn btn-lg bg-success">Sign in</button>
   					</form>
   			
   				</div>
   			</div>
   		</div>
   	</div>
   	<!--**************************************Footer************************************-->
	<div class="container scrolltop float-right pr-5">
		<i class="fa fa-arrow-up" onclick="topfunction()" id="myBtn"></i>
	</div>
   	<!--**************************************Footer************************************-->
    
   	<footer class="mt-5">
   		<div class="footer_style text-white text-center container-fluid">
   			<p>Copt right by Sundas Warraich</p>
   		</div>
   	</footer>
   	<script>
         $(document).ready(function() {
        //function myFunction(){
        $.get( "https://api.covid19api.com/summary", function( data ){
           console.log(data['Countries'].length);
           var tbval = document.getElementById('tbval');
           for(var i=1;i<(data['Countries'].length);i++){
            var x = tbval.insertRow();
            x.insertCell(0);
            tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
            tbval.rows[i].cells[0].style.background = '#7a4a91';
            tbval.rows[i].cells[0].style.color = '#fff';

            x.insertCell(1);
            tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
            tbval.rows[i].cells[1].style.background = '#4bb7d8';

            x.insertCell(2);
            tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
            tbval.rows[i].cells[2].style.background = '#f36e23';

             x.insertCell(3);
            tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
            tbval.rows[i].cells[3].style.background = '#4bb7d8';


             x.insertCell(4);
            tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewRecovered'];
            tbval.rows[i].cells[4].style.background = '#9cc850';

             x.insertCell(5);
            tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewDeaths'];
            tbval.rows[i].cells[5].style.background = '#f36e23';
           }
         });
             
           
    //  }
    });

   		mybutton = document.getElementById("myBtn");
   		window.onscroll = function(){scrollFunction()};
   		function scrollFunction(){
   			if(document.body.scrollTop>100 || document.documentElement.scrollTop>100){
   				mybutton.style.display = "block";
				} else {
					mybutton.style.display = "none";
				}

   		}
   		function topfunction(){
   			document.body.scrollTop = 0;
   			document.documentElement.scrollTop = 0;
   		}

   	</script>
  </body>
</html>