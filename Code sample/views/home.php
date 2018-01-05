<?php
$header_login_form = true;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include('comp_head.php');?>
	</head>
	<body class="en home_module">
		<?php include("comp_mobile_nav.php"); ?>
		<section class="wrapper">
			<?php include("comp_header.php"); ?>
			<section class="content">
				<?php include("comp_asides.php"); ?>
				<section class="content_area">
					<div class="banner">
						<a href=""><img src="../../assets/siteimages/banners/banner_top_main.jpg"></a>
					</div>
					<a class="FAQ_preview">
						<img src="../../assets/siteimages/backgrounds/background_faq.jpg">
					</a>
					<article class="tabbed">
					<ul class="nav nav-tabs top_tabs">
							<li class="active"><a data-toggle="tab" href="#today">Today</a></li>
							<li><a data-toggle="tab" href="#early">Early Market	</a></li>
							<li><a data-toggle="tab" href="#live">Live</a></li>		
					</ul>
						  <div class="tab-content">
							<div id="today" class="tab-pane fade in active">
							<h6 class="live_tab_title">Live</h6>
							<div class="loader">
								loading..<i class="fa fa-spinner" aria-hidden="true"></i>
							</div>
							  <table class="table live_table">
								<thead>
								  <tr>
									<th>Time</th>
									<th>Event</th>
									<th>Supremacy <span data-toggle="modal" data-target="#supremacy" >?</span></th>
									<th>Total Goals<span data-toggle="modal" data-target="#total_goal">?</span></th>
									<th>Corners<span data-toggle="modal" data-target="#corners">?</span></th>
									<th>Total Goal(M)<span data-toggle="modal" data-target="#goal_m">?</span></th>
									<th>Bookings<span data-toggle="modal" data-target="#bookings">?</span></th>	
								  </tr>
								  <tr>
									<th class="league aus_a-league" colspan="7">
										<ul class="td_list">
											<li class="small"></li>
											<li class="table_logo	"></li>
											<li class="title">Aus. A-League</li>
										</ul>
									</th>	
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td class="fst_li">0-0</td>
									<td class="league_title"><span class="common_cl">Sydney FC</span>
										<span class="selected_cl">Melbourne City(h)</span></td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>B</span><span>5</span><li>
											<li><span class="common_cl">0.4</span><span>0.2</span><li>
										</ul>
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">2.4</span><span class="selected_cl">2.2</span><li>
										</ul>
									</td>								
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
									<td colspan="1">
										
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
								  </tr>
								</tbody>
							  </table>
							  <h6 class="tody_tab_icon">Today</h6>
							  <div class="loader">
								loading..<i class="fa fa-spinner" aria-hidden="true"></i>
							</div>
							  <table class="table live_table today_table">
								<thead>
								  <tr>
									<th>Time</th>
									<th>Event</th>
									<th>Supremacy <span data-toggle="modal" data-target="#supremacy" >?</span></th>
									<th>Total Goals<span data-toggle="modal" data-target="#total_goal">?</span></th>
									<th>Corners<span data-toggle="modal" data-target="#corners">?</span></th>
									<th>Total Goal(M)<span data-toggle="modal" data-target="#goal_m">?</span></th>
									<th>Bookings<span data-toggle="modal" data-target="#bookings">?</span></th>	
								  </tr>
								  <tr>
									<th class="league aus_a-league" colspan="7">
										<ul class="td_list">
											<li class="small"></li>
											<li class="table_logo	"></li>
											<li class="title">Aus. A-League</li>
										</ul>
									</th>	
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td class="fst_li">0-0</td>
									<td class="league_title"><span class="common_cl">Sydney FC</span>
										<span class="selected_cl">Melbourne City(h)</span></td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>B</span><span>5</span><li>
											<li><span class="common_cl">0.4</span><span class="selected_cl">0.2</span><li>
										</ul>
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">2.4</span><span class="selected_cl">2.2</span><li>
										</ul>
									</td>								
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
									<td colspan="1">
										
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
									<tr>
									<th class="league aus_a-league" colspan="7">
										<ul class="td_list">
											<li class="small"></li>
											<li class="table_logo	"></li>
											<li class="title">Aus. A-League</li>
										</ul>
									</th>	
								  </tr>
								  <tr>
									<td class="fst_li">0-0</td>
									<td class="league_title"><span class="common_cl">Sydney FC</span>
										<span class="selected_cl">Melbourne City(h)</span></td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>B</span><span>5</span><li>
											<li><span class="common_cl">0.4</span><span class="selected_cl">0.2</span><li>
										</ul>
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">2.4</span><span class="selected_cl">2.2</span><li>
										</ul>
									</td>								
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
									<td colspan="1">
										
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
								  </tr>
								  <tr>
									<td class="fst_li">0-0</td>
									<td class="league_title"><span class="common_cl">Sydney FC</span>
										<span class="selected_cl">Melbourne City(h)</span></td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>B</span><span>5</span><li>
											<li><span class="common_cl">0.4</span><span class="selected_cl">0.2</span><li>
										</ul>
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">2.4</span><span class="selected_cl">2.2</span><li>
										</ul>
									</td>								
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
									<td colspan="1">
										
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td class="fst_li">0-0</td>
									<td class="league_title"><span class="common_cl">Sydney FC</span>
										<span class="selected_cl">Melbourne City(h)</span></td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>B</span><span>5</span><li>
											<li><span class="common_cl">0.4</span><span class="selected_cl">0.2</span><li>
										</ul>
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">2.4</span><span class="selected_cl">2.2</span><li>
										</ul>
									</td>								
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
									<td colspan="1">
										
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
									<tr>
									<th class="league aus_a-league" colspan="7">
										<ul class="td_list">
											<li class="small"></li>
											<li class="table_logo	"></li>
											<li class="title">Aus. A-League</li>
										</ul>
									</th>	
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td class="fst_li">0-0</td>
									<td class="league_title"><span class="common_cl">Sydney FC</span>
										<span class="selected_cl">Melbourne City(h)</span></td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>B</span><span>5</span><li>
											<li><span class="common_cl">0.4</span><span class="selected_cl">0.2</span><li>
										</ul>
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">2.4</span><span class="selected_cl">2.2</span><li>
										</ul>
									</td>								
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
									<td colspan="1">
										
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
									<tr>
									<th class="league aus_a-league" colspan="7">
										<ul class="td_list">
											<li class="small"></li>
											<li class="table_logo	"></li>
											<li class="title">Aus. A-League</li>
										</ul>
									</th>	
								  </tr>
								  <tr>
									<td class="fst_li">0-0</td>
									<td class="league_title"><span class="common_cl">Sydney FC</span>
										<span class="selected_cl">Melbourne City(h)</span></td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>B</span><span>5</span><li>
											<li><span class="common_cl">0.4</span><span class="selected_cl">0.2</span><li>
										</ul>
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">2.4</span><span class="selected_cl">2.2</span><li>
										</ul>
									</td>								
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
									<td colspan="1">
										
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td class="fst_li">0-0</td>
									<td class="league_title"><span class="common_cl">Sydney FC</span>
										<span class="selected_cl">Melbourne City(h)</span></td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>B</span><span>5</span><li>
											<li><span class="common_cl">0.4</span><span class="selected_cl">0.2</span><li>
										</ul>
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">2.4</span><span class="selected_cl">2.2</span><li>
										</ul>
									</td>								
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
									<td colspan="1">
										
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
									<tr>
									<th class="league aus_a-league" colspan="7">
										<ul class="td_list">
											<li class="small"></li>
											<li class="table_logo	"></li>
											<li class="title">Aus. A-League</li>
										</ul>
									</th>	
								  </tr>
								  
								</thead>
								<tbody>
								  <tr>
									<td class="fst_li">0-0</td>
									<td class="league_title"><span class="common_cl">Sydney FC</span>
										<span class="selected_cl">Melbourne City(h)</span></td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>B</span><span>5</span><li>
											<li><span class="common_cl">0.4</span><span class="selected_cl">0.2</span><li>
										</ul>
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">2.4</span><span class="selected_cl">2.2</span><li>
										</ul>
									</td>								
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
									<td colspan="1">
										
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
								  </tr>
								  <tr>
									<td class="fst_li">0-0</td>
									<td class="league_title"><span class="common_cl">Sydney FC</span>
										<span class="selected_cl">Melbourne City(h)</span></td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>B</span><span>5</span><li>
											<li><span class="common_cl">0.4</span><span class="selected_cl">0.2</span><li>
										</ul>
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">2.4</span><span class="selected_cl">2.2</span><li>
										</ul>
									</td>								
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
									<td colspan="1">
										
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
								  </tr>
								</tbody>
							  </table>
							</div>	
							<div id="early" class="tab-pane fade">
							  <ul class="nav nav-tabs inner_tabs">	
								<li class="active"><a data-toggle="tab" href="#all">all</a></li>
								<li><a data-toggle="tab" href="#saturday">Saturday<span class="dates">11/04</span></a></li>
								<li><a data-toggle="tab" href="#sunday">Sunday<span class="dates">11/05</span></a></li>
									<li><a data-toggle="tab" href="#monday">Monday<span class="dates">11/06</span></a></li>
									<li><a data-toggle="tab" href="#tuesday">Tuesday<span class="dates">11/07</span></a></li>
									<li><a data-toggle="tab" href="#wednesday">Wednesday<span class="dates">11/08</span></a></li>
									<li><a data-toggle="tab" href="#thursday">Thursday<span class="dates">11/09</span></a></li>
							</ul>
							 <h6 class="tody_tab_icon">Today</h6>
							 <div class="loader">
								loading..<i class="fa fa-spinner" aria-hidden="true"></i>
							</div>
							<table class="table live_table today_table">
								<thead>
								  <tr>
									<th>Time</th>
									<th>Event</th>
									<th>Supremacy <span data-toggle="modal" data-target="#supremacy" >?</span></th>
									<th>Total Goals<span data-toggle="modal" data-target="#total_goal">?</span></th>
									<th>Corners<span data-toggle="modal" data-target="#corners">?</span></th>
									<th>Total Goal(M)<span data-toggle="modal" data-target="#goal_m">?</span></th>
									<th>Bookings<span data-toggle="modal" data-target="#bookings">?</span></th>		
								  </tr>
								  <tr>
									<th class="league aus_a-league" colspan="7">
										<ul class="td_list">
											<li class="small"></li>
											<li class="table_logo	"></li>
											<li class="title">Aus. A-League</li>
										</ul>
									</th>	
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td class="fst_li">0-0</td>
									<td class="league_title"><span class="common_cl">Sydney FC</span>
										<span class="selected_cl">Melbourne City(h)</span></td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>B</span><span>5</span><li>
											<li><span class="common_cl">0.4</span><span class="selected_cl">0.2</span><li>
										</ul>
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">2.4</span><span class="selected_cl">2.2</span><li>
										</ul>
									</td>								
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
									<td colspan="1">
										
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
								  </tr>
								   <tr>
									<th class="league aus_a-league" colspan="7">
										<ul class="td_list">
											<li class="small"></li>
											<li class="table_logo	"></li>
											<li class="title">Aus. A-League</li>
										</ul>
									</th>	
								  </tr>
								  <tr>
									<td class="fst_li">0-0</td>
									<td class="league_title"><span class="common_cl">Sydney FC</span>
										<span class="selected_cl">Melbourne City(h)</span></td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>B</span><span>5</span><li>
											<li><span class="common_cl">0.4</span><span class="selected_cl">0.2</span><li>
										</ul>
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">2.4</span><span class="selected_cl">2.2</span><li>
										</ul>
									</td>								
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
									<td colspan="1">
										
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
								  </tr>
								  <tr>
									<td class="fst_li">0-0</td>
									<td class="league_title"><span class="common_cl">Sydney FC</span>
										<span class="selected_cl">Melbourne City(h)</span></td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>B</span><span>5</span><li>
											<li><span class="common_cl">0.4</span><span class="selected_cl">0.2</span><li>
										</ul>
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">2.4</span><span class="selected_cl">2.2</span><li>
										</ul>
									</td>								
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
									<td colspan="1">
										
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
								  </tr>
								</tbody>
							  </table>
							</div>
							<div id="live" class="tab-pane fade">
							  <h6 class="live_tab_title">Live</h6>
							  <div class="loader">
								loading..<i class="fa fa-spinner" aria-hidden="true"></i>
							</div>
							  <table class="table live_table">
								<thead>
								  <tr>
									<th>Time</th>
									<th>Event</th>
									<th>Supremacy <span data-toggle="modal" data-target="#supremacy" >?</span></th>
									<th>Total Goals<span data-toggle="modal" data-target="#total_goal">?</span></th>
									<th>Corners<span data-toggle="modal" data-target="#corners">?</span></th>
									<th>Total Goal(M)<span data-toggle="modal" data-target="#goal_m">?</span></th>
									<th>Bookings<span data-toggle="modal" data-target="#bookings">?</span></th>	
								  </tr>
								  <tr>
									<th class="league aus_a-league" colspan="7">
										<ul class="td_list">
											<li class="small"></li>
											<li class="table_logo	"></li>
											<li class="title">Aus. A-League</li>
										</ul>
									</th>	
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td class="fst_li">0-0</td>
									<td class="league_title"><span class="common_cl">Sydney FC</span>
										<span class="selected_cl">Melbourne City(h)</span></td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>B</span><span>5</span><li>
											<li><span class="common_cl">0.4</span><span>0.2</span><li>
										</ul>
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">2.4</span><span class="selected_cl">2.2</span><li>
										</ul>
									</td>								
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
									<td colspan="1">
										
									</td>
									<td>
										<ul class="td_list">
											<li>0<li>
											<li><span>0</span><span>U</span><li>
											<li><span class="common_cl">48</span><span class="selected_cl">44</span><li>
										</ul>
									</td>
								  </tr>
								</tbody>
							  </table>
							</div>
							<div id="menu3" class="tab-pane fade">
							  <h3>Menu 3</h3>
							  <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
							</div>
						  </div>
						  </div>
					</article>
				</section>
			</section>
			<?php include("comp_footer.php"); ?>
		</section>
	</body>
</html>
