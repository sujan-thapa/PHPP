<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Picker</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        #colorDisplay{
            height: 12px;
            width: 20%;
        }
    </style>
    
</head>
<body>
    <h1>Select Your Color</h1>
    <form id="form">
        <label for="colorInput">Select a color:</label>
        <input type="color" id="colour" name="colour"> <br><br>
        <button type="submit">Submit</button>
    </form>

    <!-- div to display the color in a background -->
    <div id="colorDisplay"></div>


    <script>

        // ready function after loading of DOM
        $(document).ready(function() {
            $("#form").submit(function(event) {

                // preventDefault() method will prevent from submitting the form
                event.preventDefault(); 

                // storing the user's selected colour in a variable. val() method sets the value
                var color = $("#colour").val(); 
                

                // $.ajax method to perfrom an AJAX request
                $.ajax({
                    url: "Qthree2.php",
                    type: "POST",

                    // data to specifies data to be sent to the server
                    data: { colour: color },
                    success: function(response) {    //function to be run when the request succeeds

                        // set and update the content

                        $("#colorDisplay").html(response); 
                    }
                });
            });
        });
    </script>


</body>
</html>
