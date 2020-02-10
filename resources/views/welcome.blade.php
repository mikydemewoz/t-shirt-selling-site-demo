<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- custom css -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- script -->
        <script src="{{ asset('js/custome.js') }}"></script>
        <script>

            var ListOfColorSpans = Array("blackSpan","whiteSpan");
            var ListOfRadio = Array("whiteInputid","blackInputid");

            var ListOfRadioButtonFieldIDs = Array( "flddesign1", "flddesign2", "flddesign3","flddesign4" );
            var ListOfRadioButtonImageIDs = Array( "imgdesign1", "imgdesign2", "imgdesign3","imgdesign4" );

            var ListOficons = Array("mexicoIcon","megenagnaIcon","piazzaIcon");
            var ListOfcheckpoint = Array("checkpoint1","checkpoint2","checkpoint3");


            function checkpointButtonClicked(checkpointId,iconId){
                var len = ListOficons.length;
                for( i=0; i<len; i++ )
                {
                    document.getElementById(ListOfcheckpoint[i]).checked = false;
                    document.getElementById(ListOficons[i]).style.color = 'red';
                    
                }
                document.getElementById(checkpointId).checked = true;
                if(document.getElementById(checkpointId).checked = true){
                    document.getElementById(iconId).style.color = 'blue';
                        
                }else{
                    var len = ListOfcheckpoint.length;
                    for( i=0; i<len; i++ )
                    {
                        document.getElementById(ListOficons[i]).style.color = 'red';
                        
                    }
                    
                }
            }

            function colorButtonClicked(inputId,spanId){
                var len1 = ListOfColorSpans.length;
                var len2 = ListOfRadioButtonFieldIDs.length;
                var checked;
                for( i=0;i<len2;i++){
                    if(document.getElementById('flddesign1').checked){
                        checked = "first";
                    }else if(document.getElementById('flddesign2').checked){
                        checked = "second";
                    }else if(document.getElementById('flddesign3').checked){
                        checked = "third";
                    }else if(document.getElementById('flddesign4').checked){
                        checked = "fourth";
                    }else{
                        checked = "none";
                    }
                }
                for( i=0; i<len1; i++ )
                {
                    document.getElementById(ListOfRadio[i]).checked = false;
                    document.getElementById(ListOfColorSpans[i]).style.border="2px solid white";
                    
                }
                document.getElementById(inputId).checked = true;
                if(document.getElementById(inputId).checked = true){
                        if(inputId=="whiteInputid" && checked=="first"){
                            document.getElementById('bigImage').src="{{URL::asset('images/white t-shirt.jpg') }}";
                            document.getElementById(spanId).style.border="2px solid yellow";
                            document.getElementById('lbl').innerHTML=inputId+"1";
                        }else if(inputId=="whiteInputid" && checked=="second"){
                            document.getElementById('bigImage').src="{{URL::asset('images/black t-shirt.jpg') }}";
                            document.getElementById(spanId).style.border="2px solid yellow";
                            document.getElementById('lbl').innerHTML=inputId+"2";
                        }else if(inputId=="whiteInputid" && checked=="third"){
                            document.getElementById('bigImage').src="{{URL::asset('images/white t-shirt.jpg') }}";
                            document.getElementById(spanId).style.border="2px solid yellow";
                            document.getElementById('lbl').innerHTML=inputId+"2";
                        }else if(inputId=="whiteInputid" && checked=="fourth"){
                            document.getElementById('bigImage').src="{{URL::asset('images/black t-shirt.jpg') }}";
                            document.getElementById(spanId).style.border="2px solid yellow";
                            document.getElementById('lbl').innerHTML=inputId+"2";
                        }else if(inputId=="blackInputid" && checked=="first"){
                            document.getElementById('bigImage').src="{{URL::asset('images/black t-shirt.jpg') }}";
                            document.getElementById(spanId).style.border="2px solid yellow";
                            document.getElementById('lbl').innerHTML=inputId+"2";
                        }else if(inputId=="blackInputid" && checked=="second"){
                            document.getElementById('bigImage').src="{{URL::asset('images/white t-shirt.jpg') }}";
                            document.getElementById(spanId).style.border="2px solid yellow";
                            document.getElementById('lbl').innerHTML=inputId+"2";
                        }else if(inputId=="blackInputid" && checked=="third"){
                            document.getElementById('bigImage').src="{{URL::asset('images/black t-shirt.jpg') }}";
                            document.getElementById(spanId).style.border="2px solid yellow";
                            document.getElementById('lbl').innerHTML=inputId+"2";
                        }else if(inputId=="blackInputid" && checked=="fourth"){
                            document.getElementById('bigImage').src="{{URL::asset('images/white t-shirt.jpg') }}";
                            document.getElementById(spanId).style.border="2px solid yellow";
                            document.getElementById('lbl').innerHTML=inputId+"2";
                        }else{
                            document.getElementById('lbl').innerHTML=inputId+"no value";
                        }
                }else{
                    var len = ListOfRadio.length;
                    for( i=0; i<len; i++ )
                    {
                        // document.getElementById(ListOfRadio[i]).style.border = '6px solid #fff';
                        
                    }
                    
                }
                
            }

            var lorem_txt = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque suscipit aspernatur aliquid dolorem assumenda ducimus blanditiis quam deleniti saepe autem esse nobis quaerat minima reiciendis, obcaecati culpa ipsum facere impedit."

            function RadioButtonClicked(fieldid,imgid)
            {
                var len = ListOfRadioButtonFieldIDs.length;
                for( i=0; i<len; i++ )
                {
                    document.getElementById(ListOfRadioButtonFieldIDs[i]).checked = false;
                    document.getElementById(ListOfRadioButtonImageIDs[i]).style.border = '6px solid #fff';
                    
                }
                document.getElementById(fieldid).checked = true;
                if(document.getElementById(fieldid).checked = true){
                    document.getElementById(imgid).style.border = '6px solid black';
                        if(fieldid=="flddesign1"){
                            document.getElementById('bigImage').src="{{URL::asset('images/design1.jpg') }}";
                            document.getElementById('lbl').innerHTML=fieldid+"1";
                            document.getElementById('design_name').innerHTML = "Design One";
                            document.getElementById('design_description').innerHTML = "Design One "+lorem_txt;
                        }else if(fieldid=="flddesign2"){
                            document.getElementById('bigImage').src="{{URL::asset('images/design2.jpg') }}";
                            document.getElementById('lbl').innerHTML=fieldid+"2";
                            document.getElementById('design_name').innerHTML = "Design Two";
                            document.getElementById('design_description').innerHTML = "Design Two "+lorem_txt;
                        }else if(fieldid=="flddesign3"){
                            document.getElementById('bigImage').src="{{URL::asset('images/design3.jpg') }}";
                            document.getElementById('lbl').innerHTML=fieldid+"3";
                            document.getElementById('design_name').innerHTML = "Design Three";
                            document.getElementById('design_description').innerHTML = "Design Three "+lorem_txt;
                        }else if(fieldid=="flddesign4"){
                            document.getElementById('bigImage').src="{{URL::asset('images/design4.jpg') }}";
                            document.getElementById('lbl').innerHTML=fieldid+"4";
                            document.getElementById('design_name').innerHTML = "Design Four";
                            document.getElementById('design_description').innerHTML = "Design Four "+lorem_txt;
                        }else{
                            document.getElementById('lbl').innerHTML=fieldid+"no value";
                        }
                }else{
                    var len = ListOfRadioButtonImageIDs.length;
                    for( i=0; i<len; i++ )
                    {
                        document.getElementById(ListOfRadioButtonImageIDs[i]).style.border = '6px solid #fff';
                        
                    }
                    
                }
                
            }
        </script>
    </head>
    <body>
        <!-- the landing page  -->
        <div>
            <img src="{{ asset('images/ethiopiawi_logo.png') }}" alt="" style="width:210px;height:100px;position:absolute;top:20;margin-top:20px;margin-left:30px">
        </div>
        <!-- <div class="image-slidder">
            <div class="slideshow-container" >
                <div class="mySlides fade">
                    <img src="{{ asset('images/img1.jpg') }}" class="landing_images" style="height:auto">
                    
                </div>
                <a href="#form_all">
                    <div class="scrolldown">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>

                <div class="mySlides fade">
                    <img src="{{ asset('images/img2.jpg') }}" class="landing_images" style="height:auto">
                    
                </div>
                <a href="#form_all">
                    <div class="scrolldown">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>

                <div class="mySlides fade">
                    <img src="{{ asset('images/img3.jpg') }}" class="landing_images" style="height:auto">
                    
                </div>
                <a href="#form_all">
                    <div class="scrolldown">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
            </div>
        </div> -->
        <div class="w3-content w3-section" style="max-width:100%;max-height:20%">
            <img class="mySlides" src="{{ asset('images/img1.jpg') }}" style="width:100%">
            <img class="mySlides" src="{{ asset('images/img2.jpg') }}" style="width:100%">
            <img class="mySlides" src="{{ asset('images/img3.jpg') }}" style="width:100%">
        </div>
        <a href="#form_all" class="blinking_btn">
            <div class="scrolldown">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </a>
    <!-- the form part -->
    <div class="container" style="padding:0;margin:0;" id="form_all">
        <div class="row form_row">
            <div class="col-md-6 left-side" style="">
                <!-- the first t-shirt image -->
                <center>
                    <label for="try" id="lbl"></label>
                    <img src="{{ asset('images/design1.jpg') }}" id= "bigImage" alt="" srcset="">
                </center>
            </div>
            <div class="col-md-6 right-side">
                <form action="{{ url('/third') }}" method="POST">
                    {{ csrf_field() }}

                    @if(count($errors)>0)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    @endif

                    
                    <!-- the button part -->
                    <!-- <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">Save channel</button>
                        </div>
                    </div> -->
                    <h1 id= "design_name">Design One</h1>
                    <p id="design_description" style="margin-left: 2vw">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque suscipit aspernatur 
                        aliquid dolorem assumenda ducimus blanditiis quam deleniti saepe autem esse nobis 
                        quaerat minima reiciendis, obcaecati culpa ipsum facere impedit.
                    </p>
                    <!-- the 4 t-hirts in the same row -->   
                    <div class="form-group" style="margin-left: 1vw">
                        <div class="row">
                            <div class="col-md-2 col-sm-auto float-left four_tshirt" style="margin-right:2vw;">
                                <label for="design">
                                    <div class="col">
                                        
                                        <img id="imgdesign1" src="{{ asset('images/design1.jpg') }}" alt="" style="width:8vw;height:20vh;cursor:pointer;border: 6px solid black;" onclick="RadioButtonClicked('flddesign1','imgdesign1')">
                                        <input type="radio" name="design" id="flddesign1" value="Design1" checked="" style="display:none">Design1
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-2 col-sm-auto float-left four_tshirt" style="margin-right:2vw;">
                                <label for="design">
                                    <div class="col">
                                        
                                        <img id="imgdesign2" src="{{ asset('images/design2.jpg') }}" alt="" style="width:8vw;height:20vh;cursor:pointer;" onclick="RadioButtonClicked('flddesign2','imgdesign2')">
                                        <input type="radio" name="design" id="flddesign2" value="Design2" style="display:none">Design2
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-2 col-sm-auto float-left four_tshirt" style="margin-right:2vw;">
                                <label for="design">
                                    <div class="col">
                                        
                                        <img id="imgdesign3" src="{{ asset('images/design3.jpg') }}" alt="" style="width:8vw;height:20vh;cursor:pointer;" onclick="RadioButtonClicked('flddesign3','imgdesign3')">
                                        <input type="radio" name="design" id="flddesign3" value="Design3" style="display:none">Design3
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-2 col-sm-auto float-left four_tshirt" style="margin-right:1vw;">
                                <label for="design">
                                    <div class="col">
                                        
                                        <img id="imgdesign4" src="{{ asset('images/design4.jpg') }}" alt="" style="width:8vw;height:150px;cursor:pointer;" onclick="RadioButtonClicked('flddesign4','imgdesign4')">
                                        <input type="radio" name="design" id="flddesign4" value="Design4" style="display:none">Design4
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- the size dropdown and input field for quantity -->
                    <div class="row" class="size_div">
                        <div class="form-group col-md-7 col-sm-3 float-left size_quantity">
                            <label for="select" class="col-md-3 control-label">Size</label>
                            <div class="col-md-5 col-sm-3">
                                <select name="size" id="size" class="form-control">
                                    <option value="small">Small</option>
                                    <option value="large">Large</option>
                                    <option value="XL">XL</option>
                                </select>
                            </div>
                        </div>
                        <!-- the input field for quantity -->
                        <div class="form-group col-md-3  col-sm-3 float-left size_quantity">
                            <label for="quantity">Quantity</label>
                            <input type="number" name="quantity" class="form-control" value="1" min="1">
                        </div>
                    </div>

                    <!-- the color choosing part -->
                    <div class="row color_class">
                        <label for="color" style="margin-left:20px">Colors</label>
                        <div class="form-group col-md-2">
                            <div class="col-md-1 col-sm-1 float-left color_div">
                                <label for="color" class="radio_label">
                                    <input id="whiteInputid" type="radio" name="color" value="White" style="display:none" checked="">
                                    <span id="whiteSpan" class="dot_color" style="cursor:pointer; background-color:brown" onclick="colorButtonClicked('whiteInputid','whiteSpan')"></span>
                                </label>
                            </div>
                            <div class="col-md-1 col-sm-1 float-left color_div">
                                <label for="color" class="radio_label">
                                    <input id="blackInputid" type="radio" name="color" style="display:none" value="Black" >
                                    <span id="blackSpan" class="dot_color" style="cursor:pointer;background-color: black" onclick="colorButtonClicked('blackInputid','blackSpan')"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- the checkpoint choosing part -->
                    <div class="row check">
                        <label for="checkpoint" style="margin-left:20px">Checkpoints</label>
                        <div class="form-group col-md-12">
                        
                        <div class="col-md-3 col-sm-4 float-left checkpoint_div" >
                            <div class="radio">
                                <label for="checkpoint">
                                    <input type="radio" name="checkpoint" id="checkpoint1" value="mexico" checked="" style="display:none">
                                    <div style="cursor:pointer" onclick="checkpointButtonClicked('checkpoint1','mexicoIcon')">
                                        <i class="fa fa-map-marker" id="mexicoIcon" style="font-size:18px;color:blue"></i>
                                        <h6>Mexico</h6>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 float-left checkpoint_div" style="margin-right:3px">
                            <div class="radio">
                                <label for="checkpoint">
                                    <input type="radio" name="checkpoint" id="checkpoint2" value="Megenagna" style="display:none">
                                    <div style="cursor:pointer" onclick="checkpointButtonClicked('checkpoint2','megenagnaIcon')">
                                        <i class="fa fa-map-marker" id="megenagnaIcon" style="font-size:18px;color:red"></i>
                                        <h6>Megenagna</h6>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 float-left checkpoint_div">
                            <div class="radio">
                                <label for="checkpoint">
                                    <input type="radio" name="checkpoint" id="checkpoint3" value="Piazza"style="display:none">
                                    <div style="cursor:pointer" onclick="checkpointButtonClicked('checkpoint3','piazzaIcon')">
                                        <i class="fa fa-map-marker" id="piazzaIcon" style="font-size:18px;color:red"></i>
                                        <h6>Piazza</h6>
                                    </div>
                                </label>
                            </div>
                        </div>
                        </div>
                    </div>

                    <!-- user credentials area -->
                    <div class="row user-info">
                        <div class="form-group col-md-4 form-group float-left">
                            <input type="text" name="name" placeholder="Full Name" class="form-control user_info_input" >
                        </div>
                        <div class="form-group col-md-4 form-group float-left">
                            <input type="text" name="phone_number" placeholder="Phone number" class="form-control user_info_input">
                        </div>
                        <div class="form-group col-md-4 form-group">
                            <input type="email" name="email" placeholder="Email" class="form-control user_info_input">
                        </div>
                    </div>

                    <!-- the chart and purchase buttons -->
                    <div class="row purchase_btn">
                        <div class="form-group col-md-6 float-right">
                            <div class="text-center">
                                <button class="btn btn-success" type="submit">Purchase</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="page-footer font-small indigo">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-8 mx-auto">

            <!-- Links -->
            <h5 class="font-weight-bold mt-3 mb-4" style="color: #DDDDDD">Let's Talk</h5>

            <ul class="list-unstyled" style="margin-left:1.5vw">
                <li>
                <h6 class="footer_small">+251 118632916</h6>
                </li>
                <li>
                <h6 class="footer_small">+251 912780118</h6>
                </li>
                <li>
                <h6 class="footer_small">+251 911576657</h6>
                </li>
                <li>
                <h6 class="footer_small">info@simplexadvertising.com</h6>
                </li>
                <li>
                <h6 class="footer_small">www.simplexadvertising.com</h6>
                </li>
            </ul>

            </div>

            <!-- Grid column -->
            <div class="col-md-4 mx-auto">

            <!-- Links -->
            <h5 class="font-weight-bold mt-3 mb-4" style="color: #DDDDDD">Send Message</h5>

            <form action="" method="post">
                <div class="input-icons"> 
                    <i class="fa fa-user icon" style="line-height: 16px;
                        border-radius: 0px;"> 
                    </i> 
                    <input class="input-field" 
                        type="text" 
                        placeholder="Fullname"> 
                </div> 
    
                <div class="input-icons"> 
                    <i class="fa fa-envelope icon" style="line-height: 16px;
                        border-radius: 0px;border-color: black;"> 
                    </i> 
                    <input class="input-field" 
                        type="text"
                        placeholder="Email"> 
                </div> 
                <div class="">
                    <textarea name="message"id="message" cols="30" rows="10" placeholder="Message" class="msg"></textarea>
                </div>
                <input type="button" class="btn btn-primary" id="" name="msg_send" value="send email" />
            </form>

            </div>

        </div>
        <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3" style="background-color:black;margin-top:2%">© 2012 Copyright:
        <a href="http://www.simplexadvertising.com/">Simplex Advertisment</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
        <script >
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}    
                x[myIndex-1].style.display = "block";  
                setTimeout(carousel, 2000); // Change image every 2 seconds
            }
        </script>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    </body>
</html>
