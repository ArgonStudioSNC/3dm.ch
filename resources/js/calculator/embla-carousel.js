import EmblaCarousel from 'embla-carousel'

const emblaNode = document.querySelector('.embla')
const options = {
    loop: true,
    align: 'start',
 }

const embla = EmblaCarousel(emblaNode, options)
