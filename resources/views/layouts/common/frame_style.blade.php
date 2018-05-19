<style>
	 *{
    font-family: 'PT Sans', sans-serif;
    margin: 0 auto;
    padding: 0;
}
header{
    width: 1280px;
}

main{
    width: 1280px;
}

button{
    text-transform: uppercase;
}

.top-menu{
    display: flex;
    width: 1200px;
}

.top-menu a{
    color: #000000;
    font-size: 14px;
    font-weight: bold;
    text-transform: uppercase;
    text-decoration: none;
    cursor: pointer;
}

.nav-menu{
    padding: 20px 30px 20px 0;
}

.logo-head{
    margin-left: 530px;
}

.logo-head{
    position: absolute;
    width: 137px;
    height: 70px;
}

.img-background{
    width: 1200px;
    height: 719px;
    background: url("{{ asset('/images/backgroundphoto2.jpg') }}") center no-repeat;
    background-size: cover;
}
.intro-background{
    position: absolute;
    width: 1200px;
    height: 60px;
    margin:  612px 0 0 0px;
    background: url("{{ asset('/images/introbackground.png') }}") center no-repeat;
}
.intro{
    position: absolute;
    width: 1200px;
    height: 50px;
    margin:  670px 0 0 0px;
    background: #ffffff;
}
.promo{
    width: 576px;
    height: 100px;
    margin: 55px auto;
    text-align: center;
    text-transform: uppercase;
}
.promo p{
    margin: 17px 0 0 0;
}
.content-container-1{
    width: 1200px;
    display: flex;
}

.content-container-2{
    width: 1200px;
    display: flex;
}

.content-container-3{
    width: 1200px;
    display: flex;
}

.content-container-4{
    width: 1200px;
    display: flex;
}

.info-block{
    width: 400px;
    height: 256px;
    background: #81b3d2;
    color: #ffffff;
    text-align: center;
    text-transform: uppercase;
}

.info-block h3{
    margin: 48px 0 30px 0;
}

.info-block p{
    margin: 30px 0 0 0;
    color: #d5e6f0;
}

.info-block2{
    width: 400px;
    height: 256px;
    background: #81b3d2;
    color: #ffffff;
    text-align: center;
    text-transform: uppercase;
}

.info-block2 h3{
    margin: 48px 0 30px 0;
}

.info-block2 p{
    margin: 30px 0 0 0;
    color: #d5e6f0;
}

.img-block{
    width: 800px;
    height: 256px;
    background: url("{{ asset('/images/imgblock.png') }}") center no-repeat;
    background-size: cover;
}
.img-block2{
    width: 800px;
    height: 256px;
    background: url("{{ asset('/images/imgblock.png') }}") center no-repeat;
    background-size: cover;
}
.item-content2{
    width: 400px;
    height: 330px;
    text-align: center;
    font-size: 14px;
}
.item-content2 p{
    margin: 30px 0 0 0;
}
.icon-1{
    width: 76px;
    height: 76px;
    margin: 60px auto 30px auto;
    background: url("{{ asset('/images/icon1.png') }}") center no-repeat;
}
.icon-2{
    width: 76px;
    height: 76px;
    margin: 60px auto 30px auto;
    background: url("{{ asset('/images/icon2.png') }}") center no-repeat;
}
.icon-3{
    width: 76px;
    height: 76px;
    margin: 60px auto 30px auto;
    background: url("{{ asset('/images/icon3.png') }}") center no-repeat;
}
.item-content4{
    width: 400px;
    height: 255px;
    background: #eeeeee;
    text-align: center;
    text-transform: uppercase;
}
.item-content4 h3{
    margin: 48px 0 30px 0;
    
}
.item-content4 p{
    margin: 30px 0 0 0;
}

.item-content2{
    text-align: center;
    text-transform: uppercase;
}

.item-content2 h3{
    margin: 48px 0 30px 0;
}
.item-content2 p{
    margin: 30px 0 0 0;
}
.container-search-hostels{
    width: 1200px;
    padding: 50px 0 0 0;
}
.hotels-search{
    width: 576px;
    height: 240px;
    text-align: center;
    text-transform: uppercase;
}
.hotels-search h2{
    margin: 0 0 38px 0;
}
.hotels-search p{
    margin: 0 0 40px 0;
}
button.button-search{
    width: 575px;
    height: 90px;
    background: #766357;
    color: #ffffff;
    font-size: 21px;
    text-transform: uppercase;
    border: none;
    cursor: pointer;
}
.maps{
    height: 474px;
}

#map {
    height: 100%;
}

footer{
    position: relative;
    width: 1280px;
    background: #ffffff;
}

