<?php
header("Content-Type: application/json");

echo json_encode([
    "status" => "success",
    "message" => "API Render PHP berjalan",
    "time" => date("Y-m-d H:i:s")
]);
