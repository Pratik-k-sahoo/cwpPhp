<?php
// INSERT INTO `notes` (`sno`, `title`, `description`, `tstamp`) VALUES (NULL, 'Buy books', 'Hy Pratik,\r\nGo to the book store and buy the PS book.\r\nAnd delete this and its previous note after done.', current_timestamp());
$insert = false;
$update = false;
$delete = false;
//Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "notes";

//Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

//Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error());
}

//For delete the note
if(isset($_GET['delete'])){
    $sno = $_GET['delete'];
    $sql = "DELETE FROM `notes` WHERE `notes`.`sno` = $sno";
    $result = mysqli_query($conn, $sql);
    $delete = true;
}

//For update and create a note
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['snoEdit'])){
        //Update the record
        $title = $_POST['note_titleEdit'];
        $description = $_POST['descEdit'];
        $sno = $_POST['snoEdit'];

        //sql query to be executed
        $sql = "UPDATE `notes` SET `title` = '$title' , `description` = '$description' WHERE `notes`.`sno` = $sno";
        $result = mysqli_query($conn, $sql);
        if($result){
            // echo "Updated successfully";
            $update = true;
        }else{
            echo "Not updated due to " . mysqli_error($conn);
        }

    }else{
        $title = $_POST['note_title'];
        $description = $_POST['desc'];

        //sql query to be executed
        $sql = "INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$description')";
        $result = mysqli_query($conn, $sql);

        //check
        if($result){
            // echo "The record has been inserted successfully.";
            $insert = true;
        }else{
            echo "The record hasn't been inserted successfully due to the error -> ". mysqli_error($conn) . ".";
        }
    }
    
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iNOTES - Notes taking made easy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
</head>

<body>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editModalLabel">Edit this Note</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="index.php" method="post">
                        <input type="hidden" name="snoEdit" id="snoEdit">
                        <div class="mb-3">
                            <label for="note_titleEdit" class="form-label">Note Title</label>
                            <input type="text" class="form-control" id="note_titleEdit" name="note_titleEdit">
                        </div>
                        <div class="mb-3">
                            <label for="descEdit" class="form-label">Note Description</label>
                            <textarea class="form-control" id="descEdit" rows="3" name="descEdit"></textarea>
                        </div>
                        <!-- <button type="submit" class="btn btn-primary">Update Note</button> -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update changes</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/cwpPhp/CRUD_APP/"><img src="logo.svg" alt="iNOTES"
                    style="height: 45px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/cwpPhp/CRUD_APP/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/cwpPhp/CRUD_APP/">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/cwpPhp/CRUD_APP/">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <?php
    if($insert){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Note has been added successfully.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
    }
    ?>

    <?php
    if($update){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Note has been updated successfully.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
    }
    ?>

    <?php
    if($delete){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Note has been deleted successfully.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
    }
    ?>

    <div class="container my-5">
        <h2>Add a Note to iNOTES</h2>
        <form action="index.php" method="post">
            <div class="mb-3">
                <label for="note_title" class="form-label">Note Title</label>
                <input type="text" class="form-control" id="note_title" name="note_title">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Note Description</label>
                <textarea class="form-control" id="desc" rows="3" name="desc"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Note</button>
        </form>
    </div>

    <div class="container my-4">
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">S.No.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `notes`";
                $result = mysqli_query($conn, $sql);
                $sno = 0;
                while($row = mysqli_fetch_assoc($result)){
                    $sno++;
                    echo "<tr>
                    <th scope='row'>" . $sno . "</th>
                    <td>" . $row['title'] . "</td>
                    <td>" . $row['description'] . "</td>
                    <td><button class='btn btn-sm btn-primary edit' id=" . $row['sno'] . ">Edit</button> <button class='btn btn-sm btn-primary delete' id=d" . $row['sno'] . ">Delete</button></td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <hr>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
    <script>
        const edits = document.getElementsByClassName('edit');
        Array.from(edits).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit");
                let tr = e.target.parentNode.parentNode;
                let title = tr.getElementsByTagName("td")[0].innerText;
                let desc = tr.getElementsByTagName("td")[1].innerText;
                const descEdit = document.getElementById("descEdit");
                descEdit.value = desc;
                const snoEdit = document.getElementById("snoEdit");
                snoEdit.value = e.target.id;
                console.log(e.target.id);
                const note_titleEdit = document.getElementById("note_titleEdit");
                note_titleEdit.value = title;
                $('#editModal').modal('toggle');
            })
        })

        const deletes = document.getElementsByClassName('delete');
        Array.from(deletes).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("delete");
                let tr = e.target.parentNode.parentNode;
                let title = tr.getElementsByTagName("td")[0].innerText;
                let desc = tr.getElementsByTagName("td")[1].innerText;
                const sno = e.target.id.substr(1,);

                if (confirm("Are you sure you want to delete?")) {
                    console.log("YES");
                    window.location = `index.php?delete=${sno}`;
                } else {
                    console.log("NO");
                }
            })
        })
    </script>
</body>

</html>