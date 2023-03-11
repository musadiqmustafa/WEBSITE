<?php
if ($_POST["action"] == "home") {
    home();
} elseif ($_POST["action"] == "about") {
    about();
} elseif ($_POST["action"] == "contact") {
    contact();
} elseif ($_POST["action"] == "services") {
    services();
} elseif ($_POST["action"] == "portfolio") {
    portfolio();
} elseif ($_POST["action"] == "info") {
    info();
} elseif ($_POST["action"] == "qualities") {
    qualities();
} elseif ($_POST["action"] == "portfolio_sites") {
    portfolio_sites();
} elseif ($_POST["action"] == "reviews") {
    reviews();
} elseif ($_POST["action"] == "brands") {
    brands();
}

function home()
{
    include "db_connection.php";
    $array = array();
    $sql = "SELECT * FROM home";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($array, $row);
    }
    echo json_encode($array);

}

function about()
{
    include "db_connection.php";
    $sql = "SELECT * FROM about";
    $array = array();
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($array, $row);
    }
    echo json_encode($array);

}

function contact()
{
    include "db_connection.php";
    $sql = "SELECT * FROM info";
    $array = array();
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($array, $row);
    }
    echo json_encode($array);

}

function portfolio()
{
    include "db_connection.php";
    $sql = "SELECT * FROM portfolio";
    $array = array();
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($array, $row);
    }
    echo json_encode($array);

}

function info()
{
    include "db_connection.php";
    $sql = "SELECT * FROM info";
    $array = array();
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($array, $row);
    }
    echo json_encode($array);

}

function qualities()
{
    include "db_connection.php";
    $sql = "SELECT * FROM qualities";
    $array = array();
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($array, $row['q_text']);
    }
    echo json_encode($array);

}

function brands()
{
    include "db_connection.php";
    $sql = "SELECT * FROM brands";
    $array = array();
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($array, $row["brand_img"]);
    }
    echo json_encode($array);
}

function services()
{
    include "db_connection.php";
    $sql = "SELECT * FROM services";
    $array = array();
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($array, $row);
    }
    echo json_encode($array);
}

function portfolio_sites()
{
    include "db_connection.php";
    $sql = "SELECT * FROM portfolio_sites";
    $array = array();
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($array, $row);
    }
    echo json_encode($array);
}

function reviews()
{
    include "db_connection.php";
    $sql = "SELECT * FROM reviews";
    $array = array();
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($array, $row);
    }
    echo json_encode($array);
}