@extends('master')

@section('content')

<div class="above-the-fold">
    <div class="container fold">	
    	<div class="row hero-logo">
    		<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
    			<img src="img/logo2.svg" width="100%">
    		</div>
    	</div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <br>
                <h4>VIRTUAL REALITY • 360° • IMMERSIVE MEDIA</h4>
                <h4>EXPERIMENTAL • EXPONENTIAL • EXPERIENTIAL</h4>
            </div>
        </div>
    	<div class="row">
	    	<img id="scroll-before" class="visible center-block scroll-down" src="img/scroll_arrow.svg" width="6%">
	    	<a href="#intro"><img id="scroll-after" class="hidden center-block scroll-down" src="img/scroll_text.svg" width="6%"></a>
	    </div>
     </div>
     <a id="intro"></a>
</div>


<div class="containr nopadmarg tables">
    <div class="row nopadmarg">
		<div class="col-md-4 nopadmarg table-cell">
    		<div class="row nopadmarg deli">
	    		<img class="imghead center-block" src="img/head.png" width="70%">
    		</div>
    	</div>
    	<div class="col-md-8 cell5 nopadmarg table-cell2">
    		<div class="row nopadmarg2 deli" >
                <h4>virtual reality • 360° • immersive media</h4><br>
                <p>Virtual reality is finally on the verge of its breakthrough. This represents a huge opportunity not only for gaming, but also for immersive video.</p>
                <p>Over the history of entertainment, each new media format to emerge has represented a step forward in immersion and presence. Immersive video is arguably the culmination of this evolution, a media format in which consuming content is becoming indistinguishable from having real life experiences.</p>
                <p>+NZVR360° is a Wellington New Zealand based company developing innovative methodology of engagement &amp; delivery to audiences on multiple platforms.</p>
                
            </div>
    	</div>
    </div>
</div>

<div class="clear">
	<div class="containr nopadmarg ">
    	<div class="row nopadmarg tables flexbox">
			<div class="col-md-6 cell4 nopadmarg captdeli table-cell3">
	    		<div class="row nopadmarg2 deli" >
	    			<h2>LIVE 360°</h2>
                    <!-- <p>Experience +NZVR360°</p> -->
    			</div>
    		</div>
    		<div class="col-md-6 cell4 nopadmarg table-cell3">
    			<div id="capture-before" class="row nopadmarg2 capt" >
                
    				<img id="capture-after" class="hidden2 arrowto" src="img/arrowto.svg" height="25px"> <h2 class="visible2"> CAPTURE</h2> 
                    
                    <p>+NZVR360° capture VR360° content with various specialised camera rigs to create immersive media. 
                    Our rigs are sophisticated capture devices in shot specific configurations; &amp; we understand the 
                    need for shots &amp; scenes that will "flow" in a released product as a story in the context of 
                    VR360°.</p>
                    <form action="/live" class="button">
                            <div class="btn"><input type="submit" href="/live" value="More"></div>
                    </form>
    			</div>
                <hr>
    			<div id="delivery-before" class="row nopadmarg2 capt">

    				<img id="delivery-after" class="hidden2 arrowto" src="img/arrowto.svg" height="25px"> <h2 class="visible2"> DELIVERY</h2>
                    
                    <p>+NZVR360° are utilising Vrideo &amp; Deep Inc/ARTe360 - LIQUID CINEMA™ tools for distribution, authoring &amp; development.</p>

<p>+NZVR360 build immersive experiences for online/ offline/ live/ interactive: trade &amp; entertainment events; experiential &amp; experimental installations; web/ mobile/ dedicated VR devices.</p>
    			<form action="/live" class="button">
                            <div class="btn"><input type="submit" href="/live" value="More"></div>
                    </form>
                </div>
    		</div>
    	</div>
    </div>
</div>

<div class="clear">
	<div class="containr nopadmarg">
    	<div class="row nopadmarg">
			<div class="col-md-4 cell4 nopadmarg">
	    		<div class="row nopadmarg capt" >
	    			<h2>PROJECTS</h2>
    			</div>
    		</div>
    		<div class="col-md-7 cell5 nopadmarg ">
    			<div class="row nopadmarg deli" >
    				<h2>INFO</h2>
    			</div>
	    	</div>
    		<div class="col-md-1 cell5 nopadmarg ">
    			<div class="row nopadmarg soci" ></div>
    			<div class="row nopadmarg soci" ></div>
	    		<div class="row nopadmarg soci" ></div>
    			<div class="row nopadmarg soci" ></div>
    			<div class="row nopadmarg soci" ></div>
    		</div>
    	</div>
    </div>
</div>

@endsection
