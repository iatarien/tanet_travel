<?php $lang = basename($_SERVER['PHP_SELF']);  ?>
        <div class="row">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Tadrart</h5>
                <img src="assets/img/offers/tadrart.jpg" class="img-offer">
                <hr>
                <?php 
                if (($lang == "fr.php")) { ?>
                  <p style="text-align: justify; height: 120px;">Tadrart est un massif gréseux dans le Sud-Est de l'Algérie dans le parc culturel du Tassili au Sahara algérien. Située au sud de la ville de Djanet, la zone est connue pour ses peintures rupestres.</p>
                <?php  }else {  ?>
                  <p style="text-align: justify; height: 120px;">Tadrart is a sandstone massif in the South-East of Algeria in the Tassili Cultural Park in the Algerian Sahara. Located south of the town of Djanet, the area is known for its rock paintings.</p>
                <?php  }  ?>
                
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal1" data-ticket-type="premium-access">View details</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <?php if ($lang == "fr.php") { ?>
                  <h5 class="card-title text-muted text-uppercase text-center">Plateau de Tassili</h5>
                <?php  }else {  ?>
                  <h5 class="card-title text-muted text-uppercase text-center">Tassili Platter</h5>
                <?php  }  ?>
                <img src="assets/img/gallery/tassili/7.jpg" class="img-offer">
                <hr>
                <?php 
                if ($lang == "fr.php") { ?>
                  <p style="text-align: justify; height: 120px;">Le Tassili n'Ajjer est un massif montagneux situé au centre du Sahara, dans le Sud-Est de l'Algérie et débordant légèrement sur le territoire libyen.</p>
                <?php  }else {  ?>
                  <p style="text-align: justify; height: 120px;">The tassili n'Ajjer is a mountain range located in the center of the Sahara, in the South-East of Algeria and slightly overflowing into Libyan territory.</p>
                <?php  }  ?>
                
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal2" data-ticket-type="premium-access">View details</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Whatever</h5>
                <img src="assets/img/offers/tadrart.jpg" class="img-offer">
                <hr>
                <?php 
                if ($lang == "fr.php") { ?>
                  <p style="text-align: justify; height: 120px;">Tadrart est un massif gréseux dans le Sud-Est de l'Algérie dans le parc culturel du Tassili au Sahara algérien. Située au sud de la ville de Djanet, la zone est connue pour ses peintures rupestres.</p>
                <?php  }else {  ?>
                  <p style="text-align: justify; height: 120px;">Tadrart is a sandstone massif in the South-East of Algeria in the Tassili Cultural Park in the Algerian Sahara. Located south of the town of Djanet, the area is known for its rock paintings.</p>
                <?php  }  ?>
                
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal3" data-ticket-type="premium-access">View details</button>
                </div>
              </div>
            </div>
          </div>
        </div>