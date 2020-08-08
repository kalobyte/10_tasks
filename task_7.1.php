<?php
require_once "db.php";

$profiles = array(
    array(
        "pic" => "sunny",
        "first_name" => "Sunny",
        "last_name" => "A.",
        "proff" => "UI/UX Expert",
        "job" => "Lead Author",
        "twitter" => "myplaneticket",
        "bootstrap" => "myorange",
        "banned" => false
    ),
    array(
        "pic" => "josh",
        "first_name" => "Jos",
        "last_name" => "K.",
        "proff" => "ASP.NET Developer",
        "job" => "Partner &amp; Contributor",
        "twitter" => "atlantez",
        "bootstrap" => "Walapa",
        "banned" => false
    ),
    array(
        "pic" => "jovanni",
        "first_name" => "Jovanni",
        "last_name" => "Lo",
        "proff" => "PHP Developer",
        "job" => "Partner & Contributor",
        "twitter" => "lodev09",
        "bootstrap" => "lodev09",
        "banned" => true
    ),
    array(
        "pic" => "roberto",
        "first_name" => "Roberto",
        "last_name" => "R.",
        "proff" => "Rails Developer",
        "job" => "Partner & Contributor",
        "twitter" => "sildur",
        "bootstrap" => "sildur",
        "banned" => true
    ),
);

/*foreach ($profiles as $profile)
{
    $sql = 'INSERT INTO `users` (pic, first_name, last_name, proff, job, twitter, bootstrap, banned)
            VALUE (:pic, :first_name, :last_name, :proff, :job, :twitter, :bootstrap, :banned)';


    $params = [
        ":pic" => $profile["pic"],
        ":first_name" => $profile["first_name"],
        ":last_name" => $profile["last_name"],
        ":proff" => $profile["proff"],
        ":job" => $profile["job"],
        ":twitter" => $profile["twitter"],
        ":bootstrap" => $profile["bootstrap"],
        ":banned" => $profile["banned"]
    ];

    $statement = $pdo->prepare($sql);
    $statement->execute($params);
}*/

function arrays2db($_arrs, $_pdo)
{
    foreach ($_arrs as $_arrs) {
        $_sql = array();
        $sql = "INSERT INTO `users` SET ";
        foreach ($_arrs as $name => $value) {
            $_sql[] = "`" . $name . "` = :" . $name;
        }

        $sql = $sql . implode(', ', $_sql);
        $stmt = $_pdo->prepare($sql);

        foreach ($_arrs as $name => $value) {
            $stmt->bindValue(':' . $name, $value);
        }
        $stmt->execute();
    }
}

arrays2db($profiles, $pdo);

?>