<?php
  include_once 'php/templates/boilerplate.php';
  include_once 'php/templates/events-template.php';
  include_once 'php/services/config-service.php';
?>

<!DOCTYPE html>
<html lang="en">
  <?php require_once('wp-blog-header.php') ?>
  <?php head_section(array(), array("css/corporate.css")); ?>

  <body>
  <?php nav_section(); ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1 lead-text opensans">
        <h1 class="opensans top-title">Corporate Events</h1>
        <p class="lead">Theta Tau hosts a number of both public and private corporate events each semester, including info sessions, coding challenges, networking dinners, tailgates, and many more.</p>
		<h3 class="opensans top-title"><strong>For Students:</strong></h3>
		<p class="lead">Any UM-Ann Arbor student interested in our corporate partners may be qualified to attend events. Most events are open to the CoE public but some require pre-screening conducted by our corporate team or are invite-only. Brothers in Theta Tau are offered multiple opportunities to network with the companies listed below and many others, such as Apple, Johnson & Johnson, and Ford. If you are interested in these perks provided by Theta Tau, please visit our <a href="https://thetatauthetagamma.com/rush.php">Rush page</a>. For any corporate questions, contact us at <a href="mailto:tht-rush@umich.edu">tht-rush@umich.edu.</a></p>
        <h3 class="opensans top-title"><strong>For Recruiters:</strong></h3>
        <p class="lead">If you are interested in working with us to set up a recruitment event, please find our corporate packages detailing common events <a href="files/corporate_packages.docx">here</a>. Note that we are happy to accommodate any type of event that you may desire - both public (open to all CoE) and private (just Theta Tau). We offer screening services to target the highest qualified students for your recruitment purposes. If you would like more information or are interested in partnering with our team, please contact us at <a href = "mailto:tht-corporate@umich.edu">tht-corporate@umich.edu</a>.</p>
        <p class="lead">Here is a list up events that we have for the winter semester: </p>
        <div class="row events opensans">
         <div class="col-xs-12 col-sm-9 col-sm-offset-1">
          <?php 
			# events will be equivalent to wordpress posts, 
			# for now will take all 'posts' in the future and display them
			$args = array('post_status' => 'future', 'numberposts' => -1 ,'orderby' => 'post_date', 'order' => 'ASC');
			$events = get_posts($args);
            corporate_events_template($events);
          ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php 
    footer_section();
  ?>
  </body>
</html>
