<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Resources/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../Resources/css/font-awesome.min.css">
    <script type="text/javascript" src="../js/jquery-2.2.0.min.js"></script>
    <script type="text/javascript" src="../Resources/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../img/iconbill.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/custom.css">
    <title>Bills on Board</title>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarc1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">&nbsp;Bills on Board</a>
            </div>

            <div class="collapse navbar-collapse" id="navbarc1">
                <ul class="nav navbar-nav">
              <li  class="active"><a href="PrintBill.html"><i class="fa fa-ticket"></i>&nbsp;Create Bill</a></li>
                    <li><a href="dash.html"><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Dashboard</a></li>
                   
                    <li><a href="contactform.html"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;Contact Us</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    
                    <li><a href="#" id="loginlink"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Sign in</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Modal Window-->
    <div class="modal fade" id="logonbox" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal"><span>&times;</span></button>
                    <h4 class="modal-title">Sign In</h4>
                </div>
                <div class="modal-body">
                    <div>
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#signin" data-toggle="tab" data-caption="Sign in">Sign In</a></li>
                            <li><a href="#signup" data-toggle="tab" data-caption="Sign up">Sign Up</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="signin">
                                <form style="padding-top:5px">
                                    <div class="form-group">
                                        <input class="form-control" type="text" id="uname" placeholder="user name">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="password" id="pass" placeholder="password">
                                    </div>
                                    <button class="btn btn-success btn-block" id="dologon">Sign in</button>
                                </form>
                            </div>
                            <div class="tab-pane" id="signup">
                                <form style="padding-top:5px">
                                    <!--Name-->
                                    <div class="form-group">
                                        <input class="form-control" id="name" type="text" placeholder="Name">
                                    </div>

		<!--Shop name-->
                                    <div class="form-group">
                                        <input class="form-control" id="shopname" type="text" placeholder="Shop Name">
                                    </div>

		<!--Address-->
                                    <div class="form-group">
                                        <input class="form-control" id="address" type="text" placeholder="Address">
                                    </div>

                                    <!--email-->
                                    <div class="form-group">
                                        <input class="form-control" id="email" type="email" placeholder="E-mail">
                                    </div>

                                    <!--password-->
                                    <div class="form-group">
                                        <input class="form-control" id="Pass" type="password" placeholder="Password">
                                    </div>

                                    <!--password confirm-->
                                    <div class="form-group">
                                        <input class="form-control" id="Cpass" type="password" placeholder="Confirm Password">
                                    </div>
                                    <button class="btn btn-success btn-block" id="dosignup">Sign Up</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <!--End Of Modal Window-->
    <div class="container-fluid" style="padding-top:80px;">
    <!--Panel1-->
    <div class="row" >
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <div class="panel panel-primary">
    <div class="panel-heading">
        <h4 class="panel-title">Add Items</h4>
        </div>
    <div class="panel-body">
        <form class="form-horzontal">
        <div class="form-group">
            <label class="control-label">&nbsp;Product Name:</label>
            <input type="text" class="form-control" id="ppname">
            </div>
            
            <div class="form-group">
            <label class="control-label">&nbsp;Price:</label>
            <input type="text" class="form-control" id="pprice">
            </div>
            
            <div class="form-group">
            <label class="control-label">&nbsp;Quantity:</label>
            <input type="text" class="form-control" id="qqty">
            </div>

	<div class="form-group">
            <label class="control-label">&nbsp;Discount:</label>
            <input type="text" class="form-control" id="ddisc">
            </div>

            <div class="pull-right">
            <button class="btn btn-info" type="button" id="submit" onClick="setValues();">Add to Bill</button>
            </div>
        </form>
        </div>
    </div>
        </div>
    
    <!--End of Panel1-->
        
        <!-- panel 2-->
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
    <div class="panel panel-info">
    <div class="panel-heading">
        <h4 class="panel-title">Recent Bill</h4>
        </div>
    <div class="panel-body">
        <div class="table-responsive">
        <table class="table table-borderd table-striped table-condensed table-hover" id="data_table">
        <tr class="active">
            <th>SrNo</th>
            <th>Product Name</th>
            <th>Product cost per unit</th>
            <th>Discount</th>
            <th>Quantity</th>
            <th>Price</th>
            </tr>
            
            <tr>
                <td class="info"></td>
                <td class="info"><input type="text" id="pname" size="10"></td>
     	<td class="info"><input type="text" id="pnameunit" size="10"></td>
	<td class="info"><input type="text" id="disc" size="10"></td>
	<td class="info"><input type="text" id="qty" size="10"></td>
	<td class="info"><input type="text" id="price" size="10"></td>
            </tr> 
	
        </table>
        <div id="gen_qr">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button class="btn btn-info"style= "float : center;" type="button" onClick="Finish();">Generate QR</button></div>
 </div>
        </div>
<input type="text" id="result" size="130"/>
        
    </div>
        </div>

        <!-- End of Panel2-->
        </div>
    </div>
 
</body>

<!--script-->
<script>
    $('#loginlink').on('click', function (e) {
        $('#logonbox').modal({
            keyboard: false,
            backdrop: 'static'
        });
    });
    $('#dologon').on('click', function (e) {
        alert('Thank you for Signing In');
        $('#logonbox').modal('hide');
    });

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var data = $(e.target).data('caption');
        var model = $('#logonbox');
        model.find('.modal-title').text(data);
    });

