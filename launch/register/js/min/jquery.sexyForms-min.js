$.fn.sexyForm=function(t){function a(t){console.log("hey");var a=$(t),n=a.data("original-styles"),s=a.data("style");console.log(s),console.log(a),1===s&&(console.log("hey"),a.find("span").animate({top:n.startPos}),a.animate({padding:n.startPad})),2===s&&(a.find("input").animate({fontSize:n.startFontInput,padding:n.startPadInput}),a.find("span").animate({fontSize:n.startFontPlace})),3===s&&(a.find("input").animate({left:n.startPosInput}),a.find("span").animate({width:n.startWidth,left:n.startPosPlace}))}if("one"===t){for(var n=$(".input"),s=0;s<n.length;s++){var e=$($(".input")[s]).data("placeholder"),i=$("<span>").addClass("placeholder1").text(e),o=$("<input>").attr("type","text").addClass("input1");$(n[s]).append(o,i)}$(".input").addClass("style1");var l=$(".style1");l.data("style",1),l.on("click",function(t){t.stopPropagation(),$(this).addClass("form-open");var a=$(".form-open"),n=a.children("input"),s=a.children("span"),e=a;void 0===$(this).data("original-styles")&&$(this).data("original-styles",{startPad:e.css("padding"),startPos:"50%"}),n.trigger("focus"),console.log("focused"),""===n.val()&&(s.animate({top:"-30%"}),e.animate({paddingTop:"2em",paddingBottom:"2em"}))})}if("two"===t){for(var n=$(".input"),s=0;s<n.length;s++){var e=$(n[s]).data("placeholder"),i=$("<span>").addClass("placeholder2").text(e),o=$("<input>").attr("type","text").addClass("input2");$(n[s]).append(i,o)}$(".input").addClass("style2");var d=$(".style2");d.data("style",2),d.on("click",function(t){t.stopPropagation(),$(this).addClass("form-open");var a=$(".form-open"),n=a.children("input"),s=a.children("span");void 0===$(this).data("original-styles")&&$(this).data("original-styles",{startFontInput:n.css("font-size"),startPadInput:n.css("padding"),startFontPlace:s.css("font-size")}),""===n.val()&&(console.log("clicked"),n.animate({fontSize:"30px",padding:"15px",paddingLeft:"5px"}),s.animate({fontSize:"1.3em"}),n.trigger("focus"))})}if("three"===t){for(var n=$(".input"),s=0;s<n.length;s++){var e=$(n[s]).data("placeholder"),i=$("<span>").addClass("placeholder3").text(e),o=$("<input>").attr("type","text").addClass("input3");$(n[s]).append(o,i)}$(".input").addClass("style3");var p=$(".style3");p.data("style",3);var r=$(".placeholder3");r.on("click",function(t){t.stopPropagation(),$(this).parent().addClass("form-open");var a=$(".form-open"),n=a.children("input"),s=a.children("span");void 0===$(this).parent().data("original-styles")&&$(this).parent().data("original-styles",{startPosInput:n.css("left"),startWidth:s.css("width"),startPosPlace:s.css("left")}),""===n.val()&&(n.animate({left:"0"}),s.animate({width:"30%",left:"70%"}),n.trigger("focus"))})}$(document).on("click",function(){var t=$(".form-open");$(".form-open").length>0&&t.each(function(t,n){""===$(n).find("input").val()&&($(n).removeClass("form-open"),a($(n)))})})};