
<?php
// Initialize the session
session_start();
ob_start();

//  Check if the user is already logged in, if yes then redirect him to welcome page

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === 1) {
    header('location: http://' . $_SERVER['HTTP_HOST'] . '/welcome.php', true, 303);
    exit;
}

// Include config file
// require_once "../config.php";

// Define variables and initialize with empty values
$username = $password = ""; //******Username and password variables both emptied
$username_err = $password_err = "";

/////////////////////////////////////START OF POST FUNCTION!!!!!!!!!!!!!!!!!!!!!!/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") { //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
    global $myIncome;
    require '../configure.php';
    $connt = mysqli_connect($server, $user_name, $password, $database);

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter your username.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($username_err) && empty($password_err)) { //******If no errors
        // Prepare a select statement
        $sql = "SELECT id, username, password, AccessLevel FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $AccessLevel);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {
                            // Password is correct, so start a new session
                            session_start();
//***********************************************************************************************************************************************************************************************
//***********************************************************************************************************************************************************************************************
//***********************************************************************************************************************************************************************************************
                            // Store data in session variables
                            //$_SESSION["loggedin"] = 1;
                            $_SESSION["loggedin"] = $AccessLevel;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            $_SESSION["SubID"] = 9999;
//***********************************************************************************************************************************************************************************************
//***********************************************************************************************************************************************************************************************
//***********************************************************************************************************************************************************************************************

                            // Redirect user to welcome page

                            if ($_SESSION["loggedin"] == 1) {

                                mysqli_query($connt, "INSERT INTO LogIn
                                                    (
                                                    username,
                                                    Year,
                                                    Month,
                                                    Day
                                                    )
                                              VALUES
                                                    (
                                                    '{$_SESSION["username"]}',
                                                    YEAR(CURDATE()),
                                                    month(CURDATE()),
                                                    day(CURDATE())
                                                    )
                                                              ");

                                header("location: welcome.php");
                                exit;
                            }
                            /*
                            elseif ($_SESSION["loggedin"] == 3)
                            {
                            header("location: https://www.limited-company-contractor-solutions.co.uk/ITR_Only.php");
                            exit;
                            }
                             */
                            else {
                                header("location: https://www.limited-company-contractor-solutions.co.uk/Blog/BlogHome.php");
                                exit;
                            }
                            // header("location: welcome.php");     //welcome.php
                            // exit;
                        } else {
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else {
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        // Close statement
        mysqli_stmt_close($stmt);
    }
    // Close connection
    mysqli_close($link);
} /////////////////////////////////////END OF POST FUNCTION!!!!!/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
include 'header.php'?>
<div class="page-header light-bg-section mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-3">Sign In</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Signin</li>
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


                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"  class="Log-container">



                            <div class="form-group col-md-12 mb-4 <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                    <input type="text" name="username" placeholder="username" class="form-control" value="<?php echo $username; ?>">
                                    <span class="help-block"><?php echo $username_err; ?></span>
                            </div>
                            <div class="form-group col-md-12 mb-4 <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                    <input type="password" name="password" placeholder="password" class="form-control">
                                    <span class="help-block"><?php echo $password_err; ?></span>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn-default btn-highlighted ms-0 me-2">Sign in</button>
                                <button type="button" class="btn-default ms-0 me-2" onclick="window.location.href='/signup.php'">Sign up</button>

                            </div>
                            <!-- <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>  -->
                        </form>
                    </div>
                    <!-- Contact Form End -->
                </div>
            </div>
        </div>
</div>
    <!-- Page Header End -->

<?php include 'footer.php'?>
