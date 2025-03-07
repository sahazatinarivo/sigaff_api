<!-- fashion section start -->
      <br><br><br>
<div class="fashion_section">
 <div id="main_slider" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
       <center><h3 class="titre-niveau"><b>ECOLE PRIMAIRE PUBLIC</b></h3></center>
          <div class="carousel-item active">
             <div class="container-fluid">
                <div class="fashion_section_2">
                   <div class="row">
                      <div class="col-lg-3 col-sm-3">
                         <div class="box_main">
                            <h4 class="shirt_text"><?php echo $epp[0]->code_direction; ?></h4>
                            <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                            <div class="tshirt_img"><img src="<?php echo base_url(); ?>/assets/theme/images/epp.jpg"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-3 col-sm-3">
                         <div class="box_main">
                            <h4 class="shirt_text"><?php echo $epp[1]->code_direction; ?></h4>
                            <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                            <div class="tshirt_img"><img src="<?php echo base_url(); ?>/assets/theme/images/epp.jpg"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-3 col-sm-3">
                         <div class="box_main">
                            <h4 class="shirt_text"><?php echo $epp[2]->code_direction; ?></h4>
                            <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                            <div class="tshirt_img"><img src="<?php echo base_url(); ?>/assets/theme/images/epp.jpg"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-3 col-sm-3">
                         <div class="box_main">
                            <h4 class="shirt_text"><?php echo $epp[3]->code_direction; ?></h4>
                            <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                            <div class="tshirt_img"><img src="<?php echo base_url(); ?>/assets/theme/images/epp.jpg"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       <?php if (isset($epp) && count($epp)): ?>
          <?php for ($i=1; $i < floor(count($epp) / 4) ; $i++): ?>
             <div class="carousel-item">
                   <div class="container-fluid">
                      <h1 class="fashion_taital"></h1>
                      <div class="fashion_section_2">
                         <div class="row">
                            <div class="col-lg-3 col-sm-3">
                               <div class="box_main">
                                  <h4 class="shirt_text"><?php echo $epp[(4*$i)+1]->code_direction; ?></h4>
                                  <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                  <div class="tshirt_img"><img src="<?php echo base_url(); ?>/assets/theme/images/epp.jpg"></div>
                                  <div class="btn_main">
                                     <div class="buy_bt"><a href="#">Buy Now</a></div>
                                     <div class="seemore_bt"><a href="#">See More</a></div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-3">
                               <div class="box_main">
                                  <h4 class="shirt_text"><?php echo $epp[(4*$i)+2]->code_direction; ?></h4>
                                  <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                  <div class="tshirt_img"><img src="<?php echo base_url(); ?>/assets/theme/images/epp.jpg"></div>
                                  <div class="btn_main">
                                     <div class="buy_bt"><a href="#">Buy Now</a></div>
                                     <div class="seemore_bt"><a href="#">See More</a></div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-3">
                               <div class="box_main">
                                  <h4 class="shirt_text"><?php echo $epp[(4*$i)+3]->code_direction; ?></h4>
                                  <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                  <div class="tshirt_img"><img src="<?php echo base_url(); ?>/assets/theme/images/epp.jpg"></div>
                                  <div class="btn_main">
                                     <div class="buy_bt"><a href="#">Buy Now</a></div>
                                     <div class="seemore_bt"><a href="#">See More</a></div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-3">
                               <div class="box_main">
                                  <h4 class="shirt_text"><?php echo $epp[(4*$i)+4]->code_direction; ?></h4>
                                  <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                  <div class="tshirt_img"><img src="<?php echo base_url(); ?>/assets/theme/images/epp.jpg"></div>
                                  <div class="btn_main">
                                     <div class="buy_bt"><a href="#">Buy Now</a></div>
                                     <div class="seemore_bt"><a href="#">See More</a></div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
          <?php endfor ?>
       <?php endif ?>
    </div>
    <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
    <i class="fa fa-angle-left"></i>
    </a>
    <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
    <i class="fa fa-angle-right"></i>
    </a>
 </div>
