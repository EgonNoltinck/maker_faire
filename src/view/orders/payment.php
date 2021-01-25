<div class="container">
    <section class="payment_header_container">
        <div class="title_rotate">
            <h1 class="title_big_payment">ECF</h1>
            <p class="header_sub_payment">The Mini Maker Faire</p>
        </div>    </section>

    <section class="payment_form">
        <form class="form_payment" action="index.php?page=payment" method="POST">
            <div class="Betalen">
                <h2>Betalen</h2>
                <fieldset>
                    <div class="field_flex">
                        <label class="label" for="fname">Naam</label>
                        <input type="text" id="fname" name="name" placeholder="John Doe">
                    </div>
                    <div class="field_flex">
                        <label class="label" for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="john@example.com">
                    </div>
                </fieldset>
                
                <fieldset class="wrapper_adr">
                    <label class="label label_adres" for="adress"> Adres</label>
                    <div class="wrapper">
                        <input class="adress_place" type="text" id="adress" name="zipcode" placeholder="postcode">

                        <label class="hidden" for="adress_street"> Adres</label>
                        <input class="adress_street" type="text" id="adress_street" name="adress_street" placeholder="Straat">

                        <label class="hidden" for="adress_number"> Adres</label>
                        <input class="adress_number" type="text" id="adress_number" name="adress_number" placeholder="Nummer">

                        <label class="hidden" for="adress_bus"> Adres</label>
                        <input class="adress_bus" type="text" id="adress_bus" name="adress_bus" placeholder="Bus">
                    </div>
                </fieldset>
                <?php var_dump($errors) ?> 
                <fieldset>
                    <div class="field_flex">
                        <label class='label' for="phone"> Phone</label>
                        <input class="phone" type="tel" id="phone" name="phone" placeholder="04 ...">  
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
            <input type="submit" value="Betalen" class="button">
        </form>
    </section>
</div>