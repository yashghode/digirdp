<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Uhost - Hosting Website Template</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="24x24">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Uhost is Creative Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">

    <!-- CSS Files
    ================================================== -->
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!-- font icons -->
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="fonts/elegant_font/HTML_CSS/style.css" rel="stylesheet" type="text/css">
    <link href="fonts/et-line-font/style.css" rel="stylesheet" type="text/css">

    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">
	<link href="css/coloring.css" rel="stylesheet" type="text/css">

    
</head>

<body>
    <div id="wrapper">
        <!-- header begin -->
        <?php 
include("header.php");
?>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <!-- section begin -->
            <section class="full-height relative no-top no-bottom text-light" data-bgimage="url(images/background/2.jpg)" data-stellar-background-ratio=".2">

                <div class="overlay-gradient t80 ">
                    <div class="center-y relative text-center" data-scroll-speed="4">
                        <div class="container">
                            <div class="row">
								<div class="col-md-12">
									<h1 class="no-bottom">Search for your perfect domain name</h1>
									<p class="lead">Reserve your domain today before someone take it.</p>
								</div>
                                <div class="col-md-8 offset-md-2">
                                    <form action='check.php' class="row" id='form_sb' method="post" name="form_sb">
										<div class="col text-center">
											<div class="spacer-10"></div>
											<input class="form-control" id='domain_name' name='domain_name' placeholder="enter domain name" type='text'> <a id="btn-submit" href="javascript:;" onclick="document.getElementById('form_sb').submit();"><i class="arrow_right"></i></a>
											<div class="clearfix"></div>
											<div class="spacer-10"></div>
											<div class="domain-ext">
												<div class="ext">
													<h4>.com</h4>
													$4.99/year
												</div>

												<div class="ext">
													<h4>.net</h4>
													$3.99/year
												</div>

												<div class="ext">
													<h4>.co</h4>
													$2.99/year
												</div>

												<div class="ext">
													<h4>.info</h4>
													$3.90/year
												</div>

												<div class="ext">
													<h4>.biz</h4>
													$5.99/year
												</div>
											</div>
											
											<div class="spacer-20"></div>
											
											<a href="#domains" class="scroll-to">See all domain extensions and pricings.</a>
											
										</div>
									</form>
									<div class="clearfix"></div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- section close -->
            

            <section id="domains">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-12 mb-sm-30 text-center">
									
							<h3>Domain Pricing</h3>
						
							<div class="spacer-20"></div>
							
							<div class="box-highlight">
										<div class="content">
							  <div class="de_table  text-center">
								<div class="tr">
								  <div class="td">TLD</div>
								  <div class="td">Register</div>
								  <div class="td">Renew</div>
								  <div class="td">Transfer</div>
								</div>
								<div class="tr">
								  <div class="td">.com</div>
								  <div class="td">$4.99</div>
								  <div class="td">$8.99</div>
								  <div class="td">$6.99</div>
								</div>
								<div class="tr">
								  <div class="td">.net</div>
								  <div class="td">$4.99</div>
								  <div class="td">$8.99</div>
								  <div class="td">$6.99</div>
								</div>
								<div class="tr">
								  <div class="td">.org</div>
								  <div class="td">$4.99</div>
								  <div class="td">$8.99</div>
								  <div class="td">$6.99</div>
								</div>
								<div class="tr">
								  <div class="td">.info</div>
								  <div class="td">$4.99</div>
								  <div class="td">$8.99</div>
								  <div class="td">$6.99</div>
								</div>
								<div class="tr">
								  <div class="td">.club</div>
								  <div class="td">$4.99</div>
								  <div class="td">$8.99</div>
								  <div class="td">$6.99</div>
								</div>
								<div class="tr">
								  <div class="td">.email</div>
								  <div class="td">$4.99</div>
								  <div class="td">$8.99</div>
								  <div class="td">$6.99</div>
								</div>
								<div class="tr">
								  <div class="td">.guru</div>
								  <div class="td">$4.99</div>
								  <div class="td">$8.99</div>
								  <div class="td">$6.99</div>
								</div>
								<div class="tr">
								  <div class="td">.link</div>
								  <div class="td">$4.99</div>
								  <div class="td">$8.99</div>
								  <div class="td">$6.99</div>
								</div>
								<div class="tr">
								  <div class="td">.photography</div>
								  <div class="td">$4.99</div>
								  <div class="td">$8.99</div>
								  <div class="td">$6.99</div>
								</div>
								<div class="tr">
								  <div class="td">.today</div>
								  <div class="td">$4.99</div>
								  <div class="td">$8.99</div>
								  <div class="td">$6.99</div>
								</div>
								<div class="tr">
								  <div class="td">.xyz</div>
								  <div class="td">$4.99</div>
								  <div class="td">$8.99</div>
								  <div class="td">$6.99</div>
								</div>
								<div class="tr">
								  <div class="td">.co</div>
								  <div class="td">$4.99</div>
								  <div class="td">$8.99</div>
								  <div class="td">$6.99</div>
								</div>
								<div class="tr">
								  <div class="td">.asia</div>
								  <div class="td">$4.99</div>
								  <div class="td">$8.99</div>
								  <div class="td">$6.99</div>
								</div>
								<div class="tr">
								  <div class="td">.biz</div>
								  <div class="td">$4.99</div>
								  <div class="td">$8.99</div>
								  <div class="td">$6.99</div>
								</div>
								<div class="tr">
								  <div class="td">.mobi</div>
								  <div class="td">$4.99</div>
								  <div class="td">$8.99</div>
								  <div class="td">$6.99</div>
								</div>
								<div class="tr">
								  <div class="td">.name</div>
								  <div class="td">$4.99</div>
								  <div class="td">$8.99</div>
								  <div class="td">$6.99</div>
								</div>
								<div class="tr">
								  <div class="td">.bz</div>
								  <div class="td">$4.99</div>
								  <div class="td">$8.99</div>
								  <div class="td">$6.99</div>
								</div>
							  </div>
							  
							</div>
							</div>
							</div>
							
							<div class="col-lg-6 col-md-12 text-center">
							<h3>Featured Domain</h3>
							
							<div class="spacer-20"></div>
							
							<div class="box-highlight s2">
										<div class="content">
											
											<div class="de_table table-style-2 text-left no-heading cols-2">
												<div class="tr">
												  <div class="td">.com</div>
												  <div class="td"><a href="#" class="btn-custom">Buy now  4.99</a></div>
												</div>
												<div class="tr">
												  <div class="td">.net</div>
												  <div class="td"><a href="#" class="btn-custom">Buy now  5.99</a></div>
												</div>
												<div class="tr">
												  <div class="td">.org</div>
												  <div class="td"><a href="#" class="btn-custom">Buy now  6.99</a></div>
												</div>
												<div class="tr">
												  <div class="td">.info</div>
												  <div class="td"><a href="#" class="btn-custom">Buy now  4.99</a></div>
												</div>
												<div class="tr">
												  <div class="td">.club</div>
												  <div class="td"><a href="#" class="btn-custom">Buy now  5.99</a></div>
												</div>
												<div class="tr">
												  <div class="td">.email</div>
												  <div class="td"><a href="#" class="btn-custom">Buy now  6.99</a></div>
												</div>
												<div class="tr">
												  <div class="td">.guru</div>
												  <div class="td"><a href="#" class="btn-custom">Buy now  4.99</a></div>
												</div>
												<div class="tr">
												  <div class="td">.link</div>
												  <div class="td"><a href="#" class="btn-custom">Buy now  5.99</a></div>
												</div>
												<div class="tr">
												  <div class="td">.photography</div>
												  <div class="td"><a href="#" class="btn-custom">Buy now  6.99</a></div>
												</div>
												<div class="tr">
												  <div class="td">.today</div>
												  <div class="td"><a href="#" class="btn-custom">Buy now  4.99</a></div>
												</div>
											  </div>
										</div>
									</div>

							
						</div>
					</div>
				</div>
			</section>

			<section id="section-banner" class="no-bottom no-top img-fluid bg-gradient-to-right text-light relative pos-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 d-none d-lg-block d-xl-block  text-center">
                            <img class="relative img-fluid mt-60" src="images/misc/1.png" alt="">
                        </div>

                        <div class="col-lg-4 col-md-6">
							<div class="p-sm-30 pb-sm-0 mb-sm-0">
								<h2>30 days money back satisfication guarantee</h2>
							</div>
                        </div>

                        <div class="col-lg-4 col-md-6">
							<div class="p-sm-30">
                            <p class="lead">If you not satisfy with Uhost, we will refund your payment. No hassle, no risk. You can cancel plan at any time.</p>
                            <div class="spacer-half"></div>
                            <a class="btn-custom" href="#">Get Started</a>
							</div>
                        </div>
                    </div>
                </div>
            </section>
			

        </div>
        <!-- content close -->

        <!-- footer begin -->
      <?php 
include("footer.php");
?>
            <!-- footer close -->
		
        
        
		<div id="preloader">
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>
        </div>		
		


        <!-- Javascript Files
    ================================================== -->
        <script src="js/plugins.js"></script>
        <script src="js/designesia.js"></script>
        <script src="js/validation.js"></script>

        <!--Start of Tawk.to Script-->
        <script>
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/5d4c52d37d27204601c9ff11/default';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
</body>

</html>