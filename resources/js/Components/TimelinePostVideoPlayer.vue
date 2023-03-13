<script>
import videojs from 'video.js';
import 'video.js/dist/video-js.css'

export default {
    name: 'TimelinePostVideoPlayer',
    props: {
        options: {
            type: Object,
            default() {
                return {};
            }
        }
    },
    data() {
        return {
            player: null
        }
    },
    mounted() {
        this.player = videojs(this.$refs.videoPlayer, this.options, () => {

        });
    },
    beforeDestroy() {
        if (this.player) {
            this.player.dispose();
        }
    }
}

</script>

<template>
    <div>
        <video ref="videoPlayer" class="video-js"></video>
    </div>
</template>
