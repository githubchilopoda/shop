ol.pkg("ec.linkSelect");(function(){var d="/data/region/tree/{id}.json",e="/data/region/children/{id}.json",b={},a,c=function(f,h,i){var g;if(h&&(g=b[f])){return i(g)}if(a){a.abort()}a=$.ajax({url:f,type:"get",dataType:"json",success:function(j){if(h){b[f]=j}i(j)},error:function(k,j){logger.warn("load data fail.")}})};ol.linkSelect.region=function(j,g){var k=jQuery,o=k.extend(true,{},ol.linkSelect.region.setting,g),f=k(j),i,n,l=function(r,v){var u;var t=["<select "],s;if(o.ids&&r<o.ids.length&&(s=o.ids[r])){t.push('id="'+s+'"')}if(o.names&&r<o.names.length&&(s=o.names[r])){t.push('name="'+s+'"')}if(o.css&&r<o.css.length&&(s=o.css[r])){t.push('class="'+s+'"')}t.push(" />");var p=k(t.join(""));t=[];if(o.tips&&r<o.tips.length){t.push('<option value="">'+o.tips[r]+"</option>")}for(var q=0;q<v.length;q++){u=v[q];t.push('<option value="'+u.id+'">'+u.name+"</option>")}p.html(t.join("")).change(function(){m(r,this.value)});return p},m=function(p,r){var q=p+1;while(q<n.length){n[q].remove();n.splice(q,1)}if(!r){return}c(h(e,r),true,function(t){if(t.data.length==0){if(o.onchange){o.onchange.call(n[p][0],r)}return}p=p+1;var s=l(p,t.data);n.push(s);i.append(s);s.change()})},h=function(p,q){return p.replace(/{id}/g,q)};this.init=function(){n=[];i=k("<span class='ol_linkSelect ol_linkSelect_region' />");c(h(d,o.defaultValue),true,function(s){var r=[],t,u,p;for(var q=0;q<s.data.length;q++){p=l(q,s.data[q]);if(s.values&&q<s.values.length){p.val(s.values[q])}n.push(p);i.append(p)}n[n.length-1].change();f.empty().append(i)})};this.reset=function(){var p=this;setTimeout(function(){p.init()},100)};this.setValue=function(p){o.defaultValue=p;this.init()};this.init()}})();ol.linkSelect.region.setting={defaultValue:0,css:null,ids:null,names:null,tips:null,onchange:null};