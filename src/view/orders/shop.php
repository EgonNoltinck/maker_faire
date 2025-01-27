<section class="container container_shop">

    <div class="header_shop section">
        <div class="header_shop_content">
            <h2 class="header_shop_title">Stel je bouwpakket samen</h2>
            <p>We hebben een standaard pakket voor u klaar gezet. Heb je het materiaal al? Klik het gerust af want niemand wilt teveel materiaal hebben.</p>
        </div>
        <img class="fridge" src="./assets/img/SVG/part_fridge.svg" alt="part_fridge">
    </div>

    <h2 class=shop_title>Je benodigdheden</h2>
    <div class="shop__box">
        
        <form action="index.php?page=shop" method="POST">

            <div class="form_box_shop">
                <div class="shop_items">
                    <article class="shop_item">
                        <h3 class="hidden">shop item</h3>
                        <p class="">€12,99</p>
                        <img class="img_shop_item" src="./assets/img/SVG/PLANK.svg" alt="plank">
                        <div class="item_flex">
                            <p class="">Houten plank</p>
                            <input class="button add__button" type="checkbox" name="plank" value="plank" checked/>
                        </div>
                    </article>
                </div>

                <div class="shop_items">
                    <article class="shop_item">
                        <h3 class="hidden">shop item</h3>
                        <p class="">€4,99</p>
                        <img class="img_shop_item" src="./assets/img/SVG/VIJZEN.svg" alt="vijzen">
                        <div class="item_flex">
                            <p class="">Vijzen</p>
                            <input class="button add__button" type="checkbox" name="vijzen" value="vijzen" checked/>
                        </div>
                    </article>
                </div>

                <div class="shop_items">
                    <article class="shop_item">
                        <h3 class="hidden">shop item</h3>
                        <p class="">€17,99</p>
                        <img class="img_shop_item" src="./assets/img/SVG/WIELEN.svg" alt="wielen">
                        <div class="item_flex">
                            <p class="">Wielen</p>
                            <input class="button add__button" type="checkbox" name="wielen" value="wielen" checked/>
                        </div>
                    </article>
                </div>      

                <div class="shop_items">
                    <article class="shop_item">
                        <h3 class="hidden">shop item</h3>
                        <p class="">€56</p>
                        <img class="img_shop_item" src="./assets/img/SVG/SERVO_MOTOR.svg" alt="motor">
                        <div class="item_flex">
                            <p class="">Motor</p>
                            <input class="button add__button" type="checkbox" name="motor" value="motor" checked/>
                        </div>
                    </article>
                </div>

                <div class="shop_items">
                    <article class="shop_item">
                        <h3 class="hidden">shop item</h3>
                        <p class="">€66</p>
                        <img class="img_shop_item" src="./assets/img/SVG/MOTOR_CONTROLLER.svg" alt="motor controller">
                        <div class="item_flex">
                            <p class="">motor controller</p>
                            <input class="button add__button" type="checkbox" name="controller" value="controller" checked/>
                        </div>
                    </article>
                </div>
                
                <div class="shop_items">
                    <article class="shop_item">
                        <h3 class="hidden">shop item</h3>
                        <p class="">€45</p>
                        <img class="img_shop_item" src="./assets/img/SVG/FLYSKY.svg" alt="flysky">
                        <div class="item_flex">
                            <p class="">flysky</p>
                            <input class="button add__button" type="checkbox" name="flysky" value="flysky" checked/>
                        </div>
                    </article>
                </div>

                <div class="shop_items">
                    <article class="shop_item">
                        <h3 class="hidden">shop item</h3>
                        <p class="">€8,70</p>
                        <img class="img_shop_item" src="./assets/img/SVG/WIRES.svg" alt="wire">
                        <div class="item_flex">
                            <p class="">wire</p>
                            <input class="button add__button" type="checkbox" name="wire" value="wire" checked/>
                        </div>
                    </article>
                </div>

                <div class="shop_items">
                    <article class="shop_item">
                        <h3 class="hidden">shop item</h3>
                        <p class="">€0,69</p>
                        <img class="img_shop_item" src="./assets/img/SVG/HOEK.svg" alt="versterkingshoek">
                        <div class="item_flex">
                            <p class="">wire</p>
                            <input class="button add__button" type="checkbox" name="versterkingshoek" value="versterkingshoek" checked/>
                        </div>
                    </article>
                </div>
            </div>  
            <div class="button_flex">
                <input class="button button--shop" type="submit" value="Betalen">
            </div>
        </form>
    </div>
</section>
