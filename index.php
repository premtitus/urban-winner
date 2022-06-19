<!DOCTYPE html>
<?php
// define variables and set to empty values
$Username = $Password =  "";
$UsernameErr = $PasswordErr =  "";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if((empty($_POST["Username"])) and isset($_POST['Username'])) {
        $UsernameErr = "Username is required";
    } else {
        $Username = test_input($_POST["Username"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$Username)) {
            $UsernameErr = "Only letters and white space allowed";
        }
    }
    
    if((empty($_POST["Password"])) and isset($_POST['Password'])) {
        $PasswordErr = "Password is required";
    } else {
        $Password = test_input($_POST["Password"]);
        
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$SUGGESTED = $Password;
class MyDB extends SQLite3 {
    function __construct() {
        $this->open('valuable.db', SQLITE3_OPEN_READONLY);
    }
}

if($Username!="" and $Password!="" and $UsernameErr == "" and $PasswordErr == "") {
    $db = new MyDB();
    if(!$db){
        echo $db->lastErrorMsg();
    }
    
    
    
    $ret = $db->prepare("SELECT * FROM Company WHERE NAMEI=:username and PASSWORDI=:password");
    $ret->bindParam(":username", $Username, SQLITE3_TEXT);
    $ret->bindParam(":password", $Password, SQLITE3_TEXT);
    $user = $ret->execute();
    $x=0;
    
    while($row = $user->fetchArray(SQLITE3_ASSOC) ) {
        if($SUGGESTED==$row['PASSWORDI']){
            $y=$row['TUTORINGID'];
            $z=$row['NAME'];
            $x =10;
            echo "Correct Password!";
            $_SESSION['Username'] = $Username;
            $_SESSION['Password'] = $Password;
            $_SESSION['Name'] = $z;
            $_SESSION["Tutoringid"] = $y;
            $_SESSION['ID'] = $row['ID'];
            $_SESSION['Email'] = $row['Email'];
            header('Location: web/index.php');
        }
    }
    if($Username!=""){
        if($x==0){
            echo "Could not find you account!";
        }
    }
    $db->close();
}

?>
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

        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <div id="login-form">
                <div class="title-container">
                    <h1>Login</h1>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-control" method="post">
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
                        <input type="submit" value="Login" />
                    </div>
                </form>

                <div class="sign-up-link">
                    <p>Don't have an account? <a href="registerindex.php">Click here</a></p>
                </div>

                <div class="divider">
                    <p><span>Sign up faster with</span></p>
                </div>

                <div class="social-sign-up">
                    <div class="social" id="facebook">
                        <a href="#"
                            >Facebook <i class="fab fa-facebook-f"></i
                        ></a>
                    </div>

                    <div class="social" id="google">
                        <a href="#"
                            >Google <i class="fab fa-google"></i></i
                        ></a>
                    </div>

                    <div class="social" id="twitter">
                        <a href="#"
                            >Twitter <i class="fab fa-twitter"></i></i
                        ></a>
                    </div>
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
