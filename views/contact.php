<h1>Contact Me</h1>
<?php if (isset($feedback)) echo "<p>$feedback</p>"; ?>
<form id="contactForm" action="index.php?page=contact" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required>
    <label for="message">Message:</label>
    <textarea name="message" id="message" required></textarea>
    <button type="submit">Send</button>
</form>