</div>
<!-- fashion section end -->
<!-- electronic section start -->
<div class="fashion_section">
 <div id="main_slider" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
       <center><h3 class="titre-niveau"><b>COLLEGE D'ENSEGNEMENT GENERAL</b></h3></center>
          <div class="carousel-item active">
             <div class="container-fluid">
                <div class="fashion_section_2">
                   <div class="row">
                      <div class="col-lg-3 col-sm-3">
                         <div class="box_main">
                            <h4 class="shirt_text"><?php echo $ceg[0]->code_direction; ?></h4>
                            <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                            <div class="tshirt_img"><img src="<?php echo base_url(); ?>/assets/theme/images/ceg.jpg"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-3 col-sm-3">
                         <div class="box_main">
                            <h4 class="shirt_text"><?php echo $ceg[1]->code_direction; ?></h4>
                            <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                            <div class="tshirt_img"><img src="<?php echo base_url(); ?>/assets/theme/images/ceg.jpg"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-3 col-sm-3">
                         <div class="box_main">
                            <h4 class="shirt_text"><?php echo $ceg[2]->code_direction; ?></h4>
                            <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                            <div class="tshirt_img"><img src="<?php echo base_url(); ?>/assets/theme/images/ceg.jpg"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-3 col-sm-3">
                         <div class="box_main">
                            <h4 class="shirt_text"><?php echo $ceg[3]->code_direction; ?></h4>
                            <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                            <div class="tshirt_img"><img src="<?php echo base_url(); ?>/assets/theme/images/ceg.jpg"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       <?php if (isset($ceg) && count($ceg)): ?>
          <?php for ($i=1; $i < floor(count($ceg) / 4) ; $i++): ?>
             <div class="carousel-item">
                   <div class="container-fluid">
                      <h1 class="fashion_taital"></h1>
                      <div class="fashion_section_2">
                         <div class="row">
                            <div class="col-lg-3 col-sm-3">
                               <div class="box_main">
                                  <h4 class="shirt_text"><?php echo $ceg[(4*$i)+1]->code_direction; ?></h4>
                                  <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                  <div class="tshirt_img"><img src="<?php echo base_url(); ?>/assets/theme/images/ceg.jpg"></div>
                                  <div class="btn_main">
                                     <div class="buy_bt"><a href="#">Buy Now</a></div>
                                     <div class="seemore_bt"><a href="#">See More</a></div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-3">
                               <div class="box_main">
                                  <h4 class="shirt_text"><?php echo $ceg[(4*$i)+2]->code_direction; ?></h4>
                                  <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                  <div class="tshirt_img"><img src="<?php echo base_url(); ?>/assets/theme/images/ceg.jpg"></div>
                                  <div class="btn_main">
                                     <div class="buy_bt"><a href="#">Buy Now</a></div>
                                     <div class="seemore_bt"><a href="#">See More</a></div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-3">
                               <div class="box_main">
                                  <h4 class="shirt_text"><?php echo $ceg[(4*$i)+3]->code_direction; ?></h4>
                                  <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                  <div class="tshirt_img"><img src="<?php echo base_url(); ?>/assets/theme/images/ceg.jpg"></div>
                                  <div class="btn_main">
                                     <div class="buy_bt"><a href="#">Buy Now</a></div>
                                     <div class="seemore_bt"><a href="#">See More</a></div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-3">
                               <div class="box_main">
                                  <h4 class="shirt_text"><?php echo $ceg[(4*$i)+4]->code_direction; ?></h4>
                                  <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                  <div class="tshirt_img"><img src="<?php echo base_url(); ?>/assets/theme/images/ceg.jpg"></div>
                                  <div class="btn_main">
                                     <div class="buy_bt"><a href="#">Buy Now</a></div>
                                     <div class="seemore_bt"><a href="#">See More</a></div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
          <?php endfor ?>
       <?php endif ?>
    </div>
    <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
    <i class="fa fa-angle-left"></i>
    </a>
    <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
    <i class="fa fa-angle-right"></i>
    </a>
 </div>
