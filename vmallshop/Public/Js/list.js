ec.pkg("ec.product");ec.load("ajax");ec.product.sortField={};ec.product.sortType={};ec.product.pageNumbers={};ec.product.load=function(b){var e=ec.product.cid;var d=ec.product.pageNumbers[e]=(b?b.pageNumber:(ec.product.pageNumbers[e]||1));var c="";var a=true;ec.Cache.get("product_ajaxer",function(){return new ec.ajax()}).get({url:"/list-data-"+e+"-"+d+".json",data:{sortField:ec.product.sortField[e],sortType:ec.product.sortType[e]},timeout:10000,timeoutFunction:function(){alert("\u8bfb\u53d6\u8d85\u65f6\uff0c\u8bf7\u91cd\u8bd5\uff01")},beforeSendFunction:function(){ec.ui.loading.show({modal:false})},afterSendFunction:ec.ui.loading.hide,successFunction:function(h){if(!h.success){alert("\u8bfb\u53d6\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5\uff01")}var g=[],j;for(var f=0;f<h.list.length;f++){j=h.list[f];if(a){c+=j.id;a=false}else{c+=","+j.id}j.price=(j.priceMode==2)?"<em>\u6682\u65e0\u62a5\u4ef7</em>":"<b>&yen;"+j.price+"</b>";g.push("<li><div>");g.push('<p class="p-img"><a href="/product/'+j.id+".html#"+(j.prdId||0)+","+e+'" title="'+j.name+'"><img src="'+ec.mediaPath+j.photoPath+"142_142_"+j.photoName+'" alt="'+j.name+'"/></a></p>');g.push('<p class="p-price">'+j.price+"</p>");g.push('<p class="p-name"><a href="/product/'+j.id+".html#"+(j.prdId||0)+","+e+'" title="'+j.prdSkuName+'">'+j.skuAbbr+'<span class="red">'+(j.microPromWord||"")+"</span></a></p>");g.push('<p class="p-star"><p class="p-star"><span class="starRating-area"><s pid='+j.id+' class="p-starRating" style="width:'+(j.scoreAverage*20)+'%"></s></span></p>');g.push("<p pid="+j.id+' class="p-score">'+j.remarkCount+"\u4eba\u8bc4\u5206</p>");if(j.tagPhotoName){g.push('<i><img src="'+ec.mediaPath+j.tagPhotoPath+j.tagPhotoName+'" /></i>')}g.push("</div></li>")}$("#category-"+e+"-list").html(g.join(""));ec.ui.scrollTo("#ct-list");ec.product.renderPage(e,h.page);new ec.ajax().get({url:domainRemark+"/remark/queryPrdinfoEvaluateScoreList.json?pid="+c+"&t="+new Date().getTime(),dataType:"jsonp",successFunction:function(i){$(".p-score").each(function(){var m=$(this).attr("pid");var n;var k=false;for(var l=0;l<i.prdRemarkNumList.length;l++){n=i.prdRemarkNumList[l];if(n.productID==m){k=true;break}}if(k){$(this).html(n.totalPrdCount+"\u4eba\u8bc4\u5206");$(this).show()}});$(".p-starRating").each(function(){var m=$(this).attr("pid");var n;var k=false;for(var l=0;l<i.prdRemarkNumList.length;l++){n=i.prdRemarkNumList[l];if(n.productID==m){k=true;break}}if(k){$(this).attr("style","width:"+n.scoreAverage*20+"%");$(this).show()}})}})}})};ec.product.showCategory=function(b,d){$(b).parent().addClass("current").siblings().removeClass("current");$("#category-"+d).show().siblings().hide();ec.product.cid=d;var a=ec.product.sortField[d]||"time",c=ec.product.sortType[d]||"desc";location.hash=d;switch(a){case"sale":$("#sort-sale").attr("class","sort-desc").siblings().removeClass();break;default:$("#sort-"+a).attr("class","sort-"+c).siblings().removeClass();break}return false};ec.product.sort=function(b){var e=ec.product.cid,a=ec.product.sortField[e]||"time",d=ec.product.sortType[e]||"desc",c;switch(b){case"sale":$("#sort-sale").addClass("sort-desc").siblings().removeClass();c="desc";break;default:if(b==a){$("#sort-"+b).attr("class",d=="desc"?"sort-asc":"sort-desc");c=d=="desc"?"asc":"desc"}else{$("#sort-"+b).addClass("sort-desc").siblings().removeClass();c="desc"}break}ec.product.sortType[e]=c;ec.product.sortField[e]=b;ec.product.load()};ec.product.renderPage=function(b,a){if(!a.totalPage||a.totalPage==1){return}$("#list-pager-"+b).pager({pageNumber:a.pageNumber,pageCount:a.totalPage,recordCount:a.totalRow,qpageSize:5,text:{first:"|&lt;",pre:"&lt",next:"&gt;",last:"&gt;|"},item:["first","pre","qpage","next","last","quickPager"],callBack:ec.product.load})};ec.ready(function(){var b=ec.product;b.history.load(function(f){if(f.length==0){return}var e=[],g;for(var d=0;d<f.length;d++){g=f[d];g.price=(g.priceMode==2)?"<em>\u6682\u65e0\u62a5\u4ef7</em>":"<b>&yen;"+g.price+"</b>";e.push("<li><div>");e.push('<p class="p-img"><a href="/product/'+g.id+".html#"+g.skuId+'" title="'+g.briefName+'"><img src="'+ec.mediaPath+g.photoPath+"60_60_"+g.photoName+'" alt="'+g.briefName+'"/></a></p>');e.push('<p class="p-name"><a href="/product/'+g.id+".html#"+g.skuId+'" title="'+g.briefName+'">'+g.name+"</a></p>");e.push('<p class="p-price">'+g.price+"</p>");e.push("</div></li>")}$("#product-history-list").html(e.join(""));$("#product-history-area").show()});var c="";var a=true;$(".p-score").each(function(){if(a){c+=$(this).attr("pid");a=false}else{c+=","+$(this).attr("pid")}});new ec.ajax().get({url:domainRemark+"/remark/queryPrdinfoEvaluateScoreList.json?pid="+c+"&t="+new Date().getTime(),dataType:"jsonp",successFunction:function(d){$(".p-score").each(function(){var g=$(this).attr("pid");var h;var e=false;for(var f=0;f<d.prdRemarkNumList.length;f++){h=d.prdRemarkNumList[f];if(h.productID==g){e=true;break}}if(e){$(this).html(h.totalPrdCount+"\u4eba\u8bc4\u5206");$(this).show()}});$(".starRating-area").each(function(){var g=$(this).children("s").attr("id");var h;var e=false;for(var f=0;f<d.prdRemarkNumList.length;f++){h=d.prdRemarkNumList[f];var j="remark-span-starRating"+h.productID;if(j==g){e=true;break}}if(e){$(this).children("s").attr("style","width:"+h.scoreAverage*20+"%");$(this).show()}})}})});