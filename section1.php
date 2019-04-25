<?php 
    if(isset($_POST['submit'])){
        $country = 'EG';
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        
        $stmt = $con->prepare("INSERT INTO sales(country,name,phone,order_at)  VALUES(:c,:n,:p,now())");
        $params = array(
            'c' => $country,
            'n' => $name,
            'p' => $phone
        );
        if ($stmt->execute($params) === true) {
       		 $country = '';
		    $name = '';
		    $phone = '';   	
        }
    }

?>


<section class="health">
	<div class="container">
		<div class="health__inner">
			<div class="health-product">
				<div class="logo">
					<div class="logo-wrap">
						<p class="logo__title">Goji Cream</p>
						<p class="logo__text">
							<span class="logo__text__item">  كريم   <b>  البشرة المثالي  </b></span>
						</p>
					</div>
				</div>
				<h3 class="health-title"> لتستمتعي
				<span class="health-title__item">  ببشرة  </span>
				<span class="health-title__item">  جميلة ونضرة
					<span class="health-title__day">  في 27 يومًا فقط  </span>
				</span>
				</h3>
				<div class="problems">
					<div class="problems-product"></div>
					<div class="problems-img problems-img_1"></div>
					<div class="problems-img problems-img_2"></div>
					<div class="problems-img problems-img_3"></div>
					<div class="problems-img problems-img_4"></div>
					<div class="problems-img problems-img_5"></div>
				</div>
			</div>
			<div class="health-order">
				<div class="health-order__wrap">
					<div class="certificates">
						<img alt="" class="certificates__img" src="./image/icon_eco.png"/>
						<img alt="" class="certificates__img" src="./image/icon_organic.png"/>
						<img alt="" class="certificates__img" src="./image/icon_cert.png"/>
						<img alt="" class="certificates__img" src="./image/icon_qualty.png"/>
					</div>
					<div class="order-form">
						<div class="sale-wrap">
							<div class="order-price">
								<p class="old-price">1299 EG</p>
								<p class="new-price">649 EG</p>
							</div>
							<div class="order-sale order-sale_health">
								<p class="order-sale__title"> اليوم فقط احصلي على </p>
								<p class="order-sale__subtitle"> خصم 50% </p>
							</div>
						</div>
						<div class="form-wrap">
							<form action="<?php echo $_SERVER['PHP_SELF']?>" id="order_form" method="post">
								<select class="form__elment" id="country_code_selector" name="country">
									<option value="EG" selected="selected">Egypt</option>
								</select>
								<input class="form__elment" name="name" placeholder="الاسم" type="text" required/>
								<input class="form__elment only_number" name="phone" placeholder="رقم الهاتف" type="text" required/>
								<div class="order-button"><input class="button js_submit" type="submit" name="submit" value=" اطلبيه الآن">
								</div>
							</form>
						</div>
					</div>
					<div class="time">
						<p class="time-off"> الخصم مستمر حتى: </p>
						<ul class="timer" id="timer">
						</ul>
					</div>
				</div>
			</div>
			<!--/health-order-->
		</div>
	</div>
<!--/container-->
</section>
<!--/health-->