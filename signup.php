<?php
// Initialize the session
session_start();
ob_start();

//  Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === 1) {
    header('location: http://' . $_SERVER['HTTP_HOST'] . '/../welcome.php', true, 303);
    exit;
}

// Include config file
// require_once "../../config.php";

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

//***************************START OF POST FUNCTION***********************************************************************************************************************************
// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

//***********************************************************************************************************************************************************************************************
//***********************************************************************************************************************************************************************************************
//***********************************************************************************************************************************************************************************************
        // Store data in session variables
        $_SESSION["loggedin"] = true;
        $_SESSION["id"] = $id;
        $_SESSION["username"] = $username;
        $_SESSION["SubID"] = 9999;

//***********************************************************************************************************************************************************************************************
//***********************************************************************************************************************************************************************************************
//***********************************************************************************************************************************************************************************************

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have at least 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password, AccessLevel) VALUES (?, ?, 1)";

        mysqli_query($connt, "SELECT  @Insert_id := LAST_INSERT_ID()");

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {

//************************************************************************************************************************************************************************************************************************************************************
//************************************************************************************************************************************************************************************************************************************************************
//************************************************************************************************************************************************************************************************************************************************************

                // Redirect to login page
                //header("location: http://www.limited-company-contractor-solutions.co.uk/SignUpDetails.php");

                // send email
                mail("tobymorrell@limited-company-contractor-solutions.co.uk", "SignUp - '{$_SESSION["username"]}'", "Sign up has began", "cha ching - '{$_SESSION["username"]}'");
                mail("tobymorrell@yahoo.com", "SignUp - '{$_SESSION["username"]}'", "Sign up has began", "cha ching - '{$_SESSION["username"]}'");

                mysqli_query($connt, " UPDATE users
                       SET AccessLevel = 1
                       WHERE username = '{$_SESSION["username"]}' ");

                header("location: https://www.limited-company-contractor-solutions.co.uk/SignUp/SelectPackage.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }
        }

//************************************************************************************************************************************************************************************************************************************************************
//************************************************************************************************************************************************************************************************************************************************************
//************************************************************************************************************************************************************************************************************************************************************

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
include 'header.php'
?>
<div class="page-header light-bg-section mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-3">Register with LCCS</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Signup</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 mt-5">
                <!-- Contact Form Start -->
                <div class="contact-form wow fadeInUp" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="SULog-container4">
                        <p>Please fill this form to create an account.</p>
                        <div class="form-group col-md-12 mb-4 <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                            <input type="text" name="username" placeholder="Username" class="form-control" value="<?php echo $username; ?>">
                            <span class="help-block"><?php echo $username_err; ?></span>
                        </div>
                        <div class="form-group col-md-12 mb-4 <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                            <input type="password" name="password" placeholder="Password" class="form-control" value="<?php echo $password; ?>">
                            <span class="help-block"><?php echo $password_err; ?></span>
                        </div>
                        <div class="form-group col-md-12 mb-4 <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                            <input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control" value="<?php echo $confirm_password; ?>">
                            <span class="help-block"><?php echo $confirm_password_err; ?></span>
                        </div>
                        <div class="form-group col-md-12 mb-4">
                            <button type="submit" class="btn-default btn-highlighted ms-0 me-2">Sign Up</button>
                            <button type="reset" class="btn-default ms-0 me-2">Reset</button>
                        </div>
                        <p>Already have an account? <a href="../signin.php">Login here</a>.</p>
                    </form>
                </div>
                <!-- Contact Form End -->
            </div>
        </div>
    </div>
</div>
    <!-- Page Header End -->

<?php include 'footer.php'?>
