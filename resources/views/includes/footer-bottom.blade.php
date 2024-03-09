<footer class="footer-bottom">
    <div class="container">
        <div>
            <a class="btn" href="#">SIGN-UP NOW!</a>
        </div>
        <div>
            <h4>FOLLOW US</h4>
            <ul>
                <li v-for="social in socials">
                    <a href="#">
                        <img src="{{Vite::asset('resources/img/footer-facebook.png')}}" alt="facebook">
                        <img src="{{Vite::asset('resources/img/footer-twitter.png')}}" alt="twitter">
                        <img src="{{Vite::asset('resources/img/footer-youtube.png')}}" alt="youtube">
                        <img src="{{Vite::asset('resources/img/footer-pinterest.png')}}" alt="pinterest">
                        <img src="{{Vite::asset('resources/img/footer-periscope.png')}}" alt="periscope">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>