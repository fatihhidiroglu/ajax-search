<?php 
    require("config.php");
    
    if (isset($_POST['input'])) {
        $input  = $_POST['input'];
        $filter = $_POST['filter'];
        
        $where = '';
        switch ($filter) {
            case 'brand':
                $where .= "WHERE ca.brand LIKE '$input%'";
                break;
            case 'model':
                $where .= "WHERE ca.model LIKE '$input%'";
                break;
            case 'engine':
                $where .= "WHERE ca.engine LIKE '$input%'";
                break;
            case 'fuel_type':
                $where .= "WHERE ca.fuel_type LIKE '$input%'";
                break;
            case 'model_year':
                $where .= "WHERE ca.model_year LIKE '$input%'";
                break;
            case 'color':
                $where .= "WHERE c.color LIKE '$input%'";
                break;
            default :
                $where .= "WHERE ca.brand LIKE '$input%'
                OR ca.model LIKE '$input%'
                OR ca.engine LIKE '$input%'
                OR ca.fuel_type LIKE '$input%'
                OR ca.model_year  LIKE '$input%'
                OR c.color LIKE '$input%'";
                break;
                
        }

        $query = "SELECT *
            FROM cars AS ca 
            JOIN colors AS c ON c.id = ca.color
            $where ";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {?>
            <table class="table table-bordered table-striped mt-4" style="max-width: 50%;margin: 0 auto;">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Engine</th>
                        <th>Fuel Type</th>
                        <th>Model Year</th>
                        <th>Color</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id         = $row['id'];
                            $brand      = $row['brand'];
                            $model      = $row['model'];
                            $engine     = $row['engine'];
                            $fuel_type  = $row['fuel_type'];
                            $model_year = $row['model_year'];      
                            $color      = $row['color'];      
                        ?>
                            <tr>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $brand; ?></td>
                                <td><?php echo $model; ?></td>
                                <td><?php echo $engine; ?></td>
                                <td><?php echo $fuel_type; ?></td>
                                <td><?php echo $model_year; ?></td>
                                <td><?php echo $color; ?></td>
                            </tr>
                        <?php
                        }
                    ?>
                </tbody>
            </table>
            <?php
        } else {
            echo ("<h6 class='text-danger text-center mt-3'>No data found</h6>");
        }
    }
?>