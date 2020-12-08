export const MasonryMixin = {
    methods: {
        /**
        * Set appropriate spanning to any masonry item
        *
        * Get different properties we already set for the masonry, calculate
        * height or spanning for any cell of the masonry grid based on its
        * content-wrapper's height, the (row) gap of the grid, and the size
        * of the implicit row tracks.
        *
        * @param item Object A brick/tile/cell inside the masonry
        */
        resizeMasonryItem: function(item){
            if ( !item ){
                console.debug("resizeMasonryItem : undefined item");
                return;
            }
            /* Get the grid object, its row-gap, and the size of its implicit rows */
            var grid = document.getElementsByClassName('masonry')[0];
            if( grid ) {
                var rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap')),
                rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));

                /*
                * Spanning for any brick = S
                * Grid's row-gap = G
                * Size of grid's implicitly create row-track = R
                * Height of item content = H
                * Net height of the item = H1 = H + G
                * Net height of the implicit row-track = T = G + R
                * S = H1 / T
                */
                var rowSpan = Math.ceil((item.querySelector('.masonry-content').getBoundingClientRect().height+rowGap)/(rowHeight+rowGap));

                /* Set the spanning as calculated above (S) */
                item.style.gridRowEnd = 'span '+rowSpan;
            }
        },

        /**
        * Apply spanning to all the masonry items
        *
        * Loop through all the items and apply the spanning to them using
        * `resizeMasonryItem()` function.
        *
        * @uses resizeMasonryItem
        */
        resizeAllMasonryItems: function(){
            // Get all item class objects in one list
            var allItems = document.querySelectorAll('.masonry-brick');

            /*
            * Loop through the above list and execute the spanning function to
            * each list-item (i.e. each masonry item)
            */
            if( allItems ) {
                for(var i=0;i<allItems.length;i++){
                    this.resizeMasonryItem(allItems[i]);
                }
            }
        },
    }
}
