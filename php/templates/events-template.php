<?php
  /*
    RUSH EVENTS SECTION 
      Takes:
        An events object that implements at least the following format:
          [
            [0] => [
              "summary" => "A summary",
              "time" => "A time string",
              "location" => "a location"
            ]
            [1] => [...],
            ...
          ]
      Sends:
        the rush events section rendered from the given events (for rush page)
  */

  function rush_events_template($events) {
    /*
      Note that interest in the winter semester 
      Usually spans from November - February.
      If it's currently late-year, bump the year 
      to next year so that we see the next year's
      winter rush events.
    */
    foreach($events as $i => $event) {
?>
    <div class="col-xs-10 col-xs-offset-1 event-card">
      <div class="col-xs-12 col-sm-5">
        <h4> <?php echo $event['summary']; ?> </h4>
      </div>
      <div class='col-xs-12 col-sm-4'>
        <p> <?php echo $event['time']; ?> </p>
      </div>
      <div class='col-xs-12 col-sm-3'>
        <p> <?php echo $event['location']; ?> </p>
      </div>
    </div>
<?php
    }
    if (count($events) == 0) {
?>
    <p class='lead'>
      It looks like our Rush Chairs haven't created rush events for the upcoming semester yet or rush has already ended. The best way to get the latest information about rush would be to <a href='mailto:tht-rush@umich.edu'>contact us.</a>
    </p>
    <hr class='divider'>
<?php
    }
?>
<?php
    } 
?>
  

<?php
  /* 
   * CORPORATE EVENTS TEMPLATE
   * $events is an array of post objects from wordpress.
   * The events are queried from the wordpress database and rendered on corporate.php 
   * with this function.
   */

  function corporate_events_template($events) {
    # wordpress maintains a global post variable that we can alter
    # one at a time with setup_postdata
    global $post;
    foreach($events as $post) {
	    setup_postdata($post);
?>
    <!-- From there we can render aspects of the post such as content and title-->
    <div class="row center-block">
    	<div class="col-xs-12 col-sm-3">
		<p class=""><?php the_post_thumbnail( 'thumbnail' );  ?> </p>
    	</div>
    	<div class="col-xs-12  col-sm-9 event-card">
			<h4 class="time_date_header"> <?php echo get_the_date(), " ", the_time(); ?> </h4>
        		<h1> <?php echo the_title(); ?> </h1>
        		<p> <?php echo the_content(); ?> </p>
	</div>


    </div>
<?php
	    wp_reset_postdata();
    }
    if (count($events) == 0) {
?> 
    <p class='lead'>
      It looks like we have no upcoming corporate events. 
    </p>
<?php
    } 
  }
?>
