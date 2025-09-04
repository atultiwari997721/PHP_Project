<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
        // --- PHP for Dynamic Head Content ---
        $page_title = "My Awesome PHP Website";
        $page_description = "A clean, modern, single-page website built with PHP and Tailwind CSS.";
    ?>

    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    
    <!-- Tailwind CSS for styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* Using the Inter font family */
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Smooth scrolling behavior */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <?php
        // --- PHP Data Setup ---
        // An associative array to hold website content.
        $content = [
            "company_name" => "Innovate PHP",
            "navigation" => ["Home", "Features", "About", "Contact"],
            "hero_title" => "Build Something Amazing with PHP",
            "hero_subtitle" => "This is a demonstration of a responsive, single-page website powered by a PHP backend.",
            "features_title" => "Key Features",
            "features_subtitle" => "Discover what makes our PHP template powerful and flexible.",
            "features" => [
                [
                    "title" => "Dynamic Content",
                    "description" => "All content, like this text, is managed by PHP variables, making updates simple without touching the HTML."
                ],
                [
                    "title" => "Modern Styling",
                    "description" => "Styled with Tailwind CSS for a responsive design that looks great on any device, from mobile to desktop."
                ],
                [
                    "title" => "Easy to Customize",
                    "description" => "The code is clean, well-commented, and structured for easy modification and expansion."
                ]
            ],
            "about_title" => "About Us",
            "about_p1" => "We are a fictional company created to demonstrate the power of PHP. Our mission is to provide simple, elegant solutions that are easy for developers to understand and build upon.",
            "about_p2" => "This entire page, from the navigation links to this very text, is rendered dynamically using PHP. This separation of logic and presentation is a core concept in modern web development."
        ];
    ?>

    <div class="container mx-auto px-6 py-4">
        <!-- Header & Navigation -->
        <header class="flex justify-between items-center py-4">
            <h1 class="text-2xl font-bold text-indigo-600"><?php echo $content['company_name']; ?></h1>
            <nav class="hidden md:flex space-x-6">
                <?php foreach ($content['navigation'] as $nav_item) : ?>
                    <a href="#<?php echo strtolower($nav_item); ?>" class="text-gray-600 hover:text-indigo-600 transition duration-300"><?php echo $nav_item; ?></a>
                <?php endforeach; ?>
            </nav>
            <button id="mobile-menu-button" class="md:hidden p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
        </header>

        <!-- Mobile Menu (hidden by default) -->
        <div id="mobile-menu" class="hidden md:hidden py-4">
            <?php foreach ($content['navigation'] as $nav_item) : ?>
                <a href="#<?php echo strtolower($nav_item); ?>" class="block py-2 px-4 text-sm hover:bg-gray-200 rounded-md"><?php echo $nav_item; ?></a>
            <?php endforeach; ?>
        </div>

        <!-- Hero Section -->
        <main id="home" class="text-center py-20 md:py-32">
            <h2 class="text-4xl md:text-6xl font-bold leading-tight mb-4">
                <?php echo $content['hero_title']; ?>
            </h2>
            <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto mb-8">
                <?php echo $content['hero_subtitle']; ?>
            </p>
            <a href="#features" class="bg-indigo-600 text-white font-semibold px-8 py-3 rounded-lg shadow-lg hover:bg-indigo-700 transition duration-300">
                Learn More
            </a>
        </main>

        <!-- Features Section -->
        <section id="features" class="py-20">
            <div class="text-center mb-12">
                <h3 class="text-3xl font-bold"><?php echo $content['features_title']; ?></h3>
                <p class="text-gray-600 mt-2"><?php echo $content['features_subtitle']; ?></p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <?php foreach ($content['features'] as $feature) : ?>
                    <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
                        <h4 class="text-xl font-semibold mb-2"><?php echo $feature['title']; ?></h4>
                        <p class="text-gray-600"><?php echo $feature['description']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-20 bg-white rounded-xl shadow-md">
            <div class="grid md:grid-cols-2 gap-10 items-center">
                <div class="px-8">
                    <h3 class="text-3xl font-bold mb-4"><?php echo $content['about_title']; ?></h3>
                    <p class="text-gray-600 mb-4">
                        <?php echo $content['about_p1']; ?>
                    </p>
                    <p class="text-gray-600">
                        <?php echo $content['about_p2']; ?>
                    </p>
                </div>
                <div>
                    <img src="https://placehold.co/600x400/818cf8/ffffff?text=PHP+Code" alt="Placeholder image showing code" class="rounded-lg shadow-lg w-full h-auto">
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-20">
             <div class="text-center max-w-2xl mx-auto">
                <h3 class="text-3xl font-bold mb-4">Get In Touch</h3>
                <p class="text-gray-600 mb-8">Have questions? We'd love to hear from you. Fill out the form below to send us a message.</p>
                <form action="#" method="POST" class="bg-white p-8 rounded-xl shadow-md text-left space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" id="name" name="name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                     <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                     <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="4" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-indigo-600 text-white font-semibold px-8 py-3 rounded-lg shadow-lg hover:bg-indigo-700 transition duration-300">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </section>

        <!-- Footer -->
        <footer class="text-center py-6 border-t border-gray-200">
            <p class="text-gray-500">
                &copy; <?php echo date("Y"); ?> <?php echo $content['company_name']; ?>. All Rights Reserved.
            </p>
        </footer>

    </div>

    <script>
        // JavaScript for mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuLinks = document.querySelectorAll('#mobile-menu a');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when a link is clicked
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });
    </script>

</body>
</html>