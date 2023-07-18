<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundtasia Fundraiser</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .banner {
            height: 200px;
        }
    </style>
</head>


<body>
    <!-- Include the header.php file -->
    <?php include 'header.php'; ?>
    <div class="hero-section">
        <img src="hands2.png" alt="Hero Image" class="w-full max-height-400">
        <div class="absolute top-48 left-0 w-full h-3/4 flex justify-center items-center">
            <div class="text-center text-white">
                <h1 class="text-4xl font-bold mb-8">“We make a living by what we get, </h1>
                <h1 class="text-4xl font-bold mb-10">but we make a life by what we give.”</h1>
                <h2 class="text-2xl mb-4">- Winston Churchill</h2>
            </div>
        </div>
    </div>
    <?php include 'causes.php'; ?>
    <?php include 'about.php'; ?>
    <?php include 'contact.php'; ?>
    <!-- Other sections go here -->
    
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; <?php echo date("Y"); ?> Fundtasia Fundraiser. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>


<!-- index.php -->

<!-- ... (Previous code) -->

<!-- Add this script at the bottom of the file -->
<script>
    // Toggle mobile menu
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.querySelector('.header .mobile-menu');

    menuButton.addEventListener('click', function () {
        mobileMenu.classList.toggle('hidden');
    });
</script>
