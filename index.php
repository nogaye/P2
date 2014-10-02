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

        <form method="get" action='index.php'>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-cog"></span>Settings</h3>
                </div>
                <table class="table">
                    <tr>
                        <td>
                             <label for='number_of_words'>Number Of Words (Between 1 and 15)</label>
                        </td>
                        <td>
                            <!--<button type="button" class="btn btn-default">15 Min</button>-->
                            <input type="number" min="1" max="15" name="number_of_words" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for='add_a_number'>Add A Number</label>
                        </td>
                        <td>
                            <input type="checkbox" name="add_a_number" />
                            <!--<div class="btn-group">
                    <button type="button" class="btn btn-default" >ON</button>
                    <button type="button"  class="btn btn-success">OFF</button>
                </div>-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for='add_a_symbol'>Add A Symbol</label>
                        </td>
                        <td>
                            <input type="checkbox" name="add_a_symbol"  />
                            <!-- <div class="btn-group">
                    <button type="button" class="btn btn-default">ON</button>
                    <button type="button" class="btn btn-success">OFF</button>
                </div>-->
                        </td>
                    </tr>
                    <tr>
                        <td><label for='add_a_symbol'>Add Uppercase</label> </td>
                        <td>
                            <!-- <div class="btn-group">
                    <button type="button" class="btn btn-default">ON</button>
                    <button type="button" class="btn btn-success">OFF</button>                    
                </div>-->
                            <div class="btn-group">
                                <input type='button' name="add_uppercase_on" class="btn btn-default" value='OFF' />
                                <input type='button' name="add_uppercase_on" class="btn btn-success" value='ON' />
                            </div>
                            <input type="checkbox" name="add_a_uppercase"  />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: right">
                            <!--<button type="button" disabled="disabled" class="btn btn-primary">Reset</button>-->
                             <input type='submit' class="btn btn-primary" value='Generate Password' />
                        </td>
                    </tr>
                </table>
                <div class="panel-footer">
                </div>
            </div>
            
          <!--  <div>
               
                <input type='submit' class="btn btn-primary" value='Generate Password' />
            </div>-->
        </form>
        
        
        
        <hr />
        <div>
            <h4>Your Password Is:  

       
                <button disabled="disabled" type="button" class="btn btn-success"> <?=get_password()?> </button>

            </h4>
        </div>
        <hr />
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





