// page # 446,447
var t = this.lastArticleBreadcrumbs.map(function(t, r) {
    return  r  ===  e.lastArticleBreadcrumbs.length  -  1  ?  
    '<a  class="hp03__link  twtr-type--roman-16"  href="  '  +  e.lastArticleHref  +  '  ">'  +  t  +  "</a>"  :  '<span  class="hp03__breadcrumb twtr-color--light-gray-neu-tral">' + t + "</span>"
});
this.breadcrumbElement.innerHTML = t.join('<span class= "hp03__seperator twtr-color--light-gray-neutral">/</span>')