
<?php

$nameErr = "";
$name = "";

function ValNum(){
    $ReqMethod = $_SERVER["REQUEST_METHOD"];

    if ($ReqMethod == "POST") {

        $ReqPOSTname = $_POST["name"];

        $ReqEmpty = empty($ReqPOSTname);
        $ReqName = trim($ReqPOSTname);
        $ReqName = stripslashes($ReqName);
        $ReqName = htmlspecialchars($ReqName);
        $ReqPreg = preg_match("/^[0-9]*$/", $ReqName);

        if ($ReqEmpty) {
            $GLOBALS['nameErr'] = "Name is required";
        } else {
            if (!$ReqPreg) {
                $GLOBALS['nameErr'] = "Only letters and white space allowed";
            }else{
                Action($ReqName); 
            }
        }
    }
}

function Action($name){
    header("Location: https://www.google.com/search?sxsrf=ALeKk01oz_MlNtcVGs7YRWBtHc0prq2nHA%3A1605081957257&ei=ZZurX_-dD4nH_QbhyJTYBA&q=".$name);
}  

?>
