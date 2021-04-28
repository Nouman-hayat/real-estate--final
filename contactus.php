<?php
include ('./inclu/header.php');
?>
<div class="map-wrapper sect-space">
    <h3 class="lead-large-text"> Contact Us</h3>
    <div class="container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3402.429875339328!2d74.40652191744383!3d31.484865900000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190f545565cd97%3A0x3b89daf271052f52!2sAl-Madina%20Estate!5e0!3m2!1sen!2s!4v1612794315296!5m2!1sen!2s"
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </div>
</div>
<div class="contact-detail-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="form-section">
                    <h3>GET IN TOUCH</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum molestiae natus odio enim. Ipsum
                        reiciendis
                        at omnis amet sunt eos qui, adipisci corporis, neque nesciunt hic dolorem modi beatae inventore.
                    </p>
                    <form action="" onsubmit="event.preventDefault(); validate();">
                        <div class="row">
                            <div class="col-md-6"> <input type="text" class="form-control" placeholder="Name" id="fname"
                                    onblur="removeErr(this)" title=" Only allows for word characters "
                                    pattern="^[\w'\-,.][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}$">
                            </div>
                            <div class="col-md-6"> <input type="text" class="form-control" id="no"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Email must be in the following order: characters@characters.domain.you must include '@' and '.' sign .After  the 
                            '.' sign, add at least 2 letters from a to z " onblur="removeErr(this)"
                                    placeholder="Email">

                            </div>
                            <div class="col-md-12"> <input type="text" class="form-control" onblur="removeErr(this)"
                                    id="sub" placeholder="Subject">
                            </div>
                            <div class="col-md-12">
                                <textarea name="" onblur="removeErr(this)" id="msg" cols="30" placeholder="Message"
                                    rows="7" class="form-control"></textarea>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-info"> Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-md-6">
                <div class="adress-social-wrapper">
                    <h3>CONTACT INFO</h3>
                    <p>
                        ipsum dolor sit amet consectetur adipisicing elit. Cum molestiae natus odio enim. Ipsum
                        reiciendis
                        at omnis amet sunt eos qui, adipisci corporis, neque nesciunt hic dolorem modi beatae inventore.
                        at omnis amet sunt eos qui, adipisci corporis, neque nesciunt hic dolorem modi beatae inventore.
                        at omnis amet sunt eos qui, adipisci corporis, neque nesciunt hic dolorem modi beatae inventore.
                    </p>
                    <div class="address-wrapper">
                        <div class="row">
                            <div class="col-12">
                                <a href="#"><span class="icon-placeholder"></span> 420 Love
                                    Street
                                    133/2 Mirpure City, Dhaka</a>
                            </div>
                            <div class="col-12">
                                <a href="#"><span class="icon-phone-call"></span> +9(066) 19
                                    5017
                                    628
                                </a>
                            </div>
                            <div class="col-12">
                                <a href="#"><span class="icon-mail"></span>
                                    info.contact@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="social-contact-wrapper">
                        <h3>SOCIAL LINKS</h3>
                        <ul>
                            <li> <a href="#"><span class="icon-facebook2"></span>
                                </a></li>
                            <li>
                                <a href="#"><span class="icon-twitter2"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-instagram2"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-skype"></span>
                                </a>
                            </li>
                            <li>
                                <a href=""><span class="icon-linkedin"></span></a>
                            </li>
                            <li>
                                <a href=""><span class="icon-pinterest1"></span></a>
                            </li>
                            <li>
                                <a href=""><span class="icon-google-plus-logo"></span></a>
                            </li>
                            <li>
                                <a href=""><span class="icon-vimeo"></span></a>
                            </li>
                            <li>

                                <a href=""> <span class="icon-youtube1"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
include ('./inclu/footer.php');
?>