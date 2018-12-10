<?php 

include 'header.php';

//Belirli veriyi seçme işlemi
$mesafelisor=$db->prepare("SELECT * FROM mesafeli where mesafeli_id=:id");
$mesafelisor->execute(array(
	'id' => 0
	));
$mesafelicek=$mesafelisor->fetch(PDO::FETCH_ASSOC);


?>



<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-title-wrap">
				<div class="page-title-inner">


					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-9"><!--Main content-->





            <section id="content">

                <div class="content-wrap">

                    <div class="container clearfix">

                        <div class="col-padding">

                            <div class="heading-block fancy-title nobottomborder title-bottom-border">
                                <h4>Why choose <span>Us</span>.</h4>
                            </div>

                            <blockquote><?php echo $mesafelicek['mesafeli_icerik']; ?></blockquote>

                        </div>





                    </div>







                </div>

        </div>




		</div>




		<!-- Sidebar buraya gelecek -->



	</div>
	<div class="spacer"></div>
</div>

<?php include 'footer.php'; ?>