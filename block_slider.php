<script type="text/javascript" src="js/jquery.min.js" id="jquery.min.js"></script>
 <script type="text/javascript" src="js/Lanit.js" id="lanit.js"></script>
 <script type="text/javascript" src="js/Lanit.SharePoint.js" id="lanit.sharepoint.js"></script>
 <script type="text/javascript" src="js/Lanit.REA.js" id="lanit.rea.js"></script>
 <script type="text/javascript" src="js/jquery.jcarousel.js" id="jquery.jcarousel.js"></script>
 <script type="text/javascript" src="js/Lanit.REA.Nav.Slider.js" id="lanit.rea.nav.slider.js"></script>
 <script type="text/javascript" src="js/Lanit.REA.Nav.Links.js" id="lanit.rea.nav.links.js"></script>
 <script type="text/javascript" src="js/Lanit.REA.Events.Last.js" id="lanit.rea.events.last.js"></script>
 <script type="text/javascript" src="js/initstrings.debug.js"></script><script type="text/javascript" src="js/strings.debug.js"></script>
 <script type="text/javascript" src="js/core.debug.js"></script>
 <script type="text/javascript">
//<![CDATA[
var MSOWebPartPageFormName = 'aspnetForm';
var g_presenceEnabled = true;
var g_wsaEnabled = false;
var g_wsaQoSEnabled = false;
var g_wsaQoSDataPoints = [];
var g_wsaLCID = 1049;
var g_wsaListTemplateId = 850;
var g_wsaSiteTemplateId = 'LANIT.REA.PORTAL.EXTERNAL.RU#0';
var _fV4UI=true;var _spPageContextInfo = {webServerRelativeUrl: "\u002fru", webAbsoluteUrl: "http:\u002f\u002frea.ru\u002fru", siteAbsoluteUrl: "http:\u002f\u002frea.ru", serverRequestPath: "\u002fru\u002fpages\u002fdefault.aspx", layoutsUrl: "_layouts\u002f15", webTitle: "\u0420\u042D\u0423", webTemplate: "86003", tenantAppVersion: "0", webLogoUrl: "_layouts\u002f15\u002fimages\u002fsiteicon.png", webLanguage: 1049, currentLanguage: 1049, currentUICultureName: "ru-RU", currentCultureName: "ru-RU", clientServerTimeDelta: new Date("2015-09-03T12:11:06.4438530Z") - new Date(), siteClientTag: "5$$15.0.4569.1000", crossDomainPhotosEnabled:false, webUIVersion:15, webPermMasks:{High:16,Low:196673},pageListId:"{04326bbd-ef95-4eda-9afb-524d964402b1}",pageItemId:168, pagePersonalizationScope:1, alertsEnabled:true, siteServerRelativeUrl: "\u002f", allowSilverlightPrompt:'True'};function CallServer_7894396(arg, context) {WebForm_DoCallback('ctl00$ctl02$ctl26',arg,SP.UI.MyLinksRibbon.MyLinksRibbonPageComponent.ribbonActionCallback,context,null,false); }function _myLinksRibbonLoad2()
{
    var fnd = function () {
        try {
            mylinks_init.MyLinksInit('CallServer_7894396'); 
        } 
        catch (Ex)
        { }
    };
    RegisterSod('mylinks_init', '/_layouts/15/SP.UI.MyLinksRibbon.js');
    LoadSodByKey('mylinks_init', fnd);
}

function _myLinksRibbonLoad1()
{
    ExecuteOrDelayUntilScriptLoaded(_myLinksRibbonLoad2, 'SP.Ribbon.js');
}

_spBodyOnLoadFunctionNames.push('_myLinksRibbonLoad1');
var L_Menu_BaseUrl="/ru";
var L_Menu_LCID="1049";
var L_Menu_SiteTheme="null";
document.onreadystatechange=fnRemoveAllStatus; function fnRemoveAllStatus(){removeAllStatus(true)};
function _spNavigateHierarchy(nodeDiv, dataSourceId, dataPath, url, listInContext, type) {

    CoreInvoke('ProcessDefaultNavigateHierarchy', nodeDiv, dataSourceId, dataPath, url, listInContext, type, document.forms.aspnetForm, "", "\u002fru\u002fpages\u002fdefault.aspx");

}
var _spWebPartComponents = new Object();//]]>
</script>
 <STYLE>
.lanit-rea-top .ms-webpartzone-cell, 
.lanit-rea-bottom .ms-webpartzone-cell {
    margin:0;
}
.ms-hide
{
display:none;
}

/* Slider*/
.connected-carousels {
  background-color: #0b2d50;
  padding-bottom: 49px;
}

.connected-carousels .stage {
    width: 100%;
    margin: 0px;
    position: relative;
}

.connected-carousels .stage .carousel {
    overflow: hidden;
    position: relative;
}

.connected-carousels .navigation {
    background-color: #fff;
    position: relative;
}

.connected-carousels .navigation .carousel ul {
  width: 100%;
}

.connected-carousels .carousel ul {
    width: 20000em;
    position: relative;
    list-style: none;
    margin: 0;
    padding: 0;
}

