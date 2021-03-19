var styles = {unselected: 0, realistic: 1500, illustration: 1000, model: 500};

var style = 'unselected';
var quantity = 1;
makeOffer();

$('#select-style').change(function() {
    style = this.value;
    makeOffer();
});
$('#select-quantity').change(function() {
    quantity = this.value;
    makeOffer();
});

function makeOffer() {
    let result = styles[style] * quantity;
    $('#output-total').html(new Intl.NumberFormat('fr-CH', { style: 'currency', currency: 'CHF' }).format(result));
}
