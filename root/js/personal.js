//Function for change content of each patient
function changeContent(id1,id2,id3){
    for(i=1;i<3;i++){
        document.getElementById('mn'+id1+'-'+id2+'-'+i).style.display='none';
        document.getElementById('m'+id1+'-'+id2+'-'+i).style.backgroundColor = "#f8f8f8";
    }
    document.getElementById('m'+id1+'-'+id2+'-'+id3).style.backgroundColor = "#1ab394";
    document.getElementById('m'+id1+'-'+id2+'-'+id3).style.borderRadius = "4px";
    document.getElementById('mn'+id1+'-'+id2+'-'+id3).style.display='block';
}



function calculateDegree(id1,id2,stage)
{
    var num=0;
    var degree=0;
    for(i=1;i<5;i++)
    {
    var obj= $("#mn"+id1+"-"+id2 +"-2").find(".Task-"+stage+"-"+i)
    .find(".d"+ stage + "-" + i+ "-3");
    if(obj.css("display") != "none") 
        {
            num++;
        }

    }
  // alert("number = " + num);
    degree=(-45)+(num/4)*90
    return degree;
}
function changeCircularBar()
{
    for(id1=1;id1<5;id1++)
    {
        for(id2=1;id2<4;id2++)
        {
            
      // var degree=calculateDegree(id1,id2,4);
          
            for(var i=1;i<5;i++)
            {
             var degree=0;
             degree=calculateDegree(id1,id2,i);
            var obj=$("#mn"+id1+"-"+id2 +"-1").find(".c"+i);
            obj.css(
            {
     
                "font-size":"200%",
                "-webkit-transform" : "rotate("+degree+"deg)",
                 "-moz-transform" : "rotate("+degree+"deg)",
                 "-o-transform" : "rotate("+degree+"deg)",
                 "transform" : "rotate("+degree+"deg)"
            }
          );
         }
        }
    
    }
}

//the entrance of all Jquery function execution
$(document).ready(function(){

    changeCircularBar();
 
    
  
  });
  
  