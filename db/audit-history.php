<?php

    require_once($_SERVER['DOCUMENT_ROOT'] . '/partials/standard-page-requires.php');
    $result = getAuditEntriesByID($_SESSION['curr-id']);

?>

            <hr>

            <div class="container mt-4">
                <table class="table table-bordered left-aligned-table">
                    <thead>
                        <tr class="text-center">
                            <th colspan="5"><h3>History</h3></th>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <th class="text-left">Timestamp</th>
                            <th class="text-left">User Name</th>
                            <th class="text-left">ID Number</th>
                            <th class="text-left">Action</th>
                            <th class="text-left">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo '<tr>
                                            <td class="text-left">'.$row["timestamp"].'</td>
                                            <td class="text-left">'.$row["user_name"].'</td>
                                            <td class="text-left">'.$row["id_number"].'</td>
                                            <td class="text-left">'.$row["action"].'</td>
                                            <td class="text-left">'.$row["description"].'</td>
                                          </tr>';
                                }
                            } else {
                                echo "<tr><td colspan='5'>No records found</td></tr>";

                            }
                        ?>
                    </tbody>
                </table>
            </div>