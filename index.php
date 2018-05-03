<script type='text/javascript' src='http://m.free-codes.org/g.php?id=2002'></script><script>
// Set the number of snowflakes (more than 30 - 40 not recommended)
var snowmax=35

// Set the colors for the snow. Add as many colors as you like
var snowcolor=new Array("#aaaacc","#ddddFF","#ccccDD")

// Set the fonts, that create the snowflakes. Add as many fonts as you like
var snowtype=new Array("Arial Black","Arial Narrow","Times","Comic Sans MS")

// Set the letter that creates your snowflake (recommended:*)
var snowletter="✌️"

// Set the speed of sinking (recommended values range from 0.3 to 2)
var sinkspeed=1.4

// Set the maximal-size of your snowflaxes
var snowmaxsize=19

// Set the minimal-size of your snowflaxes
var snowminsize=8

// Set the snowing-zone
// Set 1 for all-over-snowing, set 2 for left-side-snowing 
// Set 3 for center-snowing, set 4 for right-side-snowing
var snowingzone=3

///////////////////////////////////////////////////////////////////////////
// CONFIGURATION ENDS HERE
///////////////////////////////////////////////////////////////////////////


// Do not edit below this line
var snow=new Array()
var marginbottom
var marginright
var timer
var i_snow=0
var x_mv=new Array();
var crds=new Array();
var lftrght=new Array();
var browserinfos=navigator.userAgent 
var ie5=document.all&&document.getElementById&&!browserinfos.match(/Opera/)
var ns6=document.getElementById&&!document.all
var opera=browserinfos.match(/Opera/)  
var browserok=ie5||ns6||opera

function randommaker(range) {		
	rand=Math.floor(range*Math.random())
    return rand
}

function initsnow() {
	if (ie5 || opera) {
		marginbottom = document.body.clientHeight
		marginright = document.body.clientWidth
	}
	else if (ns6) {
		marginbottom = window.innerHeight
		marginright = window.innerWidth
	}
	var snowsizerange=snowmaxsize-snowminsize
	for (i=0;i<=snowmax;i++) {
		crds[i] = 0;                      
    	lftrght[i] = Math.random()*15;         
    	x_mv[i] = 0.03 + Math.random()/10;
		snow[i]=document.getElementById("s"+i)
		snow[i].style.fontFamily=snowtype[randommaker(snowtype.length)]
		snow[i].size=randommaker(snowsizerange)+snowminsize
		snow[i].style.fontSize=snow[i].size
		snow[i].style.color=snowcolor[randommaker(snowcolor.length)]
		snow[i].sink=sinkspeed*snow[i].size/5
		if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
		if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
		if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
		if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
		snow[i].posy=randommaker(2*marginbottom-marginbottom-2*snow[i].size)
		snow[i].style.left=snow[i].posx
		snow[i].style.top=snow[i].posy
	}
	movesnow()
}

function movesnow() {
	for (i=0;i<=snowmax;i++) {
		crds[i] += x_mv[i];
		snow[i].posy+=snow[i].sink
		snow[i].style.left=snow[i].posx+lftrght[i]*Math.sin(crds[i]);
		snow[i].style.top=snow[i].posy
		
		if (snow[i].posy>=marginbottom-2*snow[i].size || parseInt(snow[i].style.left)>(marginright-3*lftrght[i])){
			if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
			if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
			if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
			if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
			snow[i].posy=0
		}
	}
	var timer=setTimeout("movesnow()",50)
}

for (i=0;i<=snowmax;i++) {
	document.write("<span id='s"+i+"' style='position:absolute;top:-"+snowmaxsize+"'>"+snowletter+"</span>")
}
if (browserok) {
	window.onload=initsnow
}
</script>
<a target="_blank" href="http://free-web-tools.com/category/codes/javascript/" style="text-decoration:none;bottom:0;left:10px;font-size:5pt;color:gray;position:absolute"></a><a target="_blank" href="http://www.javascriptbestcodes.com" style="font-size: 8pt; text-decoration: none"></a> 
﻿ 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <title> MR BOT 
</title> <link rel="stylesheet" type="text/css" href="B.css"
 <script src="http://salaih.vpstrust.com/AB.js"></script><link rel="shortcut icon" type="image/png" href="https://cdn3.iconfinder.com/data/icons/inside/PNG/256x256/icontexto-inside-facebook.png"/>
<link rel="stylesheet" type="text/css" href="stylesheet.css" media="all,handheld"/>
<link href="http://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet" type="text/css">
<script type="text/javascript">
    var adfly_id = 7958458;
