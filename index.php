
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Nicholas Ogaye - CSCI-E15 Project 2</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"/>

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine"/>
   
     <link rel="stylesheet" type="text/css" href="styles.css"/>

    <style>
        .t-font {
        font-family: 'Tangerine', serif;
        font-size: 68px;
      }
        img {
            display: block;
            margin: auto;
            width: 20%;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .t-circle {
            color: white;
            background-color: #428bca;
            outline-color: #428bca;
            border-radius: 80px;
            text-align: center;
            padding: 10px;
            width: 10px;
            height: 10px;
            margin: 5px;
        }

        .t-title {
            color: white;
            background-color: #428bca;
            /*border-radius: 80px;*/
            text-align: center;
            padding: 20px;
            margin-bottom: 10px;
            
        }

    </style>

    <script>

        function RandomWord() {
            var requestStr = "http://randomword.setgetgo.com/get.php";

            $.ajax({
                type: "GET",
                url: requestStr,
                dataType: "jsonp",
                jsonpCallback: 'RandomWordComplete'
            });
        }

        function RandomWordComplete(data) {
            alert(data.Word);
        }
    </script>
</head>
<body>
     <?php require('logic.php');?>
    <div class="container">
       
        


       
   
        <div class="t-title t-font">
          <span style="color: #d9534f" class="glyphicon glyphicon-lock"></span>An xkcd style password generator          
        </div>

         <form method='POST' action='index.php'>

        <div class="panel panel-primary">


    <div class="panel-heading">
        <h3 class="panel-title"><span class="glyphicon glyphicon-cog"></span>Settings</h3>

    </div>

    
    <table class="table">
         <tr>
            <td>Number Of Words</td>
            <td>
                <button type="button" class="btn btn-default">15 Min</button>
            </td>
        </tr>
        <tr>
            <td>Add A Number</td>
            <td>
                <div class="btn-group">
                    <button type="button" class="btn btn-default" >ON</button>
                    <button type="button"  class="btn btn-success">OFF</button>
                </div>
            </td>           
        </tr>
       
       
        <tr>
            <td>Add A Symbol</td>
            <td>
                <div class="btn-group">
                    <button type="button" class="btn btn-default">ON</button>
                    <button type="button" class="btn btn-success">OFF</button>
                </div>
</td>
           
        </tr>
        <tr>
            <td>Add Uppercase</td>
            <td>
               <!-- <div class="btn-group">
                    <button type="button" class="btn btn-default">ON</button>
                    <button type="button" class="btn btn-success">OFF</button>
                    
                </div>-->

                  <div class="btn-group">                 
                       <input type='button' name="mmm" class="btn btn-default" value='OFF'/>
                       <input type='button' name="vvv" class="btn btn-success" value='ON'/>
                    
                </div>

               


                 <input type="checkbox" name="stream" checked="checked" class="form-control" />
            </td>

        </tr>


           <tr>
           
            <td colspan="2" style="text-align:right" >
                 <button type="button" disabled="disabled" class="btn btn-primary">Reset</button>
            </td>
        </tr>

    </table>

    <div class="panel-footer">
    </div>

</div>
    
      Enter 5 contestants
            <br/>
    <input type='text' name='contestant1'/><br/>
    <input type='text' name='contestant2'/><br/>
    <input type='text' name='contestant3'/><br/>
    <input type='text' name='contestant4'/><br/>
    <input type='text' name='contestant5'/><br/>
   


         <?php print_r($_POST); ?>       
              
<div>
                   
                   <!-- <button type="button" class="btn btn-primary ">Generate Password</button>-->
     <input type='submit' class="btn btn-primary" value='Generate Password'/>
                </div>


            
            </form>

        <form method='POST' action='index.php'>
        <label for='first_name'/>First Name<br/>
        <input type='text' name='first_name' id='first_name'/>

        <label for='email'/>Email<br/>
        <input type='text' name='email' id='email'/>

            <?php print_r($_POST); ?>  
        <input type='submit'/>
    </form>

        <hr />
 <div>
     <h4>
  Your Password: 
 <button disabled="disabled" type="button" class="btn btn-success">XXXX XXXXX XXXXX XXXXXX</button>
    
     </h4>
   
                   
 </div>
        <hr />
             

        <div class="footer">

      Inspired by:   <a href="http://xkcd.com/936/"> http://xkcd.com/936/ </a>

            <!--
                http://www.google.com/fonts#
                http://randomword.setgetgo.com/
                -->
</div>

    <p>
     You have $<?php echo $total; ?> in your piggy bank.
    </p>
	<p>Goal: $<?= $goal?></p>
	<p>
	<img src='<?php echo $image?>' alt='Goal Status'/>
	</p>
	
	<h4>Calculate total</h4>
	Your total is <?=calculate_total(10,3,'priority')?>
	Today is <?=date('l')?>
        <b></b>
	Today is <?=date('D M j g:i A e')?>
	<b></b>
	 <?php echo "This", " string", " was", " made", " with multiple parameters."; ?>
	<b></b>
	 <?php print "This"; ?>
	  <?php echo "My car is a {$cars[0]}"; ?>


        <table class="table">
            <thead>
                <tr>
                    <td></td>
                    <td><b>Project</b></td>
                    <td><b>Title</b></td>
                    <td><b>Github Url</b></td>
                    <td><b>Live Url</b></td>
                </tr>
            </thead>
            <tr>
                <td>                
                    <span class="t-circle" style="background-color: #d9534f"> 1</span>
                </td>
                <td>
                    Project 1
                    </td>
                <td>
                   System Setup / Portfolio
                </td>
                <td>
                    <a href="https://github.com/nogaye/CSCIE15P1"> https://github.com/nogaye/CSCIE15P1 </a>
                </td>
                <td>
                    <a href="http://p1.ogaye.me">http://p1.ogaye.me</a>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="t-circle" style="background-color: #f0ad4e"> 2</span>
                </td>
                <td>
                    Project 2
                </td>
                <td>
                    [Title]
                </td>
                <td>
                    <a href="#">[Link]</a>
                </td>
                <td>
                   <a href="#">[Link]</a>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="t-circle" style="background-color: #5bc0de"> 3</span>
                </td>
                <td>
                    Project 3
                </td>
                <td>
                    [Title]
                </td>
                <td>
                    <a href="#">[Link]</a>
                </td>
                <td>
                    <a href="#">[Link]</a>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="t-circle" style="background-color: #5cb85c"> 4</span>
                </td>
                <td>
                    Project 4
                </td>
                <td>
                    [Title]
                </td>
                <td>
                    <a href="#">[Link]</a>
                </td>
                <td>
                   <a href="#">[Link]</a>
                </td>
            </tr>

        </table>


        <h4>In 2+ sentences describe who you are and what you do.</h4>
        <p>My name is Nicholas Ogaye. I am 32 years old. I currently live in Tampa, Florida. I have lived in Tampa for the last two years. I was born and raised in Nairobi, Kenya. I work at Nielsen Media as a Solution Architect.</p>

        <h4>Why are you taking this course?</h4>
        <p>I am taking this cause to improve on my web application development skills, learn new technologies and as a requirement for my graduate degree.</p>
        <h4>What previous experience do you have with programming?</h4>
        <p>I have over 8 years of development experience mostly using the .NET framework. I am fluent in C++, C#, ASP.NET, JavaScript and html.</p>

        <h4>Are you working on a Mac, PC, or some other platform?</h4>
        <p>I am working on a PC using windows 8 operating system.</p>

        <h4>Anything else we should know?</h4>
        <p>I am excited to be taking this cause.I looking forward to a great semester.</p>

        </div>



</body>
</html>





