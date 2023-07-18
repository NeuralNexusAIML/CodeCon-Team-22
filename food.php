<!-- index.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Now - Helping the Homeless During the Holidays</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .donation-goal-bar {
            height: 20px;
            background-color: #f3f3f3;
            border-radius: 10px;
            overflow: hidden;
            margin: 20px auto;
            width: 50%
        }

        .donation-progress {
            height: 100%;
            background-color: #5cdb95;
        }

        .donation-amount {
            margin-top: 10px;
            font-weight: bold;
            text-align: center;
        }

        .donation-description {
            margin-bottom: 20px;
        }

        .donation-button {
            display: block;
            width: 100%;
            text-align: center;
            background-color: #32a852;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .donation-button:hover {
            background-color: #22853d;
        }
    </style>
</head>

<body>
    <!-- Include the header.php file -->
    <?php include 'header.php'; ?>
    <div class="hero-section">
        <img src="food.png" alt="Hero Image" class="w-full max-height-400">
        
    </div>
    <div id="school" class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4 text-center">Donate Now - Helping the Homeless During the Holidays</h1>
        <div class="donation-goal-bar">
            <div class="donation-progress" style="width: <?php echo calculateProgress(); ?>%;"></div>
        </div>
        <p class="donation-amount text-center"><?php echo formatAmount(6000); ?> raised of <?php echo formatAmount(10000); ?> goal</p>
        <p class="donation-description">Donating to end world hunger is a powerful way to make a lasting impact on the lives of the poor and build a more equitable and sustainable future for all. Here are compelling reasons why we should support initiatives to combat hunger.

Firstly, hunger is a devastating problem that affects millions of people worldwide. It not only causes immediate suffering but also perpetuates a cycle of poverty and inequality. By donating to organizations that focus on food security and sustainable agriculture, we can help provide nutritious meals and address the root causes of hunger. This support enables individuals and communities to break free from the constraints of hunger and work towards a better future.

Secondly, ending world hunger is closely linked to achieving other global goals, such as reducing poverty, improving health, and promoting education. Hunger and malnutrition hinder economic development and impede individuals' abilities to thrive and reach their full potential. By investing in initiatives that address food insecurity, we create a ripple effect of positive change, fostering stronger and healthier communities.

Additionally, addressing world hunger requires long-term solutions that involve sustainable farming practices, equitable distribution of resources, and access to education and technology. Donations play a crucial role in supporting research, innovation, and advocacy efforts that drive systemic change. Together, we can support smallholder farmers, promote climate-resilient agriculture, and advocate for policies that prioritize food security and nutrition.

In conclusion, donating to end world hunger is not only a humanitarian imperative but also a strategic investment in a better future for all. By combating hunger, we can alleviate suffering, promote economic growth, and create a world where everyone has the opportunity to thrive. Let us join hands to make a meaningful difference and ensure that no one goes to bed hungry.</p>
    </div>

    <div class="bg-white-500 py-8 mb-8">
        <div class="container mx-auto flex justify-center">
            <div class="w-full bg-green-300 max-w-4xl rounded-lg shadow-lg p-8">
                <div class="flex">
                    <div class="container mx-auto flex flex-col items-center">
                        <h2 class="text-2xl font-bold mb-2">Donate Now</h2>
                        <img src="qr.png" alt="Donate Image" class="mb-4">
                    </div>
                    <div class="container mx-auto flex flex-col items-center">
                        <h2 class="text-2xl font-bold mb-14">Bank Details</h2>
                        <p class="mb-10">Please use the following bank account details for donations:</p>
                        <ul class="pl-0 w-full">
                            <li class="list-none mb-5 text-center"><strong>Account Number:</strong> 1234567890</li>
                            <li class="list-none mb-5 text-center"><strong>Beneficiary Name:</strong> John Doe</li>
                            <li class="list-none mb-5 text-center"><strong>IFSC Code:</strong> ABCD1234</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto flex flex-col items-center">
        <h2 class="text-2xl font-bold mb-4">Subscribe to Our Newsletter</h2>
        <form method="POST" action="subscribe.php">
            <div class="flex flex-col md:flex-row">
                <input type="email" name="email" placeholder="Enter your email" class="py-2 px-4 mb-2 md:mb-0 md:mr-2 border border-gray-300 rounded" required />
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Subscribe
                </button>
            </div>
        </form>
        <p class="text-center mt-2 mb-8">
            Subscribe to our newsletter to stay updated about our activities and donations.
        </p>
    </div>
    
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; <?php echo date("Y"); ?> Fundtasia Fundraiser. All rights reserved.</p>
        </div>
    </footer>


    <?php
    // Helper functions

    // Calculate the progress percentage based on the current and total amounts
    function calculateProgress()
    {
        $currentAmount = 6000;
        $totalAmount = 10000;
        return ($currentAmount / $totalAmount) * 100;
    }

    // Format the amount with commas for better readability
    function formatAmount($amount)
    {
        return number_format($amount);
    }
    ?>
</body>

</html>