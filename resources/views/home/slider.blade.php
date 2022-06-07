<div class="rev_slider_wrapper">
    <div id="rev_slider_2" class="rev_slider" style="display:none">
        <!-- BEGIN SLIDES LIST -->
        <ul>
            @foreach($content as $rs)
                @if($rs->type=='Event')
                    @if($rs->status=='True')
                        <li data-transition="fade" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                            <div class="slider-overlay"></div>
                            <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                            <img src="{{Storage::url($rs->image)}}" alt="Sky" class="rev-slidebg"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption font-lora sfb tp-resizeme letter-space-5 h-p"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-300','-280','-250','-200']"
                                 data-fontsize="['60','40','30','18']"
                                 data-lineheight="['70','80','70','70']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":400,"to":"o:1;","delay":100,"split":"chars","splitdelay":0.05,"ease":"Power3.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'

                                 style="z-index: 7; color:#fff; font-family:'Rubik', sans-serif; max-width: auto; max-height: auto; white-space: nowrap; font-weight:500;">{{$rs->sdescription}}
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme"
                                 id="slide-3045-layer-1"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-150','-140','-120','-120']"
                                 data-fontsize="['170','120','80','40']"
                                 data-lineheight="['200','120','70','70']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-paddingtop="[10,10,10,10]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[10,10,10,10]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index: 5; font-family:'Roboto', sans-serif; font-weight: 700; white-space: nowrap;text-transform:left;">{{$rs->name}}
                            </div>

                            <!-- LAYER NR.3 -->

                            <!-- LAYER NR. 4 -->
                            <a href="{{route('eventlist')}}"><div class="tp-caption rev-btn rev-btn left_btn"
                                                                  id="slide-2939-layer-8"
                                                                  data-x="['center','center','center','center']" data-hoffset="['-380','280','190','120']"
                                                                  data-y="['middle','middle','top','top']"  data-voffset="['360','220','600','450']"
                                                                  data-fontsize="['14','14','10','8']"
                                                                  data-lineheight="['34','34','30','20']"
                                                                  data-width="none"
                                                                  data-height="none"
                                                                  data-whitespace="nowrap"
                                                                  data-type="button"
                                                                  data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                                                                  data-responsive_offset="on"
                                                                  data-responsive="off"
                                                                  data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#ffffff;bg:#ff5a2c;bw:2px 2px 2px 2px;"}]'
                                                                  data-textAlign="['left','left','left','left']"
                                                                  data-paddingtop="[12,12,8,8]"
                                                                  data-paddingright="[40,40,30,25]"
                                                                  data-paddingbottom="[12,12,8,8]"
                                                                  data-paddingleft="[40,40,30,25]"

                                                                  style="z-index: 14; white-space: nowrap; font-weight: 500; color: #ffffff;font-family:Rubik; text-transform:uppercase; background-color:#ff5a2c; border-color:rgba(0, 0, 0, 1.00); border-width:2px;  border-radius: 3px;">See All <Events></Events>
                                </div></a>
                            <!-- LAYER NR. 5 -->
                            <a href="{{route('event',['id'=>$rs->id])}}"><div class="tp-caption rev-btn rev-btn right-btn"
                                                                              id="slide-2939-layer-8"
                                                                              data-x="['center','center','center','center']" data-hoffset="['380','-280','-190','-120']"
                                                                              data-y="['middle','middle','top','top']"  data-voffset="['360','220','600','450']"
                                                                              data-fontsize="['14','14','10','8']"
                                                                              data-lineheight="['34','34','30','20']"
                                                                              data-width="none"
                                                                              data-height="none"
                                                                              data-whitespace="nowrap"
                                                                              data-type="button"
                                                                              data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                                                                              data-responsive_offset="on"
                                                                              data-responsive="off"
                                                                              data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#fff;bg:#ff5a2c;bw:2px 2px 2px 2px; "}]'
                                                                              data-textAlign="['left','left','left','left']"
                                                                              data-paddingtop="[12,12,8,8]"
                                                                              data-paddingright="[40,40,30,25]"
                                                                              data-paddingbottom="[12,12,8,8]"
                                                                              data-paddingleft="[40,40,30,25]"

                                                                              style="z-index: 14; white-space: nowrap;  font-weight:500; color:#ffffff; font-family:Rubik; text-transform:uppercase; background-color:#092ace; letter-spacing:1px; border-radius: 3px;">Get Details
                                </div></a>
                        </li>

                    @endif
                @endif
            @endforeach
        </ul><!-- END SLIDES LIST -->

    </div><!-- END SLIDER CONTAINER -->
</div><!-- END SLIDER CONTAINER WRAPPER -->
