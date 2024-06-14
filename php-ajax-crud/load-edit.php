<?php
    $studentID = $_POST['id'];
    $conn = mysqli_connect("localhost", "root", "", "my-test");
    if (!$conn) {
        echo json_encode(["status" => "error", "message" => "Connection Failed"]);
        exit();
    }

    $query = "SELECT * FROM students WHERE id = '$studentID'";
    $run = mysqli_query($conn, $query);

    if ($run) {
        $result = '';
        while ($data = mysqli_fetch_assoc($run)) {
            $stID = $data['id'];
            $stFname = $data['fname'];
            $stLname = $data['lname'];
            $result .= ' <tr>
                            <td>First Name</td>
                            <td>
                            <input type="text" class="form-controll" id="editFname" value="'.$stFname.'">
                            <input type="text" id="editID" value="'.$stID.'" hidden>
                            </td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td>
                            <input type="text" class="form-controll" id="editLname" value="'.$stLname.'">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                            <input type="submit" class="btn btn-info" id="editSubmit" value="update">
                            </td>
                        </tr>';
        }
        echo $result;
    } 
?>