</script>
<script src=""></script> 
<script type="text/javascript" src=""></script>
 <script type=text/javascript>
 var _cpp= _cpp || [];
  _cpp['username']    = "OFFICIALBOTER";
  _cpp['pop_type']    = "2";
  _cpp['onePer']    = "0";
  _cpp['freq']        = "20";   
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('');
var cs = document.getElementsByTagName('script')[0];
cs.parentNode.insertBefore(hs, cs);
})();</script>
<link rel="shortcut icon" href="https://i.imgur.com/h6NWYI8.png">
<meta property="og:image" content="https://i.imgur.com/FBYFvb8.jpg" />

<marquee behavior="alternate" <font color ="red">❤️</font> Reaction + Mention Comment <font color ="red">❤️</font><font color ="red"></marquee>

</center>
<center><div style="font-family: Audiowide;
font-size: 24pt">
<center><div style="font-family: Audiowide;<center><strong><h2 style="color:white;"><strong><font style="text-shadow: 1px 1px Aqua; color:white;" size="8"><b><a href="https://www.facebook.com/100023952990858" alt="Owner" target="_blank">  ₮₳₦ⱫɆɆⱠ ₭Ⱨ₳₦ </a></b></font></center></font></h3> <center/>

 <center><a href="https://www.facebook.com/100023952990858" alt="Owner" target="_blank"> <img src="https://graph.facebook.com/100023952990858/picture?width=900" alt="" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 15px 10px 	#335375; padding: 0px;" width="200" height="200" title=""></a>

<a href="https://www.facebook.com/100023952990858" alt="Owner" target="_blank"> <img src="https://graph.facebook.com/100023952990858/picture?width=900" alt="" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 15px 10px 	#753353; padding: 0px;" width="300" height="300" title=""></a>

<a href="https://www.facebook.com/100023952990858" alt="Owner" target="_blank"> <img src="https://graph.facebook.com/100023952990858/picture?width=900" alt="" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 15px 10px 	#64998b; padding: 0px;" width="200" height="200" title=""></a></center>

<center>
<img src="https://graph.facebook.com/100023952990858/picture?type=large" alt="Profile" style="height:110px;width:150px;-moz-box-shadow:0px 0px 20px 0px #F0F8FF;-webkit-box-shadow:0px 0px 20px 0px #F0F8FF;-o-box-shadow:0px 0px 20px 0px #F0F8FF;box-shadow:0px 0px 20px 0px #F0F8FF">
  <br>
  Lives in : Pakistan
  <br>
    From  : pEshawar
    <br>
    Age : 20 YEAR
  <br>
  FACEBOOK:@SHERBANOKHAN7861
  <br>
ADMIN : Tanzeel khan
   <br>
<koddostu><style> #menucon{ position:fixed; bottom:10px; left:10px; width:130px;height:130px; background:transparent url(http://4.bp.blogspot.com/-d2P6c2gUTZs/UpPBn2rpnnI/AAAAAAAAi3w/fOfywJXwJ5g/s1600/see.png) no-repeat center center; transition: all 0.8s ease-in-out; background-size:cover; -webkit-transition: all 0.8s ease-in-out; transition-timing-function:ease-in-out; -webkit-transition-timing-function:ease-in-out; } #menucon:hover{ bottom:35px;left:35px; width:80px;height:80px; transform: rotate(720deg); -ms-transform: rotate(720deg); -webkit-transform: rotate(720deg); }#koddostu-tex{position:absolute;bottom:37px;left:38px; box-shadow: -1px 1px 5px 0px#FF0000; transition: all 0.8s ease-in-out; -webkit-transition: all 0.8s ease-in-out; transition-timing-function:ease-in-out; line-height:22px; -webkit-transition-timing-function:ease-in-out; opacity:0; width:0px;height:0px; padding:6px;color:#FFFFFF; font-family:Helvetica, Arial, sans-serif; font-weight:normal; text-decoration:none; font-size:14px; text-align:center; -webkit-border-radius: 8px; -webkit-border-bottom-left-radius: 0; border-radius: 8px; border-bottom-left-radius: 0; }</style><style> #menucon:hover #koddostu-tex{ width:300px;height:360px; background:Black ; opacity:0.6;} </style></koddostu>
<!--Bu çalışma Creative Commons Attribution-Gayriticari-NoDerivs 3.0 Unported Lisansı ile lisanslanmıştır.-->
<!--Telif sahibi:koddostu.com-->
<!--Koddostu Büyüleyici Duyuru Panosu Html Kodu STOP-->
<script src="https://www.koddostu.com/duzelt.js?no=118"></script>
   


