function btton1click() {
  x = document.getElementById("seqid");
  y = document.getElementById("place");
  if (x != " " && y != " ") {
    document.getElementById("click1").innerHTML="Data Showed Successfully..!!";
  }
}
function btton2click(){
  x=document.getElementById("in1");
  y=document.getElementById("in2");
  z=document.getElementById("in3");
  if(x != " " && y != " "&& z !=" " ){
    document.getElementById("p1").innerHTML="Updated Successfully..!!";
  }
}

function btton3click(){
  x=document.getElementById("Din1");
  y=document.getElementById("Din2");
  if(x != " " && y != " "){
    document.getElementById("p2").innerHTML="Deleted Successfully..!!";
  }
}
