<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="card-group" id="candidateContainer">

            </div>
        </div>
    </div>

    <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

    <!-- SCRIPTS -->

    <script>
        $(document).ready(function() {
            // Function to fetch and update data
            function fetchData() {
                $.ajax({
                    url: 'voters/fetch', // PHP script to fetch data
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        // Clear existing content
                        $('#candidateContainer').empty();
                        // Append new data
                        $.each(response, function(index, candidate) {
                            var cardHtml = `
                        <div class="card" style="width: 18rem;">
                            <img src="${candidate.picture_url}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">${candidate.no_urut}</h5>
                                <p class="card-text">${candidate.candidate_name}</p>
                                <a href="#" class="btn btn-primary">Pilih</a>
                            </div>
                        </div>`;
                            $('#candidateContainer').append(cardHtml);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching data:', error);
                    }
                });
            }

            // Call fetchData function initially
            fetchData();

            // Call fetchData function every 5 seconds (adjust as needed)
            setInterval(fetchData, 1000); // 5 seconds interval
        });
    </script>

    <!-- -->

</body>

</html>