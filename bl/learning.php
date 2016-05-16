<?php
include('header.php');
?>
		<div class="maincont">
<div class="clear"></div>
					<div class="navcolumn">
					<div id="accordian">
						<ul>
						<li class="active">
							<h3><span class="icon-dashboard"></span>Solar Energy</h3>
						<ul>
							<li><a href="solar-panels.php">Solar Panels</a></li>
							<li><a href="spice-solar.php">Spice Solar</a></li>
							<li><a href="micro-inverter.php">Micro Inverter</a></li>
							<li><a href="gateway.php">Gateway</a></li>
							<li><a href="cloud-monitoring-system.php">Cloud Monitoring System</a></li>
							<li><a href="learning.php">Learn</a></li>
						</ul>
						</li>
						</ul>
						<!-- we will keep this LI open by default -->



					</div>
			</div>
		<div class="maintextprod">

<h2>A typical "Series String" array </h2>

<p>Most of the solar panels installed in The  World  now are configured like this, with one big inverter and one big DC voltage. If that 600V DC arcs then there's going to be a bang! And possibly a fire. (Which is why you should never skimp on installation cost)</p>
<br />
<img src="../images/solarpanelsimages/solar-panel-array-DC-153_2.jpg">

<h2>A typical "AC Solar Panel or Micro Inverter" array</h2>

<img src="../images/solarpanelsimages/solar-panel-array-DC-153_3.jpg">

<h2>What's good about AC Panels and micro inverters?</h2>

<p>There are a number of complexities caused by the traditional way of connecting solar panels together (in a series string) which Micro Inverters can help overcome including:</p>

<h3>High Voltage DC</h3>

<p>High Voltage DC can create a risk of very high temperature arcing and potentially fire. Because Micro Inverters convert to AC the potential for this to occur is greatly minimised.</p>

<h3>Switchgear</h3>

<p>High voltage DC requires relatively expensive protective switches and fuses. By using AC, switchgear is more commonly available and thus cheaper.</p>

<h3>Shading</h3>

<p>When solar panels are connected together in a series string, shading just one of them can dramatically affect the entire array; (kind of like standing on a hose).<br /> <br />

As an example: Here's an array of 3 solar panels connected to a conventional, central inverter. One of the panels has been pooed on by a bird, which could easily reduce its output by 50%. However, it will also reduce every other panels' output by the same amount:</p>
<br /><br />

<img src="../images/solarpanelsimages/solar-shade-central_4.jpg">
<br />
<br />
<p>But by having a Micro Inverter on each solar panel, the outputs are completely independent of each other. So that bird poo is going to only affect the soiled panel: </p>
<br />
<img src="../images/solarpanelsimages/solar-shade-micro_5.jpg">
<br />
<br />
<p>According to the US National Renewable Energy Laboratory, this effect can yield as much as 12% more energy.</p>

<h3>Solar panel mismatch</h3>

<p>When solar panels are made they each have slightly different electrical characteristics due to imperfect manufacturing tolerances. When you connect them together in series string, this effect is called "mismatch". Micro Inverters can adapt to the individual characteristics of each panel, avoiding mismatch.</p>

<h3>Maximum Power Point Tracking</h3>

<p>Like the effect of mismatch, different electrical characteristics also create different Maximum Power Points for each solar panel. The maximum Power Point is the perfect point for extracting maximum power from a solar panel and Micro Inverters attached to individual solar panels can therefore target this point better.</p>

<h3>Monitoring and fault finding</h3>

<p>Almost all inverters have some level of monitoring and fault finding however; it can only see the combined output from every solar panel in the series string. A Micro Inverter however, can monitor each solar panel individually, allowing you to easily identify exactly what's happening more quickly.</p>

<h3>Redundancy</h3>

<p>If your series string inverter develops a fault, your entire solar array stops producing power until it is fixed. If a Micro Inverter develops a fault, the remaining Micro Inverters can continue to operate, so you should have a more reliable system.</p>

<h3>Modularity</h3>

<p>Series string inverters can only accept specific number of solar panels per inverter so it's not always possible to simply add a few more panels at a later date. AC Solar Panels however, can be added much more easily because they are independent of each other.</p>

<h3>Longer Warranty</h3>

<p>Since micro-inverters are not exposed to as high power and heat loads as central inverter, they also tend to last significantly longer. Micro-inverters typically come with a warranty of 20-25 years - 15-20 years longer than central inverters.</p>

<h3>Maximum Power Point Tracking (MPPT)</h3>

<p>One of the tricky things about solar cells is that voltage needs to be adjusted to light level for maximum output of power. In other words, the performance of a solar panel is dependent on the voltage load that is applied from the inverter. MPPT is a technique used to find the right voltage - the maximum power point. When MPPT is applied to each individual panel, as opposed to the solar system as a whole, performance will naturally increase.</p>

<h3>Performance Reports</h3>

<p>Web-based monitoring on a panel-by-panel basis is usually available both for homeowner. Continuously analyzing the health of the solar system can pave the way for additional tweaks and performance improvements. There are even mobile applications that enable you to monitor your PV system when on the road.</p>
		</div>
						
		</div><!-- end of pagecont -->

<?php
include('footer.php');
?>