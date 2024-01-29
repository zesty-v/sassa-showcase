<?php

    $result = getAuditEntriesByID($_SESSION['curr-id']);

?>


            <hr>

            <div class="container mt-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="5">History</th>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <th>Timestamp</th>
                            <th>User Name</th>
                            <th>ID Number</th>
                            <th>Action</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>
                                            <td>".$row["timestamp"]."</td>
                                            <td>".$row["user_name"]."</td>
                                            <td>".$row["id_number"]."</td>
                                            <td>".$row["action"]."</td>
                                            <td>".$row["description"]."</td>
                                          </tr>";
                                }
                            } else {
                                echo "<tr><td colspan='5'>No records found</td></tr>";

                            }
                        ?>
                    </tbody>
                </table>
            </div>