.connected-carousels .carousel li {
    float: left;
}

.connected-carousels .carousel-stage {
    height: 320px;
}

.connected-carousels .carousel-stage li {
   opacity: 0.5;
   position: relative;
   width: 980px;
}

.connected-carousels .carousel-stage li.active {
  opacity: 1;
}

.connected-carousels .carousel-navigation li {
    color: #2562ad;
    cursor: pointer;
    font-size: 15px;
    line-height: 18px;
    padding: 6px;
    position: relative;
    text-align: center;
    width: 184px;
}

.connected-carousels .carousel-navigation li.active {
    background-color: #960c1c;
    color: #fff;
    cursor: default;
    font-size: 17px;
    font-weight: bold;
}

.connected-carousels .carousel-navigation li.active .lanit-rea-marker-up {
  display: inline-block;
}
.connected-carousels .carousel-navigation li.active .lanit-rea-border {
  border: 0px solid #c47780;
}
</STYLE>
<div class="lanit-rea-top">
    <menu class="ms-hide">
	<ie:menuitem id="MSOMenu_Help" iconsrc="/_layouts/15/images/HelpIcon.gif" onmenuclick="MSOWebPartPage_SetNewWindowLocation(MenuWebPart.getAttribute(&#39;helpLink&#39;), MenuWebPart.getAttribute(&#39;helpMode&#39;))" text="Справка" type="option" style="display:none">

	</ie:menuitem>
</menu>





		<div class="connected-carousels external">
            <div class="stage">
                <div class="carousel carousel-stage" data-jcarousel="true" data-jcarouselautoscroll="true">
                    <ul style="left: -2940px; top: 0px; margin-left: 193px;">
                        
                        
                        
                        
                        
                    <li data-jcarouselcontrol="true" class="">
                            <img src="img/z_research_34.jpg" alt="">
                            <div class="lanit-rea-know-more" style="display: none;">
                                <h1>Научные  исследования</h1>
                                <a href="index.php?show=18"><p>КЭУ им. М.Рыскулбекова — один из ведущих научно-методических и учебных центров Кыргызстана</p></a>
                                <a href="index.php?show=18" onclick="return it.nav.go(this);" >Узнать больше</a>
                            </div>
                        </li><li data-jcarouselcontrol="true" class="">
                            <img src="img/z_recognition_19.jpg" alt="">
                            <div class="lanit-rea-know-more" style="display: none;">
                                <h1>Международное признание</h1>
                                <p>Интеграция в мировое образовательное и научное сообщество</p>
                                <a href="" onclick="return it.nav.go(this);">Узнать больше</a>
                            </div>
                        </li><li data-jcarouselcontrol="true" class="">
                            <img src="img/z_socials_216.jpg" alt="">
                            <div class="" style="display: none;">
                                <h1>Социальная жизнь</h1>
                                <p>Культурная, спортивная, общественная жизнь РЭУ. Быть, а не казаться!</p>
                                <a href="http://rea.ru/ru/pages/socials.aspx" onclick="return it.nav.go(this);">Узнать больше</a>
                            </div>
                        </li><li data-jcarouselcontrol="true" class="active">
                            <img src="img/z_experts_15.jpg" alt="">
                            <div class="lanit-rea-know-more" style="display: block;">
                                <h1>Экспертная деятельность</h1>
                                <p>Экспертный состав РЭУ. Структура. Задачи. Достижения.</p>
                                <a href="http://rea.ru/ru/pages/expertActivity.aspx" onclick="return it.nav.go(this);">Узнать больше</a>
                            </div>
                        </li><li class="" data-jcarouselcontrol="true">
                            <img src="img/z_education_229.jpg" alt="">
                            <div class="lanit-rea-know-more" style="display: none;">
                                <h1>Дополнительное образование</h1>
                                <p>Структура. Задачи.<br>
Особенности обучения в РЭУ.</p>
                                <a href="" onclick="return it.nav.go(this);">Узнать больше</a>
                            </div>
                        </li></ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="navigation">
                <div class="carousel carousel-navigation" data-jcarousel="true">
                    <ul style="left: 0px; top: 0px;">
                        <li data-jcarouselcontrol="true" class=""><span class="lanit-rea-marker-up"></span><span class="lanit-rea-border">Дополнительное <br>образование</span></li>
                        <li data-jcarouselcontrol="true" class=""><span class="lanit-rea-marker-up"></span><span class="lanit-rea-border">Научные <br> исследования</span></li>
                        <li data-jcarouselcontrol="true" class=""><span class="lanit-rea-marker-up"></span><span class="lanit-rea-border">Международное <br> признание</span></li>
                        <li data-jcarouselcontrol="true" class=""><span class="lanit-rea-marker-up"></span><span class="lanit-rea-border">Социальная <br> жизнь</span></li>
                        <li data-jcarouselcontrol="true" class="active"><span class="lanit-rea-marker-up"></span><span class="lanit-rea-border">Экспертная <br> деятельность</span></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
		</div>
	



    </div>