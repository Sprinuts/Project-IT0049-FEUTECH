<link rel="stylesheet" href="<?= base_url('public/style/welcomestudent_cs.css') ?>">
<script src="<?= base_url('public/js/welcomestudents_js.js') ?>" type="text/javascript"></script>

<header>
    <h1>Welcome Students</h1>
</header>

<section class="introduction">
    <p>Welcome to the Borrow Equipment System, a convenient platform where FEU Tech students can borrow the necessary tools and equipment for academic and project-related needs.</p>

    <!-- System Overview Section -->
    <section class="overview">
        <h2>About the Borrow Equipment System</h2>
        <p>The Borrow Equipment System allows students to easily borrow the tools and equipment they need for academic purposes. Whether it's laptops, projectors, or lab equipment, you can check availability, borrow items, and even track the return dates here!</p>
        <img src="<?= base_url('public/images/borrow-equipment.jpg') ?>" alt="Borrow Equipment" class="equipment-image">
    </section>

    <!-- Available Items Section -->
    <section class="available-items">
        <h2>Available Items for Borrowing</h2>
        <p>Here is a list of items that are available for borrowing:</p>
        <ul>
            <li>Laptops</li>
            <li>Projectors</li>
            <li>Lab Equipment (Microscopes, etc.)</li>
            <li>Audio/Visual Equipment (Speakers, microphones)</li>
            <li>Textbooks (on request)</li>
        </ul>
        <p>To borrow any of the items above, simply click the button below and fill out the borrowing request form.</p>
        <a href="<?= base_url('borrow') ?>" class="btn-borrow">Borrow Items</a>
    </section>

    <!-- Borrowing Process Section -->
    <section class="borrowing-process">
        <h2>How to Borrow Items</h2>
        <p>Follow these easy steps to borrow equipment:</p>
        <ol>
            <li>Log in to your account.</li>
            <li>Select the item you want to borrow from the available list.</li>
            <li>Choose your preferred date for the item pickup.</li>
            <li>Submit your borrowing request.</li>
            <li>Pick up your item from the designated pickup area.</li>
        </ol>
    </section>

    <!-- Contact Information Section -->
    <section class="contact">
        <h2>Contact Us for Assistance</h2>
        <p>If you have any questions or need assistance with borrowing equipment, feel free to reach out:</p>
        <ul>
            <li>Email: <a href="mailto:borrow@feutech.edu.ph">borrow@feutech.edu.ph</a></li>
            <li>Phone: (02) 8888-1234</li>
            <li>Visit the Borrowing Office: Room 123, FEU Tech Building</li>
        </ul>
    </section>
</section>
