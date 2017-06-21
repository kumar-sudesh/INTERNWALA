<!DOCTYPE html>
<html lang="en">
<head>
  <title>InternShips</title>
<script>
			function check(){
			if((<?php $_SESSION['user'] ?> )!=NULL)
			{
				location.href = 'apply.php';
			}
			else
			{
			location.href = 'login.php';
			}}
</script>
</head>
<body>

<div class="container">  
	<h3>Search for Internships!!</h3>
	<p>Now your dream internship is just a click away.</p>  
	<div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">Internships in Delhi</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
	  <div style="padding:20px;font-size:25px">Google Inc.</div>
          <div class="table-responsive">
			<table class="table">
			<thead>
      <tr>
        <th>Start Date</th>
        <th>Duration</th>
        <th>Stipend</th>
        <th>Posted On</th>
        <th>Apply By</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Immediately</td>
        <td>2 Months</td>
        <td>Rs. 2000/Month</td>
        <td>15 May'17</td>
        <td>28 May'17</td>
      </tr>
    </tbody>
			</table>
			</div>
			<div>
			About Google Inc. <a href="http://www.google.co.in">(http://googleindia.in/#)</a>:

			<p style="padding-left:20px"><b>Who We Are:</b></br>
			 We are a team of young media professionals with a vision of introducing innovations within the Advertising space.</br></br>

			<b>How We Do It:</b></br>
			A wide range of diverse advertising and branding services that bring your brand / business to the center of the consumers' attention.</br></br>
			About the Internship:</br>

			• Candidates should be ready for field sales</br>
			• Following up new business opportunities and setting up meetings</br> 
			• Handling sales phone calls and e-mails</br>
			• Follow-ups with interested clients & maintain healthy relationships with previous clients</br>
			• Mandatory client coordination & contacting new clients and executing sale.</br>
			• Closes new business deals by coordinating requirements; developing and negotiating contracts; integrating contract requirements with business operations.</br>
			• Communicating with clients & recording all correspondence</br>
			• Achievement of monthly, quarterly & yearly targets & business plans</br>
			• Should be well networked in the local area and have an understanding of the local market, and proven track records.</br></br>

			<b># of Internships available:</b> 4</br></br>

			<b>Perks:</b></br>

			Certificate, Letter of recommendation, Flexible work hours.</br></br>
			<b>Who can apply:</b></br>
			
			Only those candidates can apply who:</br>
			<ol style="padding-left:15px;margin-top:5px">
			<li>can prefarably start the internship between 14th May'17 and 13th Jun'17.</li>
			<li>are available for duration of 2 months (preferred, not mandatory).</li>
			<li>have/ are pursuing UG/PG degrees in Journalism, Mass Comm & Similar.</li>
			<li>have year of UG/PG degree completion as 2016 or earlier.</li></br></br>
			</ol>
			
			<b>Other requirements:</b></br>	
			<ol style="padding-left:15px;margin-top:5px">
			<li>Skill(s) required: Salesforce, Email Marketing and MS-Excel and English Proficiency (Spoken)</li></br>
			</ol>
			</p>
			</div>
			<center>
		<button type="button" class="btn btn-info" onclick="check();">
			APPLY
		</button></center>
			
		 
      </div>
		</div>
			
      <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">Internships in Kolkata</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        
		</div>
    </div>

  <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">Internships in Mumbai</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        
		</div>
    </div>

  <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">Internships in Chennai</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        
		</div>
    </div>	
	
	  <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">Internships in Pune</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        
		</div>
    </div>
	
	  <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">Internships in Punjab</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        
		</div>
    </div>
	
	  <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">Internships in NCR</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        
		</div>
    </div>
	
</div>
</div>   
<?php 
include('footer.php');
?>
</body>
</html>
