@if (Auth::guest())
<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="contacts1-8" style="background-color: rgb(255, 255, 255);">

    <div class="mbr-section__container container">
        <div class="mbr-contacts mbr-contacts--wysiwyg row" style="padding-top: 30px; padding-bottom: 45px;">
            <div class="col-sm-4">
                <div><img src="images/gobierno.jpg" class="mbr-contacts__img mbr-contacts__img--left"></div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-4">
                        <p class="mbr-contacts__text"><strong>ADDRESS</strong><br>
                        1234 Street Name<br>
                        City, AA 99999</p>
                    </div>
                    <div class="col-sm-4">
                        <p class="mbr-contacts__text"><br></p>
                    </div>
                    <div class="col-sm-4">CONTACTS<div>Email: elsalvador@.com</div><div>Phone: +1 (0) 000 0000 001</div><div>Fax: +1 (0) 000 0000 002</div></div>
                </div>
            </div>
        </div>
    </div>
</section>
 @else
<footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-2" style="background-color: rgb(0, 0, 0);">
    
    <div class="mbr-section__container container">
        <div class="mbr-footer mbr-footer--wysiwyg row" style="padding-top: 36.900000000000006px; padding-bottom: 36.900000000000006px;">
            <div class="col-sm-12">
                <p class="mbr-footer__copyright">Copyright (c) 2016 FEDZA. Terms of Use| >Privacy Policy</a></p>
            </div>
        </div>
    </div>
</footer>
@endif