obj = [] ;
	
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  console.log ("Log something 1") ;

  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
	  
	  $.get("autocomplete.php?term=" + document.getElementById("pname").value , function(data, status){

		obj = JSON.parse (data) ;
		console.log("Data: " + obj + "\nStatus: " + status);
		
		  var a, b, i, val = this.value;
		  console.log(val);
		  /*close any already open lists of autocompleted values*/
		  closeAllLists();
		  if (!val) { return false;}
		  currentFocus = -1;
		  /*create a DIV element that will contain the items (values):*/
		  a = document.createElement("DIV");
		  a.setAttribute("id", this.id + "autocomplete-list");
		  a.setAttribute("class", "autocomplete-items");
		  /*append the DIV element as a child of the autocomplete container:*/
		  this.parentNode.appendChild(a);
		  /*for each item in the array...*/
		  

		  
		  for (i = 0; i < obj.length; i++) {
			/*check if the item starts with the same letters as the text field value:*/
			if (obj[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
			  /*create a DIV element for each matching element:*/
			  b = document.createElement("DIV");
			  /*make the matching letters bold:*/
			  b.innerHTML = "<strong>" + obj[i].substr(0, val.length) + "</strong>";
			  b.innerHTML += obj[i].substr(val.length);
			  /*insert a input field that will hold the current array item's value:*/
			  b.innerHTML += "<input type='hidden' value='" + obj[i] + "'>";
			  /*execute a function when someone clicks on the item value (DIV element):*/
			  b.addEventListener("click", function(e) {
				  /*insert the value for the autocomplete text field:*/
				  inp.value = this.getElementsByTagName("input")[0].value;
				  /*close the list of autocompleted values,
				  (or any other open lists of autocompleted values:*/
				  closeAllLists();
			  });
			  a.appendChild(b);
			}
		  }		
		  }) ;

  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
      });


console.log ("Log something 1") ;
console.log ("Log something :" + inp.value ) ;


	  
}

autocomplete( document.getElementById("pname") , obj) ;		


/*An array containing all the country names in the world:*/
var countries = ["Afghanistan","Albania","Algeria","Andorra"];
var cap= ["a","aa","acs","aassd"];

console.log ("Log something") ;


/* <?php
$host="localhost";

$username="root";
$password="";
$databasename="Products";

$connect=@mysql_connect($host,$username,$password);
$db=mysql_select_db($databasename);

if ( array_key_exists ('term' , $_GET ) ) {
	$searchTerm = $_GET['term'];
}
else 
{
#	echo "_GET not available" ;
	$searchTerm = "Curd" ;
}


$query = "SELECT Product_Name FROM Products_Details WHERE Product_Name LIKE '%".$searchTerm."%'" ;
#echo $query ;
$select =mysql_query( $query );
#echo "Something\r\n" ;
$array = $row=mysql_fetch_array($select) ;
#print_r($array) ;
#echo sizeof($array) + "\n\r";
$data = array() ;

$middleString = "" ;

foreach ( $array as $element ) 
{
#	echo $element . "\r\n" ;
	$middleString =  $middleString . "\"" . $element . "\"," ;	
#	echo $middleString . "\r\n" ;
}

$middleString = mb_substr($middleString, 0, -1);

$jsvar = "var result = [" . $middleString . "] ; ";
echo $jsvar ;

//return json data

#var countries = ["Afghanistan","Albania","Algeria","Andorra"];

echo "autocomplete(document.getElementById(\"pname\"), jsvar) ; " ;


?>
*/

var newdata = <?php echo json_encode($data) ?> ;
	/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("pname"), obj); 
/*autocomplete(document.getElementById("weight"), countries); */

function Finish()
{

}

function setValues()
{
 var pn=document.getElementById("ppname").value;
 var qt=document.getElementById("qqty").value;
var di=document.getElementById("ddisc").value;
 var pri=document.getElementById("pprice").value;
 var table=document.getElementById("data_table");
 var table_len=(table.rows.length)-1;

var tot=qt * pri;
var ddi=(di/100) * tot;

var row = table.insertRow(table_len).outerHTML="<td id='sr"+table_len+"'>"+table_len+"</td><td id='pname"+table_len+"'>"+pn+"</td><td id='pnameunit"+table_len+"'>"+pri+"</td><td id='disc"+table_len+"'>"+di+"</td><td id='qty"+table_len+"'>"+qt+"</td><td id='price"+table_len+"'>"+ddi+"</td></tr>";

 var p=document.getElementById("ppname").value;
 var q=document.getElementById("qqty").value;
 var d=document.getElementById("ddisc").value;
document.getElementById("result").value=table_len+" "+p+" "+d+" "+ddi;

document.getElementById("ppname").value=" ";
document.getElementById("weight").value=" ";
document.getElementById("qqty").value=" ";
document.getElementById("ddisc").value=" ";
}

/*An array containing all the country names in the world:*/
var countries = ["Afghanistan","Albania","Algeria","Andorra"];
var cap= ["a","aa","acs","aassd"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("pname"), cap);
autocomplete(document.getElementById("weight"), countries);
</script>
<!--End Of Script-->
</html>