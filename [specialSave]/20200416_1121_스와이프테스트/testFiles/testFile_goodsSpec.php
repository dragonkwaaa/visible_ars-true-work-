<!DOCTYPE html>
<html lang="ko">

<?php include $_SERVER['DOCUMENT_ROOT'] .  '/common/pages/testFile_head.php';

$goodsCode				=	$SubFunction->allTags($_GET['no']);
if(!$goodsCode){
	$CommonManager->goPage('/', '잘못된 접근입니다.');
	exit;
}
?>


<body>



<!-- :: ksg_20200415_1439 single : 스와이프 계열 내용 추가 파트. -->
<!-- <div class="container main"> -->
<div class="container main" data-role="page" id="2.swipe flick" data-next="" data-prev="testFile_index" data-dom-cache="true">






	<div class="contents">
		<form name="frm" id="frm" onkeypress="if(event.keyCode==13) {return false;}">
			<input type="hidden" name="goodsCode" id="goodsCode" value="<?= $goodsCode?>">
			<input type="hidden" name="qty"	value="1">
			<input type="hidden" name="op1_sel" id="op1_sel" value="0">
			<input type="hidden" name="token" value="<?=$_SESSION['token'][$Common->nowPage()]?>">
		<div class="section goodsSection">
			<a href="../" class="backBtn">
				<img src="/common/img/closeBtn_rimless.png">
			</a>
			<div class="storeTitleBox goodsSect">
				<div class="storeTitleSlider" id="imgSel">
				</div>
			</div>
			<div class="storeInfoBox goodsSect">
				<div class="upperInfo">
					<div class="goodsName">
						<div id="goodsName"></div>
					</div>
				</div>
				<div class="lowerInfo">
					<div class="infoBox">
						<div>
							<span id="goodsInfo"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section subMenus goodsSect">
			<div class="optionMenus">
				<div class="itemTitleBox">
					<div class="titleText">
						<span>기본가격</span>
						<span class="titlePrice"></span>
					</div>
				</div>
				<div class="itemOptionBox" id="opList1">
				<!--	<div class="selectionGroup">
						<div class="optionTitle">
							필수
						</div>
						<ul class="optionList">-->
							<!--<li>
								<div class="checkboxGroup">
									<input type="radio" name="necessary_1" checked>
									<label></label>
								</div>
								<div>매운맛</div>
								<div class="optionPrice">+0원</div>
							</li>
							<li>
								<div class="checkboxGroup">
									<input type="radio" name="necessary_1">
									<label></label>
								</div>
								<div>중간맛</div>
								<div class="optionPrice">+0원</div>
							</li>-->
					<!--	</ul>

					</div>-->
					<!--<div class="selectionGroup">
						<div class="optionTitle">
							선택 2
						</div>
						<ul class="optionList" id="opList2">-->
							<!--<li>
								<div class="checkboxGroup">
									<input type="checkbox">
									<label></label>
								</div>
								<div>감자튀김 추가</div>
								<div class="optionPrice">500원</div>
							</li>
							<li>
								<div class="checkboxGroup">
									<input type="checkbox">
									<label></label>
								</div>
								<div>콜라 추가</div>
								<div class="optionPrice">1,000원</div>
							</li>
							<li>
								<div class="checkboxGroup">
									<input type="checkbox">
									<label></label>
								</div>
								<div>베이컨 추가</div>
								<div class="optionPrice">1,000원</div>
							</li>-->
					<!--	</ul>
					</div>-->
				</div>
			</div>
		</div>
		<div class="section goodsQTY">
			<div class="title">수량</div>
			<div class="btnGroup">
				<div class="countBtnGroup">
					<a href="javascript:plusMinusCart('M')">-</a>
					<span>
						<input class="tbox smallest onlyNum" value="1" name="totQty" onchange="updateQty(this);" id="totQty" maxlength="3">
					</span>
					<a href="javascript:plusMinusCart('P')">+</a>
				</div>
			</div>
		</div>



		<!-- ::: 리뉴얼 디자인의 총 주문금액 파트. single  -->
		<div class="section totalPriceSect">
			<div class="titleText">
				<span class="f_bold">총 주문금액</span>
				<span class="absoluteR fs20 f_main f_bold" id="tot"></span>
			</div>
			<div class="minimumPriceGroup">
				<span>배달최소주문금액</span>
				<span id="minPrice"></span>
			</div>
		</div>



		<input type="hidden" name="tot" value="0">
		</form>
		<div class="btnBox shopOrderBtn">


			<!-- ::: 리뉴얼에서는 다른 위치에 총 주문금액이 존재하므로 제거. single -->
			<!-- <a class="orderPrice btnHalf" href="javascript:void(0);" id="tot"></a> -->


			<a class="sumitBtn" href="javascript:set_cart()" id="setCart">장바구니 담기</a>
		</div>
	</div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'] .  '/common/pages/popup.php';?>

<script src="/goods/js/goodsSpec.js"></script>

<script>
// 상품 이미지 슬라이드

$('.storeTitleSlider').slick({
	dots:false,
	prevArrow:false,
	nextArrow:false,
	autoplay : true,
	autoplaySpeed : 4000,
	// dotsClass:'mainBannerDots'
});

</script>
</body>
</html>
