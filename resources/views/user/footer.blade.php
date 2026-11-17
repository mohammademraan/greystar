<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Greystar</title>
</head>
<style>
   html, body {
            height: 100%;
            margin: 0;
        }

        /* Make the entire layout a flex container */
        body {
            display: flex;
            flex-direction: column;
        }

        /* Content Section */
        .content {
            flex: 1;
            padding-bottom: 70px; /* Prevent content overlap with the footer */
        }

        /* Footer Section */
        footer {
            background-color: black;
            color: white;
            width: 100%;
            padding: 15px 0;
            text-align: center;
            position: fixed; /* Make the footer sticky */
            bottom: 0; /* Stick it to the bottom of the viewport */
            z-index: 1000; /* Ensure it stays above other elements */
        }

    .padding {
        padding-bottom:10%;
    }
    footer a {
        color: white; /* Default color */
        background: black; /* Default background */
    }
    footer a.active {
        color: #15a2c9; /* Active link color */
        background: transparent; /* Active link background */
    }
    footer .row {
        flex-wrap: wrap; /* Allow wrapping on smaller screens */
    }

    footer .col {
        flex: 1 1 50%; /* Adjust column width for smaller screens */
        margin-bottom: 10px; /* Add spacing between rows */
    }

    footer img {
        max-width: 30px; /* Ensure images scale properly */
        height: auto;
    }
    a
    {
      text-decoration:none;
      color:white;
    }
    span
    {
      color:white;
    }
</style>
<body>
    <section>
        <div>
            <footer class="py-2 border-top">
                <div>
                    <div class="row flex-nowrap text-center">
                        <div class="col">
                            <a href="{{ route('dashboard') }}" class="text-decoration-none">
                                <img src="{{ asset('images/footer_home.png') }}" alt="team-image" width="25px" height="30px">
                                <p>Home</p>
                            </a>
                        </div>
                        <div class="col">
                            <a href="{{ route('data-optimization') }}" class="text-decoration-none">
                                <img src="{{ asset('images/footer_tdna.png') }}" alt="team-image" width="25px" height="30px">
                                <p>Lots</p>
                            </a>
                        </div>
                        <div class="col">
                            <a href="{{ route('history') }}" class="text-decoration-none">
                                <img src="{{ asset('images/footer_history.png') }}" alt="team-image" width="25px" height="30px">
                                <p>History</p>
                            </a>
                        </div>
                        <div class="col">
                            <a href="{{ route('profile') }}" class="text-decoration-none">
                                <img src="{{ asset('images/footer_profile.png') }}" alt="team-image" width="25px" height="30px">
                                <p>Profile</p>
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </section>
    <script>
        // Get the current URL path
        const currentPath = window.location.pathname;

        // Select all footer links
        const footerLinks = document.querySelectorAll('footer a');

        // On page load, mark the correct link as active based on the URL
        footerLinks.forEach(link => {
            // Check if the link's href matches the current page path
            const linkPath = new URL(link.href).pathname; // Get the full path of the link
            if (linkPath === currentPath) {
                // Remove 'active' from all links (to ensure only one is active)
                footerLinks.forEach(l => l.classList.remove('active'));

                // Add 'active' to the matching link
                link.classList.add('active');
            }
        });
    </script>
</body>
</html>