.footer-container{
    display: flex;
    width: 1200px;
    height: 120px;
}
.visit{
    width: 400px;
    height: 120px;
    text-align: center;
    text-transform: uppercase;
}
.visit h2{
    margin: 50px 0 0 0;
}
.visit a{
    margin: 40px 0 0 0;
    text-decoration: none;
}
.twitter{
    display: inline-block;
    width: 43px;
    height: 43px;
    background: #81b3d2 url("{{ asset('/images/twitter.png') }}") center no-repeat;
}
.facebook{
    display: inline-block;
    width: 43px;
    height: 43px;
    background: #81b3d2 url("{{ asset('/images/facebook.png') }}") center no-repeat;
}
.youtube{
    display: inline-block;
    width: 43px;
    height: 43px;
    background: #81b3d2 url("{{ asset('/images/youtube.png') }}") center no-repeat;
}

.logo{
    width: 205px;
    margin: 40px auto;
}





.filter-container{
    display: flex;
    align-items: center;
    width: 1200px;
    height: 220px;
    background: url("../images/filterbackground.png") center no-repeat;
    text-transform: uppercase;
    color: #e5e5e5;
}

.sort-container{
    width: 1200px;
    height: 90px;
}

.sort{
    display: flex;
    width: 600px;
    height: 90px;
}

.sort p{
    font-size: 12px;
    margin-top: 7px;
}

.sort h2{
 padding-left: 30px;
}

.arrow-container{
    display: flex;
    width: 600px;
    height: 90px; 
 }

 .sort-arrow {
    width: 30px;
    height: 27px;
    direction: rtl;
    margin: -93px 0 0 750px;
}

.sort-arrow > span {
    width: 20px;
}

.sort-arrow > span:before{
    content: url("../images/icon-down-dir.png");
    font-size: 22px;
    margin: 0 0 0 10px;
}

.sort-arrow > span:after{
     content: url("../images/icon-up-dir.png");
     font-size: 22px;
    }

.content-container{
    width: 1200px;
    height: 456px;
}

.content-container a{
    color: black;
    font-weight: bold;
    text-decoration: none;
}

.filter-1{
    width: 300px;
    padding: 0 0 0 130px;
}

.filter-2{
    width: 300px;
    padding: 0 0 0 70px;
}

.filter-3{ 
    width: 600px;
    padding: 35px 90px 0 0px;
    text-align: center;
}

.hotel{
    display: flex;
    align-items: center;
    width: 1200px;
    height: 152px;
    border-top: 1px solid #e5e5e5;
    border-bottom: 1px solid #e5e5e5;
    text-transform: uppercase;
}

.motel{
    display: flex;
    align-items: center;
    width: 1200px;
    height: 152px;
    border-top: 1px solid #e5e5e5;
    border-bottom: 1px solid #e5e5e5;
    text-transform: uppercase;
    }

.apartaments{
    display: flex;
    align-items: center;
    width: 1200px;
    height: 152px;
    border-top: 1px solid #e5e5e5;
    border-bottom: 1px solid #e5e5e5;
    text-transform: uppercase;
}

h3{
    font-size: 16px;
}

h2{
    font-size: 21px;
}

.hotel-img{
  margin: 35px 0 0 0px;
}

.hotel-info{
   margin: -90px 0 0px 150px;
}

.motel-img{
    margin: 35px 0 0 0px;
}

.motel-info{
    margin: -90px 0 0px 150px;
}

.apartaments-img{
    margin: 35px 0 0 0px;
}

.apartaments-info{
    margin: -90px 0 0px 150px;
}

.sort-btn{
    height: 25px;
    border: none;
    border-bottom: 1px dashed #81b3d2;
    background: none;
    color: #d1d1d1;
    font-size: 12px;
    cursor: pointer;
}

.info-btn1{
    padding: 4px 18px 4px 18px;
    margin: 16px 0 0 0;
    border: none;
    color: #ffffff;
    font-weight: bold;
    background: #81b3d2;
    cursor: pointer;
}

.info-btn2{
    padding: 4px 19px 4px 19px;
    margin: 16px 0 0 4px;
    border: none;
    color: #ffffff;
    font-weight: bold;
    background: #766357;
    cursor: pointer;
}

.sort{
    width: 600px;
    padding: 30px 500px 0 0; 
    text-transform: uppercase;
}

.raiting1{
    width: 111px;
    height: 28px;
    margin: 0 0 0 150px;
    background: #f2f2f2;
    font-size: 14px;
}

.stars{
    direction: rtl;
    margin: 0 0 40px 150px;
}

.stars > span {
    display: inline-block;
    width: 20px;
}
.stars > span:before{
    content: "\2605";
    font-size: 20px;
    color: #81b3d2;
}

