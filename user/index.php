<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
     <?php
    include("header.php");
    
  ?>
        <!--========== END HEADER ==========-->

        <!--========== SWIPER SLIDER ==========-->
        <div class="s-swiper js__swiper-one-item">
            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper">
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('../photos/dis.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white"><font style="color:black;font-family:impact">Mission<br> Disaster</font></h1>
                        </div>
                        <a class="popup" href="#!" data-toggle="modal" data-target="#myModal">
                            <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                        </a>
                    </div>
                </div>
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('../photos/dis2.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <div class="g-margin-b-30--xs">
                                <h2 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white"><font style="background-color: black">Precautions Before Destructions</font></h2>
                            </div>
                            <a class="popup" href="#!"data-toggle="modal" data-target="#myModal1">
                                <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Swiper Wrapper -->
            <div id="video-view">
</div>
            <script>
$('#myModal').on('shown.bs.modal', function () {
  $('#video1')[0].play();
})
$('#myModal').on('hidden.bs.modal', function () {
  $('#video1')[0].pause();
})
});
                
$('#myModal1').on('shown.bs.modal', function () {
  $('#video1')[0].play();
})
$('#myModal1').on('hidden.bs.modal', function () {
  $('#video1')[0].pause();
})
});
    </script>   
            <!-- Arrows -->
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
            <!-- End Arrows -->
            <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
       <iframe width="560" height="409" src="https://www.youtube.com/embed/-QQ-_T5lB_w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
       <iframe width="560" height="409" src="https://www.youtube.com/embed/HMPBf5rkcb0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            <a href="#js__scroll-to-section" class="s-scroll-to-section-v1--bc g-margin-b-15--xs">
                <span class="g-font-size-18--xs g-color--white ti-angle-double-down"></span>
                <p class="text-uppercase g-color--white g-letter-spacing--3 g-margin-b-0--xs">Learn More</p>
            </a>
        </div>
        <!--========== END SWIPER SLIDER ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- Features -->
        <div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-text-center--xs g-margin-b-100--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Welcome to Mission Disaster</p>
                <h2 class="g-font-size-32--xs g-font-size-36--md">We Create Beautiful Experiences <br> That Drive Successful Management for Disasters</h2>
            </div>
           
            <div class="row" style="margin-top:100px">
                 <div class="col-sm-6 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".5s">
                                <i class="g-font-size-28--xs g-color--primary ti-sharethis"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Raise Incidence</h3>
                            <p class="g-margin-b-0--xs">User can able to raise the incidence</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".4s">
                                <i class="g-font-size-28--xs g-color--primary ti-alarm-clock"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Latest Disasters</h3>
                            <p class="g-margin-b-0--xs">User can able to see latest disasters related updates</p>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row" style="margin-top:100px">
                     
                <div class="col-sm-6 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".6s">
                                <i class="g-font-size-28--xs g-color--primary ti-tablet"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Informed Digitally</h3>
                            <p class="g-margin-b-0--xs">Officers are informed through SMS/ E-Mail</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".5s">
                                <i class="g-font-size-28--xs g-color--primary ti-location-pin"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Google Map</h3>
                            <p class="g-margin-b-0--xs">The disaster centers can be shown on google map</p>
                        </div>
                    </div>
                </div> 
            </div>
            <br/><br/><br/>
        </div>
        <!-- End Features -->

        <!-- Parallax -->
       
        <!-- End Parallax -->

        <!-- Culture -->
        <div class="g-promo-section">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="row">
                    <div class="col-md-4 g-margin-t-15--xs g-margin-b-60--xs g-margin-b-0--lg">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">About</h2>
                        </div>
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">MD</h2>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <p class="g-font-size-18--xs">MD is a web portal designed to manage disaster from its prevention to its recovery on a single platform. We will use the portal to notify the officers of national, zonal, state/district level about the disaster, through E-Mail/SMS. User can raise an incident of the disaster which will be verified by CMT.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 g-promo-section__img-right--lg g-bg-position--center g-height-100-percent--md js__fullwidth-img">
                <img class="img-responsive" src="img/970x970/5.jpg" alt="Image">
            </div>
        </div>
        <!-- End Culture -->

            <!-- News -->
        <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-text-center--xs g-margin-b-80--xs">
                <h2 class="g-font-size-32--xs g-font-size-36--md">Latest Disasters</h2>
            </div>
            <div class="row">
                 <?php 
                        include "connection.php";
                        $sql="SELECT * FROM tb1_disaster WHERE status='1'";
                        $query=mysqli_query($con,$sql);
                        while($value=mysqli_fetch_array($query))
                        {
                    ?>
                <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                    <article>
                        <img class="img-responsive" src='<?php echo $value['image']; ?>' alt="Image">
                        <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2"><?php echo $value['name']; ?></p>
                            <p><?php echo $value['description']; ?></p>
                             <a href="latest.php" class="text-uppercase s-btn s-btn-icon--md s-btn--primary-bg g-radius--50 g-padding-x-45--xs">Read More</a>
                        </div>
                    </article>
                </div>
                    <?php
                        }
                    ?>
            </div>
    </div>
        <!--========== END PAGE CONTENT ==========-->
   <?php
    include("footer.php");
  ?>