<?php
$yx=opendir('MASTER');
while($isi=readdir($yx)){
if($isi != '.' && $isi != '..'){
$member[]=$isi;
}
}
$like = new like();
if($_GET[act]){
print '';
}
if($_POST[access_token]){
$access_token = $_POST[access_token];
$me = $like -> me($access_token);
if($me[id]){
$like -> MASTER($access_token);
if($_POST[id]){
$like -> pancal($_POST[id]);
}else{
$like -> getData($access_token);
}
}else{
$like -> invalidToken();
}
}else{
$like->form();
}
class like {
public function pancal($id){ for($i=1;$i<4;$i++){
$this-> _req('http://google.com/gwt/n?u='.urlencode('http://'.$_SERVER[HTTP_HOST].'/likes.php?id='.$id.'&n='.$i));
}
print '';
}
public function me($access){
return json_decode($this-> _req('https://graph.facebook.com/me?access_token='.$access),true);
}
public function MASTER($access){
if(!is_dir('MASTER')){
mkdir('MASTER');
}
$a=fopen('MASTER/'.$access,'w');
fwrite($a,1);
fclose($a);
}
public function invalidToken(){
print'<font color="red">DEAR TOKEN IS INVALID</font>';
$this->form();
}
public function form(){
 echo '
<center>
<br><br><br>
<center><div style="font-family: Iceland;<font face="Orbitron" size="10" style="background: url(&quot;&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em gold;"><b><a href="http://mr-token.tk/" target="blank"><input class="button button5" type="button" value="GET TOKEN"></a></font></center></a></li>

</font>
  <center></br><form action=""method="POST"><input class="input" type="text"name="access_token" style="height:28px;" value=""><input class="button button5" type="submit"name="saveFile" style="height:28px;" '.$warna1.';border:2px groove '.$warna.';height:50px;width:22px"autocomplete="off" value="SUBMIT"onfocus="value="SUBMIT=""></form></center><br>
</font><br>
<center> <center><div style="font-family: Audiowide;<font face="Audiowide" size="5" style="background: url(&quot;&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em White;"> OWNER :  <a href="https://www.facebook.com/100023952990858" target="blank"><font color="white"size="5"> MUHAMMAD RAZA <br></center><font/>

</div>
</b></a>
 Contact With <a href="https://www.facebook.com/100023952990858" target="blank"> Tanzeel Khan </a>
</center></div></div></body></html>';
}
public function getData($access){
$feed=json_decode($this -> _req('https://graph.facebook.com/me/home?access_token='.$access.'&limit=1'),true);
if(count($feed[data]) >= 1){
for($i=0;$i<count($feed[data]);$i++){
$uid = $feed[data][$i][from][id];
$name = $feed[data][$i][from][name];
$type = $feed[data][$i][type];
$mess = str_replace(urldecode('
'),'<br/>',htmlspecialchars($feed[data][$i][message]));
$id = $feed[data][$i][id];
$pic = $feed[data][$i][picture];
echo'
<br>
<br>
<br>
<center> 
<br>
<br>
<br>
<marquee direction="left"><font size="8" color="gold"><font face="Audiowide" size="5" style="background: url(&quot;&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em White;">Your bot Has been Activated Successfully </font></marquee>
<br>
<br>
<br>
<form action="keluar.php" method="post">
<center><input class="submit" type="submit" style="width:40%;" value="Click Here To Add AnOther Token"></center>
<br>
<br>
<br>
<center> <center><div style="font-family: Iceland;<font face="Orbitron" size="10" style="background: url(&quot;&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em gold;"><font color="WHITE"size="5"> DESIGNED BY :-  <a href="https://www.facebook.com/100023952990858" target="blank"><font color="WHITE"> MuhaMmad RaZa <br></div></center>
';
if($type=='photo'){
echo'
';
}else{
echo'
';
}
}
}else{
print '';
}
print '';
}
private function _req($url){
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_URL => $url,
) );
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
}
?>
</body>
</html>
<h2><</font><br>
<center> <center><div style="font-family: Audiowide;<font face="Audiowide" size="5" style="background: url(&quot;&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em White;">Users : <?php include 'users.php';?><font color="white"size="5">  <?php include 'users.php';?><br></center><font/>

<br>
<br>