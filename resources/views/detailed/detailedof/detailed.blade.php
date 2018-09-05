@extends('head.main')
   @section('contend')
<!--<script type="text/javascript"> 
    var i = 2;
        function agregar() 
        { 
            var id = 'ok';
            var diva = 'adiv';
            var divb = 'bdiv';
            var divc = 'cdiv';
            var divd = 'ddiv';
            var concac = id.concat(i);
            var adiv = diva.concat(i);
            var bdiv = divb.concat(i);
            var cdiv = divc.concat(i);
            var ddiv = divd.concat(i);
            
            var o = document.createElement('div'); 
            o.className = "box-gray";
            o.id = concac;
            document.getElementById('descriptionditailed').appendChild(o); 
            
            var l1 = document.createElement('label'); 
            l1.className="lbl"; 
            l1.for = 'collection_time';
            l1.innerText="Stage:";
            document.getElementById(concac).appendChild(l1);
            
            var q = document.createElement('div'); 
            q.id = adiv;
            q.className="val";
            document.getElementById(concac).appendChild(q);
            
            var l2 = document.createElement('label'); 
            l2.className="lbl"; 
            l2.for = 'collection_time'; 
            l2.innerText="Time month:";
            document.getElementById(concac).appendChild(l2);
            
            var x = document.createElement('div'); 
            x.id = bdiv;
            x.className="val";
            document.getElementById(concac).appendChild(x);
            
            var l3 = document.createElement('label'); 
            l3.className="lbl"; 
            l3.for = 'collection_time'; 
            l3.innerText="Cost:";
            document.getElementById(concac).appendChild(l3);
            
            var y = document.createElement('div'); 
            y.id = cdiv;
            y.className="val";
            document.getElementById(concac).appendChild(y);
            
            
            var l4 = document.createElement('label'); 
            l4.className="lbl"; 
            l4.for = 'collection_time'; 
            l4.innerText="Description:";
            document.getElementById(concac).appendChild(l4);
            
            var z = document.createElement('div'); 
            z.id = ddiv;
            z.className="val";
            document.getElementById(concac).appendChild(z);
            
            
            
            var a = document.createElement('input'); 
            a.type = "numeric"; 
            a.className="txt";
            a.name = "stage[]"; 
            a.value = i; 
            document.getElementById(adiv).appendChild(a);
            
            var b = document.createElement('input'); 
            b.type = "text"; 
            b.className="txt";
            b.name = "month[]"; 
            b.value = ""; 
            document.getElementById(bdiv).appendChild(b);
            
            var c = document.createElement('input'); 
            c.type = "text"; 
            c.className="txt";
            c.name = "cost[]"; 
            c.value = ""; 
            document.getElementById(cdiv).appendChild(c);
            
            var d = document.createElement('input'); 
            d.type = "text"; 
            d.className="txt";
            d.name = "description[]"; 
            d.value = ""; 
            document.getElementById(ddiv).appendChild(d);
                i=i+1
        } 
    </script> -->
 @if((Auth::user())and((Auth::user()->id)==($project->user_id)))  
        <div class="layout-2cols">
        <div class="content grid_8">
            <div class="project-detail">
                 <div>
                            <h3 class="rs alternate-tab accordion-label">New Detailed Project</h3>
                            <div class="tab-pane accordion-content active">
                                <div class="form form-profile">
                                    <form action="{{route('detailed.save', $project->id)}}" method="POST">
                                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                        
                                        <div id="descriptionditailed" class="row-item clearfix">
                                            
                                        <div class="box-gray">
                                            <label class="lbl" for="collection_time">Time month:</label>
                                            <div class="val">
                                                <input class="txt" type="numeric" id="collection_time" name='time_month' value=""> 
                                            </div>
                                            <label class="lbl" for="collection_time">Cost:</label>
                                            <div class="val">
                                                <input class="txt" type="numeric" id="collection_time" name='cost' value="">  
                                            </div>
                                            
                                            <label class="lbl" for="collection_time">Description:</label>
                                            <div class="val">
                                                <input class="txt" type="numeric" id="collection_time" name='description' value="">
                                            </div>
                                            
                                            
                                           
                                            
                                        </div>
                                        </div>
                                      <!--  <p class="wrap-btn-submit rs ta-r">
                                            <button type="button" value="Agregar" onclick="agregar()" class="btn btn-red btn-submit-all" >Add Phase</button>
                                            <button class="btn btn-red btn-submit-all">Save Project</button>
                                        </p>
                                        -->
                                        <p class="wrap-btn-submit rs ta-r">
                                            <button class="btn btn-red btn-submit-all">Save Project</button>
                                        </p>
                                    </form>
                                </div>
                            </div><!--end: .tab-pane -->
                        </div>
            </div>
        </div><!--end: .content -->
        <div class="clear"></div>
    </div>
@endif
                                            
                                        

<div class="layout-2cols">
        <div class="content grid_8">
            <div class="project-detail">
                 <div>
                            <h3 class="rs alternate-tab accordion-label">Detailed Project</h3>
                     @foreach($fases as $fase)
                            <div class="tab-pane accordion-content active">
                                <div class="form form-profile">
                                        
                                        <div id="descriptionditailed" class="row-item clearfix">
                                            
                                        <div class="box-gray">
                                            <label class="lbl" for="collection_time">Stage:</label>
                                            <div class="val">
                                                <input class="txt" type="number" id="collection_time" name='stage' value="{{ $fase->stage }}" readonly="readonly">
                                            </div>
                                            <label class="lbl" for="collection_time">Time month:</label>
                                            <div class="val">
                                                <input class="txt" type="numeric" id="collection_time" name='time_month' value="{{ $fase->time_month }}"> 
                                            </div>
                                            <label class="lbl" for="collection_time">Cost:</label>
                                            <div class="val">
                                                <input class="txt" type="numeric" id="collection_time" name='cost' value="{{ $fase->cost }}">  
                                            </div>
                                            
                                            <label class="lbl" for="collection_time">Description:</label>
                                            <div class="val">
                                                <input class="txt" type="numeric" id="collection_time" name='description' value="{{ $fase->description }}">
                                            </div>
                                            
                                            <!--<label class="lbl" for="collection_time">Project:</label>
                                            <div class="val">
                                                <input class="txt" type="numeric" id="collection_time" name='id_project' value="{{$project->id}}" readonly="readonly">
                                            </div>-->
                                            
                                        </div>
                                        </div>
                                </div>
                            </div><!--end: .tab-pane -->
                     @endforeach
                        </div>
            </div>
        </div><!--end: .content -->
        <div class="clear"></div>
    </div>
   @endsection