<script src="{{ mix('js/app.js') }}" defer></script>
<script>
  function toggleNavbar(collapseID) {
    console.log('pressed ' + collapseID);
    document.getElementById(collapseID).classList.toggle("hidden");
    document.getElementById(collapseID).classList.toggle("block");
  }
</script>
