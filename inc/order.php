<?php

    echo "
    
        <section class='order' id='order'>

            <h3 class='sub-heading'> order now </h3>
            <h1 class='heading'> free and fast </h1>

            <form action=''>

                <div class='inputBox'>
                    <div class='input'>
                        <span>your name</span>
                        <input type='text' placeholder='enter your name here...'>
                    </div>
                    <div class='input'>
                        <span>your number</span>
                        <input type='number' placeholder='enter your number here...'>
                    </div>
                </div>

                <div class='inputBox'>
                    <div class='input'>
                        <span>your order</span>
                        <input type='text' placeholder='enter coffee name here...'>
                    </div>
                    <div class='input'>
                        <span>additional coffee</span>
                        <input type='test' placeholder='extra with coffee'>
                    </div>
                </div>

                <div class='inputBox'>
                    <div class='input'>
                        <span>how much</span>
                        <input type='number' placeholder='how many orders?'>
                    </div>
                    <div class='input'>
                        <span>date and time</span>
                        <input type='datetime-local'>
                    </div>
                </div>

                <div class='inputBox'>
                    <div class='input'>
                        <span>your address</span>
                        <textarea name='' placeholder='enter your address here...' id='' cols='30' rows='10'></textarea>
                    </div>
                    <div class='input'>
                        <span>your message</span>
                        <textarea name='' placeholder='enter your message here...' id='' cols='30' rows='10'></textarea>
                    </div>
                </div>

                <input type='submit' value='order now' class='btn'>

            </form>

        </section>
    
    ";

?>