<?php 
    $template = "page";
    $name = "rf";
    $page = "tech";
    $title = "Radio Frequency RTLS Technology";
    $subtitle = "";
    $banner="radio-banner.jpg";
?>

<?php include_once('templates/header.php'); ?>

<?php 
    $template = "page";
    $name = "bluetooth";
    $page = "tech";
    $banner="bluetooth-banner.jpg";
    $title = "Bluetooth RTLS Technology";
    $subtitle = "";
?>

<?php include_once('templates/header.php'); ?>

<section class="page-content page-tech-container">
    <div class="page-content-item">
        <div class="page-content-inner container">
            <h2 class="page-content-title wow fadeInUp"> Active RFID</h2>
            <p class="wow fadeInUp">Radio Frequency Identification (RFID) is one of the more popular wireless standards used in RTLS. Usually the ‘active’ variety, which means the tags carry a small battery to boost signal strength. The receiving sensors determine tag location by calculating signal strength as assets move through a facility.
            </p>
        </div>
    </div>
</section>

<section class="page-content page-software-card-container">
    <div class="page-content-item">
        <div class="page-content-inner container">
            <div class="row page-software-card">
                <div class="col-md-12">
                    <div class="card">
                            <h3 class="card_title card_title-default">
                             ADVANTAGES
                            </h3>
                            <div class="row card_body">
                                <div class="col-md-6">
                                    <ul>
                                        <li class="wow fadeInUp"><strong>No Line of Sight (LOS) Needed</strong></li>
                                        <li class="wow fadeInUp"><strong>Penetrates Non-metal Solids</strong></li>
                                        <li class="wow fadeInUp"><strong>Smaller Sensors</strong></li>
                                        <li class="wow fadeInUp"><strong>Passive ID tracking</strong></li>
                                        <li class="wow fadeInUp"><strong>Low cost technology</strong></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li class="wow fadeInUp"><strong>No LOS Needed</strong> </li>
                                        <li class="wow fadeInUp"><strong>It's Everywhere</strong> </li>
                                        <li class="wow fadeInUp"><strong>Inventory management</strong> </li>
                                        <li class="wow fadeInUp"><strong>Personnel monitoring</strong> </li>
                                    </ul> 
                                </div> 
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-content page-tech-container">
    <div class="page-content-item">
        <div class="page-content-inner container">
            <h2 class="page-content-title wow fadeInUp">Passive RFID</h2>
            <p class="wow fadeInUp">Passive RFID, which employs simple, battery-free tags and high-power readers, is commonly used in places like libraries and retail stores. The readers send out a low-frequency radio signal that transmits so much energy over the air that the tag’s collector antenna picks up its radio waves with brute force. The tag then transmits back to the reader using a different frequency.
            </p>
        </div>
    </div>
</section>




<?php include_once('templates/footer.php'); ?>
<?php include_once('templates/footer.php'); ?>