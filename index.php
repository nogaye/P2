<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Nicholas Ogaye - CSCI-E15 Project 2</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" />
    <!-- Google fonts-->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine" />

    <link rel="stylesheet" type="text/css" href="styles.css" />

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
            background-color: #5cb85c;
             display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  /*font-size: 14px;*/
  font-weight: normal;
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
         
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

        <form method="get" action='index.php'>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-cog"></span>Settings</h3>
                </div>
                <table class="table">
                    <tr>
                        <td>
                             <label for='number_of_words'>Number Of Words (Max 10)</label>
                        </td>
                        <td>
                            <input type="number" min="1" max="10" required="required" name="number_of_words" value="<?php echo $_GET['number_of_words']; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for='add_a_number'>Add A Number</label>
                        </td>
                        <td>
                            <input type="checkbox" name="add_a_number" <?php if(isset($_GET['add_a_number']) && $_GET['add_a_number']) { echo "checked=\"checked\"";} ?> />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for='add_a_symbol'>Add A Symbol</label>
                        </td>
                        <td>
                            <input type="checkbox" name="add_a_symbol" <?php if(isset($_GET['add_a_symbol']) && $_GET['add_a_symbol']) { echo "checked=\"checked\"";} ?>  />
                        </td>
                    </tr>
                    <tr>
                        <td><label for='add_a_symbol'>Add Uppercase</label> </td>
                        <td>
                            <!--<div class="btn-group">
                                <input type='button' name="add_uppercase_on" class="btn btn-default" value='OFF' />
                                <input type='button' name="add_uppercase_on" class="btn btn-success" value='ON' />
                            </div>-->
                            <input type="checkbox" name="add_uppercase" <?php if(isset($_GET['add_uppercase']) && $_GET['add_uppercase']) { echo "checked=\"checked\"";} ?>  />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: right">
                             <input type='submit' class="btn btn-primary" value='Generate Password' />
                        </td>
                    </tr>
                </table>
                <div class="panel-footer">
        
                    <label >Your Password Is:</label>
            <h3><label class="t-circle"> <?=get_password()?> </label> </h3>
                

            
       
                </div>
            </div>
            
        </form>
        
        
        
     
        <div class="footer">
            Inspired by:   <a href="http://xkcd.com/936/">http://xkcd.com/936/ </a>

            <!--
                http://www.google.com/fonts#
                http://randomword.setgetgo.com/
                -->
        </div>



    </div>



</body>
</html>





