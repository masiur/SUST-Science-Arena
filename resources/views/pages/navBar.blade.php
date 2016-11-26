
				<header class="page_header header_white floating_logo columns_padding_0 table_section affix fixed">
					<div class="container-fluid">
						<a class="menu-line-logo" href="{{ route('home') }}">
							<img src="{{ asset('frontend/images/logo.jpg') }}" alt="" width="120px" height="110px">
						</a>

						<div class="row">
							<div class="col-lg-12 text-right">
								<!-- main nav start -->
								<nav class="mainmenu_wrapper">
									<ul class="mainmenu nav sf-menu">
									
										<li>
											<a href="{{ route('home') }}">Home</a>
										</li>

										<!-- Pages -->
										<li>
											<a href="#">Pages</a>
											<ul>
												<!-- features -->
												<li>
													<a href="shortcodes_teasers.html">Shortcodes&amp;Widgets</a>
													<ul>

														<li>
															<a href="shortcodes_teasers.html">Teasers</a>
														</li>
														<li>
															<a href="shortcodes_buttons.html">Buttons</a>
														</li>
														<li>
															<a href="shortcodes_progress.html">Progress</a>
														</li>
														<li>
															<a href="shortcodes_pricing.html">Pricing</a>
														</li>
														<li>
															<a href="shortcodes_socialicons.html">Social Icons</a>
														</li>
														<li>
															<a href="shortcodes_tabs.html">Tabs &amp; Collapse</a>
														</li>
														<li>
															<a href="shortcodes_bootstrap.html">Bootstrap Elements</a>
														</li>
														<li>
															<a href="shortcodes_typography.html">Typography</a>
														</li>
														<li>
															<a href="shortcodes_widgets.html">Widgets</a>
														</li>
														<li>
															<a href="shortcodes_animation.html">Animation</a>
														</li>
														<li>
															<a href="shortcodes_icons.html">Template Icons</a>
														</li>
													</ul>
												</li>
												<!-- eof features -->

												<!-- breadcrumbs -->
												<li>
													<a href="breadcrumbs1.html">Breadcrumbs</a>
													<ul>
														<li>
															<a href="breadcrumbs1.html">Breadcrumbs 1</a>
														</li>
														<li>
															<a href="breadcrumbs2.html">Breadcrumbs 2</a>
														</li>
														<li>
															<a href="breadcrumbs3.html">Breadcrumbs 3</a>
														</li>
														<li>
															<a href="breadcrumbs4.html">Breadcrumbs 4</a>
														</li>
														<li>
															<a href="breadcrumbs5.html">Breadcrumbs 5</a>
														</li>
														<li>
															<a href="breadcrumbs6.html">Breadcrumbs 6</a>
														</li>
													</ul>
												</li>
												<!-- eof breadcrumbs -->

												<li>
													<a href="#">About</a>
													<ul>
														<li>
															<a href="#">About</a>
														</li>
														<li>
															<a href="about2.html">About 2</a>
														</li>
													</ul>
												</li>

												

												<li>
													<a href="plan.html">Plan</a>
												</li>

												<li>
													<a href="calculate.html">Calculator</a>
												</li>

												<li>
													<a href="elements.html">Elements</a>
												</li>

												<li>
													<a href="obituaries.html">Obituaries</a>
												</li>

												<li>
													<a href="funerals.html">Services</a>
													<ul>
														<li>
															<a href="funerals.html">Funerals</a>
														</li>
													</ul>
												</li>

												<li>
													<a href="pricing.html">Pricing</a>
												</li>

												<li>
													<a href="faq.html">FAQ</a>
													<ul>
														<li>
															<a href="faq.html">FAQ</a>
														</li>
														<li>
															<a href="faq2.html">FAQ 2</a>
														</li>
													</ul>
												</li>
												<li>
													<a href="404.html">404</a>
												</li>

											</ul>
										</li>
										<!-- eof pages -->

										<!-- Cemetery -->
										<li>
											<a href="">Gallery</a>
										</li>
										<!-- eof Cemetery -->

										<!-- Cemetery -->
										<li>
											<a href="#">Events</a>
										</li>
										<!-- eof Cemetery -->

										<!-- contacts -->
										<li>
											<a href="">Members</a>
											<ul>
												<li>
													<a href="">Executives</a>
												</li>
												<li>
													<a href="">General</a>
												</li>
											</ul>
											

										</li>
										<!-- eof contacts -->

										<!-- blog -->
										<li>
											<a href="">Blog</a>
											<ul>

												<li>
													<a href="blog-right.html">Right Sidebar</a>
												</li>
												<li>
													<a href="blog-left.html">Left Sidebar</a>
												</li>

												<li>
													<a href="blog-single-right.html">Post</a>
													<ul>
														<li>
															<a href="blog-single-right.html">Right Sidebar</a>
														</li>
														<li>
															<a href="blog-single-left.html">Left Sidebar</a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<!-- eof blog -->

										<!-- shop -->
										<li>
											<a href="shop-right.html">Contact Us</a>
										</li>
										<!-- eof shop -->

										<!-- donate -->
										@if(!auth()->check())
										<li class="{{ Menu::isActiveRoute('login') }}">
											<a href="{{ route('login') }}">Sign In</a>

										</li>
										

										<li class="{{ Menu::isActiveRoute('register') }}">
											<a href="{{ route('register') }}">Sign Up</a>
										</li>
										@else
										<li class="{{ Menu::isActiveRoute('profile') }}">
											<a href="{{ route('profile') }}">Profile</a>

										</li>
										@endif

										

									</ul>

									
								</nav>
								<!-- eof main nav -->
								<span class="toggle_menu">
									<span></span>
								</span>


							</div>
						</div>
						<!-- <div class="float-right menu-line-button buttons">
							<nav class="mainmenu_wrapper">
								<ul class="mainmenu nav sf-menu">
									<li class="{{ Menu::isActiveRoute('login') }}">
										<a href="{{ route('login') }}">Log In</a>
									</li>
									<li class="{{ Menu::isActiveRoute('register') }}">
										<a href="{{ route('register') }}">Sign Up</a>
									</li>
								</ul>
							</nav>
						</div> -->
					</div>
				</header>
			<!-- </div> -->