/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
window.onload=function(){
$(".nav li").on("click", function() {
      $(".nav li").removeClass("active");
      $(this).addClass("active");
    });
    
$(".navbar-brand").on("click", function() {
      $(".nav li").removeClass("active");
    });
};


