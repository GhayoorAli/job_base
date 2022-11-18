<?php
if (!defined('ABSPATH')) {
    exit;
}

class Registration
{

    public static function registrationForm()
    {
?>
        <div class="registration-form">
            <form method="post" action="">
                <select id="user-type" name="user-type">
                    <option value="">Select</option>
                    <option value="employer">Employer</option>
                    <option value="employ">Employ</option>
                </select>
                <input type="text" name="user-fname" id="user-fname" placeholder="First Name" required />
                <input type="text" name="user-lname" id="user-lname" placeholder="Last Name" required />
                <input type="email" name="user-email" id="user-email" placeholder="email" required />
                <input type="password" name="user-pswrd" id="user-pswrd" required />
                <input type="password" name="confirm-pswrd" required />
                <input type="submit" name="join" value="Join">
                <p>Already have an account? <a href="login.php">Login here</a>.</p>
            </form>
        </div>
<?php
    }

    public static function processRegistrationForm()
    {
        global $wpdb;
        if (isset($_POST['join'])) {
            $userfname = $_POST['user-fname'];
            $userlname = $_POST['user-lname'];
            $useremail = $_POST['user-email'];
            $userType = $_POST['user-type'];
            $userpassword = $_POST['user-pswrd'];
            $confirmpassword = $_POST['confirm-pswrd'];
            $exist = $wpdb->get_results("SELECT * from wp_user_registration WHERE useremail ='" . $useremail . "'");
            if (!empty($exist)) {
                if (isset($exist)) {
                    die("Email is already exist, please use another email.");
                }
            }
            if (strlen(trim($_POST["user-pswrd"])) < 8) {
                die("Password must have atleast 8 characters!");
            }
            if ($userpassword != $confirmpassword) {
                die("Password and Confirm password should match!");
            }


            $userRegistered = $wpdb->insert(
                $wpdb->prefix . 'user_registration',
                array(
                    'userfname' => $userfname,
                    'userlname' => $userlname,
                    'useremail' => $useremail,
                    'userpswrd' => password_hash($userpassword, PASSWORD_DEFAULT),
                    'usertype' => $userType
                ),
                array('%s', '%s')
            );

            if ($userRegistered) {
                echo "Successfully registered.";
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
    }
}
