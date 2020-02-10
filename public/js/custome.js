

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
