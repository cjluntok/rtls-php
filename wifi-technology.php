<?php 
    $template = "page";
    $name = "wifi";
    $page = "tech";
    $title = "Wi-Fi RTLS Technologies";
    $subtitle = "";
    $banner="asset-banner.jpg";
?>

<?php include_once('templates/header.php'); ?>

<section class="page-content page-wifi-container">
    <div class="page-content-item">
        <div class="page-content-inner container">
            <h2 class="page-content-title wow fadeInUp">WiFi RTLS</h2>
            <p class="py-2 wow fadeInUp">WiFi RTLS technology uses tags that transmit a WiFi signal to multiple access points throughout the building. Using differential-time-of-arrival methods, the receivers are able to locate the tag.
            </p>
            <p class="py-2 wow fadeInUp">Many enterprise-grade WiFi systems have positioning capabilities built right into them. Multiple wireless access points measure the relative signal strength of assets to approximate their position inside a facility. This is similar to how GPS works outdoors.</p>
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
                                <div class="col-md-12">
                                    <ul>
                                        <li class="wow fadeInUp"><strong>Integration</strong>—Can be deployed in spaces that have existing WiFi coverage with minimal additional hardware.</li>
                                        <li class="wow fadeInUp"><strong>No LOS Required</strong>—Signals are reliable and hard to disrupt, one of the main reasons WiFi is so widely used for other purposes.</li>
                                        <li class="wow fadeInUp">If you deploy WiFi-based RTLS, you can often use existing WiFi structure with firmware changes.</li>
                                        <li class="wow fadeInUp">It is more accurate than proximity-based RTLS options because it uses time-of-flight measurements with a relatively wide bandwidth. Accuracy indoors is related to signal bandwidth, so if you’re doing 80 GhZ of 5-GhZ WiFi, you can get accurate location positioning within a few meters.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>





<?php include_once('templates/footer.php'); ?>