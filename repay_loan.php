<?php
include('session.php');
include('db_conn.php');
$id = 1;
$sql="SELECT * FROM staff_id WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);
?>


<?php
$sql = "SELECT * FROM loan WHERE loan_id='$_REQUEST[loan_id]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
//$_REQUEST['fileno']=$row['fileno'];
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $row['fullname'];?> | Repay Loan</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/plugins/steps/jquery.steps.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/faan favicon.fw.png">


    <style>

        .wizard > .content > .body  position: relative; }

    </style>
    <script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser2.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

</head>

<body>

    <?php include 'm_menus.php'; ?>
        
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><?php  echo $row['fullname']." | ".$row['uin']; ?></h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="admin.php">Dashboard</a>
                        </li>
                        
                        <li class="active">
                            <strong>Repay Loan</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            
            
        <div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Repay Loan</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <h2>
                                Repay Loan
                            </h2>
                            
                            <form id="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data" class="wizard-big">
                            
                            
                            <?php
include("db_conn.php");


	
	error_reporting(E_ALL);
	if(isset($_REQUEST['submit'])){
		$loan_id=trim(addslashes($_REQUEST['loan_id']));
		$uin=trim(addslashes($_REQUEST['uin']));
		$fullname=trim(addslashes($_REQUEST['fullname']));
		$loan_type=trim(addslashes($_REQUEST['loan_type']));
		$loan_amount=$row['actual_loan_payable'];
		$loan_deductable=trim(addslashes($_REQUEST['loan_deductable']));
		$payment_date=trim(addslashes($_REQUEST['payment_date']));
		$loan_balance=trim(addslashes($_REQUEST['loan_balance']));
		$payment_method = trim(addslashes($_REQUEST['payment_method']));
		$bank = trim(addslashes($_REQUEST['bank']));
		$teller_no = trim(addslashes($_REQUEST['teller_no']));
		
		
		
/*$recipient=$phone;
$username = 'godsfire'; 
$password = 'godspjay1989';
$senderid = 'AASCMSL';
$m1 = 'Loan Alert*** Dear';
$m2 = $fullname.", your AASCMSL";
$m3 = $loan_type." Application has being Approved. ";
$m4 = "Your Bank Account has now been credited with N".number_format($amount_paid, 2).".";
$message= $m1." ".$m2." ".$m3.$m4;

$url = 'http://api.smartsmssolutions.com/smsapi.php';
function sendsms_get($username, $password, $message, $senderid, $recipient) {
$message = urlencode($message);
$senderid = urlencode($senderid);
$url = 
'http://api.smartsmssolutions.com/smsapi.php?username='.$username.'&password='.$password.'&sender='.$senderid.'&recipient='.$recipient.'&message='.$message.'&';
$send = file_get_contents($url);
return $send;
}
$get_sms = sendsms_get($username, $password, $message, $senderid, $recipient);
echo $get_sms;*/		
		  		
$sql1="INSERT INTO loan_repayment (loan_id, uin, fullname, loan_type, loan_amount, loan_deductable, payment_method, bank, teller_no, payment_date, loan_balance) VALUES ('$loan_id','$uin','$fullname','$loan_type','$loan_amount','$loan_deductable','$payment_method','$bank','$teller_no','$payment_date','$loan_balance')";


$sql2 = "UPDATE loan SET loan_balance='$loan_balance' WHERE loan_id='$_REQUEST[loan_id]'";

mysqli_query($conn,$sql1) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}
						
$result = mysqli_query($conn, $sql2);
// if successfully update
if($result) {
	echo "<script>alert('$fullname Loan Repayment Successfully')
location.href='loan_repayment_history.php?loan_id=".$_REQUEST['loan_id']."'</script>";
	}
	}
	
	
