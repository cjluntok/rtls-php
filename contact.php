<?php 
    $template = "page";
    $title = "Contact Us";
    $name = 'contact';
    $page = "contact";
    $subtitle = "";
    $banner = "contact-banner.jpg";
?>

<?php include_once('templates/header.php'); ?>


<section class="page-content contact contact--1">
    <div class="page-content-item">
        <div class="page-content-inner container">
               <div class="row pt-20">
                   <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13262.528476685662!2d151.17973!3d-33.795997!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdd4cda59dcf18542!2sWired%20%26%20Wireless%20Solutions%20International!5e0!3m2!1sen!2sau!4v1576621487041!5m2!1sen!2sau" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                   </div>
                   <div class="col-md-6 pt-20 contact-item">
                       <h3>WWSI Sydney Head Office</h3>
                       <p>Level 7, 6 Help St. Chatswood NSW 2067</p>
                       <p>Nationwide support: <a href="tel:">1300 765 543</a></p>
                       <p>Phone: <a href="tel:+612 9412 2100">+61 2 9412 2100</a></p>
                       <p>Fax: +612 8003 9840</p>
                       <p>Email: <a href="mailto:duress@wwsinternational.net">duress@wwsinternational.net</a></p>
                       <p>Customer Support: <a href="mailto: support@wwsinternational.net">support@wwsinternational.net</a></p>
                   </div>

                   <div class="col-md-6 pt-20 contact-item">
                       <h3>WWSI Brisbane Office</h3>
                       <p>227 Koplick Rd Park Ridge QLD 4125</p>
                       <p>Phone: <a href="tel:+1300 765 543">1300 765 543</a></p>
                       <p>Email: <a href="mailto:duress@wwsinternational.net">duress@wwsinternational.net</a></p>
                       <p>Customer Support: <a href="mailto: support@wwsinternational.net">support@wwsinternational.net</a></p>          
                   </div>

                   <div class="col-md-6 pt-20 contact-item">
                       <h3>WWSI Melbourne Office</h3>
                       <p>1/21 Davey Street Box Hill VIC 31285</p>
                       <p>Phone: <a href="tel:+1300 765 543">1300 765 543</a></p>
                       <p>Email: <a href="mailto:duress@wwsinternational.net">duress@wwsinternational.net</a></p>
                       <p>Customer Support: <a href="mailto: support@wwsinternational.net">support@wwsinternational.net</a></p>          
                   </div>

                   <div class="col-md-6 pt-20 contact-item">
                       <h3>WWSI Perth Office</h3>
                       <p>Suite 2, 197 High Street Fremantle WA 6160</p>
                       <p>Phone: <a href="tel:+1300 765 543">1300 765 543</a></p>
                       <p>Email: <a href="mailto:duress@wwsinternational.net">duress@wwsinternational.net</a></p>
                       <p>Customer Support: <a href="mailto: support@wwsinternational.net">support@wwsinternational.net</a></p>          
                   </div>

                   <div class="col-md-6 pt-20 contact-item">
                       <h3>WWSI Middle East Office</h3>
                       <p>Bldg #61 - pr10 Street 12103 Hazmieh, Lebanon</p>
                       <p>Phone/Fax: <a href="tel:+961 545 4345">+961 545 4345</a></p>
                       <p>Email: <a href="mailto:info@wwsinternational.com">info@wwsinternational.com</a></p>
                       <p>Website: <a href="www.wwsinternational.com" target="_blank">www.wwsinternational.com</a></p>          
                   </div>
                    
               </div>

               <hr>

                   <div id="formcontainer" class="row">
                        <div id="form" class="container">

                            <h3>Get in Touch!</h3>

                            <form name="form2" method="post" action="send.php" class="pt-20">
                                <div class="form-group">
                                    <label for="name"><strong>Name</strong></label>
                                    <input type="name" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Enter Name">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="customer_mail"><strong>Email Address</strong></label>
                                    <input type="email" class="form-control" id="customer_mail" aria-describedby="emailHelp" name="customer_mail" placeholder="Enter Email" required>
                                    <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>

                                <div class="form-group">
                                    <label for="phone_number"><strong>Phone Number</strong></label>
                                    <input type="text" class="form-control" id="phone_number" aria-describedby="phoneNumberHelp" name="phone_number" placeholder="Enter Phone Number">
                                </div>

                                <div class="form-group">
                                    <label for="organisation"><strong>Organisation Name</strong></label>
                                    <input type="text" class="form-control" id="organisation" aria-describedby="organisationHelp" name="organisation" placeholder="Enter Organization Name">
                                </div>
                                
                                <div class="form-group">
                                    <label for="location"><strong>Location/Address</strong></label>
                                    <input type="text" class="form-control" id="location" aria-describedby="locationHelp" name="location" placeholder="Enter Location/Address">
                                </div>

                                <div class="form-group">
                                    <p>
                                        <label for="info[]"><strong>Information On:</strong></label>
                                    </p>
                                    <div class="row">
                                        <div class="col-md-4">

                                                <div class="form-check form-check">
                                                    <input class="form-check-input" type="checkbox" id="info1" class="subject" name="info[]" value="Lone Worker system">
                                                    <label class="form-check-label" for="info1">Lone Worker system</label>
                                                </div>
                                                
                                                <div class="form-check form-check">
                                                    <input class="form-check-input" type="checkbox" id="info2" class="subject" name="info[]" value="Duress System">
                                                    <label class="form-check-label" for="info2">Duress System</label>
                                                </div>
            
                                                <div class="form-check form-check">
                                                    <input class="form-check-input" type="checkbox" id="info3" class="subject" name="info[]" value="Satellite Tracking">
                                                    <label class="form-check-label" for="info3">Satellite Tracking</label>
                                                </div>
            
                                                <div class="form-check form-check">
                                                    <input class="form-check-input" type="checkbox" id="info4" class="subject" name="info[]" value="Vehicle Tracking">
                                                    <label class="form-check-label" for="info4">Vehicle Tracking</label>
                                                </div>
            
                                                <div class="form-check form-check">
                                                    <input class="form-check-input" type="checkbox" id="info5" class="subject" name="info[]" value="Asset Tracking">
                                                    <label class="form-check-label" for="info5">Asset Tracking</label>
                                                </div>

                                        </div>

                                        <div class="col-md-4">

                                                <div class="form-check form-check">
                                                    <input class="form-check-input" type="checkbox" id="info6" class="subject" name="info[]" value="Wireless Coverage Solutions">
                                                    <label class="form-check-label" for="info6">Wireless Coverage Solutions</label>
                                                </div>

                                                <div class="form-check form-check">
                                                    <input class="form-check-input" type="checkbox" id="info7" class="subject" name="info[]" value="Location or Tracking">
                                                    <label class="form-check-label" for="info7">Location or Tracking</label>
                                                </div>

                                                <div class="form-check form-check">
                                                    <input class="form-check-input" type="checkbox" id="info8" class="subject" name="info[]" value="Repair/Maintenance">
                                                    <label class="form-check-label" for="info8">Repair/Maintenance</label>
                                                </div>

                                                <div class="form-check form-check">
                                                    <input class="form-check-input" type="checkbox" id="info9" class="subject" name="info[]" value="Public Wi-Fi">
                                                    <label class="form-check-label" for="info9">Public Wi-Fi</label>
                                                </div>

                                                <div class="form-check form-check">
                                                    <input class="form-check-input" type="checkbox" id="info10" class="subject" name="info[]" value="General Information">
                                                    <label class="form-check-label" for="info10">General Information</label>
                                                </div>

                                            </div>

                                        

                                        <div class="col-md-4">
                                                <div class="form-check form-check">
                                                    <input class="form-check-input" type="checkbox" id="info11" class="subject" name="info[]" value="Safety and Security Solutions">
                                                    <label class="form-check-label" for="info11">Safety and Security Solutions</label>
                                                </div>

                                                <div class="form-check form-check">
                                                    <input class="form-check-input" type="checkbox" id="info12" class="subject" name="info[]" value="Temperature and Humidity Monitoring">
                                                    <label class="form-check-label" for="info12">Temperature and Humidity Monitoring</label>
                                                </div>

                                        </div>
                                    </div>

                                </div>

                                <hr class="w-100">

                                <div class="form-group">
                                    <p>
                                        <label for="subject"><strong>Subject:</strong></label>
                                    </p>
                                   
                                            <div class="form-check form-check">
                                                <input class="form-check-input" type="radio" id="sub6" class="subject" name="subject" value="Suggestion">
                                                <label class="form-check-label" for="sub6">Suggestion</label>
                                            </div>

                                            <div class="form-check form-check">
                                                <input class="form-check-input" type="radio" id="sub7" class="subject" name="subject" value="Feedback">
                                                <label class="form-check-label" for="sub7">Feedback</label>
                                            </div>

                                            <div class="form-check form-check">
                                                <input class="form-check-input" type="radio" id="sub8" class="subject" name="subject" value="Ask information">
                                                <label class="form-check-label" for="sub8">Ask information</label>
                                            </div>

                                            <div class="form-check form-check">
                                                <input class="form-check-input" type="radio" id="sub9" class="subject" name="subject" value="Pricing info">
                                                <label class="form-check-label" for="sub9">Pricing info</label>
                                            </div>

                                            <div class="form-check form-check">
                                                <input class="form-check-input" type="radio" id="sub10" class="subject" name="subject" value="Quote">
                                                <label class="form-check-label" for="sub10">Quote</label>
                                            </div>

                                            <div class="form-check form-check">
                                                <input class="form-check-input" type="radio" id="sub11" class="subject" name="subject" value="Quote" checked>
                                                <label class="form-check-label" for="sub11">Other</label>
                                            </div>

                                </div>
                                
                                <hr class="w-100">

                                <div class="form-group">
                                    <p><label for="message"><strong>Message*</strong></label></p>
                                    <textarea class="form-control" name="message" id="message" cols="40" rows="6" placeholder="Enter your message" required></textarea>
                                </div>

                                <input type="submit" value="Submit" class="btn btn-primary w-100" onclick="return validate()">
                            </form>
                        </div>
                   </div>
        </div>
    </div>
</section>


<?php include_once('templates/footer.php'); ?>