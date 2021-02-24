<style scoped lang="scss">
@import '~@/rendersurfer/_settings.scss';

.loading-container {
    .loading-bars {
        display: inline-block;
        position: relative;
        width: 60px;
        height: 60px;
        opacity: 0.6;
        --modal-color: #{$primary-color};

        div {
            display: inline-block;
            position: absolute;
            left: 6px;
            width: 12px;
            background: var(--modal-color);
            animation: loading-bars 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
        }
        div:nth-child(1) {
            left: 6px;
            animation-delay: -0.24s;
        }
        div:nth-child(2) {
            left: 24px;
            animation-delay: -0.12s;
        }
        div:nth-child(3) {
            left: 42px;
            animation-delay: 0;
        }

        @keyframes loading-bars {
            0% {
                top: 6px;
                height: 48px;
            }
            50%, 100% {
                top: 18px;
                height: 24px;
            }
        }
    }
}
</style>

<template>
    <div class="grid-x align-center-middle loading-container">
        <div class="call loading-bars" :style="cssVars"><div></div><div></div><div></div></div>
    </div>
</template>

<script>
export default {
    props: {
        color: String,
    },

    computed : {
        cssVars() {
            return {
                '--modal-color': this.color
            }
        }
    }
}
</script>
