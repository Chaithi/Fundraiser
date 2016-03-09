<?php
if (session_id() == "") 
    session_start();
$amount = 0;
class DB {
    private static $_instance;

    public static function get() {
        if(!isset(self::$_instance)) {
            self::$_instance = new mysqli('localhost', 'admin_username', 'admin_password', 'database_name');
            if(mysqli_connect_errno()) {
                trigger_error('Connection failed: '.self::$_instance->error);
            }
        }
        return self::$_instance;
    }
}

function close_db() {
    DB::get()->close();
}

function write_db($first, $last, $amount, $street, $street2, $city, $state, $zip, $email, $anon) {
    if ($anon === "false") {
        $sql = "INSERT INTO kickstarter (firstname, lastname, date, amount, street, street2, city, state, zip, email) VALUES ('" . $first . "', '" . $last . "', NOW(), '" . $amount . "', '" . $street . "', '" . $street2 . "', '" . $city . "', '" . $state . "', '" . $zip . "', '" . $email . "')";
    } else {
        $sql = "INSERT INTO kickstarter (firstname, date, amount) VALUES ('Anonymous', NOW(), '" . $amount . "')";
    }
    
    if (DB::get()->query($sql) === TRUE) {
        close_db();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        close_db();
    }
}

function getInfo() {
    global $amount;
    $sql = "SELECT amount FROM kickstarter";
    $result = DB::get()->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $amount += $row['amount'];
        }
    } 
    close_db();
}

function displayDonations() {
    $sql = "SELECT firstname, lastname FROM kickstarter";
    $result = DB::get()->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<ul class='list-group'>";
        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            echo "<li class='list-group-item'>" . $row['firstname'] . " " . $row['lastname'];
        }
        echo "</ul>";
    } 
    close_db();

}

function getPercentage($max) {
    global $amount;
    
    $percent = $amount/$max;
    if ($percent >= 1) {
        return "100";
    } else {
        $percent = $percent * 100;
        return number_format($percent);
    }
}
