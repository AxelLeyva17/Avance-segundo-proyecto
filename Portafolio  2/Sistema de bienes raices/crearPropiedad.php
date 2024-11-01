<?php
    include "includes/header.php";
    require "includes/config/conectDB.php";
    // conectar();

    $post = $_POST;
    // var_dump($post);

    $title = $_POST['title'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    $room = $_POST['room'];
    $wc = $_POST['wc'];
    $garage = $_POST['garage'];
    $timeStamp = $_POST['timeStamp'];
    $seller = $_POST['selller'];

    $query = "insert into propierty (title,price,image,description,room,wc,garage,timeStamp,seller) 
    VALUES ('$title','$price','$image','$description','$room','$wc','$garage','$timeStamp','$seller');";

    $result = mysqli_query($conectar, $query);

    if ($result){
        echo 'Propierty creada';
    }else {
        echo 'Propierty no creada';
    }

    $query_seller = 'select name from seller';
    $result_seller = mysqli_query($conectar, $query_seller);

    while($seller = mysqli_fetch_assoc($result_seller)){
        echo $seller['name'];
    }

?>   

<section>
    <h2>Propierties Form</h2>
    <div>
        <form action="crearPropiedad.php" method="post">
            <fieldset>
                <legend>FIll all fillds to create a new Propierty</legend>
                <div>
                    <label for="title">Title:</label>
                    <input required type="text" id="title" name="title" placeholder="Title for Propierty">
                </div>
                <div>
                    <label for="price">Price:</label>
                    <input required type="number" id="price" name="price" placeholder="1111111111">
                </div>
                <div>
                    <label for="image">Image:</label>
                    <input   type="image" id="image" name="image">
                </div>
                <div>
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" placeholder="Description for Propierty"></textarea>
                </div>
                <div>
                    <label for="room">Rooms:</label>
                    <input type="number" id="room"  name="room">
                </div>
                <div>
                    <label for="wc">WC:</label>
                    <input type="number" id="wc" name="wc">
                </div>
                <div>
                    <label for="garage">Garage:</label>
                    <input type="number" id="garage" name="garage" >
                </div>
                <div>
                    <label for="timestamp">TimeStamp:</label>
                    <input type="date" id="timestamp" name="timestamp" placeholder="2022">
                </div>
                <div>
                    <label for="seller">Seller:</label>
                    <select name="seler" id="seller">
                        <?php while($seller = mysqli_fetch_assoc($result_seller)):?>
                        <option value=""></option><?php echo $seller; ?>
                        
                    </select>
                </div>
                <div>
                    <button type="submit">CREATE A NEW PROPIERTY</button>
                </div>
            </fieldset>
        </form>
    </div>
</section>

<?php include "includes/footer.php" ;?>