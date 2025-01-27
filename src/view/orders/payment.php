<div class="container_about">
    <section class="payment_header_container">
        <div class="title_rotate">
            <h1 class="title_big_payment">ECF</h1>
            <p class="header_sub_payment">The Mini Maker Faire</p>
        </div>    </section>

    <section class="payment_form">
        <form class="form_payment form" action="index.php?page=payment" method="POST">
            <div class="Betalen">
                <h2>Betalen</h2>
                <fieldset>
                    <div class="field_flex">
                        <label class="label" for="fname">Naam</label>
                        <input type="text" id="fname" name="name" placeholder="John Doe">
                        <p class="error"></p>
                    </div>
                    <div class="field_flex">
                        <label class="label" for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="john@example.com">
                        <p class="error"></p>
                    </div>
                </fieldset>
                
                <fieldset class="wrapper_adr">
                    <label class="label label_adres" for="adress"> Adres</label>
                    <div class="wrapper">
                        <input class="adress_place" type="text" id="adress" name="zipcode" placeholder="postcode">
                        <p class="error"></p>

                        <label class="hidden" for="adress_street"> Adres</label>
                        <input class="adress_street" type="text" id="adress_street" name="adress_street" placeholder="Straat">
                        <p class="error"></p>

                        <label class="hidden" for="adress_number"> Adres</label>
                        <input class="adress_number" type="text" id="adress_number" name="adress_number" placeholder="Nummer">
                        <p class="error"></p>

                        <label class="hidden" for="adress_bus"> Adres</label>
                        <div>
                            <input class="adress_bus" type="text" id="adress_bus" name="adress_bus" placeholder="Bus">
                            <p class="error"></p>
                        </div>
                    </div>
                </fieldset>
                <?php var_dump($errors) ?> 
                <fieldset>
                    <div class="field_flex">
                        <label class='label' for="phone"> Phone</label>
                        <input class="phone" type="tel" id="phone" name="phone" placeholder="04 ...">  
                        <p class="error"></p>
                    </div>
                </fieldset>
            </div>

            <div class="betaalmethode">
                <h2>Betaalmethode</h2>
                <label class="label" for="bancontact">Bancontact</label>
                <input type="radio" id="bancontact" name="payment">

                <label class="label" for="paypal">Paypal</label>
                <input type="radio" id="paypal" name="payment">
            </div>
            <div class="submit_flex">
                <input type="submit" value="Betalen" class="button">
            </div>

        </form>
    </section>
</div>