?>
 
                                <h1>Add Loan Repayment</h1>
                                <fieldset>
                                    <h2>Loan Repayment</h2>
                                    <div class="row">
                                        <div class="col-lg-12">
                                        
                                            
                                            
                                            
                                            
                                             <div class="form-group col-lg-6">
                                                <label>UIN *</label>
                                                <input id="name" name="uin" value="<?php echo $row['uin']; ?>"  placeholder="UIN" readonly type="text" class="form-control required">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Fullname *</label>
                                                <input id="name" name="fullname" value="<?php echo $row['fullname']; ?>" placeholder="Fullname" readonly type="text" class="form-control required">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Loan ID *</label>
                                                <input readonly  name="loan_id" value="<?php echo $row['loan_id']; ?>" type="text" placeholder="Loan ID" class="form-control required">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Loan Type *</label>
                                                <input id="userName" readonly value="<?php echo $row['loan_type']; ?>" name="loan_type" type="text" placeholder="Loan ID" class="form-control required">
                                            </div>
                                            
                                            
                                             <div class="form-group col-lg-6">
                                                <label>Loan Amount Deductable *</label>
                                                <input name="loan_deductable" value="<?php echo $row['loan_deductable']; ?>" placeholder="Bank" readonly type="text" class="form-control required">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Payment Method *</label>
                                                <select id="name" name="payment_method" class="form-control required">
                                                <option value="">--Select Payment Method--</option>
                                                <option value="To Bank">To Bank</option>
                                                <option value="Deduction">Deduction</option>
                                                </select>
                                            </div>
                                            
                                            <div class="form-group col-lg-6">
                                                <label>Bank Name *</label>
                                                <select id="name" name="bank" class="form-control required">
                                                <option value="">--Select Bank--</option>
                                                <option value="First Bank">First Bank</option>
                                                <option value="Polaris Bank">Polaris Bank</option>
                                                <option value="Zenith Bank">Zenith Bank</option>
                                                <option value="None">None</option>
                                                </select>
                                                
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Teller No or Reference No *</label>
                                                <input id="name" name="teller_no" placeholder="Teller No or Reference No" type="text" class="form-control required">
                                            </div>
                                            
                                             <div class="form-group col-lg-6">
                                                <label>Loan Payment Date *</label>
                                                <input id="name" name="payment_date" placeholder="Loan Payment Date" type="date" class="form-control required">
                                            </div>
                                             <div class="form-group col-lg-6">
              <label>Loan Balance</label>
              <?php $loan_balance= $row['actual_loan_payable'] - $row['loan_deductable']; 
		  
			  ?>
              <input type="number" step="any" readonly placeholder="Loan Balance" value="<?php echo $loan_balance; ?>"  class="form-control" title="Loan Balance" name="loan_balance">
          </div>
                                            
                          <br>                 
                                            
          <div class="form-group col-lg-12">
                                <input type="submit" name="submit" value="Repay Loan" class="btn btn-danger block m-b pull-right">            </div>
                                    </div>

                                
                                </fieldset>

                               <?php
							   mysqli_close($conn);
	
	
							   ?>
                            </form>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
       
       <?php include 'footer.php'; ?>

        </div>
        </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Steps -->
    <script src="js/plugins/staps/jquery.steps.min.js"></script>

    <!-- Jquery Validate -->
    <script src="js/plugins/validate/jquery.validate.min.js"></script>


    <script>
        $(document).ready(function(){
            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    // Suppress (skip) "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("next");
                    }

                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3)
                    {
                        $(this).steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                }
            }).validate({
                        errorPlacement: function (error, element)
                        {
                            element.before(error);
                        },
                        rules: {
                            confirm: {
                                equalTo: "#password"
                            }
                        }
                    });
       });
    </script>

 <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>
     <script>
        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('to Add New Loan', 'Welcome <?php echo $session_fullname ?>');

            }, 1300);


            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#1C84C6"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 50,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 100,
                    color: "#A4CEE8",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var doughnutOptions = {
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                percentageInnerCutout: 45, // This is 0 for Pie charts
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false
            };

            var ctx = document.getElementById("doughnutChart").getContext("2d");
            var DoughnutChart = new Chart(ctx).Doughnut(doughnutData, doughnutOptions);

            var polarData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 140,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 200,
                    color: "#A4CEE8",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var polarOptions = {
                scaleShowLabelBackdrop: true,
                scaleBackdropColor: "rgba(255,255,255,0.75)",
                scaleBeginAtZero: true,
                scaleBackdropPaddingY: 1,
                scaleBackdropPaddingX: 1,
                scaleShowLine: true,
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false
            };
            var ctx = document.getElementById("polarChart").getContext("2d");
            var Polarchart = new Chart(ctx).PolarArea(polarData, polarOptions);

        });
    </script>
    
</body>

</html>
