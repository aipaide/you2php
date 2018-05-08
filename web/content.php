<?php 
include "./lib.php";
$cont   = $_GET['cont'];
$ptk    = $_GET['pageToken'];
$sortid = $_GET['sortid'];
$order  = isset($_GET['order']) ? $_GET['order'] : 'relevance';
switch ($cont) {
case 'history':
    $headtitle='历史记录-油桶';
	break;
case 'category':
    $headtitle=categorieslist($sortid).'-'.SITE_NAME;
	break;
case 'trending':
    $headtitle='时下流行'.'-'.SITE_NAME;
	break;
case 'DMCA':
    $headtitle='DMCA'.'-'.SITE_NAME;
	break;
case 'video':
    $headtitle='视频下载工具'.'-'.SITE_NAME;
	break;
case 'api':
    $headtitle='API油桶'.'-'.SITE_NAME;
	break;
case 'gfw':
    $headtitle='禁网直连'.'-'.SITE_NAME;
	break;

}

include "./header.php";

if($cont=="trending"){
    echo'<div class="container-fluid d-lg-none d-md-none" style="background:#e62117">
  <div class="container">
       <div class="row text-center" >
        <div class="col-4"><a class="navbar-brand topbara" href="./"><i class="fa d-inline fa-lg fa-home txt-topbar"></i></a></div>
        <div class="col-4"><a class="navbar-brand topbara" href="./content.php?cont=trending"><i class="fa d-inline fa-lg fa-fire text-white"></i></a></div>
        <div class="col-4"><a class="navbar-brand topbara" href="./content.php?cont=history"><i class="fa d-inline fa-lg fa-history txt-topbar"></i></a></div>
  </div> 
</div>
</div>';
}elseif ($cont=="history") {
 echo '<div class="container-fluid d-lg-none  d-md-none" style="background:#e62117">
  <div class="container">
       <div class="row text-center" >
        <div class="col-4"><a class="navbar-brand topbara" href="./"><i class="fa d-inline fa-lg fa-home txt-topbar"></i></a></div>
        <div class="col-4"><a class="navbar-brand topbara" href="./content.php?cont=trending"><i class="fa d-inline fa-lg fa-fire txt-topbar"></i></a></div>
        <div class="col-4"><a class="navbar-brand topbara" href="./content.php?cont=history"><i class="fa d-inline fa-lg fa-history text-white"></i></a></div>
  </div> 
</div>
</div>';
}

