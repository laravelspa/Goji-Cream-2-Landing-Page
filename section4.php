<?php 
    if(isset($_POST['submit2'])){
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
<section class="quality">
	<div class="container">
		<div class="quality__inner">
			<div class="quality-product">
				<div class="logo logo_quality">
					<div class="logo-wrap">
						<p class="logo__title">
							Goji Cream
						</p>
						<p class="logo__text"> كريم <b> البشرة </b></p>
					</div>
				</div>
				<div class="advantages">
					<div class="advantages-result">
						<div class="action">
							<div class="action__inner action__inner_bef">
								<img alt="" class="action__img action__img_bef" src="./image/action_img_bef1.jpg"/>
								<p class="action__text action__text_bef"> قبل </p>
							</div>
							<div class="action__inner action__inner_aft">
								<img alt="" class="action__img action__img_aft" src="./image/action_img_aft1.jpg"/>
								<p class="action__text action__text_aft"> بعد </p>
							</div>
						</div>
						<!--/action-->
						<div class="action">
							<div class="action__inner action__inner_bef">
								<img alt="" class="action__img action__img_bef" src="./image/action_img_bef2.jpg"/>
								<p class="action__text action__text_bef"> قبل </p>
							</div>
							<div class="action__inner action__inner_aft">
								<img alt="" class="action__img action__img_aft" src="./image/action_img_aft2.jpg"/>
								<p class="action__text action__text_aft"> بعد </p>
							</div>
						</div>
						<!--/action-->
						<div class="action">
							<div class="action__inner action__inner_bef">
								<img alt="" class="action__img action__img_bef" src="./image/action_img_bef3.jpg"/>
								<p class="action__text action__text_bef"> قبل </p>
							</div>
							<div class="action__inner action__inner_aft">
								<img alt="" class="action__img action__img_aft" src="./image/action_img_aft3.jpg"/>
								<p class="action__text action__text_aft"> بعد </p>
							</div>
						</div>
						<!--/action-->
					</div>
					<div class="advantages-block">
						<ul class="advantages-list">
							<li class="advantages__list">
								<img class="advantages__list__item" src="./image/ok.png" width="50"> يقضي على التجاعيد بنسبة 95٪
							</li>
							<li class="advantages__list">
								<img class="advantages__list__item" src="./image/ok.png" width="50"> يحسن ترطيب البشرة بنسبة 84٪
							</li>
							<li class="advantages__list">
								<img class="advantages__list__item" src="./image/ok.png" width="50"> يزيد من مرونة البشرة بنسبة 73٪
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="quality-order">
				<div class="certificates">
					<img alt="" class="certificates__img" src="./image/icon_eco.png"/>
					<img alt="" class="certificates__img" src="./image/icon_organic.png"/>
					<img alt="" class="certificates__img" src="./image/icon_cert.png"/>
					<img alt="" class="certificates__img" src="./image/icon_qualty.png"/>
				</div>
				<div class="order-form order-form_quality">
					<div class="sale-wrap-quality">
						<div class="order-price order-price_quality">
							<p class="old-price">1299 EG</p>
							<p class="new-price">649 EG</p>
						</div>
						<div class="order-sale order-sale_quality">
							<p class="order-sale__title"> اليوم فقط </p>
							<p class="order-sale__subtitle">50% خصم</p>
						</div>
					</div>
					<div class="form-wrap-quality">
						<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
							<select class="form__elment" id="country_code_selector" name="country">
								<option value="EG" selected="selected">Egypt</option>
							</select>
							<input class="form__elment" name="name" placeholder="الاسم" type="text" required/>
							<input class="form__elment only_number" name="phone" placeholder="رقم الهاتف" type="text" required/>
							<div class="order-button">
								<input class="button js_submit" type="submit" name="submit2" value=" اطلبيه الآن">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/quality-->