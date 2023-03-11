<?php
if ($_POST["action"] == "login") {
    login();
} elseif ($_POST["action"] == "logout_user") {
    logout_user();
} elseif ($_POST["action"] == "aform") {
    aform();
} elseif ($_POST["action"] == "show_home") {
    show_home();
} elseif ($_POST["action"] == "about_form") {
    about_form();
} elseif ($_POST["action"] == "show_about") {
    show_about();
} elseif ($_POST["action"] == "services") {
    services();
} elseif ($_POST["action"] == "show_services") {
    show_services();
} elseif ($_POST["action"] == "portfolio") {
    portfolio();
} elseif ($_POST["action"] == "show_portfolio") {
    show_portfolio();
} elseif ($_POST["action"] == "info") {
    info();
} elseif ($_POST["action"] == "show_info") {
    show_info();
} elseif ($_POST["action"] == "delete1") {
    delete1();
} elseif ($_POST["action"] == "brands") {
    brands();
} elseif ($_POST["action"] == "show_brands") {
    show_brands();
} elseif ($_POST["action"] == "portfolio_sites") {
    portfolio_sites();
} elseif ($_POST["action"] == "show_portfolio_sites") {
    show_portfolio_sites();
} elseif ($_POST["action"] == "delete_portfolio_sites") {
    delete_portfolio_sites();
} elseif ($_POST["action"] == "delete_brands") {
    delete_brands();
} elseif ($_POST["action"] == "qualities") {
    qualities();
} elseif ($_POST["action"] == "show_qualities") {
    show_qualities();
} elseif ($_POST["action"] == "delete_qualities") {
    delete_qualities();
}

function logout_user()
{
    session_start();
    session_destroy();
    echo "logout";
}

