<?php
$conn = mysqli_connect("localhost", "root", "", "my-test");
if (!$conn) {
    echo json_encode(["status" => "error", "message" => "Connection Failed"]);
    exit();
}

$query = "SELECT * FROM students";
$run = mysqli_query($conn, $query);

if ($run) {
    $counter = 0;
    $total = mysqli_num_rows($run);
    $result = '';

    while ($data = mysqli_fetch_assoc($run)) {
        $counter++;
        $stID = $data['id'];
        $stFname = $data['fname'];
        $stLname = $data['lname'];
        $result .= '<tr class="text-center table-hover">
            <td>'.$counter.'</td>
            <td class="text-center">'.$stFname.' '.$stLname.'</td>
            <td>
              <button class="btn btn-info btn-sm mt-1 editBtn px-3" data-eid="'.$stID.'">Edit</button>
            </td>
            <td>
              <button class="btn btn-danger btn-sm mt-1 deleteBtn" data-id="'.$stID.'">Delete</button>
            </td>
          </tr>';
    }
    echo json_encode(["status" => "success", "data" => $result, "total" => $total]);
} else {
    echo json_encode(["status" => "error", "message" => "Failed to run query"]);
}
?>
