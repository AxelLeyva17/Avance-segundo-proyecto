<?php include "includes/header.php" ?>
    <section>
        <h2>Contacto</h2>
        <!-- imagen -->
    </section>
    <section>
        <h2>Llena el formulario de contacto</h2>
        <div>
            <form action="">
                <fieldset>
                    <legend>INFORMACION PERSONAL</legend>
                    <div>
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" placeholder="Your name">
                    </div>
                    <div>
                        <label for="email">email:</label>
                        <input type="text"  name="email" id="email" placeholder="YourEmail@gmail.com">
                    </div>
                    <div>
                        <label for="Phone">Phone:</label>
                        <input type="text" name="Phone" id="Phone" placeholder="555 5 5555 55">
                    </div>
                    <div>
                        <label for="msg">Message:</label>
                        <input type="text" name="msg" id="msg" placeholder="Your Message">
                    </div>
                </fieldset>
                <fieldset>
                    <legend>INFORMACION DE LA PROPIEDAD</legend>
                        <div>
                            <label for="vencom">Vende o compra:</label>
                            <input type="select" name="vencom" id="vencom">
                        </div>
                        <div>
                            <label for="Cantidad">Cantidad:</label>
                            <input type="number" name="Cantidad" id="Cantidad" placeholder="1">
                        </div>
                        <div></div>
                </fieldset>
                <fieldset>
                    <legend>Contact</legend>
                    <div>
                        <!-- <label for="contacForm">contactForm:</label> -->
                        <label for="Phone">phone:</label>
                        <input type="radio" name="Phone" id="Phone">
                        <label for="e-mail"><Email:/label>
                        <input type="radio" name="e-mail" id="e-mail">
                    </div>
                    <div>
                        <label for="date">Date</label>
                        <input type="date"  name="date" id="date">
                    </div>
                    <div>
                        <label for="time">Time</label>
                        <input type="time" name="time" id="time">
                    </div>
                </fieldset>
                <div>
                    <button>Contactame</button>
                </div>
            </form>
        </div>
    </section>

    <?php include "includes/footer.php" ?>