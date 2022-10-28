<?php 
    require("config.php");

    $query = "SELECT ca.*, c.color
    FROM cars AS ca 
    JOIN colors AS c ON c.id = ca.color";
    $result = mysqli_query($con, $query);
?>
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
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($rows as $row) {
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
        <?php } ?>
    </tbody>
</table>