</div>
<!-- fashion section end -->
<div class="fashion_section">
 <div id="main_slider" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
       <center><h3 class="titre-niveau"><b>LYCEE D'ENSEGNEMENT GENERAL</b></h3></center>
          <div class="carousel-item active">
             <div class="container-fluid">
                <div class="fashion_section_2">
                   <div class="row">
                      <div class="col-lg-3 col-sm-3">
                         <div class="box_main">
                            <h4 class="shirt_text"><?php echo $lycee[0]->code_direction; ?></h4>
                            <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                            <div class="tshirt_img"><img src="<?php echo base_url(); ?>/assets/theme/images/lycee.jpg"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-3 col-sm-3">
                         <div class="box_main">
                            <h4 class="shirt_text"><?php echo $lycee[1]->code_direction; ?></h4>
                            <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                            <div class="tshirt_img"><img src="<?php echo base_url(); ?>/assets/theme/images/lycee.jpg"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-3 col-sm-3">
                         <div class="box_main">
                            <h4 class="shirt_text"><?php echo $lycee[2]->code_direction; ?></h4>
                            <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                            <div class="tshirt_img"><img src="<?php echo base_url(); ?>/assets/theme/images/lycee.jpg"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-3 col-sm-3">
                         <div class="box_main">
                            <h4 class="shirt_text"><?php echo $lycee[3]->code_direction; ?></h4>
                            <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                            <div class="tshirt_img"><img src="<?php echo base_url(); ?>/assets/theme/images/lycee.jpg"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="#">Buy Now</a></div>
                               <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       <?php if (isset($lycee) && count($lycee)): ?>
          <?php for ($i=1; $i < floor(count($lycee) / 4) ; $i++): ?>
             <div class="carousel-item">
                   <div class="container-fluid">
                      <h1 class="fashion_taital"></h1>
                      <div class="fashion_section_2">
                         <div class="row">
                            <div class="col-lg-3 col-sm-3">
                               <div class="box_main">
                                  <h4 class="shirt_text"><?php echo $lycee[(4*$i)+1]->code_direction; ?></h4>
                                  <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                  <div class="tshirt_img"><img src="<?php echo base_url(); ?>/assets/theme/images/lycee.jpg"></div>
                                  <div class="btn_main">
                                     <div class="buy_bt"><a href="#">Buy Now</a></div>
                                     <div class="seemore_bt"><a href="#">See More</a></div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-3">
                               <div class="box_main">
                                  <h4 class="shirt_text"><?php echo $lycee[(4*$i)+2]->code_direction; ?></h4>
                                  <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                  <div class="tshirt_img"><img src="<?php echo base_url(); ?>/assets/theme/images/lycee.jpg"></div>
                                  <div class="btn_main">
                                     <div class="buy_bt"><a href="#">Buy Now</a></div>
                                     <div class="seemore_bt"><a href="#">See More</a></div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-3">
                               <div class="box_main">
                                  <h4 class="shirt_text"><?php echo $lycee[(4*$i)+3]->code_direction; ?></h4>
                                  <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                  <div class="tshirt_img"><img src="<?php echo base_url(); ?>/assets/theme/images/lycee.jpg"></div>
                                  <div class="btn_main">
                                     <div class="buy_bt"><a href="#">Buy Now</a></div>
                                     <div class="seemore_bt"><a href="#">See More</a></div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-3">
                               <div class="box_main">
                                  <h4 class="shirt_text"><?php echo $lycee[(4*$i)+4]->code_direction; ?></h4>
                                  <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                  <div class="tshirt_img"><img src="<?php echo base_url(); ?>/assets/theme/images/lycee.jpg"></div>
                                  <div class="btn_main">
                                     <div class="buy_bt"><a href="#">Buy Now</a></div>
                                     <div class="seemore_bt"><a href="#">See More</a></div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
          <?php endfor ?>
       <?php endif ?>
    </div>
    <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
    <i class="fa fa-angle-left"></i>
    </a>
    <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
    <i class="fa fa-angle-right"></i>
    </a>
 </div>
</div>
<!-- fashion section end -->