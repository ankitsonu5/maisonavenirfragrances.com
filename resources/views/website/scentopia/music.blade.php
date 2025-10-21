<!-- Background Music -->
<audio id="bg-music" autoplay loop muted>
    <source src="{{ asset('background-music.mp3') }}" type="audio/mpeg">
</audio>

<!-- Mute/Unmute Button -->
<button id="mute-toggle"
    style="
          position: fixed;
          bottom: 20px;
          right: 20px;
          background: rgba(0,0,0,0.5);
          border: none;
          border-radius: 50%;
          width: 50px;
          height: 50px;
          color: white;
          font-size: 24px;
          cursor: pointer;
          display: flex;
          align-items: center;
          justify-content: center;
          z-index: 1000;
        "
    aria-label="Toggle Mute">
    🔇
</button>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const music = document.getElementById("bg-music");
        const muteToggle = document.getElementById("mute-toggle");

        // Initial state: muted = true
        music.muted = true;
        muteToggle.textContent = "🔇"; // Muted icon

        // Play music (catch autoplay errors)
        music.play().catch(err => console.warn('Initial autoplay muted play error ignored:', err));

        // Toggle mute/unmute on button click
        muteToggle.addEventListener('click', () => {
            music.muted = !music.muted;
            muteToggle.textContent = music.muted ? "🔇" : "🔊";
        });

        // Optional: unmute on user interaction (like before)
        const enableAudio = () => {
            if (music.muted) {
                music.muted = false;
                muteToggle.textContent = "🔊";
            }
            ['mouseenter', 'mousemove', 'mousedown', 'click', 'scroll'].forEach(event => {
                document.body.removeEventListener(event, enableAudio);
            });
        };
        ['mouseenter', 'mousemove', 'mousedown', 'click', 'scroll'].forEach(event => {
            document.body.addEventListener(event, enableAudio);
        });
    });
</script>









<audio id="click-sound">
    <source src="{{ asset('click-sound.mp3') }}" type="audio/mpeg">
</audio>

<script>
    function handleClick(event) {
        event.preventDefault(); // navigation ko roko
        var audio = document.getElementById("click-sound");
        audio.play();
        window.location.href = event.currentTarget.href;
    }
</script>
