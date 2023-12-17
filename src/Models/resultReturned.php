<?php
$result = $this->conn->query($query);

$data = array();

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}