// Page # 31
function spoof(){
document.write("<h1>This is not Bing</h1>");
document.location = "https://bing.com:1234";
setInterval(function(){document.location="https:// bing.com:1234";},9800);
};