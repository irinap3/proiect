<?php

$sql = "SELECT id, title, `url` FROM `pages` WHERE parent_id = 1 AND is_in_menu = 1 ORDER BY top_menu_pos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
    echo "<div class='top-menu'><div class='container-center'>";
    while($row = $result->fetch_assoc()) {
        // query for children
        echo "<div class='parent-menu'><a href='/" . preg_replace('/\s+/', '', strtolower($row['url'])) . "_" . $row['id'] . "/'>" . strtoupper($row['title']) . "</a>\n";

        // Restul codului PHP pentru submeniu
        
        $sql2 = "SELECT id, title, `url` FROM pages WHERE is_in_menu = 1 AND parent_id = " .$row["id"] . " ORDER BY top_menu_pos";
        $result2 = $conn->query($sql2);
        if ($result2->num_rows > 0) {
            // second menu
            echo "<div class='sub-menu'><ul>";
            while ($row2 = $result2->fetch_assoc()) {
                echo "<li><a href='/" . preg_replace('/\s+/', '', strtolower($row['url'])) . "_" . $row["id"] . "/" . preg_replace('/\s+/', '', strtolower($row2['url'])) . '_' . $row2["id"] . "/'>" . strtoupper($row2['title']) . "</a></li>";
            }
            echo "</ul></div>";
        }
        echo "</div>\n";
    }
    echo "</div></div>\n";
} else {
    echo "0 results";
}

require_once($currentPage["body-file"] . ".php");