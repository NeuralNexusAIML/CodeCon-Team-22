<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subscription Successful</title>
  <!-- Include Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
  <?php include 'header.php'; ?>
  <div class="hero-section relative">
        <img src="hands2.png" alt="Hero Image" class="w-full max-h-400">
        <div class="absolute top-0 left-0 w-full h-full flex justify-center items-center">
            <div class="text-center text-white">
                <h1 class="text-2xl font-bold mb-4">Thank You for Subscribing!</h1>
                <p class="text-lg mb-4">Your email has been successfully subscribed to our newsletter.</p>
                <p class="text-lg">Stay tuned for the latest updates and news.</p>
            </div>
        </div>
    </div>

    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; <?php echo date("Y"); ?> Fundtasia Fundraiser. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
