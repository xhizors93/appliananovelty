<?php 
  session_start(); 
  include'bookborrow_registration_process.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() 
  {
      $('#success').hide();    
      $('button').click(function () 
      {
        $.post('bookborrow_registration_process.php', $('form').serialize(), function () 
        {
  		    $('div#wrapper').fadeOut( function () 
          {
            $('#success').show();
  	     	});
  	     });
  	   return false;
      });
  });
</script>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>e-SPBT</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type='text/javascript'>
        $(document).ready(function(){
            $('#borrow input').keydown(function(e){
             if(e.keyCode==13){       

                if($(':input:eq(' + ($(':input').index(this) + 1) + ')').attr('type')=='submit')
                {// check for submit button and submit form on enter press
                 return true;
                }

                $(':input:eq(' + ($(':input').index(this) + 1) + ')').focus();

               return false;
             }

            });
        });
  </script>
  <style type="text/css">
    body 
    {
    	font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
    	font-size:12px;
    }
    .registration_form 
    {
    	margin:0 auto;
    	width:500px;
    	padding:14px;
    }
    label 
    {
    	width: 5em;
    	float: left;
    	margin-right: 0.5em;
    	display: block
    }
    button 
    {
    	float:right;
    	border:1px solid #B7DDF2;
    	color:#666666;
    }
    fieldset 
    {
    	background:#EBF4FB none repeat scroll 0 0;
    	border:2px solid #B7DDF2;
    	width: 500px;
    	margin-top:10px;

    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    }
    legend 
    {
    	color: #fff;
    	background: #80D3E2;
    	border: 1px solid #781351;
    	padding: 2px 6px
    }
    .elements 
    {
    	padding:10px;
    }
    p 
    {
    	border-bottom:1px solid #B7DDF2;
    	color:#666666;
    	font-size:11px;
    	margin-bottom:20px;
    	padding-bottom:10px;
    }
    input
    {
    	border:1px solid #B7DDF2;
    -moz-border-radius:3px;
    -webkit-border-radius:3px;
    }
    #success 
    {
        	background:#EBF4FB none repeat scroll 0 0;
    	border:2px solid #B7DDF2;
    	width: 500px;
    	margin-top:10px;
        -moz-border-radius:5px;
    -webkit-border-radius:5px;
    }
  </style>

</head>
<body>
  <div id="main" align="center">
    <div id="success">
      <p> Please <a target = '_blank' href="result.pdf">download </a> your results in PDF Version . </p>
      <input type="button" class="myButton" value="Back" name="Back" onclick="history.go(-2);" style="font-size: 15px;">
    </div>
      <div id="wrapper">

      <form id="borrow" action="index.php"  method="post" class="registration_form">
        <fieldset>
          <legend>Student Details</legend>

          <div class="elements">
            <label for="name">Name :</label>
            <input type="text" name="STUD_NAME" size="25" />
          </div>
          <div class="elements">
            <label for="name">NRIC :</label>
            <input type="text" name="STUD_NRIC" placeholder="eg: 680713134544" size="25" />
          </div>
          <div class="elements">
            <label for="name">Class : </label>
            <input type="text" name="STUD_CLASS" size="25" />
          </div>
        </fieldset>
        
        <fieldset>
          <legend>ISBN  </legend>
          <div class="elements">
            <input type="text" name="data1" size="25" />
          </div>
          <div class="elements">
            <input type="text" name="data2" size="25" />
          </div>
          <div class="elements">
            <input type="text" name="data3" size="25" />
          </div>
          <div class="elements">
            <input type="text" name="data4" size="25" />
          </div>
          <div class="elements">
            <input type="text" name="data5" size="25" />
          </div>

          <div class="elements"></div>
          <div class="submit">
            <input type="hidden" value="submitted" />
            <input class="myButton" type="submit" name="submit" value="Submit" onselect="bookborrow_registration_process.php">
      	    <button type="submit">Generate Report</button>
            <button onclick="history.go(-1);">Back</button>
          </div>

        </fieldset>
      </form>
    </div>
  </div>
</body>
</html>