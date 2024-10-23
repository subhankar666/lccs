<?php
// Initialize the session
session_start();
ob_start();

include '../config.php';
$connt = mysqli_connect($server, $user_name, $password, $database);
mysqli_query($connt, "SELECT  @User := '{$_SESSION["username"]}'");
//      mysqli_query($connt, "SELECT  @Year := '{$_SESSION["SubID"]}'");

/////////////////////////////////////START OF POST FUNCTION!!!!!!!!!!!!!!!!!!!!!!/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    global $myIncome;
    require '../configure.php';
    $connt = mysqli_connect($server, $user_name, $password, $database);

/*
mysqli_query($connt, " SELECT @ITR_Year :=  (select ITR_Year from ITR_Year where username = '{$_SESSION["username"]}')  ");
mysqli_query($connt, " SELECT @ITR_ID :=  (select ITR_ID from ITR_Submissions where username = '{$_SESSION["username"]}' and ITR_Year = @ITR_Year ) ");

mysqli_query($connt, " SELECT @ITR_Total_Instalments := greatest( '$_POST[Jan_31]' +'$_POST[July_31]' , 0) ");

mysqli_query($connt, " SELECT @Total_PAYE_Tax :=  (select Total_PAYE_Tax from ITR_Submissions where username = '{$_SESSION["username"]}' and ITR_Year = @ITR_Year ) ");
mysqli_query($connt, " SELECT @Int_Tax_Total :=  (select Int_Tax_Total from ITR_Submissions where username = '{$_SESSION["username"]}' and ITR_Year = @ITR_Year ) ");
mysqli_query($connt, " SELECT @Total_ITR_Tax_Paid :=   @ITR_Total_Instalments +  @Total_PAYE_Tax + @Int_Tax_Total ");
 */

    mysqli_query($connt, "INSERT INTO Referals
(
Referer_Firstname,
Referer_Surname,
Referer_Email,

Referee_Firstname,
Referee_Surname,
Referee_Email

)
VALUES
(
'$_POST[Referer_Firstname]',
'$_POST[Referer_Surname]',
'$_POST[Referer_Email]',

'$_POST[Referee_Firstname]',
'$_POST[Referee_Surname]',
'$_POST[Referee_Email]'

)
");

    mysqli_query($connt, "SELECT  @Referral_ID := LAST_INSERT_ID() ");
    mysqli_query($connt, "SELECT  @ReferralDate :=  (select ReferralDate From Referals where Referral_ID = @Referral_ID) ");
//mysqli_query($connt, "SELECT  @Referal_Expiry_Date := (SELECT DATE_ADD(@ReferralDate, INTERVAL 1 Year)) ");
    mysqli_query($connt, "SELECT  @Referal_Expiry_Date := @ReferralDate ");

    mysqli_query($connt, " UPDATE Referals
                       SET Referal_Expiry_Date = @Referal_Expiry_Date
                       WHERE Referral_ID = @Referral_ID ");

    mail("toby.morrell@limited-company-contractor-solutions.co.uk", "Referral - Not Client", "Referral - Not Client", "Referral - Not Client");
    mail("tobymorrell@yahoo.com", "Referral - Not Client", "Referral - Not Client", "Referral - Not Client");

    header("location: Referral_Thanks .php");

} /////////////////////////////////////END OF POST FUNCTION!!!!!/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

include 'header.php'
?>
<div class="page-header light-bg-section mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-3">Make a Referral</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Make a Referral</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>

    <div class="container mt-5">

            <div class="row">
                <div class="col-lg-12">
                    <!-- Make a referral Form Start -->
                    <div class="contact-form wow fadeInUp" data-wow-delay="0.25s">
                        <form id="contactForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" data-toggle="validator">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <label>Your details</label>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label>Their details</label>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="Referer_Firstname" class="form-control" id="Referer_Firstname"
                                        placeholder="First Name" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="Referee_Firstname" class="form-control" id="Referee_Firstname"
                                        placeholder="First Name" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="Referer_Surname" class="form-control" id="Referer_Surname" placeholder="Surname"
                                        required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="Referee_Surname" class="form-control" id="Referee_Surname" placeholder="Surname"
                                        required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="Referer_Email" class="form-control" id="Referer_Email" placeholder="Email address"
                                        required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="Referee_Email" class="form-control" id="Referee_Email" placeholder="Email address"
                                        required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn-default">Submit Referral</button>
                                    <div id="msgSubmit" class="h3 hidden"></div>
                                </div>

                                <div class="col-md-12 mt-5" style="text-align:left">
                                    <hr/>
                                    <p>*If you are an LCCS member please sign in to make you referal.</p>
                                    <p>**If you are not LCCS member please use the same email address for all referals so we can track them.</p>
                                    <p>***Referals are kept for 12 months. If the referee signs up more than 12 months after the referal the referal is void.</p>
                                    <p>****If a referee is referred more than once only the 1st referal will be considered.</p>
                                </div>


                            </div>
                        </form>
                    </div>
                    <!-- Make a referral Form End -->
                </div>
            </div>
        </div>
</div>
    <!-- Page Header End -->

<?php include 'footer.php'?>
