<?php use Roots\Sage\Titles; ?>

<div class="page-header">
  	<div class="event-info">
	  	<h1><?= Titles\title(); ?></h1>

	  	<div class="event-date">
			<span class="date"><?php the_field('date'); ?></span> | 
		    <span class="from"><?php the_field('time_start'); ?></span> to
		   	<span class="to"><?php the_field('time_end'); ?></span>
		</div>
	</div>

	<div class="event-actions">
		<div class="ticket-price">
			<span class="ticket-ammount"><span class="dollar-symbol">$</span> <?php the_field('ticket_cost'); ?></span>
			<span class="ticket-per">per person</span>
			<span class="ticket-includes">plus tax &amp; gratuity</span>
		</div>
		<a class="btn btn-info" href="<?php the_field('ticket_url'); ?>">Purchase Tickets</a>
	</div>
</div>
