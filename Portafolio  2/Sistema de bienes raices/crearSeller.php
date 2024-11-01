<?php
    include "includes/header.php";
    require "includes/config/connectDB.php";
    conectar();

    $post = $_POST;
    // var_dump($post);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $query = "insert into seller (name,email,phone) VALUES ('$name','$email','$phone');";

    $result = mysqli_query($conectar, $query);

    if ($result){
        echo 'Seller creado';
    }else {
        echo 'Seller no creado';
    }                                    
?>        


<section>
    <h2>Seller Form</h2>
    <div>
        <form action="crearSeller.php" method="post">
            <fieldset>
                <legend>FIll all fillds to create a new seller</legend>
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Your name">
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Your@email.com">
                </div>
                <div>
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" placeholder="555 5 5555 55">
                </div>
                <div>
                    <button type="submit">CREATE A NEW SELLER</button>
                </div>
            </fieldset>
        </form>
    </div>
</section>

<?php include "includes/footer.php" ;?>