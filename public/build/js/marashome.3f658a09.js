(window.webpackJsonp=window.webpackJsonp||[]).push([["js/marashome"],{pCIR:function(e,t,n){(function(e){n("fbCW"),n("QWBl"),n("sMBO"),n("FZtP");var t={init:function(){globalmenu=e(".menu"),globaltop=globalmenu[0].getBoundingClientRect().y+scrollY+30,e(window).on("scroll",t.menucollant),e(window).on("resize",t.calcultop),e(".platmenu ul li a").on("click",t.trieplat)},lasttrie:0,trieplat:function(n){n.preventDefault(),e(".platmenu ul li a").css("color","#7F8289"),e(n.currentTarget).css("color","#DE5E60");var a=e(n.currentTarget).data("type");t.lasttrie!=a&&(t.lasttrie=a,e(".imgplat").animate({opacity:0},500,"linear",(function(){e(this).remove()})),e.ajax({url:"http://127.0.0.1:8000/checktype",method:"POST",dataType:"JSON",data:{type:a}}).done((function(n){n.forEach((function(n){var a=t.createimg(n);e(".platimage").append(a)})),e(".imgplat").animate({opacity:1},1e3,"linear")})).fail((function(){alert("Réponse ajax incorrecte")})))},createimg:function(t){var n=e("#platTemplate").contents().clone();return n.css("opacity","0"),n.find("a").attr("href","./plat/"+t.id),n.find("img").attr("src","image/"+t.img),n.find(".descimg p").text(t.name),n},calcultop:function(){console.log("changement d'écran"),globaltop=globalmenu[0].getBoundingClientRect().y+scrollY+30},fakemenu:function(){var e=document.createElement("div");return e.classList.add("fake"),e.style.width=globalmenu[0].getBoundingClientRect().width,e.style.height=globalmenu[0].getBoundingClientRect().height,e.style.padding="3em 0",e.style.background="#2F3238",e},menucollant:function(){if(scrollY>globaltop&&!globalmenu.hasClass("fixed")){globalmenu.addClass("fixed");var n=t.fakemenu;e("header").append(n)}else scrollY<globaltop&&globalmenu.hasClass("fixed")&&(globalmenu.removeClass("fixed"),e(".fake").remove())}};document.addEventListener("DOMContentLoaded",t.init)}).call(this,n("EVdn"))}},[["pCIR","runtime",0,2]]]);