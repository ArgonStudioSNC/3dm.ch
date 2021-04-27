<style lang="scss">

.not-found {
    position: absolute;
    margin: auto;
    height: 0px;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
	padding-right: 0.625rem;
	padding-left: 0.625rem;
	@include breakpoint(xxlarge) {
		padding-right: 4rem;
		padding-left: 4rem;
	}
    .image-404 {
        height: 300px;
    }
}

.link-arrowed {
	display: inline-block;
    height: 2rem;
    line-height: 2rem;
    stroke: $primary-color;

	.arrow-icon {
		position: relative;
		top: -1px;
		-webkit-transition: -webkit-transform 0.3s ease;
		transition: -webkit-transform 0.3s ease;
		transition: transform 0.3s ease;
		transition: transform 0.3s ease, -webkit-transform 0.3s ease;
		vertical-align: middle;
	}
	&:hover {
		.arrow-icon {
			transform: translate3d(5px, 0, 0);
		}
	}
}
</style>

<template>
    <div class="not-found grid-x align-center-middle text-center">
        <div class="cell"><h1><img class="image-404" :src="image_src"></h1></div>
        <div class="cell"><h1>Cette page n’est malheureusement pas disponible.</h1></div>
        <div class="cell"><p>Le lien que vous avez suivi est peut-être rompu, ou la page a été supprimée.</p></div>
        <div class="cell">
            <a class="link-arrowed" href="/">revenir au rendersurfer
                <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                  <g fill="none" stroke-width="1.4" stroke-linejoin="round" stroke-miterlimit="10">
                    <path class="arrow-icon--arrow" d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
                  </g>
                </svg>
            </a>
        </div>
    </div>
</template>

<script>
export default {
    data () {
        return {
            image_src: '/storage/404-yeti.svg',
        }
    },
}
</script>