function login()
{
    include "db_connection.php";
    $array = [];
    $user_id = $_POST["user_id"];
    $password = $_POST["password"];
    $user_type = "";

    $sql = "SELECT * FROM `credentials` WHERE `id`='$user_id' AND `password`='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {

        session_start();
        $_SESSION["status"] = "logged in";

        while ($row = $result->fetch_assoc()) {
            array_push($array, "Login Successfull");

            $_SESSION["user_id"] = $row["id"];
        }
    } else {
        array_push($array, "Login Unsuccessfull");
    }
    echo json_encode($array);
}
function aform()
{
    include "db_connection.php";
    $home_title = $_POST["home_title"];
    $home_description = $_POST["home_description"];
    $about_title = $_POST["about_title"];
    $about_description = $_POST["about_description"];
    $contact_title = $_POST["contact_title"];
    $contact_description = $_POST["contact_description"];
    $satisfied_clients = $_POST["satisfied_clients"];
    $projects_completed = $_POST["projects_completed"];
    $country_worldwide = $_POST["country_worldwide"];


    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'pdf', 'doc', 'ppt'); // valid extensions
    $path = '../uploads/';
    $path1 = '../uploads/';
    $path2 = '../uploads/';
    $img = $_FILES['home_img']['name'];
    $tmp = $_FILES['home_img']['tmp_name'];
    // get uploaded file's extension
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    // can upload same image using rand function
    $final_image = rand(1000, 1000000) . $img;
    // check's valid format
    if (in_array($ext, $valid_extensions)) {
        $path = $path . strtolower($final_image);
        if (move_uploaded_file($tmp, $path)) {
        } else {
            echo "Failed to upload image";
        }
    }
    $img1 = $_FILES['about_img']['name'];
    $tmp1 = $_FILES['about_img']['tmp_name'];
    // get uploaded file's extension
    $ext = strtolower(pathinfo($img1, PATHINFO_EXTENSION));
    // can upload same image using rand function
    $final_image1 = rand(1000, 1000000) . $img1;
    // check's valid format
    if (in_array($ext, $valid_extensions)) {
        $path1 = $path1 . strtolower($final_image1);
        if (move_uploaded_file($tmp1, $path1)) {
        } else {
            echo "Failed to upload image";
        }
    }
    $img2 = $_FILES['contact_img']['name'];
    $tmp2 = $_FILES['contact_img']['tmp_name'];
    // get uploaded file's extension
    $ext = strtolower(pathinfo($img2, PATHINFO_EXTENSION));
    // can upload same image using rand function
    $final_image = rand(1000, 1000000) . $img2;
    // check's valid format
    if (in_array($ext, $valid_extensions)) {
        $path2 = $path2 . strtolower($final_image);
        if (move_uploaded_file($tmp2, $path2)) {
            
        } else {
            echo "Failed to upload image";
        }
    }




    $sql = 'SELECT * FROM `home`';
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows == 0) {
        $sql = "INSERT INTO `home`(`home_title`, `home_description`, `home_img`, `satisfied_clients`, `projects_completed`, `country_worldwide`, `about_title`, `about_description`, `about_img`, `contact_title`, `contact_description`, `contact_img`) VALUES ('$home_title','$home_description','$path','$satisfied_clients','$projects_completed','$country_worldwide','$about_title','$about_description','$path1','$contact_title','$contact_description','$path2')";
        $result = mysqli_query($conn, $sql);
        if (mysqli_affected_rows($conn) > 0) {
            $arr = [];
            while ($row = $result->fetch_assoc()) {
                array_push($arr, $row["home_title"], $row["home_description"], $row["home_img"]);
            }
            echo json_encode($arr);
        } else {
            echo "failed";
        }
    } else {
        if ($_FILES['home_img']['name'] == "") {
            $sql = 'select home_img from home';
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $path = $row['home_img'];
        }
        if ($_FILES['about_img']['name'] == "") {
            $sql = 'select about_img from home';
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $path1 = $row['about_img'];
        }
        if ($_FILES['contact_img']['name'] == "") {
            $sql = 'select contact_img from home';
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $path2 = $row['contact_img'];
        }
        $sql20 = "UPDATE `home` SET `home_title`='$home_title',`home_description`='$home_description',`home_img`='$path',`satisfied_clients`='$satisfied_clients',`projects_completed`='$projects_completed',`country_worldwide`='$country_worldwide',`about_title`='$about_title',`about_description`='$about_description',`about_img`='$path1',`contact_title`='$contact_title',`contact_description`='$contact_description',`contact_img`='$path2' WHERE 1";
        if (mysqli_query($conn, $sql20)) {
            echo " Updated successfully ";
          } else {
            echo "Error: " . $sql20 . "<br>" . mysqli_error($conn);
          }

        $sql="SELECT * FROM `home`";
        $result = mysqli_query($conn, $sql);

        $arr = [];
        while ($row = $result->fetch_assoc()) {
            array_push($arr, $row["home_title"], $row["home_description"], $row["home_img"]);
        }
        echo json_encode($arr);
    }
}
function show_home()
{
    include "db_connection.php";
    $sql = "SELECT * FROM `home`";
    $result = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) > 0) {
        $arr = [];
        while ($row = $result->fetch_assoc()) {
            array_push($arr, $row);
        }
        echo json_encode($arr);
    } else {
        echo "failed";
    }
}
function about_form()
{
    include "db_connection.php";
    $about_title = $_POST["about_title"];
    $about_description = $_POST["about_description"];
    $image_title = $_POST["img_title"];
    $about_content = $_POST["about_content"];
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'pdf', 'doc', 'ppt'); // valid extensions
    $path = '../uploads/'; // upload directory
    $img = $_FILES['about_img']['name'];
    $tmp = $_FILES['about_img']['tmp_name'];
    // get uploaded file's extension
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    // can upload same image using rand function
    $final_image = rand(1000, 1000000) . $img;
    // check's valid format
    if (in_array($ext, $valid_extensions)) {
        $path = $path . strtolower($final_image);
        if (move_uploaded_file($tmp, $path)) {
            echo "Image uploaded successfully";
        } else {
            echo "Failed to upload image";
        }
    }
    $sql = 'SELECT * FROM `about`';
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows == 0) {
        $sql = "INSERT INTO `about`(`about_title`, `about_description`, `about_img`,`about_img_title`,`about_content`) VALUES ('$about_title','$about_description','$path','$image_title','$about_content')";
        $result = mysqli_query($conn, $sql);
        if (mysqli_affected_rows($conn) > 0) {
            $arr = [];
            while ($row = $result->fetch_assoc()) {
                array_push($arr, $row["about_title"], $row["about_description"], $row["about_img"]);
            }
            echo json_encode($arr);
        } else {
            echo "failed";
        }
    } else {
        $sql = "UPDATE `about` SET `about_title`='$about_title',`about_description`='$about_description',`about_img`='$path',`about_img_title`='$image_title',`about_content`='$about_content' WHERE 1";
        $result = mysqli_query($conn, $sql);

        $arr = [];
        while ($row = $result->fetch_assoc()) {
            array_push($arr, $row["about_title"], $row["about_description"], $row["about_img"]);
        }
        echo json_encode($arr);
    }
}
function show_about()
{
    include "db_connection.php";
    $sql = "SELECT * FROM `about`";
    $result = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) > 0) {
        $arr = [];
        while ($row = $result->fetch_assoc()) {
            array_push($arr, $row["about_title"], $row["about_description"], $row["about_img"], $row["about_img_title"], $row["about_content"]);
        }
        echo json_encode($arr);
    } else {
        echo "failed";
    }
}
function services()
{
    include "db_connection.php";
    parse_str($_POST['form'], $formData);
    $service_title  = $formData['service_title'];
    $service_icon = $formData["service_icon"];
    $service_content = $formData["service_content"];
    $service_link = $formData["service_link"];
    $service_main_content = $_POST["summernote"];
    $sql2 = "INSERT INTO `services`(`title`, `icon`, `content`,`link`,`main_content`) VALUES ('$service_title','$service_icon','$service_content','$service_link','$service_main_content')";
    $result2 = mysqli_query($conn, $sql2);
    $sql = "SELECT * FROM `services`";
    $result = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) > 0) {
        $arr = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($arr, $row);
        }
        echo json_encode($arr);
    } else {
        echo "failed";
    }
}
function show_services()
{
    include "db_connection.php";
    $sql = "SELECT * FROM `services`";
    $result = mysqli_query($conn, $sql);
    $arr = [];
    if (mysqli_affected_rows($conn) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            array_push($arr, $row);
        }
        echo json_encode($arr);
    }
}
function portfolio()
{
    include "db_connection.php";
    $portfolio_title = $_POST["portfolio_title"];
    $sql = 'SELECT * FROM `portfolio`';
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows == 0) {
        $sql = "INSERT INTO `portfolio`(`p_title`) VALUES ('$portfolio_title')";
        $result = mysqli_query($conn, $sql);
        if (mysqli_affected_rows($conn) > 0) {
            $arr = [];
            while ($row = $result->fetch_assoc()) {
                array_push($arr, $row["p_title"]);
            }
            echo json_encode($arr);
        } else {
            echo "failed";
        }
    } else {
        $sql = "UPDATE `portfolio` SET `p_title`='$portfolio_title' WHERE 1";
        $result = mysqli_query($conn, $sql);

        $arr = [];
        while ($row = $result->fetch_assoc()) {
            array_push($arr, $row["p_title"]);
        }
        echo json_encode($arr);
    }
}
function show_portfolio()
{
    include "db_connection.php";
    $sql = "SELECT * FROM `portfolio`";
    $result = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) > 0) {
        $arr = [];
        while ($row = $result->fetch_assoc()) {
            array_push($arr, $row["p_title"]);
        }
        echo json_encode($arr);
    } else {
        echo "failed";
    }
}