?>

  <div class="container py-2">
     <div class="row">
         <div class="col-md-3 d-none d-sm-none d-md-block">
          <div id="menu"></div>
    		<script>$("#menu").load('<?php echo './ajax/ajax.php?type=menu' ?>');</script>
         </div>
         <div class="col-md-9 relatedlist">
            <?php 
            switch ($cont) {
					case 'gfw':
				echo '<br/>
	  <h6>实用工具</h6>
		<a href="https://my-ntdtv.herokuapp.com/proxy/https://www.google.com/search?q=425事件" target="_blank">Google搜索</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/https://zh.wikipedia.org/wiki/喬高-麥塔斯調查報告" target="_blank">维基百科</a>
		<a href="https://github.com/gfw-breaker" target="_blank">GitHub</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/http://truth.atspace.eu/fgate" target="_blank">翻墙软件</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/http://dongtaiwang.com/loc/phome.php" target="_blank">动态网</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/http://wujieliulan.com/" target="_blank">无界网络</a>
		<br/>
		<br/>
	  <h6>热门节目</h6>
		<a href="https://my-ntdtv.herokuapp.com/tv.html" target="_blank">新唐人直播</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/http://www.ntdtv.com/xtr/gb/prog109.html" target="_blank">大陆新闻解读</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/http://www.ntdtv.com/xtr/gb/prog829.html" target="_blank">中国禁闻</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/http://www.ntdtv.com/xtr/gb/prog107.html" target="_blank">今日点击</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/http://www.ntdtv.com/xtr/gb/prog99.html" target="_blank">热点互动</a>
		<br/>
		<br/>
	  <h6>新闻媒体</h6>
	    <a href="https://my-ntdtv.herokuapp.com/proxy/http://www.epochtimes.com/" target="_blank">大纪元新闻网</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/http://www.ntdtv.com/" target="_blank">新唐人电视台</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/http://soundofhope.org/" target="_blank">希望之声电台</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/https://www.voachinese.com/" target="_blank">美国之音</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/http://www.bbc.com/zhongwen/simp" target="_blank">BBC中文网</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/http://www.dw.com/zh/在线报导/s-9058?&zhongwen=simp" target="_blank">DW(德国之声)</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/https://cn.wsj.com/zh-hans" target="_blank">华尔街日报</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/https://cn.nytimes.com/" target="_blank">纽约时报中文网</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/https://cn.reuters.com/" target="_blank">路透中文网</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/http://cn.rfi.fr/" target="_blank">法国国际广播电台</a>
		<br/>
		<br/>
      <h6>法轮功真相</h6>
		<a href="https://my-ntdtv.herokuapp.com/proxy/http://www.epochtimes.com/gb/nf5410.htm" target="_blank">4.25上访</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/http://www.ntdtv.com/xtr/gb/2018/01/24/a1360638.html" target="_blank">天安门自焚真相</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/http://www.ntdtv.com/xtr/gb/2011/08/17/a296108.html" target="_blank">我们告诉未来</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/http://www.ntdtv.com/xtr/gb/2017/05/21/a1325605.html" target="_blank">大法洪传25周年</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/http://www.ntdtv.com/xtr/gb/2017/12/28/a1356229.html" target="_blank">传奇时代</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/http://www.ntdtv.com/xtr/gb/prog673.html" target="_blank">神韵艺术团</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/http://www.zhuichaguoji.org/" target="_blank">追查国际</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/http://qikan.minghui.org/display.aspx?category_id=4&guige_id=3" target="_blank">明慧期刊网</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/http://www.mhradio.org/showcategory/36/index.html" target="_blank">天音静乐</a>
		<br/>
		<br/>
	  <h6>共产党专题</h6>
		<a href="https://my-ntdtv.herokuapp.com/proxy/http://www.ntdtv.com/xtr/gb/2014/11/19/a1155353.html" target="_blank">九评共产党</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/http://www.ntdtv.com/xtr/gb/2017/12/31/a1357268.html" target="_blank">百年红祸</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/http://www.epochtimes.com/gb/nf1156504.htm" target="_blank">共产党百年真相</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/http://www.epochtimes.com/gb/18/1/3/n10022138.htm" target="_blank">共产主义的终极目的</a>
		<a href="https://my-ntdtv.herokuapp.com/proxy/http://www.soundofhope.org/gb/2014/03/31/n327527.html" target="_blank">解体党文化</a>
	';
					break;					

                    case 'history':
		        echo '<div id="history"></div>
                     <script>
                     $("#history").load(\'./ajax/ajax.php?type=history\');
                     </script>';
		             break;
		             
		            case 'DMCA':
		        echo '<div id="DMCA"></div>
                     <script>
                     $("#DMCA").load(\'./ajax/ajax.php?type=DMCA\');
                     </script>';
		             break;
		             
		             case 'api':
		        echo '<div id="api"></div>
                     <script>
                     $("#api").load(\'./ajax/ajax.php?type=api\');
                     </script>';
		             break;
		        case 'video':
		        echo '<div id="videos"></div>
                     <script>';
                    $g=isset($_GET['v'])?"&v={$_GET['v']}":'';
                     echo '$("#videos").load(\'./ajax/ajax.php?type=videos'.$g.'\');
                    </script>';
		             break;
		             
		           case 'trending':
		        echo '<div id="videocont"></div>
                        <script>
                        $("#videocont").load(\'./ajax/ajax.php?type=trendinglist&ptk=' . $ptk . '\');
                        </script>';
		            break;
		            
            		case 'category':
            		switch ($order) {
            		    case 'date':
            				$date1 = 'selected';
            				break;
            				case 'viewCount';
            				$viewCount = 'selected';
            				break;
            				default:
            				$relevance = 'selected';
            		   }
            		  
            		if(isset($_GET['sortid'])){echo '<div class="font-weight-bold h6 pb-1">'.categorieslist($sortid).'</div> ';}
            		echo '<div class="row"> <div class="col-md-12 selectalign pb-3"><select class="custom-select" id="paixu">';
            		echo '<option '. $relevance .' data-url="./ajax/ajax.php?type=category&sortid='.$sortid.'&ptk='.$ptk.'">热门视频</option>';
            		echo '<option ' . $date1 .' data-url="./ajax/ajax.php?type=category&sortid='.$sortid.'&order=date&ptk='.$ptk.'">最新发布</option>';
            		echo '<option ' . $viewCount .' data-url="./ajax/ajax.php?type=category&sortid='.$sortid.'&order=viewCount&ptk='.$ptk.'">最多点击</option>';
            		echo '</select></div></div>';
            		echo '<div id="videocont"></div><script>$("#videocont").load(\'./ajax/ajax.php?type=category&sortid='. $sortid .'&order='.$order.'&ptk='.$ptk.'\');$(\'#paixu\').on(\'change\', function() {loadPage($(this).find(\':selected\').data(\'url\'));});function loadPage(url) {$("#videocont").load(url);}</script>';
            		        break;
		
		}?>
		
		</div>
		
     </div>
  </div>

<?php include "./footer.php";?>
