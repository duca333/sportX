






</body>
</html>
<script>
    function updateCijena() {
        var kolicina = document.getElementById("kolicina").value;
        var cijena = "<?php echo $cijena; ?>";
        var novaCijena = kolicina * cijena;
        document.getElementById("cijena").value = novaCijena.toFixed(2);
    }
</script>
<script>
      const dropdownIcon = document.querySelector('.dropdown-icon');
const dropdownMenu = document.querySelector('.dropdown-menu');

dropdownIcon.addEventListener('click', () => {
  dropdownMenu.classList.toggle('show');
});
</script>

<script>
  const dropdownIcon1 = document.querySelector('.dropdown-icon-a');
const dropdownMenu1 = document.querySelector('.dropdown-menu-a');

dropdownIcon1.addEventListener('click', () => {
  dropdownMenu1.classList.toggle('show');
});
</script>

<script
  src="https://kit.fontawesome.com/8d3290fc3c.js"
  crossorigin="anonymous"
></script>

