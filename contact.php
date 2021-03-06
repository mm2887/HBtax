<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$name = $_POST['name'];
		$email = $_POST['email'];
    $phone = $_POST['phone'];
		$message = $_POST['message'];

		$from = 'Demo Contact Form';
		$to = 'michael.mashkevich@gmail.com';
		$subject = 'Message from Contact Demo ';

		$body = "From: $name\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		} else {
			echo "<script type='text/javascript'>alert('name working');</script>";
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
	echo "<script type='text/javascript'>alert('I sent the email');</script>";
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HB Family Tax - 5911 Heil Ave Suite G</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }

    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>

</head>

<body>

    <div class="tagline-upper text-center text-heading text-shadow text-white mt-4 hidden-md-down">HB Family Tax</div>
    <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-4 hidden-md-down">5911 Heil Ave. Ste G | Huntington Beach, CA | 714.625.4111</div>

    <!-- Navigation -->
    <nav class="navbar navbar-toggleable-md navbar-light navbar-custom bg-faded py-lg-4">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <a class="navbar-brand text-uppercase text-expanded font-weight-bold hidden-lg-up" href="#">HB Family Tax</a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="index.html">Home</a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="office.html">Office Info</a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="bios.html">Bios</a>
                    </li>
                    <li class="nav-item active px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="contact.html">Contact<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="bg-faded p-4 my-4">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">Contact <strong>HB Family Tax</strong></h2>
            <hr class="divider">
            <div class="row">
                <div class="col-lg-8">
                    <div class="embed-responsive embed-responsive-16by9 map-container mb-4 mb-lg-0">
                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/search?key=AIzaSyAWh4BxTvK7pui3SZus5pHVzBdsUUyNgcQ&q=HB+Family+Tax"></iframe>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5 class="mb-0">Phone:</h5>
                    <div class="mb-4">714.625.4111</div>
                    <h5 class="mb-0">Email:</h5>
                    <div class="mb-4"><a href="mailto:jdrinde@hbfamilytax.net">jdrinde@hbfamilytax.net</a></div>
                    <h5 class="mb-0">Address:</h5>
                    <div class="mb-4">
                        5911 Heil Ave., Suite G
                        <br> Huntington Beach, CA 92649
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-faded p-4 my-4">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">Contact <strong>Form</strong></h2>
            <hr class="divider">
            <form role="form" method="post" enctype="text/plain" action="">
                <div class="row">
                    <div class="form-group col-lg-4">
                        <label class="text-heading">Name</label>
                        <input type="text" name="name" class="form-control">
												<?php echo "<p class='text-danger'>$errName</p>";?>
                    </div>
                    <div class="form-group col-lg-4">
                        <label class="text-heading">Email Address</label>
                        <input type="email" name="email" class="form-control">
												<?php echo "<p class='text-danger'>$errEmail</p>";?>
                    </div>
                    <div class="form-group col-lg-4">
                        <label class="text-heading">Phone Number</label>
                        <input type="tel" name="phone" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-lg-12">
                        <label class="text-heading">Message</label>
                        <textarea class="form-control" name="message" rows="6"></textarea>
												<?php echo "<p class='text-danger'>$errMessage</p>";?>
                    </div>
                    <div class="form-group col-lg-12">
                        <input id="submit" name="submit" type="submit" value="submit" class="btn btn-primary">
                    </div>
                    <div class="form-group col-lg-12">
                        <?php echo $result; ?>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <!-- /.container -->

    <footer class="bg-faded text-center py-5">
        <div class="container">
            <p class="m-0">Copyright &copy; HB Family Tax 2017</p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Zoom when clicked function for phGoogle Map -->
    <script>
    $('.map-container')
        .click(function() {
            $(this).find('iframe').addClass('clicked')
        })
        .mouseleave(function() {
            $(this).find('iframe').removeClass('clicked')
        });
    </script>

</body>

</html>
