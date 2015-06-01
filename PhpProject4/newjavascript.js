/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function ko()
{
      var flg;
      flg = confirm("背景を変えるよ");
      if(flg === true) document.bgColor = "green";
}

var q = new Array(
        "リンゴ好き？",
        "みかんは？",
        "バナは？"
        );
var ans = new Array(true,true,true);

function quiz()
{
   var ten = 0;
   for(var i = 0; i <= 2; i++)
   {
       if( confirm(q[i]) === ans[i] ) ten = ten + 20;
   }
    if(ten === 0) alert("は？");
    else alert("あなたは"+ ten +"点でした");
    
}

function a()
{
   document.write("ハロハロ");
}