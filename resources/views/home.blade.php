@extends('master')

@section('content')

<div class="above-the-fold">
    <div class="container fold">	
    	<div class="row hero-logo">
    		<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
    			<img src="img/logo2.svg" width="100%">
    		</div>
    	</div>
        <div class="row slogan">
            <div class="col-md-8 col-md-offset-2 center">
                <br>
                <h4><b>VIRTUAL REALITY • 360° • IMMERSIVE MEDIA</b></h4>
            </div>
        </div>
     </div>
     
     <div class="containr nopadmarg tables jsfail">
        <div class="row nopadmarg">
            <div class="col-md-4 nopadmarg table-cell">
                <div class="row nopadmarg deli">
                    <img class="imghead center-block" src="img/head.png" width="75%">
                </div>
            </div>
            <a id="intro"></a>
            <div class="row">
                <a href="#intro"><img id="scroll-before" onmouseover="scrollDownBefore()" class="visible center-block scroll-down" src="img/scroll_arrow.svg"></a>
                <a href="#intro"><img id="scroll-after" onmouseout="scrollDownAfter()" class="hidden center-block scroll-down" src="img/scroll_text.svg" onError="img/scroll_text.png"></a>
            </div>
            <div class="col-md-8 cell5 nopadmarg table-cell2">
                <div class="row nopadmarg2 deli" >
                    <h4>EXPERIMENTAL • EXPONENTIAL • EXPERIENTIAL</h4><br>
                    <p>Virtual reality is finally on the verge of its breakthrough. This represents a huge opportunity not only for gaming, but also for immersive video.</p>
                    <p>Over the history of entertainment, each new media format to emerge has represented a step forward in immersion and presence. Immersive video is arguably the culmination of this evolution, a media format in which consuming content is becoming indistinguishable from having real life experiences.</p>
                    <p>+NZVR360° is a Wellington New Zealand based company developing innovative methodology of engagement &amp; delivery to audiences on multiple platforms.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="clear">
	<div class="containr nopadmarg ">
    	<div class="row nopadmarg flexbox">
			<div class="col-md-6 cell4 nopadmarg captdeli table-cell3">
	    		<div class="row nopadmarg2 deli relative" >
	    			<h2>LIVE</h2>
                    <p>Experience +NZVR360° right here, right now. Live is compatible with Desktop, Mobile and VR Dedicated devices. </p>
                    <h1 class="center font-large"><a class="whiteplay opacity" href="/live"><i class="fa fa-play"></i></a></h1>
    			</div>
    		</div>
    		<div class="col-md-6 cell3 nopadmarg table-cell3">
    			<div id="capture-before" class="row nopadmarg2 capt" >
    				<img id="capture-after" class="hidden2 arrowto" src="img/arrowto.svg" height="25px"> <h2 class="visible2"> CAPTURE</h2> 
                    <p>+NZVR360° capture VR360° content with various specialised camera rigs to create immersive media. 
                    Our rigs are sophisticated capture devices in shot specific configurations; &amp; we understand the 
                    need for shots &amp; scenes that will "flow" in a released product as a story in the context of 
                    VR360°.</p>
                    <form action="/capture" class="button">
                        <div class="btn"><input type="submit" value="CAPTURE"></div>
                    </form>
    			</div>
                <hr class="white-hr">
    			<div id="delivery-before" class="row nopadmarg2 capt">
    				<img id="delivery-after" class="hidden2 arrowto" src="img/arrowto.svg" height="25px"> <h2 class="visible2"> DELIVERY</h2>
                    <p>+NZVR360° are utilising Vrideo &amp; Deep Inc/ARTe360 - LIQUID CINEMA™ tools for distribution, authoring &amp; development.</p>
                    <p>+NZVR360 build immersive experiences for online/ offline/ live/ interactive: trade &amp; entertainment events; experiential &amp; experimental installations; web/ mobile/ dedicated VR devices.</p>
                    <form action="/delivery" class="button">
                        <div class="btn"><input type="submit" value="DELIVERY"></div>
                    </form>
                </div>
    		</div>
    	</div>
    </div>
</div>

<div class="parallax parallax-image-10 mobile-only">
</div>

<div class="clear">
	<div class="containr nopadmarg">
    	<div class="row nopadmarg flexbox">
			<div class="col-md-4 cell4 nopadmarg table-cell3">
	    		<div id="projects-before" class="row nopadmarg2 capt" >
	    			<img id="projects-after" class="hidden2 arrowto" src="img/arrowto.svg" height="25px"> <h2 class="visible2">CONTENT</h2>
                    <p>+NZVR360° build to brief: defined results require careful planning &amp; purpose.<p>
                    <p>We use sophisticated planning from our collaborative experience in TV broadcast, film, touring &amp; entertainment, content management, new media technologies &amp; advertising to produce &amp; build exceptional VR360° media.</p>
    			     <form target="_blank" action="http://www.nzvr360.com/content/" class="button">
                        <div class="btn"><input type="submit" value="CONTENT"></div>
                    </form>
                </div>
                <hr>
                <div id="news-before" class="row nopadmarg2 capt" >
                    <img id="news-after" class="hidden2 arrowto" src="img/arrowto.svg" height="25px"> <h2 class="visible2">NEWS</h2>
                    <p>Stay in touch with +NZVR360° latest news &amp; releases - recent events in Virtual &amp; Mixed Reality, Augmented Reality &amp; CGI content of our team, our clients &amp; partners…<p>
                    <form target="_blank" action="http://www.nzvr360.com/news/" class="button">
                        <div class="btn"><input type="submit" value="NEWS"></div>
                    </form>
                </div>
    		</div>
    		<div class="col-md-8 cell4 nopadmarg table-cell4 desktoptablet-only">
    			<div class="row nopadmarg2 deli" >
    				<h4 class="center">"HIT THE GROUND RUNNING"</h4><br>
                    <div class="videoWrapper">
                        <iframe width='560' height='350' src='http://www.vrideo.com/embed/bnOWUbFQ' scrolling='no' frameborder='0' allowfullscreen='1'></iframe>                    
                    </div>
    			</div>
	    	</div>
    	</div>
    </div>
</div>

<div class="parallax parallax-image-2" width="100%">
</div>

@endsection
