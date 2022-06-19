<!DOCTYPE html>
<?php
// define variables and set to empty values
$Username = $Password =  $Name = $Email ="";
$UsernameErr = $PasswordErr =  $NameErr = $EmailErr = "";
session_start();
echo "Just to let you know, session cookies are used in this website. Without session cookies, this website will not work.";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if((empty($_POST["Username"])) and isset($_POST['Username'])) {
        $UsernameErr = "Username is required";
    } else {
        $Username = test_input($_POST["Username"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$Username)) {
            $UsernameErr = "Only letters and white space allowed";
        }
    }
    
    if((empty($_POST["Name"])) and isset($_POST['Name'])) {
        $NameErr = "Name is required";
    } else {
        $Name = test_input($_POST["Name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$Name)) {
            $NameErr = "Only letters and white space allowed";
        }
    }
    
    
    if((empty($_POST["Password"])) and isset($_POST['Password'])) {
        $PasswordErr = "Password is required";
    } else {
        $Password = test_input($_POST["Password"]);
    }
    if (empty($_POST["Email"])) {
        $EmailErr = "Email is required";
    } else {
        $Email = test_input($_POST["Email"]);
        // check if e-mail address is well-formed
        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
            $EmailErr = "Invalid email format";
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

class MyDB extends SQLite3 {
    function __construct() {
        $this->open('valuable.db');
    }
}
class MyDBread extends SQLite3 {
    function __construct() {
        $this->open('valuable.db', SQLITE3_OPEN_READONLY);
    }
}
if($Username!="" and $Password!="" and $Email!="" and $Name!= "" and $UsernameErr == "" and $PasswordErr == "" and $NameErr == "" and $EmailErr == ""){
    $sql =<<<EOF
          INSERT INTO COMPANY (ID, NAMEI,PASSWORDI, EMAIL, NAME, TUTORINGID)
          VALUES (Null, "$Username", "$Password", "$Email", "$Name", Null);
    EOF;
    
    $pdo = new MyDBread();
    $idgetter = new MyDBread();
    if(!$pdo){
        echo $db->lastErrorMsg();
    } else {
        echo "Opened Javascript Successfully...";
    }
    
    
    $stmt = $pdo->prepare("SELECT * FROM Company WHERE EMAIL=:email OR NAMEI=:username");
    $stmt->bindParam(":email", $Email, SQLITE3_TEXT);
    $stmt->bindParam(":username", $Username, SQLITE3_TEXT);
    $user = $stmt->execute();
    $result = $user->fetchArray();
    if ($result) {
        echo "\n This email or username has been used before. Therefore, please log in.";
        $x=900;
    } else {
        echo "Unique Email and Username!";
        $x=0;
    }
    $pdo->close();
    if($x!=900){
        $db = new MyDB();
        $ret = $db->exec($sql);
        $db->close();
        if(!$ret) {
            echo $db->lastErrorMsg();
        } else {
            $sql = "SELECT ID FROM COMPANY WHERE rowid = (SELECT MAX(rowid) FROM COMPANY)";
            $info = $idgetter->query($sql);
            $info = $info->fetchArray();
            echo $info['ID'];
            $idgetter->close();
            $_SESSION['Username'] = $Username;
            $_SESSION['Password'] = $Password;
            $_SESSION['TutorID'] = Null;
            $_SESSION['ID'] = $info['ID'];
            $_SESSION['Name'] = $Name;
            $_SESSION['Email'] = $Email;
            
            header('Location: web/index.php');
        }
    }
}
?>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="style/style.css" />
        <link
            href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css"
        />

        <title>Register</title>
    </head>
    <body>
        <div class="container">
            <div id="login-form">
                <div class="title-container">
                    <h1>Register</h1>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-control" method="post">
                    <div class="input-field">
                        <input
                            type="text"
                            placeholder="Email"
                            id="Email"
                            name="Email"
                            class="non-focus"
                        />
                        <span class="separator"></span>
                    </div>
                    <span class="error" style="color:red"><?php echo $EmailErr;?></span>
                    <div class="input-field">
                        <input
                            type="text"
                            placeholder="Full Name"
                            id="Name"
                            name="Name"
                            class="non-focus"
                        />
                        <span class="separator"></span>
                    </div>
                    <span class="error" style="color:red"><?php echo $NameErr;?></span>
                    <div class="input-field">
                        <input
                            type="text"
                            placeholder="Username"
                            id="Username"
                            name="Username"
                            class="non-focus"
                        />
                        <span class="separator"></span>
                    </div>
                    <span class="error" style="color:red"><?php echo $UsernameErr;?></span>
                    <div class="input-field">
                        <input
                            type="password"
                            placeholder="Password"
                            id="Password"
                            name="Password"
                            class="non-focus"
                        />
                        <span class="separator"></span>
                    </div>
                    <span class="error" style="color:red"><?php echo $PasswordErr;?></span>

                    <div class="remember">
                        <span>Remember me</span>
                        <input type="checkbox" name="remember" id="remember" />
                    </div>

                    <div class="btn-container">
                        <input type="submit" value="Register" />
                    </div>
                </form>

                <div class="sign-up-link">
                    <p>Already a member? <a href="index.php">Click here!</a></p>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            $(".input-field input").blur(function() {
                if ($(this).val() != "") {
                    $(this).removeClass("non-focus");
                    $(this).addClass("focus");
                } else {
                    $(this).removeClass("focus");
                    $(this).addClass("non-focus");
                }
            });
        </script>
    </body>
</html>
