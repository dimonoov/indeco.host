<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<section class="features">
	<div class="container">

		<div class="row">
			<h2 class="h2 text-center">Мы предлогаем</h2>
			<div class="feat-wrap clearfix">
				<div class="col-md-3 col-sm-6 col-xs-6 w100">
					<div class="item molot">
						<a href="#">  <h2 class="h2">Гидромолоты</h2></a>
						<img src="<?php echo get_theme_file_uri()?>/assets/img/feat-molot.jpg" alt="">
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 w100">
					<div class="item clips">
						<a href="">  <h2 class="h2">Гидроножницы</h2></a>
						<img src="<?php echo get_theme_file_uri()?>/assets/img/feat-clips.jpg" alt="">
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 w100">
					<div class="item trumbs">
						<a href=""><h2 class="h2">Гидротрамбовки</h2></a>
						<img src="<?php echo get_theme_file_uri()?>/assets/img/feat-trumbs.jpg" alt="">
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 w100">
					<div class="item grefer">
						<a href=""><h2 class="h2">Грейферные захваты</h2></a>
						<img src="<?php echo get_theme_file_uri()?>/assets/img/feat-grefer.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="quick-solution white">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="sf-sx">
					<div class="sf-textual">
						<div class="sf-label">Поиск быстрого решения</div>
						<div class="sf-title">Узнайте какое оборудование больще всего подходит к вашем целям и задачам</div>
						<!-- <img class="sf-image" src="<?php echo get_theme_file_uri()?>/assets//indeco-incorso/images/Image/info-grafica-solfinder.jpg" alt="" /> --><br><br>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="select-panel sf-dx">
					<form id="solution-finder" name="formsolfinder" method="get" action="#">
						<div class="general-form-container">
							<div>
								<div><span id="step1" class="active">1</span></div>
								<div>
									<select id="industria" name="industria" required="required" onchange="change_select_industry();">
										<option value="">Industry *</option>
										<option value="A">Mining and Quarry</option>
										<option value="B">Demolition &amp; renovation</option>
										<option value="C">Earth Moving and Construction</option>
										<option value="D">Infrastructures</option>
										<option value="E">Metallurgical Industry</option>
										<option value="F">Agriculture and forestry</option>
										<option value="G">Recycling</option>
										<option value="H">Material Handling</option>
									</select>
								</div>
							</div>
							<div>
								<div><span id="step2">2</span></div>
								<div>
									<select id="campo_applicazione" class="disabled" name="campo_applicazione" required="required" disabled="" onchange="change_select_application();">
										<option value="">Application Areas *</option>

										<option value="AA" data-industry="A">Preliminary works</option>
										<option value="AB" data-industry="A">Secondary demolition</option>
										<option value="AC" data-industry="A">Primary rock breaking</option>

										<option value="BA" data-industry="B">Light Demolition</option>
										<option value="BB" data-industry="B">Demolition of non-reinforced concrete structures</option>
										<option value="BC" data-industry="B">Composite steel &amp; concrete structure demolition</option>
										<option value="BD" data-industry="B">Demolition of metallic buildings and structures</option>
										<option value="BE" data-industry="B">Sorting and Loading</option>
										<option value="BF" data-industry="B">Pavement demolition</option>

										<option value="CA" data-industry="C">Earth moving works</option>
										<option value="CB" data-industry="C">Foundation works</option>
										<option value="CC" data-industry="C">Building construction</option>

										<option value="DA" data-industry="D">Tunnelling</option>
										<option value="DB" data-industry="D">Underwater application</option>
										<option value="DC" data-industry="D">Trenching</option>
										<option value="DD" data-industry="D">Road construction</option>

										<option value="EA" data-industry="E">Slag recycling</option>
										<option value="EB" data-industry="E">Cleaning &amp; debricking</option>

										<option value="FA" data-industry="F">Gardening &amp; Landscaping</option>
										<option value="FB" data-industry="F">Forestry</option>

										<option value="GA" data-industry="G">Processing</option>
										<option value="GB" data-industry="G">Handling and sorting</option>
										<option value="GC" data-industry="G">Downsizing and sorting</option>

										<option value="HA" data-industry="H">Material Handling</option>
									</select>
								</div>
							</div>
							<div>
								<div><span id="step3">3</span></div>
								<div>
									<select id="attivita" class="disabled" name="attivita" required="required" disabled="" onchange="change_select_attivita();">
										<option value="">Activity *</option>
										<option value="AAA" data-industry="A" data-application="A">Overburden removal</option>
										<option value="AAB" data-industry="A" data-application="A">Bench, road &amp; ramp leveling</option>
										<option value="AAC" data-industry="A" data-application="A">Roof, face &amp; rib scaling</option>

										<option value="ABA" data-industry="A" data-application="B">Boulder reduction in rock pile</option>
										<option value="ABB" data-industry="A" data-application="B">Removing blockages at crushing systems</option>

										<option value="ACA" data-industry="A" data-application="C">Selective rock breaking</option>
										<option value="ACB" data-industry="A" data-application="C">Blastfree mining</option>

										<option value="BAA" data-industry="B" data-application="A">Demolition of masonry structures</option>
										<option value="BAB" data-industry="B" data-application="A">Brickwork</option>
										<option value="BAC" data-industry="B" data-application="A">Natural stone</option>
										<option value="BAD" data-industry="B" data-application="A">Renovation of interiors</option>
										<option value="BAE" data-industry="B" data-application="A">Autoclaved aerated concrete</option>

										<option value="BBA" data-industry="B" data-application="B">Primary demolition of lightweight and standard concrete</option>
										<option value="BBB" data-industry="B" data-application="B">Primary demolition of heavyweight concrete</option>
										<option value="BBC" data-industry="B" data-application="B">Wall Elements</option>
										<option value="BBD" data-industry="B" data-application="B">Secondary demolition</option>

										<option value="BCA" data-industry="B" data-application="C">Primary Demolition of Lightweight and Standard reinforced concrete</option>
										<option value="BCB" data-industry="B" data-application="C">Primary demolition of heavyweight steel - reinforced concrete</option>
										<option value="BCC" data-industry="B" data-application="C">Secondary Demolition floors, slabs and beams</option>
										<option value="BCD" data-industry="B" data-application="C">Separating rebars from pillars and struts</option>
										<option value="BCE" data-industry="B" data-application="C">Fiber-reinforced concrete</option>
										<option value="BCF" data-industry="B" data-application="C">Cutting rebars and steel reinforcements</option>

										<option value="BDA" data-industry="B" data-application="D">Demolition of refineries</option>
										<option value="BDB" data-industry="B" data-application="D">Cutting of Metal and steel structures</option>
										<option value="BDC" data-industry="B" data-application="D">Cutting steel girders/beams</option>
										<option value="BDD" data-industry="B" data-application="D">Cutting reinforcements</option>

										<option value="BEA" data-industry="B" data-application="E">Sorting</option>
										<option value="BEB" data-industry="B" data-application="E">Loading</option>
										<option value="BEC" data-industry="B" data-application="E">Waste handling</option>
										<option value="BED" data-industry="B" data-application="E">Site clean-up</option>

										<option value="BFA" data-industry="B" data-application="F">Asphalt</option>
										<option value="BFB" data-industry="B" data-application="F">Concrete</option>
										<option value="BFC" data-industry="B" data-application="F">Composite surfaces</option>

										<option value="CAA" data-industry="C" data-application="A">Trenching</option>
										<option value="CAB" data-industry="C" data-application="A">Ground excavation</option>
										<option value="CAC" data-industry="C" data-application="A">Floor leveling</option>
										<option value="CAD" data-industry="C" data-application="A">Soil compaction</option>
										<option value="CAE" data-industry="C" data-application="A">Trench compaction</option>
										<option value="CAF" data-industry="C" data-application="A">Loading soil or bulk material</option>

										<option value="CBA" data-industry="C" data-application="B">Building foundation excavation</option>
										<option value="CBB" data-industry="C" data-application="B">Ground leveling</option>

										<option value="CCA" data-industry="C" data-application="C">Foundation pile driving</option>
										<option value="CCB" data-industry="C" data-application="C">Compaction around pillars</option>

										<option value="DAA" data-industry="D" data-application="A">Tunnel excavation</option>
										<option value="DAB" data-industry="D" data-application="A">Roof, face &amp; rib scaling</option>

										<option value="DBA" data-industry="D" data-application="B">Dredging</option>
										<option value="DBB" data-industry="D" data-application="B">Dock deepening &amp; extension</option>
										<option value="DBC" data-industry="D" data-application="B">Canal deepening &amp; extension</option>
										<option value="DBD" data-industry="D" data-application="B">Loading soil or bulk material</option>
										<option value="DBE" data-industry="D" data-application="B">Handling rock or breakwaters</option>

										<option value="DCA" data-industry="D" data-application="C">Oil &amp; gas, water &amp; sewage (deep trenching)</option>
										<option value="DCB" data-industry="D" data-application="C">Trenching</option>
										<option value="DCC" data-industry="D" data-application="C">Trench soil compaction</option>

										<option value="DDA" data-industry="D" data-application="D">Pile driving and guard rail driving</option>
										<option value="DDB" data-industry="D" data-application="D">Asphalt repair</option>
										<option value="DDC" data-industry="D" data-application="D">Maintenance work (driveways, sidewalks and parking lots)</option>
										<option value="DDD" data-industry="D" data-application="D">Block paving</option>

										<option value="EAA" data-industry="E" data-application="A">Boulder reduction in slag heaps</option>
										<option value="EAB" data-industry="E" data-application="A">Removing blockages at crushing systems</option>

										<option value="EBA" data-industry="E" data-application="B">Ladles</option>
										<option value="EBB" data-industry="E" data-application="B">Converter mouths</option>
										<option value="EBC" data-industry="E" data-application="B">Kilns</option>

										<option value="FAA" data-industry="F" data-application="A">Fencing</option>
										<option value="FAB" data-industry="F" data-application="A">Ground excavation</option>
										<option value="FAC" data-industry="F" data-application="A">Rock breaking</option>
										<option value="FAD" data-industry="F" data-application="A">Pit planting</option>
										<option value="FAE" data-industry="F" data-application="A">Log splitting</option>

										<option value="FBA" data-industry="F" data-application="B">Timber log handling</option>

										<option value="GAA" data-industry="G" data-application="A">Scrap material processing</option>
										<option value="GAB" data-industry="G" data-application="A">Cutting tyres</option>
										<option value="GAC" data-industry="G" data-application="A">Processing rail cars</option>
										<option value="GAD" data-industry="G" data-application="A">Processing cars, trucks and general automotive</option>
										<option value="GAE" data-industry="G" data-application="A">Cutting tanks</option>

										<option value="GBA" data-industry="G" data-application="B">Scrap material handling</option>
										<option value="GBB" data-industry="G" data-application="B">Scrap material sorting</option>
										<option value="GBC" data-industry="G" data-application="B">Urban waste</option>
										<option value="GBD" data-industry="G" data-application="B">Industrial waste</option>
										<option value="GBE" data-industry="G" data-application="B">Wood and tyres</option>

										<option value="GCA" data-industry="G" data-application="C">Material downsizing and sorting in recycling quarries</option>

										<option value="HAA" data-industry="H" data-application="A">Loading soil or bulk material</option>
										<option value="HAB" data-industry="H" data-application="A">Handling rock or breakwaters</option>
										<option value="HAC" data-industry="H" data-application="A">Material transport, storage, positioning</option>
										<option value="HAD" data-industry="H" data-application="A">Timber log handling</option>
									</select>
								</div>
							</div>
							<!--
                            <div>
                                <div><span id="step4">4</span></div>
                                <div>
                                    <input id="compatibilita" class="disabled" style="width: 48%;" type="text" name="compatibilita" value="" placeholder="Excavator Weight (Ton)" disabled />
                                    <span style="display: inline-block; width: 52%; padding: 0px 15px; font-size: 12px;"><i class="fa fa-question-circle" aria-hidden="true" style="float: left; margin: 3px 6px 20px 0; font-size: 34px;"></i>Find out what are the best products for the characteristics of your existing machine.</span>
                                </div>
                            </div>
                            -->
							<div>
								<div></div>
								<div>
									<a id="submit-button" class="call-to-action backwhite-variant disabled" style="" href="#solutionfinderindustry" onclick="">Показать результат</a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ajax-solution">
	<div id="solutionfinderindustry" class="full solution-finder-industry">
		<div class="container">
			<div class="row">
				<h2 class="sfi-title text-center">Найденные товары</h2>
				<p class="sfi-subtitle text-center">Проверьте список лучших решений, которые соответствуют ваш выбор.</p>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#molot" data-toggle="tab" aria-expanded="true">Гидравлические молоты</a></li>
						<li class=""><a href="#pul" data-toggle="tab" aria-expanded="false">Пульверизаторы</a></li>
						<li class=""><a href="#mgrefer" data-toggle="tab" aria-expanded="false">Мульти грейферы</a></li>
						<li class=""><a href="#mproc" data-toggle="tab" aria-expanded="false">Многопроцессоры</a></li>
					</ul>
				</div>
				<div id="myTabContent" class="tab-content">
					<div class="tab-pane fade clearfix active in" id="molot">
						<div class="col-sm-12">
							<div class="head"><h2 class="h2">Гидравлические молоты</h2> <a href="#" class="show-all button">Посмотреть все</a> </div>
						</div>
						<!-- Place somewhere in the <body> of your page -->
						<div class="col-sm-12">


							<div class="responsive">
								<div class="slide">
									<div class="product-block">
										<div class="pb-thumb">
											<img src="<?php echo get_theme_file_uri()?>/assets/img/HydraulicHammers-HP150.jpg" alt="">
										</div>
										<div class="pb-description">
											<div class="pb-name"><span>Hydraulic Hammers &nbsp;&nbsp;&nbsp; <span>MEDIUM</span></span>HP 1200 FS</div>
											<div class="pb-specs">
																	<span class="pb-row">
																		<span>Excavator weight (possible)</span>
																		<span>6,5 ÷ 16 ton</span>
																	</span>
												<span class="pb-row">
																		<span>Weight of hammer when operated</span>
																		<span>650 kg</span>
																	</span>
												<span class="pb-row">
																		<span>Steel diameter</span>
																		<span>90 mm</span>
																	</span>
												<span class="pb-row">
																		<span>Pressure adjusted to the excavator</span>
																		<span>170 bar</span>
																	</span>
												<span class="pb-row">
																		<span>Back pressure max</span>
																		<span>8,5 bar</span>
																	</span>
												<span class="pb-row">
																		<span>Energy class per blow</span>
																		<span>1490 joule</span>
																	</span>
												<span class="pb-row">
																		<span>Number of blows per minute</span>
																		<span>450 ÷ 980 n/min</span>
																	</span>
											</div>
											<div class="pb-machines variant">Type of carrier<br>
												<img src="<?php echo get_theme_file_uri()?>/assets/img/ico-machine-1.jpg" alt="">
												<img src="<?php echo get_theme_file_uri()?>/assets/img/ico-machine-2.jpg" alt="">
												<img src="<?php echo get_theme_file_uri()?>/assets/img/ico-machine-3.jpg" alt="">
											</div>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="product-block">
										<div class="pb-thumb">
											<img src="<?php echo get_theme_file_uri()?>/assets/img/HydraulicHammers-HP150.jpg" alt="">
										</div>
										<div class="pb-description">
											<div class="pb-name"><span>Hydraulic Hammers &nbsp;&nbsp;&nbsp; <span>MEDIUM</span></span>HP 1200 FS</div>
											<div class="pb-specs">
																	<span class="pb-row">
																		<span>Excavator weight (possible)</span>
																		<span>6,5 ÷ 16 ton</span>
																	</span>
												<span class="pb-row">
																		<span>Weight of hammer when operated</span>
																		<span>650 kg</span>
																	</span>
												<span class="pb-row">
																		<span>Steel diameter</span>
																		<span>90 mm</span>
																	</span>
												<span class="pb-row">
																		<span>Pressure adjusted to the excavator</span>
																		<span>170 bar</span>
																	</span>
												<span class="pb-row">
																		<span>Back pressure max</span>
																		<span>8,5 bar</span>
																	</span>
												<span class="pb-row">
																		<span>Energy class per blow</span>
																		<span>1490 joule</span>
																	</span>
												<span class="pb-row">
																		<span>Number of blows per minute</span>
																		<span>450 ÷ 980 n/min</span>
																	</span>
											</div>
											<div class="pb-machines variant">Type of carrier<br>
												<img src="<?php echo get_theme_file_uri()?>/assets/img/ico-machine-1.jpg" alt="">
												<img src="<?php echo get_theme_file_uri()?>/assets/img/ico-machine-2.jpg" alt="">
												<img src="<?php echo get_theme_file_uri()?>/assets/img/ico-machine-3.jpg" alt="">
											</div>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="product-block">
										<div class="pb-thumb">
											<img src="<?php echo get_theme_file_uri()?>/assets/img/HydraulicHammers-HP150.jpg" alt="">
										</div>
										<div class="pb-description">
											<div class="pb-name"><span>Hydraulic Hammers &nbsp;&nbsp;&nbsp; <span>MEDIUM</span></span>HP 1200 FS</div>
											<div class="pb-specs">
																	<span class="pb-row">
																		<span>Excavator weight (possible)</span>
																		<span>6,5 ÷ 16 ton</span>
																	</span>
												<span class="pb-row">
																		<span>Weight of hammer when operated</span>
																		<span>650 kg</span>
																	</span>
												<span class="pb-row">
																		<span>Steel diameter</span>
																		<span>90 mm</span>
																	</span>
												<span class="pb-row">
																		<span>Pressure adjusted to the excavator</span>
																		<span>170 bar</span>
																	</span>
												<span class="pb-row">
																		<span>Back pressure max</span>
																		<span>8,5 bar</span>
																	</span>
												<span class="pb-row">
																		<span>Energy class per blow</span>
																		<span>1490 joule</span>
																	</span>
												<span class="pb-row">
																		<span>Number of blows per minute</span>
																		<span>450 ÷ 980 n/min</span>
																	</span>
											</div>
											<div class="pb-machines variant">Type of carrier<br>
												<img src="<?php echo get_theme_file_uri()?>/assets/img/ico-machine-1.jpg" alt="">
												<img src="<?php echo get_theme_file_uri()?>/assets/img/ico-machine-2.jpg" alt="">
												<img src="<?php echo get_theme_file_uri()?>/assets/img/ico-machine-3.jpg" alt="">
											</div>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="product-block">
										<div class="pb-thumb">
											<img src="<?php echo get_theme_file_uri()?>/assets/img/HydraulicHammers-HP150.jpg" alt="">
										</div>
										<div class="pb-description">
											<div class="pb-name"><span>Hydraulic Hammers &nbsp;&nbsp;&nbsp; <span>MEDIUM</span></span>HP 1200 FS</div>
											<div class="pb-specs">
																	<span class="pb-row">
																		<span>Excavator weight (possible)</span>
																		<span>6,5 ÷ 16 ton</span>
																	</span>
												<span class="pb-row">
																		<span>Weight of hammer when operated</span>
																		<span>650 kg</span>
																	</span>
												<span class="pb-row">
																		<span>Steel diameter</span>
																		<span>90 mm</span>
																	</span>
												<span class="pb-row">
																		<span>Pressure adjusted to the excavator</span>
																		<span>170 bar</span>
																	</span>
												<span class="pb-row">
																		<span>Back pressure max</span>
																		<span>8,5 bar</span>
																	</span>
												<span class="pb-row">
																		<span>Energy class per blow</span>
																		<span>1490 joule</span>
																	</span>
												<span class="pb-row">
																		<span>Number of blows per minute</span>
																		<span>450 ÷ 980 n/min</span>
																	</span>
											</div>
											<div class="pb-machines variant">Type of carrier<br>
												<img src="<?php echo get_theme_file_uri()?>/assets/img/ico-machine-1.jpg" alt="">
												<img src="<?php echo get_theme_file_uri()?>/assets/img/ico-machine-2.jpg" alt="">
												<img src="<?php echo get_theme_file_uri()?>/assets/img/ico-machine-3.jpg" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
							<script>
								jQuery('.responsive').slick({
									dots: true,
									infinite: false,
									speed: 300,
									slidesToShow: 2,
									slidesToScroll: 1,
									responsive: [
										{
											breakpoint: 1200,
											settings: {
												slidesToShow: 2,
												slidesToScroll: 1
											}
										},
										{
											breakpoint: 992,
											settings: {
												slidesToShow: 1,
												slidesToScroll: 1
											}
										}


										// You can unslick at a given breakpoint now by adding:
										// settings: "unslick"
										// instead of a settings object
									]
								});
							</script>
						</div>

						<div class="loading l1" style="display: none;"><img src="<?php echo get_theme_file_uri()?>/assets/http://www.mermecgroup.com/mermec-incorso/images/Image/img/loading-slider.gif"></div>
					</div>
					<div class="tab-pane fade" id="pul">
						<div class="col-md-12">
							<div class="head"><h2 class="h2">Пульверизаторы</h2> <a href="#" class="show-all button">Посмотреть все</a> </div>
						</div>
						<div class="col-sm-12">

						</div>
						<div class="loading l1" style="display: none;"><img src="<?php echo get_theme_file_uri()?>/assets/http://www.mermecgroup.com/mermec-incorso/images/Image/img/loading-slider.gif"></div>

					</div>
					<div class="tab-pane fade" id="mgrefer">
						<div class="col-sm-12">
							<div class="head"><h2 class="h2">Мульти грейферы</h2> <a href="#" class="show-all button">Посмотреть все</a> </div>
						</div>
						<div class="loading l1" style="display: none;"><img src="<?php echo get_theme_file_uri()?>/assets/http://www.mermecgroup.com/mermec-incorso/images/Image/img/loading-slider.gif"></div>

					</div>
					<div class="tab-pane fade" id="mproc">
						<div class="col-sm-12">
							<div class="head"><h2 class="h2">Многопроцессоры</h2> <a href="#" class="show-all button">Посмотреть все</a> </div>
							<div class="loading l1" style="display: none;"><img src="<?php echo get_theme_file_uri()?>/assets/http://www.mermecgroup.com/mermec-incorso/images/Image/img/loading-slider.gif"></div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<section class="news">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="head"><h2 class="h2">Новости</h2> <a href="#" class="show-all button">Посмотреть все</a> </div>

			</div>
		</div>
		<div class="row">

			<div class="col-md-4 col-sm-6">
				<div class="product-item">
					<img src="<?php echo get_theme_file_uri()?>/assets/img/product/product1.jpg" alt="">
					<h2 class="h2">От стали к солнечной энергии</h2>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis hic officiis magni magnam ipsam dicta temporibus eaque reprehenderit, voluptatibus ullam, at accusantium assumenda enim dolor necessitatibus delectus. Explicabo, expedita voluptatibus. <a href="#" class="details_link">Подробнее</a></p>

				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="product-item">
					<img src="<?php echo get_theme_file_uri()?>/assets/img/product/product1.jpg" alt="">
					<h2 class="h2">От стали к солнечной энергии</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis hic . <a href="#" class="details_link">Подробнее</a></p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="product-item">
					<img src="<?php echo get_theme_file_uri()?>/assets/img/product/product1.jpg" alt="">
					<h2 class="h2">От стали к солнечной энергии</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis hic officiis magni magnam ipsam dicta temporibus eaque reprehenderit, voluptatibus ullam, at accusantium assumenda enim dolor necessitatibus delectus. Explicabo, expedita voluptatibus. <a href="#" class="details_link">Подробнее</a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="map">
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7iJz0TICDZNHjaaGq9lNx6ue1xCNX0gU&v=3.exp"></script>
	<div class="block-gmap">
		<div id="map-canvas"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="map-info">
						<div class="inner-text clearfix">
							<p>Indeco в мире</p>
							<h3 class="h3">Империя в которой не заходит солнце</h3>
							<a href="#" class="button map-btn">Найти дилера</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?php echo get_theme_file_uri()?>/assets/js/map.js" charset="utf-8"></script>

</section>