function info()
{
    include "db_connection.php";
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $facebook = $_POST["facebook"];
    $twitter = $_POST["twitter"];
    $instagram = $_POST["instagram"];
    $linkedin = $_POST["linkedin"];
    $uk_contact = $_POST["uk_contact"];
    $uk_address = $_POST["uk_address"];
    $footer_desc = $_POST["footer_desc"];
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'pdf', 'doc', 'ppt'); // valid extensions
    $path = '../uploads/'; // upload directory
    $img = $_FILES['logo_img']['name'];
    $tmp = $_FILES['logo_img']['tmp_name'];
    // get uploaded file's extension
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    // can upload same image using rand function
    $final_image = rand(1000, 1000000) . $img;
    // check's valid format
    if (in_array($ext, $valid_extensions)) {
        $path = $path . strtolower($final_image);
        if (move_uploaded_file($tmp, $path)) {
            echo "Image uploaded successfully";
        } else {
            echo "Failed to upload image";
        }
    }
    $sql = 'SELECT * FROM `info`';
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows == 0) {
        $sql = "INSERT INTO `info`(`contact_number`, `email`, `address`, `facebook`, `twitter`, `instagram`, `linkdin`, `footer_description`, `logo`,`uk_contact`,`uk_address`) VALUES ('$contact','$email','$address','$facebook','$twitter','$instagram','$linkedin','$footer_desc','$path','$uk_contact','$uk_address')";
        $result = mysqli_query($conn, $sql1);
        if (mysqli_affected_rows($conn) > 0) {
            $arr = [];
            while ($row = $result->fetch_assoc()) {
                array_push($arr, $row);
            }
            echo json_encode($arr);
        } else {
            echo "failed";
        }
    } else {
        $sql = "UPDATE `info` SET `contact_number`='$contact',`email`='$email',`address`='$address',`facebook`='$facebook',`twitter`='$twitter',`instagram`='$instagram',`linkdin`='$linkedin',`footer_description`='$footer_desc',`logo`='$path',`uk_contact`='$uk_contact',`uk_address`='$uk_address' WHERE 1";
        $result = mysqli_query($conn, $sql);
        $sql22 = 'SELECT * FROM `info`';
        $result = mysqli_query($conn, $sql22);
        $arr = [];
        while ($row = $result->fetch_assoc()) {
            array_push($arr, $row);
        }
        echo json_encode($arr);
    }
}
function show_info()
{
    include "db_connection.php";
    $sql = "SELECT * FROM `info`";
    $result = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) > 0) {
        $arr = [];
        while ($row = $result->fetch_assoc()) {
            array_push($arr, $row);
        }
        echo json_encode($arr);
    } else {
        echo "failed";
    }
}
function delete1()
{
    include "db_connection.php";
    $id = $_POST["id"];
    $sql = "DELETE FROM `services` WHERE `service_id`='$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) > 0) {
        echo "success";
    } else {
        echo "failed";
    }
}
function brands()
{
    include "db_connection.php";

    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'pdf', 'doc', 'ppt'); // valid extensions
    $path = '../uploads/'; // upload directory
    $img = $_FILES['brand_img']['name'];
    $tmp = $_FILES['brand_img']['tmp_name'];
    // get uploaded file's extension
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    // can upload same image using rand function
    $final_image = rand(1000, 1000000) . $img;
    // check's valid format
    if (in_array($ext, $valid_extensions)) {
        $path = $path . strtolower($final_image);
        if (move_uploaded_file($tmp, $path)) {
            echo "Image uploaded successfully";
            $sql = "INSERT INTO `brands`(`brand_img`) VALUES ('$path')";
            $result = mysqli_query($conn, $sql);
        } else {
            echo "Failed to upload image";
        }
    }
}
function show_brands()
{
    include "db_connection.php";
    $sql = "SELECT * FROM `brands`";
    $result = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) > 0) {
        $arr = [];
        while ($row = $result->fetch_assoc()) {
            array_push($arr, $row);
        }
        echo json_encode($arr);
    } else {
        echo "failed";
    }
}
function portfolio_sites()
{
    include "db_connection.php";
    $portfolio_title = $_POST["portfolio_title"];
    $portfolio_icon = $_POST["portfolio_icon"];
    $portfolio_link = $_POST["portfolio_link"];

    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'pdf', 'doc', 'ppt'); // valid extensions
    $path = '../uploads/'; // upload directory
    $img = $_FILES['portfolio_site_img']['name'];
    $tmp = $_FILES['portfolio_site_img']['tmp_name'];
    // get uploaded file's extension
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    // can upload same image using rand function
    $final_image = rand(1000, 1000000) . $img;
    // check's valid format
    if (in_array($ext, $valid_extensions)) {
        $path = $path . strtolower($final_image);
        if (move_uploaded_file($tmp, $path)) {
            echo "Image uploaded successfully";
            $sql = "INSERT INTO `portfolio_sites`(`title`, `icon`, `link`, `image`) VALUES ('$portfolio_title','$portfolio_icon','$portfolio_link','$path')";

            $result = mysqli_query($conn, $sql);
        } else {
            echo "Failed to upload image";
        }
    }
}
function show_portfolio_sites()
{
    include "db_connection.php";
    $sql = "SELECT * FROM `portfolio_sites`";
    $result = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) > 0) {
        $arr = [];
        while ($row = $result->fetch_assoc()) {
            array_push($arr, $row);
        }
        echo json_encode($arr);
    } else {
        echo "failed";
    }
}
function delete_portfolio_sites()
{
    include "db_connection.php";
    $id = $_POST["id"];
    $sql = "DELETE FROM `portfolio_sites` WHERE `ps_id`='$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) > 0) {
        echo "success";
    } else {
        echo "failed";
    }
}
function delete_brands()
{
    include "db_connection.php";
    $id = $_POST["id"];
    $sql = "DELETE FROM `brands` WHERE `brand_id`='$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) > 0) {
        echo "success";
    } else {
        echo "failed";
    }
}
function qualities()
{
    include "db_connection.php";
    $qualities = $_POST["qualities"];
    $sql = "INSERT INTO `qualities`(`q_text`) VALUES ('$qualities')";
    $result = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) > 0) {
        echo "success";
    } else {
        echo "failed";
    }
}
function show_qualities()
{
    include "db_connection.php";
    $sql = "SELECT * FROM `qualities`";
    $result = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) > 0) {
        $arr = [];
        while ($row = $result->fetch_assoc()) {
            array_push($arr, $row);
        }
        echo json_encode($arr);
    } else {
        echo "failed";
    }
}
function delete_qualities()
{
    include "db_connection.php";
    $id = $_POST["id"];
    $sql = "DELETE FROM `qualities` WHERE `q_id`='$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) > 0) {
        echo "success";
    } else {
        echo "failed";
    }
}
