<footer>
    <div class="footerDiv">
        <div class="footerUpperText">
            <button>Contact </button>
            <a>|</a>
            <button onclick="showNewsletter()">Newsletter</button>
        </div>
        <div class="footerLowerText">
            <a>© FilmTastic 2025</a>
        </div>
    </div>
</footer>

<script>
    function showNewsletter() {
        var x = document.getElementById("newsletter");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>