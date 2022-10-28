<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Ajax Search</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="max-width: 50%;">
        <div class="text-center mt-5 mb-4">
            <h2>PHP Ajax Search</h2>
        </div>
        <div class="input-group mt-3 mb-3">
            <input type="text" class="form-control" name="ajax_search" id="ajax_search" autocomplete="off" placeholder="Search...">
            <select class="input-group-prepend" name="filter" id="filter">
                <option value="all">All</option>
                <option value="brand">Brand</option>
                <option value="model">Model</option>
                <option value="engine">Engine</option>
                <option value="fuel_type">Fuel Type</option>
                <option value="model_year">Model Year</option>
                <option value="color">Color</option>
            </select>
        </div>
    </div>

    <div id="search_result"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#ajax_search").keyup(function() {
                var input  = $(this).val();
                var filter = $('#filter').val();

                if (input != "") {
                    $.ajax({
                        url: "search.php",
                        method: "POST",
                        data: {
                            input: input,
                            filter: filter
                        },
                        
                        success: function(data) {
                            $("#search_result").html(data);
                            $("#search_result").css("display", "block");
                        }
                    })
                } else {
                    $("#search_result").css("display", "none");
                }
            });
        });
    </script>
</body>
</html>