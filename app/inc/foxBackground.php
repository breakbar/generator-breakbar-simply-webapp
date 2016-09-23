<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: zanin-->
<!-- * Date: 17/09/2016-->
<!-- * Time: 19:06-->
<!-- */-->

<div class="content content--fox">
    <div class="fox">
        <div class="fox-body">
            <div class="fox-front-leg"></div>
            <div class="fox-front-leg"></div>
        </div>
        <div class="fox-head">
            <div class="fox-face">
                <div class="fox-ears">
                    <div class="fox-ear"></div>
                    <div class="fox-ear"></div>
                </div>
                <div class="fox-skull"></div>
                <div class="fox-front"></div>
                <div class="fox-eyes"></div>
                <div class="fox-nose"></div>
            </div>
        </div>
        <div class="fox-tail">
            <div class="fox-tail">
                <div class="fox-tail">
                    <div class="fox-tail">
                        <div class="fox-tail">
                            <div class="fox-tail">
                                <div class="fox-tail">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display:none">
        <defs>
            <filter id="squiggly-0">
                <feTurbulence id="turbulence" baseFrequency="0.02" numOctaves="3" result="noise" seed="0" ></feTurbulence>
                <feDisplacementMap id="displacement" in="SourceGraphic" in2="noise" scale="2" ></feDisplacementMap>
            </filter>
            <filter id="squiggly-1">
                <feTurbulence id="turbulence" baseFrequency="0.02" numOctaves="3" result="noise" seed="1" ></feTurbulence>
                <feDisplacementMap in="SourceGraphic" in2="noise" scale="3" ></feDisplacementMap>
            </filter>
            <filter id="squiggly-2">
                <feTurbulence id="turbulence" baseFrequency="0.02" numOctaves="3" result="noise" seed="2" ></feTurbulence>
                <feDisplacementMap in="SourceGraphic" in2="noise" scale="2" ></feDisplacementMap>
            </filter>
            <filter id="squiggly-3">
                <feTurbulence id="turbulence" baseFrequency="0.02" numOctaves="3" result="noise" seed="3" ></feTurbulence>
                <feDisplacementMap in="SourceGraphic" in2="noise" scale="3" ></feDisplacementMap>
            </filter>
            <filter id="squiggly-4">
                <feTurbulence id="turbulence" baseFrequency="0.02" numOctaves="3" result="noise" seed="4" ></feTurbulence>
                <feDisplacementMap in="SourceGraphic" in2="noise" scale="1" ></feDisplacementMap>
            </filter>
        </defs>
    </svg>
</div><!-- /content -->