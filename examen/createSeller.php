<?php 
    include "includes/header.php";
    require "includes/config/connectdb.php";

    $db = connectdb();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];

        $query = "INSERT INTO seller (name, email, phone) VALUES ('$name', '$email', '$phone')";
        
        try {
            $result = mysqli_query($db, $query);
            if ($result) {
                echo "<p>Seller Created!</p>";
            } else {
                echo "<p>Error: Seller not created: " . mysqli_error($db) . "</p>";
            }
        } catch (Exception $e) {
            echo "<p>Error: Seller not created: {$e->getMessage()}</p>";
        }
    }
?> 
<section>
    <h2>Seller Form</h2>
    <div>
        <form action="createSeller.php" method="post">
            <fieldset>
                <legend>Fill all fields to create a new seller</legend>
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Your name" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Your@email.com" required>
                </div>
                <div>
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" placeholder="555 5 5555 55" required>
                </div>
                <div>
                    <button type="submit">Create a New Seller</button>
                </div>
            </fieldset>
        </form>
    </div>
</section>
<?php include "includes/footer.php"; ?>
