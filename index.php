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

        <input type="text" name="live_search" id="live_search" class="form-control" autocomplete="off" placeholder="Search...">
    </div>

    <div id="searchresult"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#live_search").keyup(function() {
                var input= $(this).val();
                
                if(input != "") {
                    $.ajax({
                        url: "search.php",
                        method: "POST",
                        data: {input: input},
                        
                        success: function(data) {
                            $("#searchresult").html(data);
                        }
                    })
                } else {
                    $("#searchresult").css("display", "block");
                }


            });
        });
    </script>
</body>
</html>