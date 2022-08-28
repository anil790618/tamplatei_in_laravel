@extends('frontend.layout.main')
@section('main-container')
    
      <!-- contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Contact Us</h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  {{-- <form class="main_form"> --}}
                     {!! Form::open([
                        'url' => url('storefile'),
                     'method'=>'post',
                     // 'id'=>'contact',
                     // 'role'=>'form',
                     'class'=>'bv-form',
                     'enctype'=>'multipart/form-data'
                     ]) !!}
                     {{-- @csrf --}}
                     <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                           {{-- <input class="form-control" placeholder="Name" type="text" name="Name"> --}}
                           {!!Form::text('name','',[
                              'class'=>"form-control", 'placeholder'=>"Name", 'type'=>"text", 'name'=>"Name"
                           ])!!}
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"> 
                           {!!Form::select('country',[
                              '1'=>'india',
                              '2'=>'America',
                              '3'=>'us',
                           ],
                           // null
                           "2"
                           ,
                           [
                              'class'=>"form-control", 'name'=>"select"
                           ])!!}
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                           <input class="form-control" placeholder="Email" type="text" name="Email">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                           <input class="form-control" placeholder="Phone" type="text" name="Phone">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                           <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                           <button class="send">Send</button>
                        </div>
                     </div>
                     {!! Form::close() !!}
                  {{-- </form> --}}

               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padddd">
                  <div class="map_section">
                     <div id="map">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- end contact  -->
      @endsection