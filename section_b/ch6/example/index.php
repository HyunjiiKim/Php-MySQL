<?php
declare(strict_types=1);
include '../includes/functions.php';  // Include the common functions
include '../includes/validation.php'; // Include validation logic

$user = initializeUser();  // Initialize form fields with empty values
$errors = initializeErrors(); // Initialize error messages array
$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Load the posted data into $user
    $user = loadUserData($_POST);

    // Validate the form input and update $errors
    $errors = validateUserForm($user);

    // If no errors, set success message
    if (empty(array_filter($errors))) {
        $message = 'Your data was valid';
    } else {
        $message = 'Please correct the following errors:';
    }
}

include '../includes/header.php';  // Include the header HTML
?>

<div class="container">
    <h1>Registration Form</h1>
    <?= htmlspecialchars($message) ?>
    <form action="validate-form.php" method='POST'>
        <?php include '../includes/form-fields.php'; ?> <!-- Include form fields -->
        <input type="submit" value="Save">
    </form>
</div>

<?php include '../includes/footer.php'; ?>