.hotel-right-container{
width: 600px;
height: 152px;
}

.filter-range{
    margin-bottom: 50px;
    width: 320px;
    height: 128px;

}

.filter-range-title{
    margin-bottom: 9px;
    font-weight: bold;
    font-size: 16px;
}

input::-moz-placeholder{
    text-align: center;
    color: #ffffff;
}

.price-controls{
    position: relative;
    height: 36px;
    margin-bottom: 20px;
    border: 2px solid #fff;
    font-size: 0;
}
.price-controls::after{
    content: "";
    position: absolute;
    width: 2px;
    height: 22px;
    background: #ffffff;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.price-controls label{
    vertical-align: middle;
    line-height: 38px;
}

.price-controls input{
    width: 80px;
    margin: 0;
    background: none;
    border: none; 
    color: #fff;
}

.price-controls .min-price, .price-controls .max-price{
    width: 130px;
    padding-left: 30px;
}

.range-controls{
    position: relative;
    margin-bottom: 32px;
}

.scale{
    height: 2px;
    background: rgba(255, 255, 255, 0.3);
    margin-bottom: 20px;
}

.bar{
    width: 80%;
    height: 2px;
    background: #ffffff;
    margin: 0;
}

.range-toggle{
    position: absolute;
    top: -9px;
    width: 4px;
    height: 4px;
    background: #ababab;
    border-radius: 50%;
    cursor: pointer;
    border: 8px solid #ffffff;
    box-shadow: 0 2px 1px 0 rgba(0, 1, 1, 0.2)
}

.range-toggle-min{
    left: 0%;
}

.range-toggle-max{
    left: 80%;
}

.btn-transparent{
    display: block;
    margin: 0 auto;
    padding: 6px 35px;
    line-height: 20px;
    border-radius: 2px;
    border: 2px solid #ffffff;
    text-transform: uppercase;
    background: transparent;
    font-size: 13px;
    cursor: pointer;
    color: #fff;
}


body {
	background: #fafafa url(https://jackrugile.com/images/misc/noise-diagonal.png);
	color: #444;
	font: 100%/30px 'Helvetica Neue', helvetica, arial, sans-serif;
	text-shadow: 0 1px 0 #fff;
}

strong {
	font-weight: bold; 
}

em {
	font-style: italic; 
}

table {
	background: #f5f5f5;
	border-collapse: separate;
	box-shadow: inset 0 1px 0 #fff;
	font-size: 12px;
	line-height: 24px;
	margin: 30px auto;
	text-align: left;
	width: 1000px;
}	

th {
	background: url(https://jackrugile.com/images/misc/noise-diagonal.png), linear-gradient(#777, #444);
	border-left: 1px solid #555;
	border-right: 1px solid #777;
	border-top: 1px solid #555;
	border-bottom: 1px solid #333;
	box-shadow: inset 0 1px 0 #999;
	color: #fff;
  font-weight: bold;
	padding: 10px 15px;
	position: relative;
	text-shadow: 0 1px 0 #000;	
}

th:after {
	background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
	content: '';
	display: block;
	height: 25%;
	left: 0;
	margin: 1px 0 0 0;
	position: absolute;
	top: 25%;
	width: 100%;
}

th:first-child {
	border-left: 1px solid #777;	
	box-shadow: inset 1px 1px 0 #999;
}

th:last-child {
	box-shadow: inset -1px 1px 0 #999;
}

td {
	border-right: 1px solid #fff;
	border-left: 1px solid #e8e8e8;
	border-top: 1px solid #fff;
	border-bottom: 1px solid #e8e8e8;
	padding: 10px 15px;
	position: relative;
	transition: all 300ms;
}

td:first-child {
	box-shadow: inset 1px 0 0 #fff;
}	

td:last-child {
	border-right: 1px solid #e8e8e8;
	box-shadow: inset -1px 0 0 #fff;
}	

tr {
	background: url(https://jackrugile.com/images/misc/noise-diagonal.png);	
}

tr:nth-child(odd) td {
	background: #f1f1f1 url(https://jackrugile.com/images/misc/noise-diagonal.png);	
}

tr:last-of-type td {
	box-shadow: inset 0 -1px 0 #fff; 
}

tr:last-of-type td:first-child {
	box-shadow: inset 1px -1px 0 #fff;
}	

tr:last-of-type td:last-child {
	box-shadow: inset -1px -1px 0 #fff;
}	

tbody:hover td {
	color: transparent;
	text-shadow: 0 0 3px #aaa;
}

tbody:hover tr:hover td {
	color: #444;
	text-shadow: 0 1px 0 #fff;
}

.adddlink {
 padding-right: 200px;   
}

.redform{
    text-align: center;
}
   
</style>