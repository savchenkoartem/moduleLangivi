// let buton1=document.querySelectorAll('.but1');
// let prices=document.querySelectorAll('.pricesServices');

// for (let i=0;i<buton1.length;i++) {
//   buton1[i].onclick=function () {
     
//     setTimeout(() => {
//       prices[i].slideToggle('.hide')
//     }, 500); 
//     if (prices[i].classList.contains('hide')) {
//     buton1[i].style.transform='rotate(135deg)';
//     } else {
//       buton1[i].style.transform='rotate(0deg)';
//     }
    
//   }
// }


let circle=document.querySelector('.circle');
circle.onclick=()=>{
  circle.style.transform='rotate(360deg)';
}

let nameofForm1= document.querySelector('.inpName');

nameofForm1.onchange=()=>{
  console.log(nameofForm1.value.length)
}




let prices=$('.pricesServices').hide(); 
let buton1=$(".but1")

$(document).ready(function(){
  buton1.click(function(){
   $ (prices[buton1.index(this)]).slideToggle(900,'easeInOutBack');
this.classList.toggle('rotate');

  })
})

$('a[href^="#nav"]').click(function(){
  var target = $(this).attr('href');
  $('html, body').animate({scrollTop: $(target).offset().top}, 1000,'easeOutSine');
  return false;
  });



   


